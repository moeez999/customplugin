<?php
define('AJAX_SCRIPT', true);

require_once(__DIR__ . '/../../../config.php');
require_login();

@header('Content-Type: application/json; charset=utf-8');

try {

    global $DB, $USER, $PAGE;

    if (stripos($_SERVER['CONTENT_TYPE'] ?? '', 'application/json') === false) {
        throw new moodle_exception('invalidrequest', 'error', '', 'JSON expected');
    }

    $raw = file_get_contents('php://input');
    $json = json_decode($raw, true);

    if (!is_array($json)) {
        throw new moodle_exception('invaliddata', 'error');
    }

    // =======================
    // Extract values
    // =======================
    $eventid      = (int)$json['eventid'];
    $googlemeetid = (int)$json['googlemeetid'];
    $status       = $json['status'];          // "cancel_no_makeup"
    $reason       = $json['reason'] ?? '';
    $reasonText   = $json['reasonText'] ?? '';
    $notes        = $json['notes'] ?? '';

    if ($status !== 'cancel_no_makeup') {
        throw new moodle_exception('invalidrequest', 'error', '', 'Invalid status code');
    }

    // =======================
    // Fetch existing status row
    // =======================
    $statusrow = $DB->get_record('local_gm_event_status', [
        'eventid'      => $eventid,
        'googlemeetid' => $googlemeetid
    ], '*', MUST_EXIST);

    $old = json_decode($statusrow->detailsjson, true);

    // =======================
    // Fetch event row to get REAL previous values (fallback)
    // =======================
    $event = $DB->get_record('googlemeet_events', ['id' => $eventid], '*', MUST_EXIST);

    // =======================
    // DETERMINE LAST PREVIOUS ENTRY
    // =======================
    $lastPrevious = null;

    // 1️⃣ If old JSON has current → use it
    if (!empty($old['current'])) {
        $lastPrevious = $old['current'];
    }
    // 2️⃣ If old JSON has previous → use it
    else if (!empty($old['previous'])) {
        $lastPrevious = $old['previous'];
    }
    // 3️⃣ If old JSON has history → last entry
    else if (!empty($old['history']) && is_array($old['history'])) {
        $lastPrevious = end($old['history']);
    }
    // 4️⃣ FALLBACK: Use actual event data from googlemeet_events
    else {
        // Reconstruct previous schedule from DB
        $lastPrevious = [
            'date'    => date("Y-m-d", $event->starttime),
            'start'   => date("H:i", $event->starttime),
            'end'     => date("H:i", $event->endtime),
            'teacher' => (int)$event->teacher
        ];
    }

    // =======================
    // NEW JSON (only previous + cancel)
    // =======================
    $details = [
        'previous' => $lastPrevious,    // ALWAYS ONLY ONE LAST PREVIOUS
        'current' => [
            'action'     => 'cancel_no_makeup',
            'reason'     => $reason,
            'reasonText' => $reasonText,
            'notes'      => $notes,
            'time'       => time()
        ],
        'action' => 'cancel_no_makeup'
    ];

    // =======================
    // UPDATE THE STATUS ROW
    // =======================
    $update = new stdClass();
    $update->id           = $statusrow->id;
    $update->statuscode   = 'cancel_no_makeup';
    $update->detailsjson  = json_encode($details);
    $update->timemodified = time();
    $update->createdby    = $USER->id;

    $DB->update_record('local_gm_event_status', $update);

    // =======================
    // SUCCESS RESPONSE
    // =======================
    echo json_encode([
        'status'  => 'success',
        'message' => 'Event cancelled (No Make-Up) successfully',
        'updated' => [
            'eventid'      => $eventid,
            'googlemeetid' => $googlemeetid,
            'status'       => 'cancel_no_makeup'
        ]
    ]);
    die();

} catch (Exception $e) {
    echo json_encode([
        'status' => 'error',
        'error'  => $e->getMessage()
    ]);
    die();
}
