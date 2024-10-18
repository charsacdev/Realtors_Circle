<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin - @yield('title', 'Dashboard')</title>

    <!--asset-->
    <link rel="shortcut icon" type="text/css" href="{{ asset('admin/asset/img/logo.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap/bootstrap.min.css') }}">
    <link rel="stylesheet" href="https://preview.colorlib.com/theme/bootstrap/css-table-19/css/style.css">

    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/fontawesome/all.min.css') }}">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/swiper/swiper-bundle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/vendor/datatables/css/jquery.dataTables.min.css') }}">

    <!-- Bootstrap daterangepicker -->
    <link rel="stylesheet" href="{{ asset('admin/vendor/bootstrap-daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
    <link rel="stylesheet" href="https://cdn.plyr.io/3.7.8/plyr.css" />
    <script src="https://cdn.plyr.io/3.7.8/plyr.js"></script>

    <!--Custom CSS-->
    <script src="https://cdn.jsdelivr.net/npm/chart.js@3.0.0/dist/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-datalabels@2.0.0"></script>
    <link rel="stylesheet" href="{{ asset('admin/asset/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('admin/asset/css/responsive.css') }}">
</head>


<body>
    <div class="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-2 sidebar">
                    <div class="sidebar-header">
                        <div class="sidebar-close d-lg-none"></div>
                        <div class="logo-ctn">
                            <img src="{{ asset('admin/asset/img/logo.png') }}" class="img-fluid mb-2 sidebar-logo" alt="">
                            <div>
                                <h3 class="logo-text">Realtors</h3>
                                <h3 class="logo-text">Circle</h3>
                            </div>
                        </div>
                    </div>
                    <div class="sidebar-content">
                        <ul class="sidebar-nav-links">
                            <li class="adm-sidebar-link-item">
                                <a href="{{ route('admin.dashboard') }}" class="sidebar-link {{ isRouteActive(['admin.dashboard']) }}" wire:navigate>
                                    <img src="{{ asset('admin/asset/img/icons/dashboard-img.png') }}" alt="">
                                    Dashboard
                                </a>
                            </li>
                            <li class="adm-sidebar-link-item">
                                <a href="{{ route('admin.users') }}" class="sidebar-link {{ isRouteActive(['admin.users', 'admin.user']) }}" wire:navigate>
                                    <img src="{{ asset('admin/asset/img/icons/users-icon.png') }}" alt="">
                                    Users
                                </a>
                            </li>
                            <li class="adm-sidebar-link-item">
                                <a href="{{ route('admin.agencies') }}" class="sidebar-link {{ isRouteActive(['admin.agencies', 'admin.agency']) }}" wire:navigate>
                                    <img src="{{ asset('admin/asset/img/icons/agency-icon.png') }}" alt="">
                                    Agencies
                                </a>
                            </li>
                            <li class="adm-sidebar-link-item">
                                <a href="{{ route('admin.broadcast-message') }}" class="sidebar-link {{ isRouteActive(['admin.broadcast-message']) }}" wire:navigate>
                                    <img src="{{ asset('admin/asset/img/icons/broadcast-message-icon.png') }}" alt="">
                                    Broadcast Message
                                </a>
                            </li>
                            <li class="adm-sidebar-link-item">
                                <a href="{{ route('admin.contact-us') }}" class="sidebar-link {{ isRouteActive(['admin.contact-us', 'admin.contact-us.*']) }}" wire:navigate>
                                    <img src="{{ asset('admin/asset/img/icons/contact-icon.png') }}" alt="">
                                    Contact Us
                                </a>
                            </li>

                        </ul>
                        <div class="sidebar-footer">
                            <a href="{{ route('admin.profile') }}" class="sidebar-link mb-5 {{ isRouteActive(['admin.profile']) }}" wire:navigate>
                                <img src="{{ asset('admin/asset/img/icons/setting-icon-light.png') }}" alt="">
                                Settings
                            </a>
                            <a href="javascript:;" class="sidebar-link mb-5">
                                <img src="{{ asset('admin/asset/img/icons/logout.png') }}" alt="">
                                Logout
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10 main">
                    <div class="container-fluid px-4">
                        <div class="main-header">
                            <div class="d-flex align-items-start gap-3">
                                <div class="menu harmburger-menu d-lg-none">
                                    <div class="menu"></div>
                                </div>
                                <!--YEILD PAGE HEADER TITLE-->
                                <h1 class="heading">@yield('title', 'Dashboard')</h1>
                            </div>
                            <div class="d-flex align-items-center justify-content-between">

                                <div class="profile-dropdown">
                                    <div class="drop-now d-flex align-items-center justify-content-between gap-4">
                                        <div class="d-flex align-items-center align-items-start gap-3">
                                            <div class="img">
                                                M
                                            </div>
                                            <div class="d-flex flex-column">
                                                <span class="name">Michael Charsac</span>
                                                <span class="role">Admin</span>
                                            </div>
                                        </div>
                                        <div class="directions close">
                                            <i class="fa fa-chevron-down"></i>
                                            <i class="fa fa-chevron-up"></i>
                                        </div>
                                    </div>
                                    <ul class="profile-dropdown-items profile-items d-none">
                                        <li class="dropdown-item">
                                            <a href="{{ route('admin.profile') }}" wire:navigate>
                                                <img src="{{ ('admin/asset/img/icons/user-icon-dark.png') }}" class="img-fluid"
                                                    alt="icon">Profile</a>
                                        </li>

                                        <li class="dropdown-item">
                                            <a href="javascript:;">
                                                <img src="{{ ('admin/asset/img/icons/login-icon.png') }}" class="img-fluid"
                                                    alt="icon">Logout</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                         <!--YEILD CONTENT-->
                        @yield('content-dashboard')
                       
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="successModal" tabindex="-1" aria-labelledby="successModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-body rounded">
                    <div class="d-flex align-items-center justify-content-center mb-2 mt-3">
                        <img src="{{ asset('admin/asset/img/success-star-checked.png') }}" width="50px" alt="icon">
                    </div>
                    <h3 class="text-center mb-2">Success!</h3>
                    <div class="text-center mb-2">
                        You have successfully registered for a LiveLearn Session.
                    </div>
                    <button type="button" class="new-discussion-btn w-100 mb-2">Go Back</button>
                </div>
            </div>
        </div>
    </div>



    <!-- JS FILES -->
    <script src="{{ asset('admin/vendor/jquery/jQuery3.6.1.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/popper/popper.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/fontawesome/all.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/jquery-validate/jquery.validate.js') }}"></script>
    <script src="{{ asset('admin/vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/moment/moment.min.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ asset('admin/vendor/bootstrap-datepicker/bootstrap-datepicker.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="{{ asset('admin/asset/js/dashboard.js') }}"></script>
    <script src="{{ asset('admin/asset/js/plugins_init.js') }}"></script>
    <script src="{{ asset('admin/asset/js/main.js') }}"></script>
</body>

</html>