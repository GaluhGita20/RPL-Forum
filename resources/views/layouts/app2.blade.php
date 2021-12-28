<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- bootstrap 4.3.1 -->
    <link rel="stylesheet" href="../css/vendor/bootstrap.min.css">
    <!-- styles -->
    <link rel="stylesheet" href="../css/forum.css">
    <!-- simplebar styles -->
    <link rel="stylesheet" href="../css/vendor/simplebar.css">
    <!-- tiny-slider styles -->
    <link rel="stylesheet" href="../css/vendor/tiny-slider.css">
    <!-- Favicon -->
    <link rel="shortcut icon" href="../asset/logo/logo_black.png">


    @livewireStyles
    <title>AyoBisa | {{ $title }}</title>
</head>

<body>


    <x-loader />
    <x-sidebar_forum />
    <x-navbar_forum />
    <x-bottom_bar_mobile />

    @yield('content')

    <!-- app -->
    <script src="../js/utils/app.js"></script>
    <!-- page loader -->
    <script src="../js/utils/page-loader.js"></script>
    <!-- simplebar -->
    <script src="../js/vendor/simplebar.min.js"></script>
    <!-- liquidify -->
    <script src="../js/utils/liquidify.js"></script>
    <!-- XM_Plugins -->
    <script src="../js/vendor/xm_plugins.min.js"></script>
    <!-- tiny-slider -->
    <!-- <script src="../js/vendor/tiny-slider.min.js"></script> -->
    <!-- chartJS -->
    <!-- <script src="../js/vendor/Chart.bundle.min.js"></script> -->
    <!-- global.hexagons -->
    <!-- <script src="../js/global/global.hexagons.js"></script> -->
    <!-- global.tooltips -->
    <script src="../js/global/global.tooltips.js"></script>
    <!-- global.popups -->
    <script src="../js/global/global.popups.js"></script>
    <!-- global.charts -->
    <!-- <script src="../js/global/global.charts.js"></script> -->
    <!-- header -->
    <script src="../js/header/header.js"></script>
    <!-- sidebar -->
    <script src="../js/sidebar/sidebar.js"></script>
    <!-- content -->
    <script src="../js/content/content.js"></script>
    <!-- form.utils -->
    <script src="../js/form/form.utils.js"></script>
    <!-- SVG icons -->
    <script src="../js/utils/svg-loader.js"></script>

    @livewireScripts
</body>

</html>
