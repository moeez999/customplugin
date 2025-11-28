<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>My Profile – About</title>

    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

    <style>
        :root {
            --my_profile_about_text: #121117;
            --my_profile_about_muted: #6B7280;
            --my_profile_about_border: #E4E7EE;
            --my_profile_about_accent: #ff3b1f;
            --my_profile_about_radius: 10px;
            --my_profile_about_control_h: 52px;
        }

        .my_profile_about_root {
            font-family: Inter, ui-sans-serif, system-ui, Segoe UI, Roboto, Helvetica, Arial, "Apple Color Emoji", "Segoe UI Emoji";
        }

        .my_profile_about_field {
            box-sizing: border-box;
            height: var(--my_profile_about_control_h);
            border: 1.5px solid var(--my_profile_about_border);
            border-radius: 10px;
            outline: 0;
            transition: border-color .15s, box-shadow .15s;
            background: #fff;
        }

        .my_profile_about_field:focus {
            border-color: #B9C0D4;
            box-shadow: 0 0 0 4px rgba(59, 130, 246, .08)
        }

        .my_profile_about_select {
            appearance: none;
            -webkit-appearance: none;
            -moz-appearance: none
        }

        /* Sidebar items */
        .my_profile_about_sidebar_item {
            position: relative;
            border-left: 4px solid transparent;
            padding: .5rem 0 .5rem 1rem;
            border-radius: 8px;
            display: block;
        }

        /* Short red bar like snapshot */
        .my_profile_about_sidebar_item.my_profile_about_active::before {
            content: "";
            position: absolute;
            left: -5px;
            top: 6px;
            width: 3px;
            height: 30px;
            background: var(--my_profile_about_accent);
            border-radius: 1px;
        }

        .my_profile_about_sidebar_item.my_profile_about_active {
            color: var(--my_profile_about_text);
            font-weight: 600;
            border-left-color: transparent;
        }

        .my_profile_about_card_shadow {
            box-shadow: 0 14px 42px rgba(0, 0, 0, .08), 0 8px 18px rgba(0, 0, 0, .06)
        }

        .my_profile_about_badge {
            background: #E8F0FF;
            color: #1F4CF0;
            font-weight: 600;
            border-radius: 9999px;
            padding: .2rem .5rem;
            font-size: .75rem
        }

        /* Right card scale down */
        .my_profile_about_btn {
            height: 44px;
            border-radius: 12px;
            border: 1.5px solid var(--my_profile_about_border)
        }

        .my_profile_about_btn_primary {
            background: var(--my_profile_about_accent);
            color: #fff;
            border: none
        }

        .my_profile_about_helper {
            color: var(--my_profile_about_muted);
            font-size: .90rem;
        }

        /* smaller paragraph */

        .my_profile_about_label {
            font-size: .95rem;
            color: var(--my_profile_about_text);
            font-weight: 500;
            margin-bottom: .5rem
        }

        .my_profile_about_lang_grid {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 16px
        }

        /* Layout tweaks */
        .my_profile_about_layout {
            grid-template-columns: 220px 1fr 300px
        }

        /* narrower right column */
        @media (max-width:1024px) {
            .my_profile_about_layout {
                grid-template-columns: 240px 1fr
            }
        }

        @media (max-width:768px) {
            .my_profile_about_layout {
                grid-template-columns: 1fr
            }

            .my_profile_about_right {
                position: static
            }
        }
    </style>
</head>

<body class="my_profile_about_root bg-white text-[color:var(--my_profile_about_text)]">

    <div class="max-w-[1200px] mx-auto px-4 md:px-6 lg:px-8 py-8">
        <div class="my_profile_about_layout grid gap-10">
            <!-- LEFT: Tabs -->
            <aside>
                <nav aria-label="Profile sections" class="space-y-1">
                    <a href="#" data-tab="about"
                        class="my_profile_about_tablink my_profile_about_sidebar_item my_profile_about_active text-[1.03rem]">About</a>
                    <a href="#" data-tab="photo"
                        class="my_profile_about_tablink my_profile_about_sidebar_item text-[1.03rem] text-[color:var(--my_profile_about_muted)]">Photo</a>
                    <a href="#" data-tab="description"
                        class="my_profile_about_tablink my_profile_about_sidebar_item text-[1.03rem] text-[color:var(--my_profile_about_muted)]">Description</a>
                    <a href="#" data-tab="video"
                        class="my_profile_about_tablink my_profile_about_sidebar_item text-[1.03rem] text-[color:var(--my_profile_about_muted)]">Video</a>
                    <a href="#" data-tab="subjects"
                        class="my_profile_about_tablink my_profile_about_sidebar_item text-[1.03rem] text-[color:var(--my_profile_about_muted)]">Subjects</a>
                    <a href="#" data-tab="pricing"
                        class="my_profile_about_tablink my_profile_about_sidebar_item text-[1.03rem] text-[color:var(--my_profile_about_muted)]">Pricing</a>
                    <a href="#" data-tab="background"
                        class="my_profile_about_tablink my_profile_about_sidebar_item text-[1.03rem] text-[color:var(--my_profile_about_muted)]">Background</a>
                </nav>
            </aside>

            <!-- CENTER -->
            <main class="space-y-8">
                <!-- ABOUT -->
                <section id="my_profile_about_tab_about" class="my_profile_about_tabpanel">
                    <h1 class="text-[2rem] md:text-[2.25rem] font-semibold tracking-tight">About</h1>
                    <p class="my_profile_about_helper mt-3 max-w-[680px]">
                        Start creating your public tutor profile. Your progress will be automatically saved as you
                        complete each section.
                        You can return at any time to finish your registration.
                    </p>

                    <form class="mt-7 space-y-6" onsubmit="return false;">
                        <div>
                            <label class="my_profile_about_label">First name</label>
                            <input type="text" value="Karen" class="my_profile_about_field w-full px-4" />
                        </div>
                        <div>
                            <label class="my_profile_about_label">Last name</label>
                            <input type="text" value="Carelon" class="my_profile_about_field w-full px-4" />
                        </div>

                        <!-- Country -->
                        <div>
                            <label class="my_profile_about_label">Country of birth • <span
                                    class="text-[color:var(--my_profile_about_muted)]">Optional</span></label>
                            <div class="relative">
                                <select class="my_profile_about_field my_profile_about_select w-full pl-4 pr-10">
                                    <option>USA</option>
                                    <option>Pakistan</option>
                                    <option>Venezuela</option>
                                    <option>United Kingdom</option>
                                    <option>Canada</option>
                                </select>
                                <svg class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2" width="18"
                                    height="18" viewBox="0 0 20 20" fill="none">
                                    <path d="M5 7l5 6 5-6" stroke="#6B7280" stroke-width="1.8" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>

                        <!-- Timezone -->
                        <div>
                            <label class="my_profile_about_label">Timezone • <span
                                    class="text-[color:var(--my_profile_about_muted)]">Optional</span></label>
                            <div class="relative">
                                <select class="my_profile_about_field my_profile_about_select w-full pl-4 pr-10">
                                    <option>05:57 (GMT-4) – America, Caracas</option>
                                    <option>+05:00 (GMT+5) – Asia, Karachi</option>
                                    <option>+00:00 (GMT) – UTC</option>
                                    <option>+01:00 (GMT+1) – Europe, Berlin</option>
                                </select>
                                <svg class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2" width="18"
                                    height="18" viewBox="0 0 20 20" fill="none">
                                    <path d="M5 7l5 6 5-6" stroke="#6B7280" stroke-width="1.8" stroke-linecap="round"
                                        stroke-linejoin="round" />
                                </svg>
                            </div>
                        </div>

                        <!-- Languages -->
                        <div>
                            <div class="flex items-end justify-between gap-4 flex-wrap">
                                <div class="my_profile_about_label mb-1">Languages you speak • <span
                                        class="text-[color:var(--my_profile_about_muted)]">Optional</span></div>
                                <button type="button" id="my_profile_about_add_lang_btn"
                                    class="text-[.95rem] underline decoration-1 hover:text-[color:var(--my_profile_about_accent)]">Add
                                    another language</button>
                            </div>

                            <div id="my_profile_about_lang_rows" class="mt-3 space-y-4">
                                <div class="my_profile_about_lang_grid">
                                    <div class="relative">
                                        <select
                                            class="my_profile_about_field my_profile_about_select w-full pl-4 pr-10">
                                            <option>English</option>
                                            <option>Spanish</option>
                                            <option>Urdu</option>
                                            <option>Arabic</option>
                                        </select>
                                        <svg class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2"
                                            width="18" height="18" viewBox="0 0 20 20" fill="none">
                                            <path d="M5 7l5 6 5-6" stroke="#6B7280" stroke-width="1.8"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                    <div class="relative">
                                        <select
                                            class="my_profile_about_field my_profile_about_select w-full pl-4 pr-10">
                                            <option>B2</option>
                                            <option>A1</option>
                                            <option>A2</option>
                                            <option>B1</option>
                                            <option>C1</option>
                                            <option>C2</option>
                                            <option>Native</option>
                                        </select>
                                        <svg class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2"
                                            width="18" height="18" viewBox="0 0 20 20" fill="none">
                                            <path d="M5 7l5 6 5-6" stroke="#6B7280" stroke-width="1.8"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="my_profile_about_lang_grid">
                                    <div class="relative">
                                        <select
                                            class="my_profile_about_field my_profile_about_select w-full pl-4 pr-10">
                                            <option>English</option>
                                            <option>Spanish</option>
                                            <option>Urdu</option>
                                            <option>Arabic</option>
                                        </select>
                                        <svg class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2"
                                            width="18" height="18" viewBox="0 0 20 20" fill="none">
                                            <path d="M5 7l5 6 5-6" stroke="#6B7280" stroke-width="1.8" />
                                        </svg>
                                    </div>
                                    <div class="relative">
                                        <select
                                            class="my_profile_about_field my_profile_about_select w-full pl-4 pr-10">
                                            <option>B2</option>
                                            <option>A1</option>
                                            <option>A2</option>
                                            <option>B1</option>
                                            <option>C1</option>
                                            <option>C2</option>
                                            <option>Native</option>
                                        </select>
                                        <svg class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2"
                                            width="18" height="18" viewBox="0 0 20 20" fill="none">
                                            <path d="M5 7l5 6 5-6" stroke="#6B7280" stroke-width="1.8" />
                                        </svg>
                                    </div>
                                </div>

                                <div class="my_profile_about_lang_grid">
                                    <div class="relative">
                                        <select
                                            class="my_profile_about_field my_profile_about_select w-full pl-4 pr-10">
                                            <option>English</option>
                                            <option>Spanish</option>
                                            <option>Urdu</option>
                                            <option>Arabic</option>
                                        </select>
                                        <svg class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2"
                                            width="18" height="18" viewBox="0 0 20 20" fill="none">
                                            <path d="M5 7l5 6 5-6" stroke="#6B7280" stroke-width="1.8" />
                                        </svg>
                                    </div>
                                    <div class="relative">
                                        <select
                                            class="my_profile_about_field my_profile_about_select w-full pl-4 pr-10">
                                            <option>Native</option>
                                            <option>A1</option>
                                            <option>A2</option>
                                            <option>B1</option>
                                            <option>B2</option>
                                            <option>C1</option>
                                            <option>C2</option>
                                        </select>
                                        <svg class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2"
                                            width="18" height="18" viewBox="0 0 20 20" fill="none">
                                            <path d="M5 7l5 6 5-6" stroke="#6B7280" stroke-width="1.8" />
                                        </svg>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Phone -->
                        <div>
                            <label class="my_profile_about_label">Phone number <span
                                    class="text-[color:var(--my_profile_about_muted)]">(optional)</span></label>
                            <div class="relative">
                                <input type="text" value="+58 424 696 775 5"
                                    class="my_profile_about_field w-full pl-14 pr-4" />
                                <span class="absolute left-3 top-1/2 -translate-y-1/2 flex items-center gap-2">
                                    <span class="inline-block w-6 h-4 rounded-sm overflow-hidden ring-1 ring-[#D1D5DB]">
                                        <span class="block w-full h-1/3 bg-[#00247D]"></span>
                                        <span class="block w-full h-1/3 bg-[#FFCC00]"></span>
                                        <span class="block w-full h-1/3 bg-[#CF142B]"></span>
                                    </span>
                                    <svg width="12" height="12" viewBox="0 0 20 20" fill="none">
                                        <path d="M6 8l4 4 4-4" stroke="#6B7280" stroke-width="1.6"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </span>
                            </div>
                        </div>

                        <div class="pt-1">
                            <button
                                class="my_profile_about_btn my_profile_about_btn_primary px-6 w-[150px] text-[1rem] font-semibold">Save</button>
                        </div>
                    </form>
                </section>

                <!-- Other tabs (placeholders) -->
                <section id="my_profile_about_tab_photo" class="my_profile_about_tabpanel hidden">
                    <?php require_once('my_profile_photo_tab.php'); ?>
                </section>

                <section id="my_profile_about_tab_description" class="my_profile_about_tabpanel hidden">
                    <?php require_once('my_profile_description_tab.php'); ?>
                </section>

                <section id="my_profile_about_tab_video" class="my_profile_about_tabpanel hidden">
                    <?php require_once('my_profile_video_tab.php'); ?>
                </section>

                <section id="my_profile_about_tab_subjects" class="my_profile_about_tabpanel hidden">
                    <?php require_once('my_profile_subjects_tab.php'); ?>
                </section>

                <section id="my_profile_about_tab_pricing" class="my_profile_about_tabpanel hidden">
                    <?php require_once('my_profile_pricing_tab.php'); ?>
                </section>

                <section id="my_profile_about_tab_background" class="my_profile_about_tabpanel hidden">
                    <?php require_once('my_profile_background_tab.php'); ?>
                </section>
                
            </main>

            <!-- RIGHT: smaller card -->
            <aside class="my_profile_about_right sticky top-8">
                <div
                    class="my_profile_about_card my_profile_about_card_shadow rounded-2xl border border-[color:var(--my_profile_about_border)] p-4">
                    <div class="flex items-start gap-3">
                        <img src="https://images.unsplash.com/photo-1544005313-94ddf0286df2?q=80&w=128&auto=format&fit=crop"
                            alt="Avatar" class="w-10 h-10 rounded-full object-cover">
                        <div class="min-w-0">
                            <div class="flex items-center gap-2">
                                <div class="font-semibold text-[1rem] truncate">Daniela</div>
                                <svg width="16" height="16" viewBox="0 0 24 24" fill="#2563EB" aria-hidden="true">
                                    <path
                                        d="M12 2l2.39 2.39 3.38-.46-.46 3.38L20 10l-2.69 1.69.46 3.38-3.38-.46L12 18l-2.39-2.39-3.38.46.46-3.38L4 10l2.69-1.69-.46-3.38 3.38.46L12 2z">
                                    </path>
                                    <path d="M10.4 12.3l-1.7-1.7-1.1 1.1 2.8 2.8 5-5-1.1-1.1-3.9 3.9z" fill="#fff">
                                    </path>
                                </svg>
                            </div>
                            <div class="mt-1 my_profile_about_badge inline-block">Professional</div>
                        </div>
                    </div>

                    <div class="mt-4 space-y-2.5">
                        <button class="my_profile_about_btn w-full flex items-center justify-center gap-2 bg-white">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                                <path d="M2 12s4-7 10-7 10 7 10 7-4 7-10 7-10-7-10-7z" stroke="#111827"
                                    stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" />
                                <circle cx="12" cy="12" r="3" stroke="#111827" stroke-width="1.6" />
                            </svg>
                            <span class="font-medium text-[.98rem]">Preview profile</span>
                        </button>

                        <button class="my_profile_about_btn w-full flex items-center justify-center gap-2 bg-white">
                            <svg width="18" height="18" viewBox="0 0 24 24" fill="none">
                                <path d="M4 12v7a1 1 0 001 1h14a1 1 0 001-1v-7" stroke="#111827" stroke-width="1.6"
                                    stroke-linecap="round" />
                                <path d="M16 6l-4-4-4 4" stroke="#111827" stroke-width="1.6" stroke-linecap="round"
                                    stroke-linejoin="round" />
                                <path d="M12 2v14" stroke="#111827" stroke-width="1.6" stroke-linecap="round" />
                            </svg>
                            <span class="font-medium text-[.98rem]">Share profile</span>
                        </button>
                    </div>
                </div>
            </aside>
        </div>
    </div>

    <script>
        function my_profile_about_activateTab(tab) {
            $('.my_profile_about_tablink')
                .removeClass('my_profile_about_active')
                .addClass('text-[color:var(--my_profile_about_muted)]');
            $('.my_profile_about_tablink[data-tab="' + tab + '"]')
                .addClass('my_profile_about_active')
                .removeClass('text-[color:var(--my_profile_about_muted)]');

            $('.my_profile_about_tabpanel').addClass('hidden');
            $('#my_profile_about_tab_' + tab).removeClass('hidden');
        }

        $(function() {
            my_profile_about_activateTab('about');

            $('.my_profile_about_tablink').on('click', function(e) {
                e.preventDefault();
                my_profile_about_activateTab($(this).data('tab'));
            });

            function my_profile_about_langRowTemplate() {
                return `
      <div class="my_profile_about_lang_grid">
        <div class="relative">
          <select class="my_profile_about_field my_profile_about_select w-full pl-4 pr-10">
            <option>English</option><option>Spanish</option><option>Urdu</option><option>Arabic</option>
          </select>
          <svg class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2" width="18" height="18" viewBox="0 0 20 20" fill="none"><path d="M5 7l5 6 5-6" stroke="#6B7280" stroke-width="1.8"/></svg>
        </div>
        <div class="relative">
          <select class="my_profile_about_field my_profile_about_select w-full pl-4 pr-10">
            <option>A1</option><option>A2</option><option>B1</option><option selected>B2</option><option>C1</option><option>C2</option><option>Native</option>
          </select>
          <svg class="pointer-events-none absolute right-3 top-1/2 -translate-y-1/2" width="18" height="18" viewBox="0 0 20 20" fill="none"><path d="M5 7l5 6 5-6" stroke="#6B7280" stroke-width="1.8"/></svg>
        </div>
      </div>`;
            }

            $('#my_profile_about_add_lang_btn').on('click', function() {
                $('#my_profile_about_lang_rows').append(my_profile_about_langRowTemplate());
            });
        });
    </script>
</body>

</html>