<!--
Product: Metronic is a toolkit of UI components built with Tailwind CSS for developing scalable web applications quickly and efficiently
Version: v9.0.4
Author: Keenthemes
Contact: support@keenthemes.com
Website: https://www.keenthemes.com
Support: https://devs.keenthemes.com
Follow: https://www.twitter.com/keenthemes
License: https://keenthemes.com/metronic/tailwind/docs/getting-started/license
-->
<!DOCTYPE html>
<html class="h-full" data-theme="true" data-theme-mode="light" lang="en">
<head><base href="../../">
    <title>
        Metronic - Tailwind CSS
    </title>
    <meta charset="utf-8"/>
    <meta content="follow, index" name="robots"/>
    <link href="https://keenthemes.com/metronic" rel="canonical"/>
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport"/>
    <meta content="" name="description"/>
    <meta content="@keenthemes" name="twitter:site"/>
    <meta content="@keenthemes" name="twitter:creator"/>
    <meta content="summary_large_image" name="twitter:card"/>
    <meta content="Metronic - Tailwind CSS " name="twitter:title"/>
    <meta content="" name="twitter:description"/>
    <meta content="assets/media/app/og-image.png" name="twitter:image"/>
    <meta content="https://keenthemes.com/metronic" property="og:url"/>
    <meta content="en_US" property="og:locale"/>
    <meta content="website" property="og:type"/>
    <meta content="@keenthemes" property="og:site_name"/>
    <meta content="Metronic - Tailwind CSS " property="og:title"/>
    <meta content="" property="og:description"/>
    <meta content="assets/media/app/og-image.png" property="og:image"/>
    <link href="assets/media/app/apple-touch-icon.png" rel="apple-touch-icon" sizes="180x180"/>
    <link href="assets/media/app/favicon-32x32.png" rel="icon" sizes="32x32" type="image/png"/>
    <link href="assets/media/app/favicon-16x16.png" rel="icon" sizes="16x16" type="image/png"/>
    <link href="assets/media/app/favicon.ico" rel="shortcut icon"/>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&amp;display=swap" rel="stylesheet"/>
    <link href="assets/vendors/apexcharts/apexcharts.css" rel="stylesheet"/>
    <link href="assets/vendors/keenicons/styles.bundle.css" rel="stylesheet"/>
    <link href="assets/css/styles.css" rel="stylesheet"/>

    @livewireStyles
    @stack('styles')
</head>
<body class="antialiased flex h-full text-base text-gray-700 demo1 sidebar-fixed header-fixed bg-[#fefefe] dark:bg-coal-500">
<!-- Theme Mode -->
<script>
    const defaultThemeMode = 'light'; // light|dark|system
    let themeMode;

    if ( document.documentElement ) {
        if ( localStorage.getItem('theme')) {
            themeMode = localStorage.getItem('theme');
        } else if ( document.documentElement.hasAttribute('data-theme-mode')) {
            themeMode = document.documentElement.getAttribute('data-theme-mode');
        } else {
            themeMode = defaultThemeMode;
        }

        if (themeMode === 'system') {
            themeMode = window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light';
        }

        document.documentElement.classList.add(themeMode);
    }
</script>
<!-- End of Theme Mode -->
<!-- Page -->
<!-- Main -->
<div class="flex grow">
    <!-- Sidebar -->
    <div class="sidebar dark:bg-coal-600 bg-light border-r border-r-gray-200 dark:border-r-coal-100 fixed top-0 bottom-0 z-20 hidden lg:flex flex-col items-stretch shrink-0" data-drawer="true" data-drawer-class="drawer drawer-start top-0 bottom-0" data-drawer-enable="true|lg:false" id="sidebar">
        @include('components.layouts.partials.sidebar')
    </div>
    <!-- End of Sidebar -->
    <!-- Wrapper -->
    <div class="wrapper flex grow flex-col">
        <!-- Header -->
        <header class="header fixed top-0 z-10 left-0 right-0 flex items-stretch shrink-0 bg-[#fefefe] dark:bg-coal-500" data-sticky="true" data-sticky-class="shadow-sm dark:border-b dark:border-b-coal-100" data-sticky-name="header" id="header">
            <!-- Container -->
            <div class="container-fixed flex justify-between items-stretch lg:gap-4" id="header_container">
                <!-- Mobile Logo -->
                <div class="flex gap-1 lg:hidden items-center -ml-1">
                    <a class="shrink-0" href="html/demo1.html">
                        <img class="max-h-[25px] w-full" src="assets/media/app/mini-logo.svg"/>
                    </a>
                    <div class="flex items-center">
                        <button class="btn btn-icon btn-light btn-clear btn-sm" data-drawer-toggle="#sidebar">
                            <i class="ki-filled ki-menu">
                            </i>
                        </button>
                    </div>
                </div>
                <!-- End of Mobile Logo -->
                <!-- Megamenu -->
                <div class="flex items-stretch" id="megamenu_container"></div>
                <!-- End of Megamenu -->
                <!-- Topbar -->
                <div class="flex items-center gap-2 lg:gap-3.5">
                    @include('components.layouts.partials.header')
                </div>
                <!-- End of Topbar -->
            </div>
            <!-- End of Container -->
        </header>
        <!-- End of Header -->
        <!-- Content -->
        <main class="grow content pt-5" id="content" role="content">
            <!-- Container -->
            {{ $slot }}
            <!-- End of Container -->
        </main>
        <!-- End of Content -->
        <!-- Footer -->
        <footer class="footer">
            <!-- Container -->
            <div class="container-fixed">
                <div class="flex flex-col md:flex-row justify-center md:justify-between items-center gap-3 py-5">
                    <div class="flex order-2 md:order-1 gap-2 font-normal text-2sm">
        <span class="text-gray-500">
         2025©
        </span>
                        <a class="text-gray-600 hover:text-primary" href="https://keenthemes.com">
                            Dian Ratri
                        </a>
                    </div>
                </div>
            </div>
            <!-- End of Container -->
        </footer>
        <!-- End of Footer -->
    </div>
    <!-- End of Wrapper -->
</div>
<!-- End of Main -->
<!-- End of Page -->
<!-- Scripts -->
<script src="assets/js/core.bundle.js">
</script>
<script src="assets/vendors/apexcharts/apexcharts.min.js">
</script>
<script src="assets/js/widgets/general.js">
</script>
<script src="assets/js/layouts/demo1.js">
</script>
<!-- End of Scripts -->

@stack('scripts')
@livewireScripts
</body>
</html>
