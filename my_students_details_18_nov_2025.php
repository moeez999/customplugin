<link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
<style>
    :root {
        --my_students_details-surface: #F7F7F7;
        --my_students_details-card: #FFFFFF;
        --my_students_details-border: #E7E7EA;
        --my_students_details-text: #111827;
        --my_students_details-muted: #6B7280;
        --my_students_details-shadow: 0 8px 40px rgba(0, 0, 0, .06);
        --my_students_details-badge-cancel-bg: #F6E0CF;
        --my_students_details-badge-cancel-border: #E9C9B3;
        --my_students_details-badge-cancel-text: #000;
        --my_students_details-badge-trial-bg: #BFE1CD;
        --my_students_details-badge-trial-border: #A9CFBB;
        --my_students_details-badge-trial-text: #000;
        --my_students_details-progress-outline: #BFC3C9;
        --my_students_details-progress-fill: #EB3B1E;
        --my_students_details-focus: #3B82F6;
        --my_students_details-danger: #ff3b00;
        --my_students_details-neutral: #F3F4F6;
    }

    .my_students_details_container {
        max-width: 1120px;
        margin: 0 auto;
        padding: 24px 24px 48px
    }

    .my_students_details_title {
        font-size: 40px;
        font-weight: 800;
        letter-spacing: -.02em;
        margin: 24px 0 12px
    }

    .my_students_details_controls {
        display: flex;
        gap: 12px;
        align-items: center;
        margin-bottom: 20px
    }

    .my_students_details_search {
        position: relative;
        flex: 0 0 360px;
        max-width: 360px
    }

    .my_students_details_search input {
        width: 100%;
        height: 46px;
        border-radius: 5px;
        border: 1.5px solid #CBD5E1;
        background: #fff;
        padding: 0 48px 0 48px;
        font-size: 15px;
        outline: none;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .03)
    }

    .my_students_details_search input::placeholder {
        color: #6b7280
    }

    .my_students_details_search input:focus {
        border-color: var(--my_students_details-focus);
        box-shadow: 0 0 0 3px rgba(59, 130, 246, .15)
    }

    .my_students_details_search-icon {
        position: absolute;
        left: 16px;
        top: 50%;
        transform: translateY(-50%);
        color: #6b7280
    }

    .my_students_details_filter-btn {
        width: 46px;
        height: 46px;
        border-radius: 5px;
        border: 1px solid #D1D5DB;
        background: #fff;
        display: grid;
        place-items: center;
        box-shadow: 0 1px 2px rgba(0, 0, 0, .03);
        cursor: pointer
    }

    .my_students_details_filter-btn:hover {
        background: #f9fafb
    }

    /* Card/Table wrapper */
    .my_students_details_card {
        background: var(--my_students_details-card);
        border: 1px solid var(--my_students_details-border);
        border-radius: 5px;
        box-shadow: var(--my_students_details-shadow);
        overflow: hidden
    }

    /* 6 columns: Name | Type | Lessons | Next lesson | Suggested action | icons */
    .my_students_details_table-head {
        display: grid;
        grid-template-columns: 4fr 2fr 2fr 2fr 3fr 1fr;
        gap: 16px;
        padding: 12px 24px;
        color: var(--my_students_details-muted);
        font-size: 14px;
        border-bottom: 1px solid var(--my_students_details-border)
    }

    .my_students_details_sort-btn {
        margin-left: 8px;
        border: 1px solid transparent;
        border-radius: 6px;
        background: transparent;
        padding: 2px;
        cursor: pointer
    }

    .my_students_details_sort-btn:hover {
        border-color: #D1D5DB
    }

    #my_students_details_sort_icon_img {
        transition: transform .18s ease
    }

    .my_students_details_rows {
        display: block
    }

    .my_students_details_row {
        display: grid;
        grid-template-columns: 4fr 2fr 2fr 2fr 3fr 1fr;
        gap: 16px;
        padding: 20px 14px;
        align-items: center;
        border-bottom: 1px solid var(--my_students_details-border);
        background: var(--my_students_details-card);
        position: relative;
        transition: background .15s ease,
            box-shadow .15s ease,
            transform .15s ease;
    }

    /* clickable area for first 5 columns */
    .my_students_details_row_link {
        display: contents;
        /* let children act as grid cells */
        cursor: pointer;
        /* link hand up to "Message student" */
    }

    .my_students_details_row:hover {
        background: #F9FAFB;
        box-shadow: 0 10px 30px rgba(15, 23, 42, 0.08);
        transform: translateY(-1px);
        z-index: 1;
    }

    /* Name cell */
    .my_students_details_name {
        display: flex;
        align-items: center;
        gap: 6px
    }

    .my_students_details_avatar {
        width: 40px;
        height: 40px;
        border-radius: 8px;
        overflow: hidden;
        border: 1px solid #D1D5DB;
        background: #E5E7EB;
        display: grid;
        place-items: center
    }

    .my_students_details_avatar img {
        width: 100%;
        height: 100%;
        object-fit: cover
    }

    .my_students_details_name span {
        font-weight: 500
    }

    /* Badges */
    .my_students_details_badge {
        display: inline-flex;
        align-items: center;
        gap: 6px;
        font-weight: 600;
        border: 1px solid transparent;
        border-radius: 5px;
        padding: 6px 14px;
        font-size: 14px;
        line-height: 1
    }

    .my_students_details_badge--cancel {
        background: var(--my_students_details-badge-cancel-bg);
        border-color: var(--my_students_details-badge-cancel-border);
        color: var(--my_students_details-badge-cancel-text)
    }

    .my_students_details_badge--subs {
        background: #e7c0f5;
        border-color: var(--my_students_details-badge-cancel-border);
        color: var(--my_students_details-badge-cancel-text)
    }

    .my_students_details_badge--trial {
        background: var(--my_students_details-badge-trial-bg);
        border-color: var(--my_students_details-badge-trial-border);
        color: var(--my_students_details-badge-trial-text)
    }

    /* Progress */
    .my_students_details_progress {
        display: flex;
        align-items: center;
        gap: 12px;
        min-width: 140px
    }

    .my_students_details_progress-outer {
        position: relative;
        width: 112px;
        height: 14px;
        border: 1px solid var(--my_students_details-progress-outline);
        border-radius: 999px;
        background: #fff;
        overflow: hidden
    }

    .my_students_details_progress-inner {
        position: absolute;
        left: 0;
        top: 0;
        height: 100%;
        background: var(--my_students_details-progress-fill);
        border-radius: 999px
    }

    .my_students_details_progress-label {
        font-size: 15px
    }

    /* Action text + icons */
    .my_students_details_actions-cell {
        display: flex;
        align-items: center;
        gap: 8px
    }

    .my_students_details_action-text {
        font-size: 15px
    }

    .my_students_details_icon-row {
        display: flex;
        align-items: center;
        gap: 24px;
        justify-content: flex-end
    }

    .my_students_details_icon-btn {
        border: 0;
        background: transparent;
        padding: 8px;
        border-radius: 8px;
        cursor: pointer
    }

    .my_students_details_icon-btn:hover {
        background: #F3F4F6
    }

    .my_students_details_icon-img {
        width: 20px;
        height: 20px;
        display: block;
        object-fit: contain
    }

    .my_students_details_calendar-wrap {
        position: relative
    }

    .my_students_details_cam-badge-img {
        position: absolute;
        right: -6px;
        bottom: -6px;
        width: 16px;
        height: 16px;
        display: block
    }

    /* FILTER MODAL */
    .my_students_details_modal_backdrop {
        position: fixed;
        inset: 0;
        background: rgba(0, 0, 0, .08);
        display: none;
        z-index: 40
    }

    .my_students_details_modal {
        position: fixed;
        z-index: 50;
        display: none;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 30px 80px rgba(0, 0, 0, .18);
        width: 420px;
        padding: 18px
    }

    .my_students_details_modal h3 {
        margin: 6px 6px 12px;
        font-size: 16px;
        font-weight: 700
    }

    .my_students_details_filter_item {
        display: flex;
        align-items: center;
        justify-content: space-between;
        background: #F6F7FB;
        border: 2px solid #d9dbe3;
        border-radius: 10px;
        padding: 14px;
        margin: 10px 6px
    }

    .my_students_details_filter_item.is_active {
        border-color: #111827;
        background: #F6F7FB
    }

    .my_students_details_check {
        width: 24px;
        height: 24px;
        border-radius: 6px;
        border: 2px solid #c9ccd5;
        background: #fff;
        display: grid;
        place-items: center;
        cursor: pointer
    }

    .my_students_details_check svg {
        display: none;
        width: 16px;
        height: 16px
    }

    .my_students_details_check.is_checked {
        background: #111827;
        border-color: #111827
    }

    .my_students_details_check.is_checked svg {
        display: block;
        fill: #fff
    }

    .my_students_details_modal_footer {
        display: flex;
        align-items: center;
        justify-content: space-between;
        margin-top: 14px;
        padding: 0 6px 4px
    }

    .my_students_details_btn_clear {
        background: transparent;
        border: 0;
        color: #111827;
        font-weight: 700;
        font-size: 16px;
        cursor: pointer
    }

    .my_students_details_btn_apply {
        border: 2px solid #111827;
        background: var(--my_students_details-danger);
        color: #fff;
        font-weight: 700;
        border-radius: 10px;
        padding: 10px 22px;
        font-size: 16px;
        cursor: pointer
    }

    /* ===== Settings (3-dots) menu ===== */
    .my_students_details_settings_menu_backdrop {
        position: fixed;
        inset: 0;
        background: transparent;
        display: none;
        z-index: 48
    }

    .my_students_details_settings_menu_panel {
        position: fixed;
        z-index: 60;
        display: none;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 30px 80px rgba(0, 0, 0, .18);
        border: 1px solid rgba(17, 24, 39, .06);
        min-width: 320px
    }

    .my_students_details_settings_menu_list {
        list-style: none;
        margin: 0;
        padding: 8px
    }

    .my_students_details_settings_menu_item {
        display: flex;
        align-items: center;
        gap: 12px;
        padding: 12px;
        border-radius: 10px;
        cursor: pointer
    }

    .my_students_details_settings_menu_item:hover {
        background: #F5F6FA
    }

    .my_students_details_settings_menu_icon {
        width: 22px;
        height: 22px;
        display: block
    }

    .my_students_details_settings_menu_label {
        font-size: 16px;
        color: #111827
    }

    /* Responsive */
    @media (max-width: 860px) {
        .my_students_details_table-head {
            display: none
        }

        .my_students_details_row {
            grid-template-columns: 1fr;
            gap: 12px
        }

        .my_students_details_icon-row {
            justify-content: flex-start
        }

        .my_students_details_search {
            flex: 1;
            max-width: 100%
        }

        .my_students_details_modal {
            width: 92vw;
            left: 4vw !important;
            right: auto
        }

        .my_students_details_settings_menu_panel {
            min-width: 260px
        }
    }
</style>

<div class="my_students_details_container">
    <h1 class="my_students_details_title">My students</h1>
    <div class="my_students_details_controls">
        <div class="my_students_details_search">
            <span class="my_students_details_search-icon">
                <img src="img/my_students/search.svg" alt="Search" class="my_students_details_icon-img" />
            </span>
            <input id="my_students_details_search_input" type="text" placeholder="Search students">
        </div>
        <button id="my_students_details_filter_btn" class="my_students_details_filter-btn" aria-label="Filter">
            <img src="img/my_students/filters.svg" alt="Filter" class="my_students_details_icon-img" />
        </button>
    </div>

    <section id="my_students_details_table_wrapper" class="my_students_details_card">
        <div class="my_students_details_table-head">
            <div>Name</div>
            <div>Type</div>
            <div>
                <span>Lessons</span>
                <button id="my_students_details_sort_lessons" class="my_students_details_sort-btn" title="Sort by lessons">
                    <img id="my_students_details_sort_icon_img" src="img/my_students/asc.svg" alt="Sort" class="my_students_details_icon-img" style="width:12px;height:12px" />
                </button>
            </div>
            <div>Next lesson</div>
            <div>Suggested action</div>
            <div></div>
        </div>

        <div id="my_students_details_rows" class="my_students_details_rows"></div>
    </section>
</div>

<!-- Filter Modal (backdrop + panel) -->
<div id="my_students_details_modal_backdrop" class="my_students_details_modal_backdrop"></div>
<div id="my_students_details_modal" class="my_students_details_modal" role="dialog" aria-modal="true" aria-labelledby="my_students_details_modal_title">
    <h3 id="my_students_details_modal_title">Filters</h3>
    <div class="my_students_details_filter_item">
        <span>Current students</span>
        <button type="button" class="my_students_details_check" data-filter="current">
            <svg viewBox="0 0 20 20" style="width: 20px;height: 20px;margin-left: -6px;margin-top: 1px;">
                <path d="M7.5 13.5L3.5 9.5l1.4-1.4 2.6 2.6 7-7 1.4 1.4-8.4 8.4z" />
            </svg>
        </button>
    </div>
    <div class="my_students_details_filter_item">
        <span>Past students</span>
        <button type="button" class="my_students_details_check" data-filter="past">
            <svg viewBox="0 0 20 20" style="width: 20px;height: 20px;margin-left: -6px;margin-top: 1px;">
                <path d="M7.5 13.5L3.5 9.5l1.4-1.4 2.6 2.6 7-7 1.4 1.4-8.4 8.4z" />
            </svg>
        </button>
    </div>
    <div class="my_students_details_modal_footer">
        <button id="my_students_details_btn_clear" class="my_students_details_btn_clear" type="button">Clear</button>
        <button id="my_students_details_btn_apply" class="my_students_details_btn_apply" type="button">Apply</button>
    </div>
</div>

<!-- Settings (3-dots) Menu -->
<div id="my_students_details_settings_menu_backdrop" class="my_students_details_settings_menu_backdrop"></div>
<div id="my_students_details_settings_menu_panel" class="my_students_details_settings_menu_panel" role="menu" aria-hidden="true">
    <ul class="my_students_details_settings_menu_list">
        <li class="my_students_details_settings_menu_item" data-action="enter">
            <img class="my_students_details_settings_menu_icon" src="img/my_students/video_icon.svg" alt="Enter" />
            <span class="my_students_details_settings_menu_label">Enter Classroom</span>
        </li>
        <li class="my_students_details_settings_menu_item" data-action="price" id="my_student_details_menu_change_price_open_btn">
            <img class="my_students_details_settings_menu_icon" src="img/my_students/change-price.svg" alt="Change price" />
            <span class="my_students_details_settings_menu_label">Change Price</span>
        </li>
        <li class="my_students_details_settings_menu_item" data-action="rename" id="my_student_details_menu_rename_button">
            <img class="my_students_details_settings_menu_icon" src="img/my_students/rename.svg" alt="Rename" />
            <span class="my_students_details_settings_menu_label">Rename</span>
        </li>
        <li class="my_students_details_settings_menu_item" data-action="archive" id="my_student_details_menu_archive_button">
            <img class="my_students_details_settings_menu_icon" src="img/my_students/archive.svg" alt="Archive" />
            <span class="my_students_details_settings_menu_label">Archive</span>
        </li>
        <li class="my_students_details_settings_menu_item" data-action="archive" id="my_student_details_menu_archive_button">
            <img class="my_students_details_settings_menu_icon" src="img/my_students/archive.svg" alt="Archive" />
            <span class="my_students_details_settings_menu_label">Share next step</span>
        </li>
        <a href="my_students_details_menu_give_feedback.php">
            <li class="my_students_details_settings_menu_item" data-action="archive" id="my_student_details_menu_archive_button">
                <img class="my_students_details_settings_menu_icon" src="img/my_students/archive.svg" alt="Archive" />
                <span class="my_students_details_settings_menu_label">Give Feedback</span>
            </li>
        </a>
    </ul>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
<script>
    // ================= DATA =================
    const my_students_details_seed = [{
            id: '1',
            name: 'Courtney Henry',
            type: 'Subscription',
            lessonsDone: 1,
            lessonsTotal: 3,
            nextLesson: '-',
            action: 'Message student',
            avatar: 'CH',
            avatarUrl: 'https://i.pravatar.cc/64?img=11'
        },
        {
            id: '2',
            name: 'Savannah Nguyen',
            type: 'Cancelled',
            lessonsDone: 0,
            lessonsTotal: 0,
            nextLesson: '-',
            action: 'Message student',
            avatar: 'SN',
            avatarUrl: 'https://i.pravatar.cc/64?img=32'
        },
        {
            id: '3',
            name: 'Bessie Cooper',
            type: 'Trial',
            lessonsDone: 0,
            lessonsTotal: 0,
            nextLesson: '-',
            action: '-',
            avatar: 'BC',
            avatarUrl: 'https://i.pravatar.cc/64?img=3'
        },
        {
            id: '4',
            name: 'Savannah Nguyen',
            type: 'Trial',
            lessonsDone: 0,
            lessonsTotal: 0,
            nextLesson: '-',
            action: '-',
            avatar: 'SN',
            avatarUrl: 'https://i.pravatar.cc/64?img=20'
        },
        {
            id: '5',
            name: 'Darlene Robertson',
            type: 'Trial',
            lessonsDone: 0,
            lessonsTotal: 0,
            nextLesson: '-',
            action: '-',
            avatar: 'DR',
            avatarUrl: 'https://i.pravatar.cc/64?img=5'
        }
    ];

    // ================= UTILITIES =================
    const my_students_details_percent = (done, total) =>
        total === 0 ? 0 : Math.round((done / total) * 100);

    function my_students_details_makeAvatar(person) {
        const img = person.avatarUrl ?
            `<img src="${person.avatarUrl}" alt="${person.name}">` :
            `<span>${person.avatar}</span>`;
        return `<div class="my_students_details_avatar">${img}</div>`
    }

    function my_students_details_badge(type) {
        if (type === 'Cancelled') {
            return `<span class="my_students_details_badge my_students_details_badge--cancel">Cancelled</span>`;
        }
        if (type === 'Subscription') {
            return `<span class="my_students_details_badge my_students_details_badge--subs">Subscription</span>`;
        }
        return `<span class="my_students_details_badge my_students_details_badge--trial">Trial</span>`;
    }

    function my_students_details_progress(done, total) {
        const pct = Math.min(100, my_students_details_percent(done, total));
        return `
        <div class="my_students_details_progress">
          <div class="my_students_details_progress-outer">
            <div class="my_students_details_progress-inner" style="width:${pct}%"></div>
          </div>
          <span class="my_students_details_progress-label">${done}/${total}</span>
        </div>`;
    }

    function my_students_details_actionCell(text) {
        return `<div class="my_students_details_actions-cell"><span class="my_students_details_action-text">${text}</span></div>`;
    }

    // icons cell (all icons are <img>)
    function my_students_details_iconsCell(studentName) {
        return `
        <div class="my_students_details_icon-row">
          <button class="my_students_details_icon-btn" aria-label="Message">
            <img src="img/my_students/chat.svg" alt="Chat" class="my_students_details_icon-img"/>
          </button>
          <div class="my_students_details_calendar-wrap">
            <button class="my_students_details_icon-btn" aria-label="Schedule">
              <img src="img/my_students/calendar.svg" alt="Calendar" class="my_students_details_icon-img"/>
            </button>
          </div>
          <button class="my_students_details_icon-btn my_students_details_settings_menu_kebab" data-student="${studentName}" aria-label="More">
            <img src="img/my_students/settings.svg" alt="More" class="my_students_details_icon-img"/>
          </button>
        </div>`;
    }

    // row builder – first row's CLICKABLE AREA gets the id now
    function my_students_details_row(data, isFirst) {
        const linkId = isFirst ? ' id="my_student_details_lessons_open_button"' : '';
        return `
        <div class="my_students_details_row">
          <button type="button" class="my_students_details_row_link"${linkId}>
            <div class="my_students_details_name">${my_students_details_makeAvatar(data)} <span>${data.name}</span></div>
            <div>${my_students_details_badge(data.type)}</div>
            <div>${my_students_details_progress(data.lessonsDone,data.lessonsTotal)}</div>
            <div style="font-size:15px;color:#374151">${data.nextLesson}</div>
            <div>${my_students_details_actionCell(data.action)}</div>
          </button>
          <div>${my_students_details_iconsCell(data.name)}</div>
        </div>`;
    }

    function my_students_details_render(rows) {
        const $wrap = $('#my_students_details_rows');
        $wrap.empty();
        rows.forEach((r, index) =>
            $wrap.append(my_students_details_row(r, index === 0))
        );
    }

    // ================= MODAL HELPERS =================
    function my_students_details_openModal() {
        const $btn = $('#my_students_details_filter_btn');
        const rect = $btn[0].getBoundingClientRect();
        const $modal = $('#my_students_details_modal');
        const top = rect.bottom + 8 + window.scrollY;
        let left = rect.left + window.scrollX;
        const maxLeft = window.scrollX + window.innerWidth - $modal.outerWidth() - 8;
        if (left > maxLeft) left = maxLeft;
        $modal.css({
            top: top + 'px',
            left: left + 'px'
        });
        $('#my_students_details_modal_backdrop').fadeIn(120);
        $modal.fadeIn(120);
    }

    function my_students_details_closeModal() {
        $('#my_students_details_modal_backdrop').fadeOut(100);
        $('#my_students_details_modal').fadeOut(100);
    }

    // ================= INTERACTIONS =================
    $(function() {
        let my_students_details_data = [...my_students_details_seed];
        let my_students_details_lessonsAsc = false; // caret-up default

        my_students_details_render(my_students_details_data);

        $('#my_students_details_search_input').on('input', function() {
            const q = $(this).val().toLowerCase();
            const filtered = my_students_details_seed.filter(s =>
                s.name.toLowerCase().includes(q)
            );
            my_students_details_render(filtered);
        });

        $('#my_students_details_sort_lessons').on('click', function() {
            my_students_details_lessonsAsc = !my_students_details_lessonsAsc;
            const $sortIcon = $('#my_students_details_sort_icon_img');
            $sortIcon.css(
                'transform',
                my_students_details_lessonsAsc ? 'rotate(180deg)' : 'rotate(0deg)'
            );
            my_students_details_data.sort((a, b) => {
                const pa = my_students_details_percent(a.lessonsDone, a.lessonsTotal);
                const pb = my_students_details_percent(b.lessonsDone, b.lessonsTotal);
                return my_students_details_lessonsAsc ? pa - pb : pb - pa;
            });
            my_students_details_render(my_students_details_data);
        });

        // Filter modal open/close
        $('#my_students_details_filter_btn').on('click', my_students_details_openModal);
        $('#my_students_details_modal_backdrop').on('click', my_students_details_closeModal);
        $(document).on('keydown', function(e) {
            if (e.key === 'Escape') my_students_details_closeModal();
        });

        // Checkbox toggle (custom look)
        $('.my_students_details_check').on('click', function() {
            $(this).toggleClass('is_checked');
            $(this)
                .closest('.my_students_details_filter_item')
                .toggleClass('is_active', $(this).hasClass('is_checked'));
        });
    });

    // Clear & Apply
    $('#my_students_details_btn_clear').on('click', function() {
        $('.my_students_details_check')
            .removeClass('is_checked')
            .closest('.my_students_details_filter_item')
            .removeClass('is_active');
    });
    $('#my_students_details_btn_apply').on('click', function() {
        my_students_details_closeModal();
    });

    // ========== 3-DOTS SETTINGS MENU ==========
    const my_students_details_settings_menu_$panel = $('#my_students_details_settings_menu_panel');
    const my_students_details_settings_menu_$backdrop = $('#my_students_details_settings_menu_backdrop');
    let my_students_details_settings_menu_currentTarget = null;

    function my_students_details_settings_menu_open(btn) {
        my_students_details_settings_menu_currentTarget = btn;
        const rect = btn.getBoundingClientRect();
        const top = rect.bottom + 8 + window.scrollY;
        let left = rect.right - my_students_details_settings_menu_$panel.outerWidth() + window.scrollX;
        const minLeft = 8 + window.scrollX;
        if (left < minLeft) left = minLeft;
        my_students_details_settings_menu_$panel.css({
            top: top + 'px',
            left: left + 'px'
        }).fadeIn(120);
        my_students_details_settings_menu_$backdrop.show();
    }

    function my_students_details_settings_menu_close() {
        my_students_details_settings_menu_$panel.fadeOut(100);
        my_students_details_settings_menu_$backdrop.hide();
        my_students_details_settings_menu_currentTarget = null;
    }

    $(document).on('click', '.my_students_details_settings_menu_kebab', function(e) {
        e.stopPropagation();
        if (
            my_students_details_settings_menu_$panel.is(':visible') &&
            my_students_details_settings_menu_currentTarget === this
        ) {
            my_students_details_settings_menu_close();
        } else {
            my_students_details_settings_menu_open(this);
        }
    });

    my_students_details_settings_menu_$backdrop.on('click', my_students_details_settings_menu_close);
    $(window).on('scroll resize', my_students_details_settings_menu_close);
    $(document).on('keydown', function(e) {
        if (e.key === 'Escape') my_students_details_settings_menu_close();
    });

    $('#my_students_details_settings_menu_panel').on('click', '.my_students_details_settings_menu_item', function() {
        const action = $(this).data('action');
        const name = my_students_details_settings_menu_currentTarget ?
            $(my_students_details_settings_menu_currentTarget).data('student') :
            '';
        console.log('Action:', action, 'for', name);
        my_students_details_settings_menu_close();
    });
</script>

<?php require_once('my_students_details_menu_change_price.php'); ?>
<?php require_once('my_students_details_menu_rename.php'); ?>
<?php require_once('my_students_details_menu_archive.php'); ?>
<?php require_once('my_students_details_lessons.php'); ?>