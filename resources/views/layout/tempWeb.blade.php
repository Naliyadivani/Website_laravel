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
		
		<!--begin::Page Custom Styles(used by this page)-->
		<link href="assets/css/pages/wizard/wizard-4.css" rel="stylesheet" type="text/css" />
		<!--end::Page Custom Styles-->

		<!--end::Global Theme Styles-->
		<!--begin::Layout Themes(used by all pages)-->
		<link href="assets/css/themes/layout/header/base/light.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/header/menu/light.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/brand/light.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/themes/layout/aside/light-nazwa.css" rel="stylesheet" type="text/css" />
		<!--end::Layout Themes-->
		<link rel="shortcut icon" href="https://pismart.pupuk-indonesia.com/public/media/logos/favicon.ico">

		<style>
			/* untuk card zoom hover halaman daftar Aplikasi */
			.card-custom-new {
            transition: transform 0.2s; /* Add a smooth transition */
        	}

        .card-custom-new:hover {
            transform: scale(1.05); /* Increase the size by 5% on hover */
        	}
		
		</style>
		 <style>
			.select-info {
				margin-left: 5px;
			}
		
			.card-information {
				transition: .3s transform cubic-bezier(.155, 1.105, .295, 1.12), .3s box-shadow, .3s -webkit-transform cubic-bezier(.155, 1.105, .295, 1.12);
				cursor: pointer;
			}
		
			.card-information:hover {
				transform: scale(0.94);
			}
		
			.card-information-active {
				transform: scale(0.94);
			}
		
		
			.card-waiting-approval {
				height: 150px;
				width: 100%;
				min-width: 320px;
				display: flex;
				flex-direction: row;
				background: linear-gradient(86deg, #FFF 24.3%, #FFEBCF 89.32%);
			}
		
			.card-history-approval {
				height: 150px;
				width: 100%;
				min-width: 320px;
				display: flex;
				flex-direction: row;
				background: linear-gradient(86deg, #FFF 24.3%, #CDE6FF 89.32%);
			}
		</style>
		
				<style>
				/* Chrome, Safari, Edge, Opera */
				input::-webkit-outer-spin-button,
				input::-webkit-inner-spin-button {
					-webkit-appearance: none;
					margin: 0;
				}
		
				/* Firefox */
				input[type=number] {
					-moz-appearance: textfield;
				}

				.bg-pink{
					background-color: #FF3FA4 !important;
				}
				.bg-blue{
					background-color: #057bb6 !important;
				}
				.bg-purple{
					background-color: #7B66FF !important;
				}
				.bg-green{ 
					background-color: #5F8D4E !important;
				}
				.bg-teal{ 
					background-color: #B33030 !important;
				}
				.bg-orange{ 
					background-color: #FF5B22!important;
				}
				.bg-yellow{ 
					background-color: #f9b412!important;
				}
			</style>
			
	</head>
	
	<body id="kt_body" class="page-loading-enabled quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-minimize-hoverable aside-fixed">
        @yield('kontenpage')
		{{-- @include('layout.sidebarAbsence') --}}
		@include('layout.navbar')
	</body>

</html>