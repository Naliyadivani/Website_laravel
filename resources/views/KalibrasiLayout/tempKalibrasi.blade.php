<!DOCTYPE html>
<!--
Template Name: Metronic - Bootstrap 4 HTML, React, Angular 11 & VueJS Admin Dashboard Theme
Author: KeenThemes
Website: http://www.keenthemes.com/
Contact: support@keenthemes.com
Follow: www.twitter.com/keenthemes
Dribbble: www.dribbble.com/keenthemes
Like: www.facebook.com/keenthemes
Purchase: https://1.envato.market/EA4JP
Renew Support: https://1.envato.market/EA4JP
License: You must have a valid license purchased only from themeforest(the above link) in order to legally use the theme for your project.
-->
<html lang="en">
<!--begin::Head-->

<head>
    <meta charset="utf-8" />
    <title>Document.title</title>
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    {{-- <title>Crud Ajax</title> --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="assets/plugins/custom/fullcalendar/fullcalendar.bundle.css" rel="stylesheet" type="text/css" />

    <!--end::Page Vendors Styles-->
    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/pages/login/login-1.css" rel="stylesheet" type="text/css">
    <link href="assets/css/pages/login/login-1.css" rel="stylesheet" type="text/css">

    <!--end::Global Theme Styles-->
    <!--begin::Layout Themes(used by all pages)-->
    <link href="assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/brand/dark-kalibrasi.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/themes/layout/aside/dark-kalibrasi.css" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->
    <link rel="shortcut icon" href="https://pismart.pupuk-indonesia.com/public/media/logos/favicon.ico">

    <!--begin::Page Custom Styles(used by this page)-->
    <link href="assets/plugins/custom/kanban/kanban.bundle.css" rel="stylesheet" type="text/css" />
    <style>
        /* Atur ukuran ikon Flaticon pada elemen i di dalam span */
        .text-dark-50 i.flaticon-more {
            font-size: 13px;
            /* Ganti dengan ukuran yang diinginkan */
            margin-left: 10px;
        }

        .kanban-board-header {
            border-bottom: 5px solid #A9E8A4;
            /* Adjust the color and style as needed */
            padding-bottom: 2px;
            /* Adjust the padding as needed */
            margin-bottom: 5px;
            /* Adjust the margin as needed */
            
        }

        .kanban-drag {
            background-color: white;
        }
        .kanban-board[data-id]{
            background: white;
        }

        /* .timeline-media{
            max-width: 35px;
            max-width: 35px;
        } */

    </style>
</head>

<body id="kt_body"
    class="page-loading-enabled quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-minimize-hoverable aside-fixed">
    @yield('kalibrasiPage')
    @include('layout.navbar')

</body>

</html>
