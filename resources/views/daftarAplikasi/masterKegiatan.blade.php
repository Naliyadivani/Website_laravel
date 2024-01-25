@extends('layout.tempWeb')

@section('kontenpage')

<!--begin::Body-->

<body id="kt_body" class="page-loading-enabled quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-minimize-hoverable aside-fixed">
	<input type="hidden" name="token_oauth" id="token_oauth" value="{{ $user['token']['access_token'] }}">


	<script>
		document.title = 'Master Kegiatan | PI-Smart'
	</script>
	<!--begin::Main-->
	<!--begin::Header Mobile-->
	<div id="kt_header_mobile" class="header-mobile header-mobile-fixed">
		<!--begin::Logo-->
		<div class="mobile-logo">
			<a href="assets/media/logos/PI-SMART-LOGO.png"></a>
		</div>
		<!--end::Logo-->

		<!--begin::Toolbar-->
		<div class="d-flex align-items-center">
			<!--begin::Aside Mobile Toggle-->
			<button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
				<span></span>
			</button>
			<!--end::Aside Mobile Toggle-->

			<!--begin::Topbar Mobile Toggle-->
			<button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
				<span class="svg-icon svg-icon-xl">
					<!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
					<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
						<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
							<polygon points="0 0 24 0 24 24 0 24" />
							<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" />
							<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero" />
						</g>
					</svg>
					<!--end::Svg Icon-->
				</span>
			</button>
			<!--end::Topbar Mobile Toggle-->
		</div>
		<!--end::Toolbar-->
	</div>
	<!--end::Header Mobile-->
	<div class="d-flex flex-column flex-root">
		<!--begin::Page-->
		<div class="d-flex flex-row flex-column-fluid page">

			<!--begin::Aside-->
			<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
				<!--begin::Brand-->
				<div class="brand flex-column-auto" id="kt_brand">
					<!--begin::Logo-->
					<a href="{{ route('homepage') }}" class="brand-logo">
						<img alt="Logo" src="assets/media/logos/PI-SMART-LOGO.png" width="162.092px" height="48.325px" />
					</a>
					<!--end::Logo-->
					<!--begin::Toggle-->
					<button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
						<span class="svg-icon svg-icon svg-icon-xl">
							<!--begin::Svg Icon-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<polygon points="0 0 24 0 24 24 0 24" />
									<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
									<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>
					</button>
					<!--end::Toolbar-->
				</div>
				<!--end::Brand-->

				<!--begin::Aside Menu-->
				<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
					<!--begin::Menu Container-->
					<div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1">
						<!--begin::Menu Nav-->
						<ul class="menu-nav">
							<li class="menu-item menu-item-active" aria-haspopup="true">
								<a href="{{ route('tjsl') }}" class="menu-link">
									<span class="svg-icon menu-icon">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
											<path d="M1.34888 13.9299L9.17584 19.6697C9.53775 19.9351 10.0321 19.9269 10.385 19.6496L17.6646 13.9299" stroke="#264178" stroke-width="1.5" stroke-linecap="round" />
											<path d="M18.4005 7.81967L10.4329 1.50117C10.0583 1.20407 9.52575 1.21375 9.16216 1.52427L1.14752 8.36902C0.668865 8.7778 0.682391 9.52185 1.17558 9.91297L9.14314 16.2315C9.51778 16.5286 10.0503 16.5189 10.4139 16.2084L18.4286 9.36362C18.9072 8.95483 18.8937 8.21078 18.4005 7.81967Z" fill="#264178" />
										</svg>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-text">Dashboard</span>
								</a>
							</li>

							<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
								<a href="{{ route('addLaporan') }}" class="menu-link menu-toggle">
									<span class="svg-icon menu-icon">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<polygon points="0 0 24 0 24 24 0 24"></polygon>
												<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
												<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" fill="#000000"></path>
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-text">Tambah Laporan</span>
								</a>
							</li>

							<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
								<a href="{{ route('master_kegiatan') }}" class="menu-link menu-toggle">
									<span class="svg-icon menu-icon">
										<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24"></rect>
												<path d="M18.6225,9.75 L18.75,9.75 C19.9926407,9.75 21,10.7573593 21,12 C21,13.2426407 19.9926407,14.25 18.75,14.25 L18.6854912,14.249994 C18.4911876,14.250769 18.3158978,14.366855 18.2393549,14.5454486 C18.1556809,14.7351461 18.1942911,14.948087 18.3278301,15.0846699 L18.372535,15.129375 C18.7950334,15.5514036 19.03243,16.1240792 19.03243,16.72125 C19.03243,17.3184208 18.7950334,17.8910964 18.373125,18.312535 C17.9510964,18.7350334 17.3784208,18.97243 16.78125,18.97243 C16.1840792,18.97243 15.6114036,18.7350334 15.1896699,18.3128301 L15.1505513,18.2736469 C15.008087,18.1342911 14.7951461,18.0956809 14.6054486,18.1793549 C14.426855,18.2558978 14.310769,18.4311876 14.31,18.6225 L14.31,18.75 C14.31,19.9926407 13.3026407,21 12.06,21 C10.8173593,21 9.81,19.9926407 9.81,18.75 C9.80552409,18.4999185 9.67898539,18.3229986 9.44717599,18.2361469 C9.26485393,18.1556809 9.05191298,18.1942911 8.91533009,18.3278301 L8.870625,18.372535 C8.44859642,18.7950334 7.87592081,19.03243 7.27875,19.03243 C6.68157919,19.03243 6.10890358,18.7950334 5.68746499,18.373125 C5.26496665,17.9510964 5.02757002,17.3784208 5.02757002,16.78125 C5.02757002,16.1840792 5.26496665,15.6114036 5.68716991,15.1896699 L5.72635306,15.1505513 C5.86570889,15.008087 5.90431906,14.7951461 5.82064513,14.6054486 C5.74410223,14.426855 5.56881236,14.310769 5.3775,14.31 L5.25,14.31 C4.00735931,14.31 3,13.3026407 3,12.06 C3,10.8173593 4.00735931,9.81 5.25,9.81 C5.50008154,9.80552409 5.67700139,9.67898539 5.76385306,9.44717599 C5.84431906,9.26485393 5.80570889,9.05191298 5.67216991,8.91533009 L5.62746499,8.870625 C5.20496665,8.44859642 4.96757002,7.87592081 4.96757002,7.27875 C4.96757002,6.68157919 5.20496665,6.10890358 5.626875,5.68746499 C6.04890358,5.26496665 6.62157919,5.02757002 7.21875,5.02757002 C7.81592081,5.02757002 8.38859642,5.26496665 8.81033009,5.68716991 L8.84944872,5.72635306 C8.99191298,5.86570889 9.20485393,5.90431906 9.38717599,5.82385306 L9.49484664,5.80114977 C9.65041313,5.71688974 9.7492905,5.55401473 9.75,5.3775 L9.75,5.25 C9.75,4.00735931 10.7573593,3 12,3 C13.2426407,3 14.25,4.00735931 14.25,5.25 L14.249994,5.31450877 C14.250769,5.50881236 14.366855,5.68410223 14.552824,5.76385306 C14.7351461,5.84431906 14.948087,5.80570889 15.0846699,5.67216991 L15.129375,5.62746499 C15.5514036,5.20496665 16.1240792,4.96757002 16.72125,4.96757002 C17.3184208,4.96757002 17.8910964,5.20496665 18.312535,5.626875 C18.7350334,6.04890358 18.97243,6.62157919 18.97243,7.21875 C18.97243,7.81592081 18.7350334,8.38859642 18.3128301,8.81033009 L18.2736469,8.84944872 C18.1342911,8.99191298 18.0956809,9.20485393 18.1761469,9.38717599 L18.1988502,9.49484664 C18.2831103,9.65041313 18.4459853,9.7492905 18.6225,9.75 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
												<path d="M12,15 C13.6568542,15 15,13.6568542 15,12 C15,10.3431458 13.6568542,9 12,9 C10.3431458,9 9,10.3431458 9,12 C9,13.6568542 10.3431458,15 12,15 Z" fill="#000000"></path>
											</g>
										</svg>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-text">Master Kegiatan</span>
								</a>
							</li>

							<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
								<a href="{{ route('homepage') }}" class="menu-link menu-toggle">
									<span class="svg-icon menu-icon">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24"></rect>
												<path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z" fill="#000000"></path>
											</g>
										</svg>
									</span>
									<span class="menu-text">Back To Home</span>
								</a>
							</li>

							<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
								<a href="{{ route('logout') }}" class="menu-link menu-toggle">
									<span class="svg-icon menu-icon">
										<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" width="21" height="19" viewBox="0 0 21 19" fill="none">
											<path d="M15.5492 13.1195L19.3526 9.34406M19.3526 9.34406L15.5492 5.56864M19.3526 9.34406H6.04069M11.7458 13.1195V14.0633C11.7458 14.8143 11.4452 15.5345 10.9103 16.0656C10.3753 16.5966 9.64978 16.8949 8.89324 16.8949H5.08985C4.33331 16.8949 3.60775 16.5966 3.0728 16.0656C2.53784 15.5345 2.2373 14.8143 2.2373 14.0633V4.62478C2.2373 3.8738 2.53784 3.15358 3.0728 2.62256C3.60775 2.09154 4.33331 1.79321 5.08985 1.79321H8.89324C9.64978 1.79321 10.3753 2.09154 10.9103 2.62256C11.4452 3.15358 11.7458 3.8738 11.7458 4.62478V5.56864" stroke="#8691AD" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
										</svg>
										<!--end::Svg Icon-->
									</span>
									<span class="menu-text">Log Out</span>
								</a>
							</li>

						</ul>
						<!--end::Menu Nav-->
					</div>
					<!--end::Menu Container-->
				</div>
				<!--end::Aside Menu-->

				<div class="image-asideBar" style="background-size: cover">
					<svg width="260px" height="400" viewBox="0 0 297 466" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
						<path d="M183.325 164.837C192.112 50.1692 262.77 7.4499 297 0.423706V459.515H1.00684V354.544C94.9119 371.828 172.342 308.171 183.325 164.837Z" fill="url(#paint0_linear_1871_2668)" />
						<path d="M146.292 327.332C137.901 238.276 45.2677 207.866 0 203.793V463.542H297V443.631C250.26 441.972 154.683 416.389 146.292 327.332Z" fill="url(#paint1_linear_1871_2668)" fill-opacity="0.8" />
						<path d="M146.292 279.719C137.901 158.215 45.2677 116.726 0 111.169V465.556H297V438.39C250.26 436.127 154.683 401.223 146.292 279.719Z" fill="url(#paint2_linear_1871_2668)" fill-opacity="0.4" />
						<rect x="64" y="249" width="168" height="79" fill="url(#pattern0)" />
						<defs>
							<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
								<use xlink:href="#image0_1871_2668" transform="matrix(0.00356241 0 0 0.00757576 -0.00586219 0)" />
							</pattern>
							<linearGradient id="paint0_linear_1871_2668" x1="15.2848" y1="-92.7436" x2="189.487" y2="525.087" gradientUnits="userSpaceOnUse">
								<stop stop-color="#F0F5FF" />
								<stop offset="1" stop-color="#F0F5FF" stop-opacity="0" />
							</linearGradient>
							<linearGradient id="paint1_linear_1871_2668" x1="148.5" y1="203.793" x2="125.421" y2="475.801" gradientUnits="userSpaceOnUse">
								<stop stop-color="#F4F8FF" />
								<stop offset="1" stop-color="#EAF0FF" />
							</linearGradient>
							<linearGradient id="paint2_linear_1871_2668" x1="138.432" y1="423.775" x2="118.893" y2="25.1445" gradientUnits="userSpaceOnUse">
								<stop stop-color="#F4F8FF" />
								<stop offset="1" stop-color="#EAF0FF" />
							</linearGradient>
							<image id="image0_1871_2668" width="275" height="79" top="-1786px" left="-2500px" xlink:href="data:image/png;base64,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" />
						</defs>
					</svg>
				</div>
			</div>
			<!--end::Aside-->

			<!--begin::Wrapper-->
			<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
				<!--begin::Header-->
				<div id="kt_header" class="header header-fixed">
					<!--begin::Container-->
					<div class="container-fluid d-flex align-items-stretch justify-content-between">
						<!--begin::Header Menu Wrapper-->
						<div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">
							<!--begin::Header Menu-->
							<div id="kt_header_menu" class="header-menu header-menu-mobile header-menu-layout-default">
								<!--begin::Header Nav-->
								<ul class="menu-nav">
								</ul>
								<!--end::Header Nav-->
							</div>
							<!--end::Header Menu-->
						</div>
						<!--end::Header Menu Wrapper-->
						<!--begin::Topbar-->
						<div class="topbar">

							<!--begin::Notifications-->
							<div class="dropdown">
								<!--begin::Toggle-->

								{{-- data-offsetmenentukan jumlah piksel yang akan diimbangi dari atas saat menghitung posisi gulir. 
                                    Ini berguna ketika Anda merasa bahwa tautan di dalam bilah navigasi mengubah status aktif terlalu cepat 
                                    atau terlalu dini saat melompat ke elemen yang dapat digulir. Standarnya adalah 10 piksel. --}}

								{{-- data-toggleadalah atribut data HTML5 yang secara otomatis menautkan elemen ke tipe yang sesuai --}}

								<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
									<div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
										<span class="svg-icon svg-icon-xl svg-icon-primary">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
												<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
													<rect x="0" y="0" width="24" height="24" />
													<path d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z" fill="#000000" opacity="0.3" />
													<path d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z" fill="#000000" />
												</g>
											</svg>
											<!--end::Svg Icon-->
										</span>
									</div>
								</div>
								<!--end::Toggle-->
								<!--begin::Dropdown-->
								<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
									{{-- <form> --}}
									<!--begin::Header-->
									<div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top py-5" style="background-image: url(assets/media/misc/bg-1.jpg)">
										<!--begin::Title-->
										<h4 class="d-flex flex-center rounded-top mb-5">
											<span class="text-white">Modul Aplikasi</span>
										</h4>
										<!--end::Title-->

									</div>
									<!--end::Header-->
									<!--begin::Content-->
									<div class="tab-content">
										<!--begin::Tabpane-->
										<div class="tab-pane active show p-8" id="topbar_notifications_notifications" role="tabpanel">
											<!--begin::Hover-->
											<div class="navi navi-hover scroll ps ps-active-y" data-scroll="true" data-height="250" data-mobile-height="200" style="height: 250px; overflow:hidden;">
												<!--begin::Item-->
												<a href="#" class="navi-item">
													<div class="navi-link d-flex align-items-center">

														<div class="symbol symbol-40 mr-5 shadow-sm">
															<span class="symbol-label">
																<span class="svg-icon svg-icon-lg svg-icon-danger">
																	<img src="assets/media/logos/icon_kpi.png" alt="KPI" width="50px">
																</span>
															</span>
														</div>

														<div class="navi-text">
															<div class="text-dark-75 mb-1 font-size-lg">Performance Management System</div>
															<div class="text-muted">Key Performance Indicator (KPI)</div>
														</div>
													</div>
												</a>
												<!--End::Item-->

												<!--begin::Item-->
												<a href="#" class="navi-item">
													<div class="navi-link d-flex align-items-center">

														<div class="symbol symbol-40 mr-5 shadow-sm">
															<span class="symbol-label">
																<span class="svg-icon svg-icon-lg svg-icon-danger">
																	<img src="assets/media/logos/icon_akhlak.png" alt="akhlak" width="50px">
																</span>
															</span>
														</div>

														<div class="navi-text">
															<div class="text-dark-75 mb-1 font-size-lg">AKHLAK</div>
															<div class="text-muted">Penilaian AKHLAK Pegawai</div>
														</div>
													</div>
												</a>
												<!--End::Item-->

												<!--begin::Item-->
												<a href="#" class="navi-item">
													<div class="navi-link d-flex align-items-center">

														<div class="symbol symbol-40 mr-5 shadow-sm">
															<span class="symbol-label">
																<span class="svg-icon svg-icon-lg svg-icon-danger">
																	<img src="assets/media/logos/icon_penilaian360.png" alt="360" width="50px">
																</span>
															</span>
														</div>

														<div class="navi-text">
															<div class="text-dark-75 mb-1 font-size-lg">Penilaian 360</div>
															<div class="text-muted">Penilaian Kompetensi Perilaku</div>
														</div>
													</div>
												</a>
												<!--End::Item-->

												<!--begin::Item-->
												<a href="#" class="navi-item">
													<div class="navi-link d-flex align-items-center">

														<div class="symbol symbol-40 mr-5 shadow-sm">
															<span class="symbol-label">
																<span class="svg-icon svg-icon-lg svg-icon-danger">
																	<img src="assets/media/logos/icon_diklat.png" alt="diklat" width="50px">
																</span>
															</span>
														</div>

														<div class="navi-text">
															<div class="text-dark-75 mb-1 font-size-lg">LDMS</div>
															<div class="text-muted">Aplikasi PI-LDMS</div>
														</div>
													</div>
												</a>
												<!--End::Item-->

											</div>
											<!--End::Hover-->

											<!--begin::Action-->
											<div class="d-flex flex-center pt-7">
												<a href="{{ route('daftarAplikasi') }}" class="btn btn-light-primary font-weight-bold text-center">See All</a>
											</div>
											<!--end::Action-->
										</div>
										<!--end::Tabpane-->

									</div>
									<!--end::Content-->
									{{-- </form> --}}
								</div>
								<!--end::Dropdown-->
							</div>
							<!--end::Notifications-->

							<!--begin::Quick Actions-->
							<div class="dropdown">
								<!--begin::Toggle-->
								<div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
									<div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
										<i class="flaticon2-bell-5 text-primary"></i>
										<span class="pulse-ring"></span>
									</div>
								</div>
								<!--end::Toggle-->
								<!--begin::Dropdown-->
								<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
									<!--begin:Header-->
									<div class="d-flex flex-column flex-center py-10 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url(assets/media/misc/bg-1.jpg)">
										<h4 class="text-white font-weight-bold">Notifikasi</h4>
										<span class="btn btn-success btn-sm font-weight-bold font-size-sm mt-2">0 Belum dibaca</span>
									</div>
									<!--end:Header-->
									<!--begin:Nav-->
									<div class="row row-paddingless">
										<!--begin:Item-->
										<div class="col-6">
											<a href="#" class="d-block py-10 px-5 text-center bg-hover-light border-right border-bottom">
												<span class="svg-icon svg-icon-3x svg-icon-success">

											</a>
										</div>

									</div>
									<!--end:Nav-->
								</div>
								<!--end::Dropdown-->
							</div>
							<!--end::Quick Actions-->

							<!--begin::User-->
							<div class="dropdown">

								<div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px" aria-expanded="false">
									<div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2">
										<span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
										<span id="user_acc" class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{ $user['user_name'] }} ({{ $user['nik'] }})</span>
									</div>
								</div>

								<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0" style="">
									<div class="d-flex align-items-center justify-content-between flex-wrap p-8 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url('https://pismart-dev.pupuk-indonesia.com/public/media/misc/bg-1.jpg')">
										<div class="d-flex align-items-center mr-2">
											{{-- <div class="text-white m-0 flex-grow-1 mr-3 font-size-h5">{{ $user['user_name'] }}
										</div> --}}
										<div class="text-white m-0 flex-grow-1 mr-3 font-size-h5">{{ $user['user_name'] }}</div>
									</div>
									<span class="label label-success label-lg font-weight-bold label-inline">{{ $user['nik'] }}</span>
								</div>

								<div class="navi navi-spacer-x-0 pt-5">
									<div class="d-flex justify-content-center">
										<div class="symbol symbol-100 mr-5">
											<img alt="Pic" src="https://pismart-dev.pupuk-indonesia.com/public/assets/media/users/default.jpg">
											<i class="symbol-badge bg-success"></i>
										</div>
										<div class="d-flex flex-column">
											<div href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">{{ $user['user_name'] }}</div>
											<div class="navi mt-2">
												<div href="#" class="navi-item">
													<span class="navi-link p-0 pb-2">
														<span class="navi-icon mr-1">
															<span class="svg-icon svg-icon-primary svg-icon-lg">
																<!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\General\User.svg-->
																<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																	<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																		<polygon points="0 0 24 0 24 24 0 24"></polygon>
																		<path d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																		<path d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
																	</g>
																</svg><!--end::Svg Icon-->
															</span>
														</span>
														<span class="navi-text text-muted text-hover-primary">{{ $user['nik'] }}</span>
													</span>
												</div>
												<a href="" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">My Profile</a>
											</div>
										</div>
									</div>

									<div class="navi-separator mt-3"></div>
									<div class="navi-footer px-8 py-5">
										<a href="{{ route('logout') }}" class="btn btn-light-danger font-weight-bold btn-lg btn-block">Log Out</a>
									</div>
								</div>
							</div>
						</div>
						<!--end::User-->
					</div>
					<!--end::Topbar-->
				</div>
				<!--end::Container-->
			</div>
			<!--end::Header-->

			<!--begin::Content Subheader-->
			<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
				<!--begin::Subheader-->
				<div class="subheader py-2 subheader-solid" id="kt_subheader">
					<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
						<!--begin::Info-->
						<div class="d-flex align-items-center flex-wrap mr-1">
							<!--begin::Page Title-->
							<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Master Kegiatan</h5>
							<!--end::Page Title-->
						</div>
						<!--end::Info-->

						<!--begin::Toolbar-->
						<div class="d-flex align-items-center">
							<!--begin::Actions-->
							<div id="selectYear">
								<div class="dropdown bootstrap-select form-control">
									<select class="form-control selectpicker" id="kpi_year" data-style="btn-primary" tabindex="null">
										<optgroup label="Periode Tahun" id="listYear">
											<option value="2022">Periode thn 2022</option>
											<option value="2023" selected="selected">Periode thn 2023</option>
											<option value="2024">Periode thn 2024</option>
										</optgroup>
									</select>

								</div>
							</div>
						</div>
					</div>
				</div>
				<!--end::Subheader-->

				<!--begin::Entry Dashboard Page-->
				<div class="d-flex flex-column-fluid">
					<div class="container-fluid">
						<div class="d-felx flex-column-fluid">
							<div class="container-fluid p-0">
								<div class="card card-custom gutter-b">
									{{-- header --}}
									<div class="card-header">
										<div class="card-title">
										</div>

										<div class="card-toolbar">
											<button class="btn btn-primary py-2 px-4 font-weight-bolder font-size-m" data-toggle="modal" data-target="#exampleModalCenter" onclick="clearForm()">
												<i class="flaticon2-plus icon-sm"></i>Tambah Kegiatan
											</button>
										</div>
									</div>
									{{-- end-header --}}

									{{-- body --}}
									<div class="card-body">
										<div class="table-responsive">
											<div id="kt_datatable-wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer">
												<div class="pull-left">
													{{-- search --}}
													<div class="kt_datatable_filter" class="dataTables_filter">
														<label>
															Search:
															<input id="my_input" type="search" class="form-control form-control-sm" aria-controls="kt_datatable">
														</label>
													</div>
													{{-- end-search --}}
												</div>
											</div>
										</div>

										<div class="dataTables_scroll">
											<div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;">
												<div class="dataTables_scrollHeadInner" style="box-sizing: content-box; padding-right: 15px;">
													<table class="table table-head-custom table-head-bg table-hover text-center table-vertical-center dataTable no-footer" role="grid" id="kt_datatable">
														<thead>
															<tr class="text-center" role="row">
																<th style="min-width: 5px; color: black !important; width: 43.3875px;" class="dt-body-nowarp sorting_asc" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" aria-label="#: activate to sort column descending" aria-sort="ascending">#</th>
																<th style="min-width: 100px; color: black !important; width: 214.613px;" class="dt-body-nowarp sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" aria-label="Nama Kegiatan: activate to sort column ascending">Nama Kegiatan</th>
																<th style="min-width: 100px; color: black !important; width: 263.6px;" class="dt-body-nowarp sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" aria-label="Deskripsi Kegiatan: activate to sort column ascending">Deskripsi Kegiatan</th>
																<th style="min-width: 80px; color: black !important; width: 163.3px;" class="dt-body-nowarp sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th>
															</tr>
														</thead>

														<tbody id="data">
															<input class="form-control" type="hidden" id="nik_user" name="nik_user" value="{{$user['nik']}}" />
															<input class="form-control" type="hidden" id="company" name="company" value="{{$user['comp_code']}}" />
														</tbody>

													</table>

												</div>
											</div>
										</div>

										{{-- halaman tabel --}}
										<div class="dataTables_info" id="kt_datatable_info" role="status" aria-live="polite">Showing 1 to 1 of 1 entries</div>
										<div class="dataTables_paginate paging_simple_numbers" id="kt_datatable_paginate">
											<ul class="pagination">
												<li class="paginate_button page-item previous disabled" id="kt_datatable_previous">
													<a href="#" aria-controls="kt_datatable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a>
												</li>
												<li class="paginate_button page-item active">
													<a href="#" aria-controls="kt_datatable" data-dt-idx="1" tabindex="0" class="page-link">1</a>
												</li>
												<li class="paginate_button page-item next disabled" id="kt_datatable_next">
													<a href="#" aria-controls="kt_datatable" data-dt-idx="2" tabindex="0" class="page-link">Next</a>
												</li>
											</ul>
										</div>
										{{-- end- halaman tabel --}}

									</div>
									{{-- end-body --}}

									{{-- modal body  --}}
									<div class="modal fade" id="exampleModalCenter" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
										<div class="modal-dialog modal-dialog-centered modal-lg" role="document">
											<div class="modal-content">
												<div class="modal-header">
													<h5 class="modal-title" id="exampleModalLabel">Kegiatan</h5>
													<button type="button" class="close" data-dismiss="modal" onclick="clearForm()" aria-label="Close">
														<i aria-hidden="true" class="ki ki-close"></i>
													</button>
													{{-- <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button> --}}
												</div>


												<div class="modal-body">
													<div id="page">
														<div class="p2">
															<input type="hidden" id="id_kegiatan">
															<div class="form-group">
																<label for="namaKegiatan">Nama Kegiatan</label>
																<input type="text" name="nama_kegiatan" id="nama_kegiatan" class="form-control" required>
															</div>

															<div class="form-group">
																<label for="descKegiatan">Deskripsi Kegiatan</label>
																{{-- <input type="text" name="descKegiatan" id="descKegiatan" class="form-control"> --}}
																<textarea class="form-control" name="deskripsi_kegiatan" id="deskripsi_kegiatan" rows="5" placeholder="Deskripsi Kegiatan" required></textarea>
															</div>
															<div class="modal-footer">
																<button type="button" class="btn btn-light-primary font-weight-bold" onclick="clearForm()" data-dismiss="modal">Close</button>
																<button type="button" class="btn btn-primary font-weight-bold" onClick="store()" data-dismiss="modal">Save</button>
															</div>
														</div>
													</div>
												</div>
											</div>
										</div>
									</div>
									{{-- end- modal body  --}}
								</div>
							</div>
						</div>
					</div>
					<!--end::Entry Dashboard Page-->
				</div>
				<!--end::Content Subheader-->

				<!--begin::Footer-->
				<div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
					<!--begin::Container-->
					<div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
						<!--begin::Copyright-->
						<div class="text-dark order-2 order-md-1">
							<span class="text-muted font-weight-bold mr-2">2023 ©</span>
							<a href="http://keenthemes.com/metronic" target="_blank" class="text-dark-75 text-hover-primary">PI-Smart</a>
						</div>

						<div class="nav nav-dark order-1 order-md-2">
							<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pr-3 pl-0">Panduan Pengguna</a>
							<a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pr-3 pl-0">Kebijakan Privasi</a>
						</div>
						<!--end::Copyright-->
					</div>
					<!--end::Container-->
				</div>
				<!--end::Footer-->
			</div>
			<!--end::Wrapper-->
		</div>
		<!--end::Page-->
	</div>
	<!--end::Main-->

	<!--begin::Scrolltop-->
	<div id="kt_scrolltop" class="scrolltop">
		<span class="svg-icon">
			<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg-->
			<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
					<polygon points="0 0 24 0 24 24 0 24" />
					<rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
					<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
				</g>
			</svg>
			<!--end::Svg Icon-->
		</span>
	</div>
	<!--end::Scrolltop-->

	<!--end::Demo Panel-->
	<script>
		var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
	</script>
	<!--begin::Global Config(global config for global JS scripts)-->
	<script>
		var KTAppSettings = {
			"breakpoints": {
				"sm": 576,
				"md": 768,
				"lg": 992,
				"xl": 1200,
				"xxl": 1400
			},
			"colors": {
				"theme": {
					"base": {
						"white": "#ffffff",
						"primary": "#3699FF",
						"secondary": "#E5EAEE",
						"success": "#1BC5BD",
						"info": "#8950FC",
						"warning": "#FFA800",
						"danger": "#F64E60",
						"light": "#E4E6EF",
						"dark": "#181C32"
					},
					"light": {
						"white": "#ffffff",
						"primary": "#E1F0FF",
						"secondary": "#EBEDF3",
						"success": "#C9F7F5",
						"info": "#EEE5FF",
						"warning": "#FFF4DE",
						"danger": "#FFE2E5",
						"light": "#F3F6F9",
						"dark": "#D6D6E0"
					},
					"inverse": {
						"white": "#ffffff",
						"primary": "#ffffff",
						"secondary": "#3F4254",
						"success": "#ffffff",
						"info": "#ffffff",
						"warning": "#ffffff",
						"danger": "#ffffff",
						"light": "#464E5F",
						"dark": "#ffffff"
					}
				},
				"gray": {
					"gray-100": "#F3F6F9",
					"gray-200": "#EBEDF3",
					"gray-300": "#E4E6EF",
					"gray-400": "#D1D3E0",
					"gray-500": "#B5B5C3",
					"gray-600": "#7E8299",
					"gray-700": "#5E6278",
					"gray-800": "#3F4254",
					"gray-900": "#181C32"
				}
			},
			"font-family": "Poppins"
		};
	</script>
	<!--end::Global Config-->
	<!--begin::Global Theme Bundle(used by all pages)-->
	<script src="assets/plugins/global/plugins.bundle.js"></script>
	<script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
	<script src="assets/js/scripts.bundle.js"></script>
	<!--end::Global Theme Bundle-->
	<!--begin::Page Vendors(used by this page)-->
	<script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
	<!--end::Page Vendors-->
	<!--begin::Page Scripts(used by this page)-->
	<script src="assets/js/pages/widgets.js"></script>
	<!--end::Page Scripts-->

	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
	</script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
	</script>
	<script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>

	<script>
		var token_oauth = $('#token_oauth').val();
		var emp_no = $("#nik_user").val();
		var company = $("#company").val();
		var year = $("#kpi_year").val();
		$('#kpi_year').on('change', function() {
			year = $('#kpi_year').val();
			read();
		})
		$.ajaxSetup({
			headers: {
				'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
			}
		});

		$(document).ready(function() {
			read()
			//search on crud
			$("#my_input").on("keyup", function() {
				var value = $(this).val().toLowerCase();
				$("#data tr").filter(function() {
					$(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
				});
			});
		});

		// read database
		function read() {
			$.ajax({
				type: "post",
				url: "https://601zgltt-9096.asse.devtunnels.ms/api/tjsl/listKegiatan",
				data: {
					nik: emp_no,
					tahun: year,
					// _token: '{{csrf_token()}}' // Send both name and description to the server
				},
				beforeSend: function(xhr) {
					xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
				},
				success: function(data) {
					var arr = data.data
					$('#data').html('')
					arr.forEach((x, i) => {
						var html = `<tr>
                        <td>${i+1}</td>
                        <td>${x.nama_kegiatan}</td>
                        <td>${x.deskripsi_kegiatan}</td>
						<td class=" dt-body-nowarp">
							<button type="button" onclick="show('${x.slug}')" class="btn btn-icon my-2 btn-sm btn-warning" data-toggle="modal">
                            <i class="flaticon2-edit"></i>
                            </button> <button type="button" onclick="deleteItem('${x.slug}')" class="btn btn-icon my-2 btn-sm btn-danger">
                            <i class="flaticon2-trash"></i>
                            </button>
						</td>
                    </tr>`
						$('#data').append(html)
					});
				},
				error: function(data) {
					handleUnauthorized(data);
				}
			});
		}

		function handleUnauthorized(res, endpoint = null) {
			var base_url = "{{ route('loginpage') }}";
			var user_login = "{{$user['nik']}}";
			console.log(user_login);

			if (res.status != 404 || res.status != 400) {
				if (res.responseJSON.ERROR == "Silahkan Login..") {
					window.location.href = "{{ route('logout') }}";
				}
			}

			if (res.status == 401) {
				Swal.fire({
					title: res.status,
					text: res.responseText ? res.responseText : 'Token Expired',
					icon: "info",
					allowOutsideClick: false,
					showCancelButton: false,
					showConfirmButton: true,
				}).then(function() {
					window.location.href = "{{ route('logout') }}";
				})
			}
		}

		function create() {
			$("#exampleModal").modal('show');
			$('#exampleModalCenter').modal('show');
			// $("#exampleModal").modal('show');
			// $.get("{{ url('create' )}}",{},function(data,status){
			//     $("#page").html(data);
			// });

		}


		// untuk proses create data
		function store() {
			var idKegiatan = $('#id_kegiatan').val()
			var namaKegiatan = $("#nama_kegiatan").val();
			var descKegiatan = $("#deskripsi_kegiatan").val(); // Get the value of the description input field
			var dataStore = {
				nik: emp_no,
				nama_kegiatan: namaKegiatan,
				deskripsi_kegiatan: descKegiatan
			}
			if (idKegiatan != '') {
				dataStore = {
					nik: emp_no,
					nama_kegiatan: namaKegiatan,
					deskripsi_kegiatan: descKegiatan,
					id: idKegiatan
				}
			}

			$.ajax({
				type: "post", // Use "post" method for storing data

				url: "https://601zgltt-9096.asse.devtunnels.ms/api/tjsl/storeMasterKegiatan",

				data: dataStore,
				beforeSend: function(xhr) {
					xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
				},
				success: function(data) {
					read()
					$('#exampleModelCenter').modal('hide');
					// Clear the form after submit
					clearForm()
					Swal.fire({
						title: "Berhasil",
						text: "Berhasil Menambahkan Data",
						icon: "success",
					})
				}

			});
		}

		// Untuk modal halaman edit (show)
		function show(slug) {
			$.ajax({
				url: "https://601zgltt-9096.asse.devtunnels.ms/api/tjsl/getMasterKegiatan/" + slug,
				type: "get",
				beforeSend: function(xhr) {
					xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
				},
				success: function(result) {
					// Assuming 'exampleModal' is your modal element
					$('#exampleModalCenter').modal('show');
					read()
					clearForm()
					var arr = result.data;
					// Populate modal content here
					$('#id_kegiatan').val(arr.id_kegiatan);
					$('#nama_kegiatan').val(arr.nama_kegiatan);
					$('#deskripsi_kegiatan').val(arr.deskripsi_kegiatan);
				},
				error: function(error) {
					Swal.fire('Gagal', 'Gagal Menghapus Data', 'error');
				}
			});
		}

		// Untuk delete
		function deleteItem(slug) {
			// Use SweetAlert to confirm the deletion
			Swal.fire({
				title: 'Apakah anda yakin ingin menghapus kegiatan ini ?',
				text: 'Mohon untuk melakukan pengecekan data kembali',
				icon: 'question',
				showCancelButton: true,
				confirmButtonText: 'Ya, Submit!',
				cancelButtonText: 'Batalkan!',
				reverseButtons: true
			}).then((result) => {
				if (result.isConfirmed) {
					// Send an AJAX request to delete the item
					$.ajax({
						url: "https://api-pismart-dev.pupuk-indonesia.com/golang/api/tjsl/deleteMasterKegiatan/" + slug, // Replace with your API endpoint
						type: 'DELETE',
						beforeSend: function(xhr) {
							xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
						},
						success: function(result) {
							if (result.unsuccess) {
								// Show gagal message with SweetAlert
								Swal.fire('Gagal', 'Gagal Menghapus Data', 'error');

								// Optionally, remove the table row associated with the deleted item
								// $(`tr[data-slug="${slug}"]`).remove();
							} else {
								// Show a success message with SweetAlert
								Swal.fire('Berhasil', 'Berhasil Menghapus Data', 'success');
								read()
							}
						},
						error: function(error) {
							// Handle the error (e.g., display an error message)
							console.error('Error:', error);
						}
					});
				}
			});
		}

		function clearForm() {
			$('#id_kegiatan').val('');
			$("#nama_kegiatan").val('');
			$("#deskripsi_kegiatan").val('');
		}
	</script>

	@include('sweetalert::alert')

</body>
<!--end::Body-->
@endsection