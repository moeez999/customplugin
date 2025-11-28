<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Student Feedback</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Optional font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">

    <style>
        :root {
            --my_students_details_menu_give_feedback_bg: #ffffff;
            --my_students_details_menu_give_feedback_text: #111827;
            --my_students_details_menu_give_feedback_muted: #000000ff;
            /* primary changed to red */
            --my_students_details_menu_give_feedback_primary: #ef4444;
            --my_students_details_menu_give_feedback_primary_dark: #b91c1c;
            --my_students_details_menu_give_feedback_surface: #f9fafb;
            --my_students_details_menu_give_feedback_border: #e5e7eb;
            --my_students_details_menu_give_feedback_green: #cfefe8;
            --my_students_details_menu_give_feedback_green_text: #000;
            --my_students_details_menu_give_feedback_red: #fee2e2;
            --my_students_details_menu_give_feedback_red_text: #000;
            --my_students_details_menu_give_feedback_blue_text: #2563eb;
            --my_students_details_menu_give_feedback_radius_lg: 5px;
            --my_students_details_menu_give_feedback_radius_xl: 24px;
            --my_students_details_menu_give_feedback_shadow_soft: 0 18px 45px rgba(15, 23, 42, 0.08);
        }

        * {
            box-sizing: border-box;
        }

        body {
            margin: 0;
            font-family: "Inter", system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif;
            background: #f3f4f6;
            color: var(--my_students_details_menu_give_feedback_text);
        }

        /* ---------- NEW TOP BAR (logo + Go to home) ---------- */
        .my_students_details_menu_give_feedback_topbar {
            width: 100%;
        }

        .my_students_details_menu_give_feedback_topbar_inner {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
        }

        .my_students_details_menu_give_feedback_brand {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            text-decoration: none;
            color: #111827;
            font-weight: 700;
            letter-spacing: 0.16em;
            text-transform: uppercase;
            font-size: 14px;
        }

        .my_students_details_menu_give_feedback_brand_logo {
            width: 100px;
            height: 30px;
            border-radius: 999px;
            object-fit: contain;
        }

        .my_students_details_menu_give_feedback_topbar_home_btn {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 6px 14px;
            border-radius: 999px;
            border: 1px solid #e5e7eb;
            background: #ffffff;
            font-size: 14px;
            font-weight: 500;
            color: #111827;
            text-decoration: none;
            cursor: pointer;
            box-shadow: 0 6px 16px rgba(15, 23, 42, 0.08);
            transition: background 0.15s ease, box-shadow 0.15s ease, transform 0.05s ease;
        }

        .my_students_details_menu_give_feedback_topbar_home_btn:hover {
            background: #f9fafb;
            box-shadow: 0 8px 20px rgba(15, 23, 42, 0.12);
        }

        .my_students_details_menu_give_feedback_topbar_home_btn:active {
            transform: translateY(1px);
            box-shadow: none;
        }

        .my_students_details_menu_give_feedback_topbar_home_icon {
            width: 18px;
            height: 18px;
            display: inline-flex;
            align-items: center;
            justify-content: center;
        }

        .my_students_details_menu_give_feedback_topbar_home_icon img {
            width: 18px;
            height: 18px;
            display: block;
        }

        @media (max-width: 640px) {
            .my_students_details_menu_give_feedback_topbar_inner {
                padding: 8px 12px;
            }

            .my_students_details_menu_give_feedback_brand span {
                font-size: 12px;
            }

            .my_students_details_menu_give_feedback_topbar_home_btn {
                padding-inline: 10px;
                font-size: 13px;
            }
        }

        /* ---------- END TOP BAR STYLES ---------- */

        .my_students_details_menu_give_feedback_page_wrapper {
            min-height: 100vh;
            display: flex;
            justify-content: left;
            padding: 32px 16px;
        }

        .my_students_details_menu_give_feedback_container {
            width: 100%;
            max-width: 960px;
            padding: 32px 40px 36px;
        }

        /* Header / hero */
        .my_students_details_menu_give_feedback_eyebrow {
            font-size: 14px;
            font-weight: 500;
            color: var(--my_students_details_menu_give_feedback_muted);
            margin-bottom: 8px;
        }

        .my_students_details_menu_give_feedback_title {
            font-size: 32px;
            line-height: 1.25;
            font-weight: 700;
            margin: 0 0 4px;
            letter-spacing: -0.02em;
        }

        .my_students_details_menu_give_feedback_title_highlight {
            background: linear-gradient(90deg, #a855f7, #22c55e, #06b6d4);
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            white-space: nowrap;
        }

        .my_students_details_menu_give_feedback_title_link {
            font-size: 32px;
            line-height: 1.25;
            font-weight: 700;
            color: var(--my_students_details_menu_give_feedback_blue_text);
            text-decoration: none;
        }

        .my_students_details_menu_give_feedback_title_link:hover {
            text-decoration: underline;
        }

        .my_students_details_menu_give_feedback_header_spacer {
            height: 24px;
        }

        /* Section shared styles */
        .my_students_details_menu_give_feedback_section {
            margin-bottom: 32px;
        }

        .my_students_details_menu_give_feedback_section_header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 16px;
            gap: 12px;
        }

        .my_students_details_menu_give_feedback_section_title {
            font-size: 18px;
            font-weight: 600;
        }

        .my_students_details_menu_give_feedback_section_edit {
            font-size: 14px;
            font-weight: 500;
            color: #000;
            cursor: pointer;
            user-select: none;
        }

        /* Progress / steps layout */
        .my_students_details_menu_give_feedback_card {
            border-radius: var(--my_students_details_menu_give_feedback_radius_lg);
            border: 1px solid var(--my_students_details_menu_give_feedback_border);
            padding: 18px 20px;
            display: grid;
            grid-template-columns: repeat(3, minmax(0, 1fr));
            gap: 16px;
        }

        .my_students_details_menu_give_feedback_card_column_label {
            font-size: 14px;
            font-weight: 500;
            color: var(--my_students_details_menu_give_feedback_muted);
            margin-bottom: 8px;
        }

        .my_students_details_menu_give_feedback_pill {
            display: inline-flex;
            align-items: center;
            gap: 8px;
            padding: 8px 12px;
            border-radius: 5px;
            font-size: 13px;
            font-weight: 500;
        }

        .my_students_details_menu_give_feedback_pill--success {
            background: var(--my_students_details_menu_give_feedback_green);
            color: var(--my_students_details_menu_give_feedback_green_text);
        }

        .my_students_details_menu_give_feedback_pill--danger {
            background: var(--my_students_details_menu_give_feedback_red);
            color: var(--my_students_details_menu_give_feedback_red_text);
        }

        .my_students_details_menu_give_feedback_pill_icon {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            width: 18px;
            height: 18px;
            font-size: 11px;
        }

        /* New: size SVG icons inside pill + button icon */
        .my_students_details_menu_give_feedback_pill_icon img,
        .my_students_details_menu_give_feedback_button_icon img {
            width: 14px;
            height: 14px;
            display: block;
        }

        /* Divider */
        .my_students_details_menu_give_feedback_divider {
            height: 1px;
            background: var(--my_students_details_menu_give_feedback_border);
            margin: 28px 0;
        }

        /* Note section */
        .my_students_details_menu_give_feedback_note_section_title {
            font-size: 18px;
            font-weight: 600;
            margin-bottom: 6px;
        }

        .my_students_details_menu_give_feedback_note_section_subtitle {
            font-size: 14px;
            color: var(--my_students_details_menu_give_feedback_muted);
            margin-bottom: 16px;
        }

        .my_students_details_menu_give_feedback_textarea_wrapper {
            border-radius: var(--my_students_details_menu_give_feedback_radius_lg);
            border: 1px solid var(--my_students_details_menu_give_feedback_border);
            background: #fff;
            padding: 14px 16px 12px;
            display: flex;
            flex-direction: column;
            gap: 10px;
        }

        .my_students_details_menu_give_feedback_textarea_label {
            font-size: 14px;
            font-weight: 500;
            color: var(--my_students_details_menu_give_feedback_muted);
        }

        .my_students_details_menu_give_feedback_textarea {
            width: 100%;
            resize: vertical;
            min-height: 96px;
            border: none;
            outline: none;
            font-family: inherit;
            font-size: 14px;
            line-height: 1.5;
            color: var(--my_students_details_menu_give_feedback_text);
        }

        .my_students_details_menu_give_feedback_textarea::placeholder {
            color: #9ca3af;
        }

        .my_students_details_menu_give_feedback_note_footer {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 12px;
            flex-wrap: wrap;
            margin-top: 6px;
        }

        .my_students_details_menu_give_feedback_note_actions {
            display: flex;
            gap: 8px;
            flex-wrap: wrap;
        }

        .my_students_details_menu_give_feedback_char_count {
            font-size: 12px;
            color: var(--my_students_details_menu_give_feedback_muted);
            margin-left: auto;
        }

        .my_students_details_menu_give_feedback_button {
            border-radius: 5px;
            border: 0px solid var(--my_students_details_menu_give_feedback_border);
            padding: 8px 14px;
            font-size: 14px;
            font-weight: 500;
            background: #fff;
            color: #111827;
            display: inline-flex;
            align-items: center;
            gap: 8px;
            cursor: pointer;
            transition: background 0.15s ease, box-shadow 0.15s ease, transform 0.05s ease;
            box-shadow: none;
        }

        /* Hover shadow for all buttons */
        .my_students_details_menu_give_feedback_button:hover {
            background: #e6ebf0;
            box-shadow: 0 6px 16px rgba(15, 23, 42, 0.15);
        }

        .my_students_details_menu_give_feedback_button:active {
            transform: translateY(1px);
            box-shadow: none;
        }

        .my_students_details_menu_give_feedback_button_icon {
            font-size: 15px;
        }

        .my_students_details_menu_give_feedback_button--primary {
            border-color: transparent;
            background: var(--my_students_details_menu_give_feedback_primary);
            color: #ffffff;
            box-shadow: 0 10px 25px rgba(248, 113, 113, 0.4);
        }

        .my_students_details_menu_give_feedback_button--primary:hover {
            background: var(--my_students_details_menu_give_feedback_primary_dark);
        }

        .my_students_details_menu_give_feedback_button--primary:active {
            box-shadow: none;
        }

        .my_students_details_menu_give_feedback_pro_tip {
            margin-top: 8px;
            font-size: 13px;
            color: var(--my_students_details_menu_give_feedback_muted);
            display: flex;
            align-items: flex-start;
            gap: 6px;
        }

        .my_students_details_menu_give_feedback_pro_tip_label {
            color: var(--my_students_details_menu_give_feedback_primary_dark);
            font-weight: 600;
        }

        /* Footer buttons */
        .my_students_details_menu_give_feedback_footer_actions {
            margin-top: 32px;
            display: flex;
            justify-content: center;
            gap: 16px;
            flex-wrap: wrap;
        }

        .my_students_details_menu_give_feedback_button--ghost {
            background: #fff;
            border-color: var(--my_students_details_menu_give_feedback_border);
        }

        .my_students_details_menu_give_feedback_button--ghost:hover {
            background: var(--my_students_details_menu_give_feedback_surface);
        }

        /* Last 2 buttons: 2px solid black border */
        #my_students_details_menu_give_feedback_preview_btn,
        #my_students_details_menu_give_feedback_send_btn {
            border-width: 2px;
            border-color: #000000;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .my_students_details_menu_give_feedback_container {
                padding: 24px 18px 28px;
                border-radius: 0;
                box-shadow: none;
            }

            .my_students_details_menu_give_feedback_title,
            .my_students_details_menu_give_feedback_title_link {
                font-size: 24px;
            }

            .my_students_details_menu_give_feedback_header_spacer {
                height: 18px;
            }

            .my_students_details_menu_give_feedback_card {
                grid-template-columns: 1fr;
            }

            .my_students_details_menu_give_feedback_footer_actions {
                justify-content: stretch;
            }

            .my_students_details_menu_give_feedback_footer_actions .my_students_details_menu_give_feedback_button {
                flex: 1 1 100%;
                justify-content: center;
            }
        }

        @media (max-width: 480px) {

            .my_students_details_menu_give_feedback_title,
            .my_students_details_menu_give_feedback_title_link {
                font-size: 21px;
            }

            .my_students_details_menu_give_feedback_note_footer {
                flex-direction: column;
                align-items: flex-start;
            }

            .my_students_details_menu_give_feedback_char_count {
                margin-left: 0;
            }
        }
    </style>
</head>

<body>

    <!-- ---------- NEW TOP BAR HTML (logo + Go to home) ---------- -->
    <header class="my_students_details_menu_give_feedback_topbar">
        <div class="my_students_details_menu_give_feedback_topbar_inner">
            <a href="#" class="my_students_details_menu_give_feedback_brand">
                <img src="img\my_students\logo_header.svg" alt="Latingles logo"
                    class="my_students_details_menu_give_feedback_brand_logo">
                <!-- <span>LATINGLES</span> -->
            </a>

            <a href="my_students.php" class="my_students_details_menu_give_feedback_topbar_home_btn">
                <span class="my_students_details_menu_give_feedback_topbar_home_icon">
                    <img src="img\my_students\go home_icon.svg" alt="Home">
                </span>
                <span>Go to home</span>
            </a>
        </div>
    </header>
    <!-- ---------- END TOP BAR HTML ---------- -->

    <div class="my_students_details_menu_give_feedback_page_wrapper">
        <main class="my_students_details_menu_give_feedback_container" id="my_students_details_menu_give_feedback_main">
            <!-- Header / Hero -->
            <div class="my_students_details_menu_give_feedback_header">
                <div class="my_students_details_menu_give_feedback_eyebrow">
                    Congrats on another month of lessons with Courtney Henry!
                </div>
                <h1 class="my_students_details_menu_give_feedback_title">
                    Take 3 mins to celebrate Henry’s progress with our
                    <span class="my_students_details_menu_give_feedback_title_highlight">AI-powered</span>
                </h1>
                <a href="#" class="my_students_details_menu_give_feedback_title_link">
                    feedback
                </a>
            </div>

            <div class="my_students_details_menu_give_feedback_header_spacer"></div>

            <!-- Henry's progress -->
            <section class="my_students_details_menu_give_feedback_section" id="my_students_details_menu_give_feedback_progress_section">
                <header class="my_students_details_menu_give_feedback_section_header">
                    <div class="my_students_details_menu_give_feedback_section_title">
                        Henry's progress
                    </div>
                    <div class="my_students_details_menu_give_feedback_section_edit"
                        id="my_students_details_menu_give_feedback_edit_open_button">
                        Edit
                    </div>
                </header>

                <div class="my_students_details_menu_give_feedback_card">
                    <div>
                        <div class="my_students_details_menu_give_feedback_card_column_label">Effort</div>
                        <div class="my_students_details_menu_give_feedback_pill my_students_details_menu_give_feedback_pill--success">
                            <span class="my_students_details_menu_give_feedback_pill_icon">
                                <img src="img\my_students\feedback_progress.svg" alt="Progress up">
                            </span>
                            <span>Taking regular lessons</span>
                        </div>
                    </div>

                    <div>
                        <div class="my_students_details_menu_give_feedback_card_column_label">Speaking</div>
                        <div class="my_students_details_menu_give_feedback_pill my_students_details_menu_give_feedback_pill--success">
                            <span class="my_students_details_menu_give_feedback_pill_icon">
                                <img src="img\my_students\feedback_progress.svg" alt="Progress up">
                            </span>
                            <span>Pronunciation</span>
                        </div>
                    </div>

                    <div>
                        <div class="my_students_details_menu_give_feedback_card_column_label">Listening</div>
                        <div class="my_students_details_menu_give_feedback_pill my_students_details_menu_give_feedback_pill--success">
                            <span class="my_students_details_menu_give_feedback_pill_icon">
                                <img src="img\my_students\feedback_progress.svg" alt="Progress up">
                            </span>
                            <span>Listening for the main idea</span>
                        </div>
                    </div>
                </div>
            </section>

            <div class="my_students_details_menu_give_feedback_divider"></div>

            <!-- Henry's next steps -->
            <section class="my_students_details_menu_give_feedback_section" id="my_students_details_menu_give_feedback_next_steps_section">
                <header class="my_students_details_menu_give_feedback_section_header">
                    <div class="my_students_details_menu_give_feedback_section_title">
                        Henry's next steps
                    </div>
                    <div class="my_students_details_menu_give_feedback_section_edit"
                        id="my_students_details_menu_give_feedback_edit_open_button">
                        Edit
                    </div>
                </header>

                <div class="my_students_details_menu_give_feedback_card">
                    <div>
                        <div class="my_students_details_menu_give_feedback_card_column_label">Effort</div>
                        <div class="my_students_details_menu_give_feedback_pill my_students_details_menu_give_feedback_pill--danger">
                            <span class="my_students_details_menu_give_feedback_pill_icon">
                                <img src="img\my_students\feedback_next_step.svg" alt="Time icon">
                            </span>
                            <span>Time talking in lessons</span>
                        </div>
                    </div>
                </div>
            </section>

            <div class="my_students_details_menu_give_feedback_divider"></div>

            <!-- Note / message section -->
            <section class="my_students_details_menu_give_feedback_section" id="my_students_details_menu_give_feedback_note_section">
                <h2 class="my_students_details_menu_give_feedback_note_section_title">
                    Wrap up your feedback with a short note
                </h2>
                <p class="my_students_details_menu_give_feedback_note_section_subtitle">
                    A thoughtful note makes all the difference! Use the teaching assistant to create a draft based on the feedback you’ve shared, and edit to add your personal touch.
                </p>
                <div class="my_students_details_menu_give_feedback_textarea_label">Your note</div>
                <div class="my_students_details_menu_give_feedback_textarea_wrapper">
                    <textarea
                        class="my_students_details_menu_give_feedback_textarea"
                        id="my_students_details_menu_give_feedback_textarea"
                        maxlength="600">Hello Courtney Henry!

I've really enjoyed having you in my lessons and getting to know you these past couple of weeks! You’ve been working hard towards your goal, so I’d like to highlight your progress and share a few tips for moving forward. It’s a pleasure to be part of your learning journey!</textarea>

                    <div class="my_students_details_menu_give_feedback_note_footer">
                        <div class="my_students_details_menu_give_feedback_note_actions">
                            <button type="button"
                                class="my_students_details_menu_give_feedback_button"
                                id="my_students_details_menu_give_feedback_generate_feedback_btn">
                                <span class="my_students_details_menu_give_feedback_button_icon">
                                    <img src="img\my_students\gen_feedback.svg" alt="Magic">
                                </span>
                                <span>Generate feedback</span>
                            </button>

                            <button type="button"
                                class="my_students_details_menu_give_feedback_button my_student_details_menu_give_feedback_details_message_template_step1_button_open">
                                <span class="my_students_details_menu_give_feedback_button_icon">
                                    <img src="img\my_students\message_temp.svg" alt="Document">
                                </span>
                                <span>Message templates</span>
                            </button>

                        </div>

                        <div class="my_students_details_menu_give_feedback_char_count"
                            id="my_students_details_menu_give_feedback_char_count">
                            0 / 600
                        </div>
                    </div>
                </div>
                <p class="my_students_details_menu_give_feedback_pro_tip">
                    <span class="my_students_details_menu_give_feedback_button_icon">
                        <img src="img\my_students\pro_tip.svg" alt="Document">
                    </span>
                    <span class="my_students_details_menu_give_feedback_pro_tip_label">Pro tip:</span>
                    <span>Give a preview of the upcoming lessons to motivate your student.</span>
                </p>

            </section>
            <!-- Footer actions -->

            <div class="my_students_details_menu_give_feedback_footer_actions">
                <a href="my_students_details_menu_give_feedback_details_preview_feedback.php">
                    <button type="button"
                        class="my_students_details_menu_give_feedback_button my_students_details_menu_give_feedback_button--ghost">
                        <span class="my_students_details_menu_give_feedback_button_icon">
                            <img src="img\my_students\prev_feedback.svg" alt="Preview">
                        </span>
                        <span>Preview feedback</span>
                    </button>
                </a>
                <button type="button"
                    class="my_students_details_menu_give_feedback_button my_students_details_menu_give_feedback_button--primary"
                    id="my_students_details_menu_give_feedback_send_btn">
                    <span>Send feedback</span>
                    <span class="my_students_details_menu_give_feedback_button_icon">
                        <img src="img\my_students\send_feedback.svg" alt="Send">
                    </span>
                </button>
            </div>
        </main>
    </div>

    <!-- jQuery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <script>
        // Simple interactions using jQuery (all names prefixed)
        const my_students_details_menu_give_feedback_max_chars = 600;

        function my_students_details_menu_give_feedback_update_char_count() {
            const my_students_details_menu_give_feedback_current_length =
                $("#my_students_details_menu_give_feedback_textarea").val().length;

            $("#my_students_details_menu_give_feedback_char_count").text(
                my_students_details_menu_give_feedback_current_length + " / " + my_students_details_menu_give_feedback_max_chars
            );
        }

        $(document).ready(function() {
            // Init char counter
            my_students_details_menu_give_feedback_update_char_count();

            $("#my_students_details_menu_give_feedback_textarea").on("input", function() {
                my_students_details_menu_give_feedback_update_char_count();
            });

            // Mock edit buttons
            $("#my_students_details_menu_give_feedback_progress_edit").on("click", function() {
                alert("Progress items editing is not wired up yet – plug your own logic here.");
            });

            $("#my_students_details_menu_give_feedback_next_steps_edit").on("click", function() {
                alert("Next steps editing is not wired up yet – plug your own logic here.");
            });

            $("#my_students_details_menu_give_feedback_generate_feedback_btn, #my_students_details_menu_give_feedback_generate_feedback_btn_2").on("click", function() {
                alert("Here you can hook up your AI feedback generator.");
            });

            $("#my_students_details_menu_give_feedback_message_templates_btn, #my_students_details_menu_give_feedback_message_templates_btn_2").on("click", function() {
                alert("Here you can open a templates picker.");
            });

            $("#my_students_details_menu_give_feedback_preview_btn").on("click", function() {
                alert("This would open a preview modal in a real app.");
            });

            $("#my_students_details_menu_give_feedback_send_btn").on("click", function() {
                alert("Feedback sent! (Demo only).");
            });
        });
    </script>

    <?php
    require_once('my_student_details_menu_give_feedback_details_edit.php');
    require_once('my_students_details_menu_give_feedback_details_message_template.php');
    ?>
</body>

</html>