<!DOCTYPE html>




<html lang="en" class="light-style layout-navbar-fixed layout-menu-fixed layout-compact " dir="ltr"
    data-theme="theme-default" data-assets-path="assets/" data-template="vertical-menu-template">


<head>
    <meta charset="utf-8" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport"
        content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>@yield('title')</title>


    <meta name="description" content="" />
    <meta name="keywords" content="">
    <!-- Canonical SEO -->

    {{-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> --}}
    <!-- ? PROD Only: Google Tag Manager (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5DDHKGP');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAOEAAADhCAMAAAAJbSJIAAAAw1BMVEUnhPz////7wDAIfPzJ3f7O4P4AgP8ZgPyLtv1gn/0Sfvyqyf2yzv4dg//F2f4Aevz/wxD/wSdtlNP/wiCKnLvyvTn/xAS71P72+v96rf3+wCtkktd8mMbWtGg3iPC1qZGboayio6XEroDW5f7m8P9BkPwyivxKi+esppqQnrago6eBmsHtvELoukpylc3huFfctl5bj93OsXPZtWNgkdrBrYO7q4tQjePJr3mppZ9Rl/xEiuowhvPQsm+fw/1vp/2Su/2tl7VkAAAD9UlEQVR4nO3be1faMBzG8ZayRDMCrZWbm1egbm7edlHHtPr+X9VCj2gSUKAtp7+w5/PXztnpOfkubZrM6nkAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAP8nWfUA1ozdn7JNbpTyqBZ+SVjV41gXyb6241otjv54G9ko2W473KtNxNHZ5jVK9u37c1/WWDuSG/U4Svb5XOtT9uL2181ZciS7sPqeG3c3o1GyncvZvqwx/P7N/UbJPl0ZfVFkNn52u1Gy6/1QT4rC/d+h2Xh54W6j6nvomDlXnxi7/bEhjZKd3lkp51nKzMRm4c41qr4Ta/7OXx45yX79NB/O8Ocvtxol+2s/buayObPARuHDtTuNkh3cmH1zXn3qJWk3/rh1o1Gy+0O7b+72ZWajE4V3LhytWPIljrVhv7cFtTark8bff4k3Mu+P1Rcdy3eOEdqBY9p4c0C4kcnjyOyLFx4F1aGxFpuNh/dUG+XRntW31HF+cvA3r1ONr4lCU3E4i/LOBfPOrHs7vJ5eKdJ6c6o+rjaRdfI/T/bzG+5Mrw0G/qttvp6hLzvKjtZ3suqayO71NVgr/ECwMN97LXuPxi4Uqv1Xzr2J2gtN93qEC9UBsMD+Uu1nT7JGsoXFz0HPZy6qheHlTvF3tWS3D50OzcJ2SWd1dUS+uqBY6JX3f7ySJdM/kipcCxS6D4XuQ6H7UOg+FLoPhe5DoftQ6L7/rHDcClYiuAP/JEbhoL6abvroBdQjjcI8Bv1AVB3xrsKFvt/bahH9eWSmhEI1jwnhW7WUQrUKB1WHvKmkQv+RbGJZhf421fWmtEJ/RHS5Ka9w2Kq6Zb7yCv0nmvdpiYU+zVdGmYUpyUk0Cuvdbrdh+vgW9XfNoVnYI/nGsM4WQgRiWYFojc1GkqevYudDbnxw5Dco3qZFT8C8p10/pHibFi0UW/okbt5dqnC9kOK+pnAhpU//5grq2gAfcwxQdKkX6gPMs+8KGsQLeaoNsJljLSQ/h7xfcC00n0OCK42X6IVpjkk01tLyx1dcS39l+8mqkyCe9Msp7mnMlcIfrvi9vjSmcEBxT+Pxbd9ITFaZB2tf+pHkHHqBdQZ64gFfjmiNzGsr/m2Gt5ir6UQz3VpKap2eSW68J1pDOzGnLZo36cyTmBvNI37GXE5z6xPc0EzZi00udaL/X5qRSW9xwQI9wjOo8FHhxBHtQo8nBW/UMfFAdaPyZoG+IeUfkb5o9XPfqY2qf/t0SVykuRoHY7ovQpsQ/friIkOvMSb9ncIMHgTjftpd9nOa/igInOrLSC7Ekp9ECe5eHgAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAADAav4Bbu1V4iSW5TwAAAAASUVORK5CYII=" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;ampdisplay=swap"
        rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/fonts/materialdesignicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/fonts/flag-icons.css') }}" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/libs/node-waves/node-waves.css') }}" />
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                '../../../../www.googletagmanager.com/gtm5445.html?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-5DDHKGP');
    </script>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com/">
    <link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&amp;ampdisplay=swap"
        rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/css/rtl/core.css') }}"
        class="template-customizer-core-css" />
    <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/css/rtl/theme-default.css') }}"
        class="template-customizer-theme-css" />
    <link rel="stylesheet" href="{{ asset('Admin/assets/css/demo.css') }}" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css') }}" />
    <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/libs/typeahead-js/typeahead.css') }}" />
    <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/libs/datatables-bs5/datatables.bootstrap5.css') }}">
    <link rel="stylesheet"
        href="{{ asset('Admin/assets/vendor/libs/datatables-responsive-bs5/responsive.bootstrap5.css') }}">
    <link rel="stylesheet"
        href="{{ asset('Admin/assets/vendor/libs/datatables-buttons-bs5/buttons.bootstrap5.css') }}">
    <link rel="stylesheet"
        href="{{ asset('Admin/assets/vendor/libs/datatables-checkboxes-jquery/datatables.checkboxes.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/libs/select2/select2.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/libs/%40form-validation/umd/styles/index.min.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/libs/quill/typography.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/libs/quill/katex.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/libs/quill/editor.css') }}">

    <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/libs/dropzone/dropzone.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/libs/flatpickr/flatpickr.css') }}">
    <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/libs/tagify/tagify.css') }}" />
    <!-- Page CSS -->

    <link rel="stylesheet" href="{{ asset('Admin/assets/vendor/css/pages/app-ecommerce.css') }}">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"
        integrity="sha512-AA1Bzp5Q0K1KanKKmvN/4d3IRKVlv9PYgwFPvm32nPO6QS8yH1HO7LbgB1pgiOxPtfeg5zEn2ba64MUcqJx6CA=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Helpers -->
    <script src="{{ asset('Admin/assets/vendor/js/helpers.js') }}"></script>

    <script src="{{ asset('Admin/assets/vendor/js/template-customizer.js') }}"></script>
    <script src="{{ asset('Admin/assets/js/config.js') }}"></script>
    <link href="//cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" rel="stylesheet" />
    <link href="https://cdn.datatables.net/1.13.6/css/dataTables.bootstrap5.min.css" rel="stylesheet" />

    <link rel="stylesheet" href="//cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>

</head>

<body>


    <!-- ?PROD Only: Google Tag Manager (noscript) (Default ThemeSelection: GTM-5DDHKGP, PixInvent: GTM-5J3LMKC) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5DDHKGP" height="0" width="0"
            style="display: none; visibility: hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar  ">
        <div class="layout-container">

            <!-- Menu -->

            <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
                <div class="mt-5">
                <img src="data:image/svg+xml,%3Csvg%20xmlns='http://www.w3.org/2000/svg'%20viewBox='0%200%2026.19%205.56'%3E%3Cpath%20fill='%23fff'%20fill-rule='evenodd'%20d='M11.97%204.8c-.25%200-.45-.23-.45-.52%200-.3.2-.5.45-.5h2.87v.4a.6.6%200%200%201-.58.62zm2.29-3.56h-3.48v.77h3.48c.33-.01.6.26.58.62V3h-2.87c-.66%200-1.19.56-1.2%201.27.01.7.54%201.28%201.2%201.28h2.29c.74%200%201.32-.63%201.33-1.39V2.63c-.01-.77-.59-1.4-1.33-1.39zm5.9%200h.74v2.91c-.01.78-.6%201.4-1.35%201.4h-3.4V4.8h3.4c.33%200%20.6-.3.6-.65V3.8h-2.67c-.74%200-1.33-.64-1.33-1.42V1.24h.75v1.13c-.01.35.25.64.57.64h2.69zM6.73%204.8c-.32%200-.58-.28-.59-.63v-.39h2.9c.24%200%20.44.2.43.5%200%20.29-.19.52-.43.52zm-.59-1.79V1.24H5.4v2.93c0%20.76.6%201.39%201.33%201.39h2.31c.65%200%201.18-.58%201.17-1.28%200-.7-.52-1.28-1.17-1.27zm20.05%200v.78H22.2v.36c-.01.36.27.65.6.65h3.38v.76H22.8c-.74%200-1.33-.63-1.34-1.4V1.23h.74v1.77z'/%3E%3Cpath%20fill='%23ffd42a'%20fill-rule='evenodd'%20d='M0%201.8%202.39.54l2.38%201.24v-.55L2.4%200%200%201.24Z'/%3E%3C/svg%3E"
                    alt="bayt.com" width="130" style="margin-left: 50px" >

                <div class="menu-inner-shadow"></div>

                <ul class="menu-inner py-1 mt-3">
                    <!-- Dashboard -->
                    <li class="menu-item  {{ request()->is('dashboard') ? 'active' : '' }} ">
                        <a href="/dashboard" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-home-circle"></i>
                            <div>Dashboard</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->is('user')||request()->is('user/create') ? 'active' : '' }}">
                        <a href="{{ asset('/user') }}" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-account"></i>
                            <div>User</div>
                        </a>
                    </li>
                    <li class="menu-item {{ request()->is('student')||request()->is('student/create') ? 'active' : '' }}">
                        <a href="{{ asset('/student') }}" class="menu-link">
                            <i class="menu-icon tf-icons mdi mdi-account-group"></i>
                            <div>Student</div>
                        </a>
                    </li>
                </div>
            </aside>
            <div class="layout-page">
                <nav class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
                    id="layout-navbar">
                    <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
                        <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                            <i class="mdi mdi-menu mdi-sm"></i>
                        </a>
                    </div>

                    <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
                        <!-- Search -->
                        <div class="navbar-nav align-items-center">
                            <div class="nav-item d-flex align-items-center">
                                <i class="mdi mdi-search fs-4 lh-0"></i>
                                <input type="text" class="form-control border-0 shadow-none"
                                    placeholder="Search..." aria-label="Search..." />
                            </div>
                        </div>
                        <!-- /Search -->

                        <ul class="navbar-nav flex-row align-items-center ms-auto">
                            <!-- Place this tag where you want the button to render. -->
                            <li class="nav-item navbar-dropdown dropdown-user dropdown">
                                {{-- <ul class="dropdown-menu dropdown-menu-end"> --}}
                                    <li>
                                        <a class="dropdown-item" href="   {{ route('logout') }}">
                                            <i class="mdi mdi-exit-to-app me-2" style="color: #006fff"></i>
                                            <span class="align-middle" style="color: #006fff">Log Out</span>
                                        </a>
                                    </li>
                   
                                {{-- </ul> --}}
                            </li>
                            <!--/ User -->
                        </ul>
                    </div>
                </nav>
