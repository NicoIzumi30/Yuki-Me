<!-- meta tags and other links -->
<!DOCTYPE html>
<html lang="en" data-theme="light">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ isset($title) ? $title . ' - ' . config('app.name', 'Yuki Me') : config('app.name', 'Yuki Me') }}</title>
    <link rel="icon" type="image/png" href="{{asset('images')}}/favicon.png" sizes="16x16">
    <!-- remix icon font css  -->
    <link rel="stylesheet" href="{{asset('css')}}/remixicon.css">
    <!-- BootStrap css -->
    <link rel="stylesheet" href="{{asset('css')}}/lib/bootstrap.min.css">
    <!-- Apex Chart css -->
    <link rel="stylesheet" href="{{asset('css')}}/lib/apexcharts.css">
    <!-- Data Table css -->
    <link rel="stylesheet" href="{{asset('css')}}/lib/dataTables.min.css">
    <!-- Text Editor css -->
    <link rel="stylesheet" href="{{asset('css')}}/lib/editor-katex.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/lib/editor.atom-one-dark.min.css">
    <link rel="stylesheet" href="{{asset('css')}}/lib/editor.quill.snow.css">
    <!-- Date picker css -->
    <link rel="stylesheet" href="{{asset('css')}}/lib/flatpickr.min.css">
    <!-- Calendar css -->
    <link rel="stylesheet" href="{{asset('css')}}/lib/full-calendar.css">
    <!-- Vector Map css -->
    <link rel="stylesheet" href="{{asset('css')}}/lib/jquery-jvectormap-2.0.5.css">
    <!-- Popup css -->
    <link rel="stylesheet" href="{{asset('css')}}/lib/magnific-popup.css">
    <!-- Slick Slider css -->
    <link rel="stylesheet" href="{{asset('css')}}/lib/slick.css">
    <!-- main css -->
    <link rel="stylesheet" href="{{asset('css')}}/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        body {
            cursor: url('{{asset('cursor.png')}}'), auto
        }

        .swal2-title {
            font-size: 1.5rem !important;
        }
        td{
            font-size: 13px !important;
        }
        th{
            font-size: 13px!important;
        }
        #dt-search-0{
            text-align: left !important;
            padding-left: 5px !important;
        }
    </style>
</head>

<body>
    @if (session('success'))
        <script>
            Swal.fire({
                title: "Success",
                text: "{{ session('success') }}",
                icon: "success"
            });
        </script>
    @endif
    <aside class="sidebar">
        <button type="button" class="sidebar-close-btn">
            <iconify-icon icon="radix-icons:cross-2"></iconify-icon>
        </button>
        <div>
            <a href="index.html" class="sidebar-logo">
                <img src="{{asset('images')}}/dark.png" alt="site logo" class="light-logo">
                <img src="{{asset('images')}}/light.png" alt="site logo" class="dark-logo">
                <img src="{{asset('images')}}/favicon.png" alt="site logo" class="logo-icon">
            </a>
        </div>
        <div class="sidebar-menu-area">
            <ul class="sidebar-menu" id="sidebar-menu">
                <li>
                    <a href="/dashboard">
                        <iconify-icon icon="solar:home-smile-angle-outline" class="menu-icon"></iconify-icon>
                        <span>Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/category">
                        <iconify-icon icon="mingcute:storage-line" class="menu-icon"></iconify-icon>
                        <span>Category</span>
                    </a>
                </li>
                <li>
                    <a href="/manage-links">
                        <iconify-icon icon="icon-park-outline:link" class="menu-icon"></iconify-icon>
                        <span>Manage Links</span>
                    </a>
                </li>
                <li>
                    <a href="/users">
                        <iconify-icon icon="flowbite:users-group-outline" class="menu-icon"></iconify-icon>
                        <span>Users</span>
                    </a>
                </li>
                <li>
                    <a href="/profile">
                        <iconify-icon icon="mdi:user-edit" class="menu-icon"></iconify-icon>
                        <span>Profile</span>
                    </a>
                </li>
                <li>
                    <a href="/logout">
                        <iconify-icon icon="material-symbols:logout" class="menu-icon"></iconify-icon>
                        <span>Logout</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <main class="dashboard-main">
        <div class="navbar-header">
            <div class="row align-items-center justify-content-between  ">
                <div class="col-auto">
                    <div class="d-flex flex-wrap align-items-center gap-4">
                        <button type="button" class="sidebar-toggle">
                            <iconify-icon icon="heroicons:bars-3-solid" class="icon text-2xl non-active"></iconify-icon>
                            <iconify-icon icon="iconoir:arrow-right" class="icon text-2xl active"></iconify-icon>
                        </button>
                        <button type="button" class="sidebar-mobile-toggle">
                            <iconify-icon icon="heroicons:bars-3-solid" class="icon"></iconify-icon>
                        </button>
                    </div>
                </div>
                <div class="col-auto">
                    <div class="d-flex flex-wrap align-items-center gap-3">
                        <button type="button" data-theme-toggle
                            class="w-40-px h-40-px bg-neutral-200 rounded-circle d-flex justify-content-center align-items-center"></button>
                        <div class="dropdown">
                            <button class="d-flex justify-content-center align-items-center rounded-circle"
                                type="button" data-bs-toggle="dropdown">
                                <img src="{{asset('images')}}/user.png" alt="image"
                                    class="w-40-px h-40-px object-fit-cover rounded-circle">
                            </button>
                            <div class="dropdown-menu to-top dropdown-menu-sm">
                                <div
                                    class="py-12 px-16 radius-8 bg-primary-50 mb-16 d-flex align-items-center justify-content-between gap-2">
                                    <div>
                                        <h6 class="text-lg text-primary-light fw-semibold mb-2">Shaidul Islam</h6>
                                    </div>
                                    <button type="button" class="hover-text-danger">
                                        <iconify-icon icon="radix-icons:cross-1" class="icon text-xl"></iconify-icon>
                                    </button>
                                </div>
                                <ul class="to-top-list">
                                    <li>
                                        <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-primary d-flex align-items-center gap-3"
                                            href="view-profile.html">
                                            <iconify-icon icon="solar:user-linear" class="icon text-xl"></iconify-icon>
                                            My Profile</a>
                                    </li>
                                    <li>
                                        <a class="dropdown-item text-black px-0 py-8 hover-bg-transparent hover-text-danger d-flex align-items-center gap-3"
                                            href="javascript:void(0)">
                                            <iconify-icon icon="lucide:power" class="icon text-xl"></iconify-icon> Log
                                            Out</a>
                                    </li>
                                </ul>
                            </div>
                        </div><!-- Profile dropdown end -->
                    </div>
                </div>
            </div>
        </div>

        {{$slot}}

        <footer class="d-footer">
            <div class="row align-items-center justify-content-between">
                <div class="col-auto">
                    <p class="mb-0">© {{date('Y')}} Yuki Me. All Rights Reserved.</p>
                </div>
                <div class="col-auto">
                    <p class="mb-0">Made by <span class="text-primary-600">Heru Kristanto</span></p>
                </div>
            </div>
        </footer>
    </main>

    <!-- jQuery library js -->
    <script src="{{asset('js')}}/lib/jquery-3.7.1.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js')}}/lib/bootstrap.bundle.min.js"></script>
    <!-- Apex Chart js -->
    <!-- Data Table js -->
    <script src="{{asset('js')}}/lib/dataTables.min.js"></script>
    <!-- Iconify Font js -->
    <script src="{{asset('js')}}/lib/iconify-icon.min.js"></script>
    <!-- jQuery UI js -->
    <script src="{{asset('js')}}/lib/jquery-ui.min.js"></script>
    <!-- Vector Map js -->
    <script src="{{asset('js')}}/lib/jquery-jvectormap-2.0.5.min.js"></script>
    <script src="{{asset('js')}}/lib/jquery-jvectormap-world-mill-en.js"></script>
    <!-- Popup js -->
    <script src="{{asset('js')}}/lib/magnifc-popup.min.js"></script>
    <!-- Slick Slider js -->
    <script src="{{asset('js')}}/lib/slick.min.js"></script>
    <!-- main js -->
    <script src="{{asset('js')}}/app.js"></script>

    <script>
        let table = new DataTable("#dataTable");
    </script>
    @stack('scripts')

</body>

</html>