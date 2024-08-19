<?php


$lang = \Illuminate\Support\Facades\App::getLocale();
//$order = \App\Models\Order::where('status', 'yangi')->count();

?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light" data-menu-color="brand" data-topbar-color="light">

<head>
    <meta charset="utf-8" />
    <title>Admin | Parvoz - Responsive Bootstrap 5 Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="A fully featured admin theme which can be used to build CRM, CMS, etc." name="description" />
    <meta content="Myra Studio" name="author" />

    <link rel="apple-touch-icon" sizes="180x180" href="/front/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/front/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/front/favicon-16x16.png">

    <link href="/assets/libs/morris.js/morris.css" rel="stylesheet" type="text/css" />
    <!-- Plugins css -->
    <link href="/assets/libs/quill/quill.core.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/quill/quill.bubble.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/quill/quill.snow.css" rel="stylesheet" type="text/css" />

    <link href="/assets/libs/ladda/ladda.min.css" rel="stylesheet" type="text/css" />
    <link href="/assets/libs/ladda/ladda-themeless.min.css" rel="stylesheet" type="text/css" />


    <!-- App css -->
    <link href="/assets/css/style.min.css" rel="stylesheet" type="text/css">
    <link href="/assets/css/icons.min.css" rel="stylesheet" type="text/css">
    <script src="/assets/js/config.js"></script>
</head>

<body>

<!-- Begin page -->
<div class="layout-wrapper">

    <div class="main-menu">
        <!-- Brand Logo -->
        <div class="logo-box">
            <!-- Brand Logo Light -->
            <a href="#" class="logo-light">
{{--                <img src="/front/wp-content/uploads/2023/02/logo.png" alt="imkon-plast" data-eio="l">--}}
                <img src="/front/dora1.png" alt="logo" class="logo-lg" height="28">
                <img src="/front/dora1.png" alt="small logo" class="logo-sm" height="28">
            </a>

            <!-- Brand Logo Dark -->
            <a href="#" class="logo-dark">
                <img src="/front/dora1.png" alt="logo" class="logo-lg" height="28">
                <img src="/front/dora1.png" alt="small logo" class="logo-sm" height="28">
            </a>
        </div>

        <!--- Menu -->
        <div data-simplebar>
            <ul class="app-menu">

                <li class="menu-title">Menu</li>

                <li class="menu-item">
                    <a href="/admin" class="menu-link waves-effect waves-light">
                        <span class="menu-icon"><i class="fa fa-home"></i></span>
                        <span class="menu-text"> Dashboards </span>
                        <span class="badge bg-primary rounded ms-auto">01</span>
                    </a>
                </li>
{{--                <li class="menu-item">--}}
{{--                    <a href="/admin/abouts" class="menu-link waves-effect waves-light">--}}
{{--                        <span class="menu-icon"><i class="fa fa-user"></i></span>--}}
{{--                        <span class="menu-text"> About </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="menu-item">--}}
{{--                    <a href="/admin/partners" class="menu-link waves-effect waves-light">--}}
{{--                        <span class="menu-icon"><i class="fa fa-handshake"></i></span>--}}
{{--                        <span class="menu-text"> Hamkorlar </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="menu-item">--}}
{{--                    <a href="/admin/logos" class="menu-link waves-effect waves-light">--}}
{{--                        <span class="menu-icon"><i class="fa fa-handshake"></i></span>--}}
{{--                        <span class="menu-text"> Hamkorlar logolari </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="menu-item">--}}
{{--                    <a href="/admin/portfolios" class="menu-link waves-effect waves-light">--}}
{{--                        <span class="menu-icon"><i class="fa fa-briefcase"></i></span>--}}
{{--                        <span class="menu-text"> Portfolio </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="menu-item">--}}
{{--                    <a href="/admin/calls" class="menu-link waves-effect waves-light">--}}
{{--                        <span class="menu-icon"><i class="fa fa-contact-card"></i></span>--}}
{{--                        <span class="menu-text"> Bog'lanishlar </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="menu-item">--}}
{{--                    <a href="/admin/teams" class="menu-link waves-effect waves-light">--}}
{{--                        <span class="menu-icon"><i class="fa fa-users"></i></span>--}}
{{--                        <span class="menu-text"> Bizning jamoa </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="menu-item">--}}
{{--                    <a href="/admin/contacts" class="menu-link waves-effect waves-light">--}}
{{--                        <span class="menu-icon"><i class="fa fa-phone"></i></span>--}}
{{--                        <span class="menu-text"> Contact </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
{{--                <li class="menu-item">--}}
{{--                    <a href="/admin/services" class="menu-link waves-effect waves-light">--}}
{{--                        <span class="menu-icon"><i class="fa fa-gear"></i></span>--}}
{{--                        <span class="menu-text"> Service </span>--}}
{{--                    </a>--}}
{{--                </li>--}}
            </ul>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- Start Page Content here -->
    <!-- ============================================================== -->

    <div class="page-content">

        <!-- ========== Topbar Start ========== -->
        <div class="navbar-custom">
            <div class="topbar">
                <div class="topbar-menu d-flex align-items-center gap-lg-2 gap-1">

                    <!-- Brand Logo -->
                    <div class="logo-box">
                        <!-- Brand Logo Light -->
                        <a href="#" class="logo-light">
                            <img src="/assets/images/impex.svg" alt="logo" class="logo-lg" height="22">
                            <img src="/assets/images/impex.svg" alt="small logo" class="logo-sm" height="22">
                        </a>

                        <!-- Brand Logo Dark -->
                        <a href="$" class="logo-dark">
                            <img src="/assets/images/impex.svg" alt="dark logo" class="logo-lg" height="22">
                            <img src="/assets/images/impex.svg" alt="small logo" class="logo-sm" height="22">
                        </a>
                    </div>

                    <!-- Sidebar Menu Toggle Button -->
                    <button class="button-toggle-menu">
                        <i class="mdi mdi-menu"></i>
                    </button>
                </div>

                <ul class="topbar-menu d-flex align-items-center gap-4">

                    <li class="d-none d-md-inline-block">
                        <a class="nav-link" href="" data-bs-toggle="fullscreen">
                            <i class="mdi mdi-fullscreen font-size-24"></i>
                        </a>
                    </li>
                    <li class="nav-link" id="theme-mode">
                        <i class="bx bx-moon font-size-24"></i>
                    </li>


                    <li class="dropdown">
                        <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            <i class="mdi mdi-magnify font-size-24"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-animated dropdown-menu-end dropdown-lg p-0">
                            <form class="p-3">
                                <input type="search" class="form-control" placeholder="Search ..." aria-label="Recipient's username">
                            </form>
                        </div>
                    </li>


                    <li class="dropdown d-none d-md-inline-block">
                        <a class="nav-link dropdown-toggle waves-effect waves-light arrow-none" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">
                            @if($lang == 'en')<img src="/assets/images/flags/us.jpg" alt="user-image" class="me-0 me-sm-1" height="18"> @endif
                            @if($lang == 'ru')<img src="/assets/images/flags/russia.jpg" alt="user-image" class="me-0 me-sm-1" height="18"> @endif
                            @if($lang == 'uz')<img src="/assets/images/uzbek.svg" alt="user-image" class="me-0 me-sm-1" height="18"> @endif
                        </a>
                        <div class="dropdown-menu dropdown-menu-end dropdown-menu-animated">

                            <!-- item-->
                            <a href="/uz" class="dropdown-item">
                                <img src="/assets/images/uzbek.svg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Uzbek</span>
                            </a>

                            <!-- item-->
                            <a href="/ru" class="dropdown-item">
                                <img src="/assets/images/flags/russia.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">Russian</span>
                            </a>

                            <a href="/en" class="dropdown-item">
                                <img src="/assets/images/flags/us.jpg" alt="user-image" class="me-1" height="12"> <span class="align-middle">English</span>
                            </a>

                        </div>
                    </li>

                    <li class="dropdown">
                        <form method="post" action="{{ route('logout') }}">
                            <i class="fe-log-out"></i>
                            <span>
                                    @csrf
                                    <button class="btn btn-danger">Chiqish</button>
                                </span>
                        </form>
{{--                        <a class="nav-link dropdown-toggle nav-user me-0 waves-effect waves-light" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="false" aria-expanded="false">--}}
{{--                            <img src="/assets/images/users/avatar-4.jpg" alt="user-image" class="rounded-circle">--}}
{{--                            <span class="ms-1 d-none d-md-inline-block">--}}
{{--                                @auth--}}
{{--                                    {{ auth()->user()->name }} <i class="mdi mdi-chevron-down"></i>--}}
{{--                                @endauth--}}
{{--                            </span>--}}
{{--                        </a>--}}
                    </li>

                </ul>
            </div>
        </div>
        <!-- ========== Topbar End ========== -->

        {{ $slot }}
        <!-- Footer Start -->
        <footer class="footer">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <div><script>document.write(new Date().getFullYear())</script> © DORA</div>
                    </div>
                    <div class="col-md-6">
                        <div class="d-none d-md-flex gap-4 align-item-center justify-content-md-end">
                            <p class="mb-0"><a href="https://dora.uz/" target="_blank">DORA </a>- International & Marketing Company </p>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!-- end Footer -->

    </div>

    <!-- ============================================================== -->
    <!-- End Page content -->
    <!-- ============================================================== -->

</div>
<!-- END wrapper -->

<!-- App js -->
<script src="/assets/js/vendor.min.js"></script>
<script src="/assets/js/app.js"></script>

<!-- Knob charts js -->
<script src="/assets/libs/jquery-knob/jquery.knob.min.js"></script>

<!-- Sparkline Js-->
<script src="/assets/libs/jquery-sparkline/jquery.sparkline.min.js"></script>

<script src="/assets/libs/morris.js/morris.min.js"></script>

<script src="/assets/libs/raphael/raphael.min.js"></script>

<!-- Dashboard init-->
<script src="/assets/js/pages/dashboard.js"></script>

<!-- Loading buttons js -->
<script src="/assets/libs/ladda/spin.min.js"></script>
<script src="assets/libs/ladda/ladda.min.js"></script>

<!-- Buttons Demo js-->
<script src="/assets/js/pages/loading-btn.js"></script>

<!-- Plugins js -->
<script src="/assets/libs/quill/quill.min.js"></script>

<!-- Demo js-->
<script src="/assets/js/pages/form-quilljs.js"></script>
<script>
    function changeLang(lang) {
        console.log('foiuewgf8yew')
        const classes = ['uz', 'ru', 'en'];
        classes.forEach(cls => {
            const elements = document.querySelectorAll(`.${cls}`);
            elements.forEach(element => {
                element.style.display = cls === lang ? 'block' : 'none';
            });
        });
    }
    changeLang('uz')
</script>

</body>

</html>