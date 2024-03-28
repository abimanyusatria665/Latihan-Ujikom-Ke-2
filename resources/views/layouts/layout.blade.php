<!DOCTYPE html>
<html class="loading" lang="en" data-textdirection="ltr">
    <!-- BEGIN: Head-->

    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width,initial-scale=1.0,user-scalable=0,minimal-ui" />
        <meta name="description"
            content="Vuexy admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities." />
        <meta name="keywords"
            content="admin template, Vuexy admin template, dashboard template, flat admin template, responsive admin template, web app" />
        <meta name="author" content="PIXINVENT" />
        <title>Home - Vuexy - Bootstrap HTML admin template</title>
        <link rel="apple-touch-icon" href="../../../app-assets/images/ico/apple-icon-120.png" />
        <link rel="shortcut icon" type="image/x-icon" href="../../../app-assets/images/ico/favicon.ico" />
        <link
            href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;1,400;1,500;1,600"
            rel="stylesheet" />

        <!-- BEGIN: Vendor CSS-->
        <link rel="stylesheet" type="text/css" href="../../../app-assets/vendors/css/vendors.min.css" />
        <!-- END: Vendor CSS-->

        <!-- BEGIN: Theme CSS-->
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap.css" />
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/bootstrap-extended.css" />
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/colors.css" />
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/components.css" />
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/dark-layout.css" />
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/themes/semi-dark-layout.css" />

        <!-- BEGIN: Page CSS-->
        <link rel="stylesheet" type="text/css" href="../../../app-assets/css/core/menu/menu-types/vertical-menu.css" />
        <!-- END: Page CSS-->

        <!-- BEGIN: Custom CSS-->
        <link rel="stylesheet" type="text/css" href="../../../assets/css/style.css" />
        <!-- END: Custom CSS-->
    </head>
    <!-- END: Head-->

    <!-- BEGIN: Body-->

    <body class="vertical-layout vertical-menu-modern navbar-floating footer-static" data-open="click"
        data-menu="vertical-menu-modern" data-col="">
        <!-- BEGIN: Header-->
        <nav
            class="header-navbar navbar navbar-expand-lg align-items-center floating-nav navbar-light navbar-shadow container-xxl">
            <div class="navbar-container d-flex content">
                <div class="bookmark-wrapper d-flex align-items-center">
                    <ul class="nav navbar-nav d-xl-none">
                        <li class="nav-item">
                            <a class="nav-link menu-toggle" href="#"><i class="ficon"
                                    data-feather="menu"></i></a>
                        </li>
                    </ul>
                    <ul class="nav navbar-nav">
                        <li class="nav-item d-none d-lg-block">
                            <a class="nav-link nav-link-style"><i class="ficon" data-feather="moon"></i></a>
                        </li>
                    </ul>
                </div>
                <ul class="nav navbar-nav align-items-center ms-auto">
                    <li class="nav-item dropdown dropdown-user"><a class="nav-link dropdown-toggle dropdown-user-link"
                            id="dropdown-user" href="#" data-bs-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">
                            <div class="user-nav d-sm-flex d-none"><span
                                    class="user-name fw-bolder">{{ Auth::user()->name }}</span><span
                                    class="user-status">{{ Auth::user()->role }}</span></div>
                            </span></span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end" aria-labelledby="dropdown-user">
                            <a class="dropdown-item" href="/logout"><i class="me-50" data-feather="power"></i>
                                Logout</a>
                        </div>
                    </li>

                </ul>
            </div>
        </nav>
        <!-- END: Header-->

        <!-- BEGIN: Main Menu-->
        <div class="main-menu menu-fixed menu-light menu-accordion menu-shadow" data-scroll-to-active="true">
            <div class="navbar-header">
                <ul class="nav navbar-nav flex-row">
                    <li class="nav-item me-auto">
                        <a class="navbar-brand" href="../../../starter-kit/ltr/vertical-menu-template/"><span
                                class="brand-logo">
                                <img src="/app-assets/images/logo.png" alt="" />
                            </span>
                            <h2 class="brand-text">Cashier</h2>
                        </a>
                    </li>
                    <li class="nav-item nav-toggle">
                        <a class="nav-link modern-nav-toggle pe-0" data-bs-toggle="collapse"><i
                                class="d-block d-xl-none text-primary toggle-icon font-medium-4" data-feather="x"></i><i
                                class="d-none d-xl-block collapse-toggle-icon font-medium-4 text-primary"
                                data-feather="disc" data-ticon="disc"></i></a>
                    </li>
                </ul>
            </div>
            <div class="shadow-bottom"></div>
            <div class="main-menu-content">
                <ul class="navigation navigation-main" id="main-menu-navigation" data-menu="menu-navigation">
                    <li class="nav-item">
                        <a class="d-flex align-items-center" href="/"><i data-feather="shopping-cart"></i><span
                                class="menu-title text-truncate" data-i18n="Home">Selling</span></a>
                        <ul class="menu-content">
                            <li>
                                <a class="d-flex align-items-center" href="/selling"><i
                                        data-feather="file-text"></i><span class="menu-item text-truncate"
                                        data-i18n="Without Menu">Selling Data</span></a>
                            </li>
                        </ul>
                    </li>
                    @if (Auth::user()->role == 'admin')
                        <li class="nav-item">
                            <a class="d-flex align-items-center" href="/product"><i
                                    data-feather="shopping-bag"></i><span class="menu-title text-truncate"
                                    data-i18n="Page Layouts">Product</span></a>
                            <ul class="menu-content">
                                <li>
                                    <a class="d-flex align-items-center" href="/product/create"><i
                                            data-feather="file-plus"></i><span class="menu-item text-truncate"
                                            data-i18n="Collapsed Menu">Create Product</span></a>
                                </li>
                                <li>
                                    <a class="d-flex align-items-center" href="/product/data"><i
                                            data-feather="file-text"></i><span class="menu-item text-truncate"
                                            data-i18n="Without Menu">Product Data</span></a>
                                </li>
                            </ul>
                        </li>
                    @endif
                </ul>
            </div>
        </div>
        <!-- END: Main Menu-->

        <!-- BEGIN: Content-->
        <div class="app-content content">
            <div class="content-overlay"></div>
            <div class="header-navbar-shadow"></div>
            <div class="content-wrapper container-xxl p-0">
                <div class="content-body">
                    <!-- Kick start -->
                    @yield('contents')
                    <!--/ Kick start -->

                    <!-- Page layout -->

                    <!--/ Page layout -->
                </div>
            </div>
        </div>
        <!-- END: Content-->

        <div class="sidenav-overlay"></div>
        <div class="drag-target"></div>

        <!-- BEGIN: Footer-->
        <footer class="footer footer-static footer-light">
            <p class="clearfix mb-0">
                <span class="float-md-start d-block d-md-inline-block mt-25">COPYRIGHT &copy; 2021<a class="ms-25"
                        href="https://1.envato.market/pixinvent_portfolio" target="_blank">Pixinvent</a><span
                        class="d-none d-sm-inline-block">, All rights Reserved</span></span><span
                    class="float-md-end d-none d-md-block">Hand-crafted & Made with<i data-feather="heart"></i></span>
            </p>
        </footer>
        <button class="btn btn-primary btn-icon scroll-top" type="button">
            <i data-feather="arrow-up"></i>
        </button>
        <!-- END: Footer-->

        <!-- BEGIN: Vendor JS-->
        <script src="../../../app-assets/vendors/js/vendors.min.js"></script>
        <!-- BEGIN Vendor JS-->

        <!-- BEGIN: Page Vendor JS-->
        <!-- END: Page Vendor JS-->

        <!-- BEGIN: Theme JS-->
        <script src="../../../app-assets/js/core/app-menu.js"></script>
        <script src="../../../app-assets/js/core/app.js"></script>
        <!-- END: Theme JS-->

        <!-- BEGIN: Page JS-->
        <!-- END: Page JS-->

        <script>
            $(window).on("load", function() {
                if (feather) {
                    feather.replace({
                        width: 14,
                        height: 14,
                    });
                }
            });
        </script>
    </body>
    <!-- END: Body-->

</html>
