@extends('layout.tempWeb')

@section('kontenpage') 
	
	<!--begin::Body-->
	
	<body id="kt_body" class="page-loading-enabled quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-minimize-hoverable aside-fixed">
		<script>
			document.title ='Halaman Utama | PI-Smart'
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
						<a href="{{ route('home') }}" class="brand-logo">
							<img alt="Logo" src="assets/media/logos/PI-SMART-LOGO.png" width="162.092px" height="48.325px"/>
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
									<a href="{{ route('home') }}" class="menu-link">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
												<path d="M1.34888 13.9299L9.17584 19.6697C9.53775 19.9351 10.0321 19.9269 10.385 19.6496L17.6646 13.9299" stroke="#264178" stroke-width="1.5" stroke-linecap="round"/>
												<path d="M18.4005 7.81967L10.4329 1.50117C10.0583 1.20407 9.52575 1.21375 9.16216 1.52427L1.14752 8.36902C0.668865 8.7778 0.682391 9.52185 1.17558 9.91297L9.14314 16.2315C9.51778 16.5286 10.0503 16.5189 10.4139 16.2084L18.4286 9.36362C18.9072 8.95483 18.8937 8.21078 18.4005 7.81967Z" fill="#264178"/>
											  </svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Halaman Utama</span>
									</a>
								</li>

								<li class="menu-item" aria-haspopup="true">
									<a href="javascript:;" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" width="18" height="20" viewBox="0 0 18 20" fill="none">
												<path d="M8.7881 19.4711C9.37696 19.4718 9.95142 19.288 10.4316 18.9452C10.9118 18.6024 11.2739 18.1176 11.4676 17.5582H6.10861C6.30226 18.1176 6.66436 18.6024 7.14457 18.9452C7.62477 19.288 8.19924 19.4718 8.7881 19.4711ZM15.444 12.38V7.99381C15.444 4.91694 13.3664 2.32499 10.5519 1.54549C10.2733 0.839634 9.59251 0.342285 8.7881 0.342285C7.98368 0.342285 7.30287 0.839634 7.02427 1.54549C4.20977 2.32594 2.13216 4.91694 2.13216 7.99381V12.38L0.509068 14.0127C0.420599 14.1014 0.350438 14.2068 0.302624 14.3228C0.254811 14.4389 0.230289 14.5633 0.23047 14.6889V15.6453C0.23047 15.899 0.330648 16.1423 0.508966 16.3216C0.687285 16.501 0.929137 16.6018 1.18132 16.6018H16.3949C16.6471 16.6018 16.8889 16.501 17.0672 16.3216C17.2455 16.1423 17.3457 15.899 17.3457 15.6453V14.6889C17.3459 14.5633 17.3214 14.4389 17.2736 14.3228C17.2258 14.2068 17.1556 14.1014 17.0671 14.0127L15.444 12.38Z" fill="#8691AD"/>
											  </svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Pemberitahuan</span>
									</a>
								</li>

								<li class="menu-item" aria-haspopup="true">
									<a href="" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Design/Bucket.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16" fill="none">
												<path d="M18.6624 0.715333H13.7778C12.7295 0.715333 11.7048 1.0184 10.823 1.59014L9.7812 2.2629L8.73937 1.59014C7.85852 1.01851 6.83262 0.714769 5.78465 0.715333H0.899969C0.522089 0.715333 0.216797 1.0227 0.216797 1.40314V13.6117C0.216797 13.9922 0.522089 14.2996 0.899969 14.2996H5.78465C6.83289 14.2996 7.85765 14.6026 8.73937 15.1744L9.68727 15.7891C9.71502 15.8063 9.74704 15.817 9.77907 15.817C9.81109 15.817 9.84312 15.8084 9.87087 15.7891L10.8188 15.1744C11.7026 14.6026 12.7295 14.2996 13.7778 14.2996H18.6624C19.0403 14.2996 19.3456 13.9922 19.3456 13.6117V1.40314C19.3456 1.0227 19.0403 0.715333 18.6624 0.715333ZM7.4755 9.15173C7.4755 9.23986 7.40718 9.31294 7.32392 9.31294H3.35725C3.27399 9.31294 3.20567 9.23986 3.20567 9.15173V8.1845C3.20567 8.09638 3.27399 8.0233 3.35725 8.0233H7.32178C7.40505 8.0233 7.47336 8.09638 7.47336 8.1845V9.15173H7.4755ZM7.4755 6.14257C7.4755 6.2307 7.40718 6.30378 7.32392 6.30378H3.35725C3.27399 6.30378 3.20567 6.2307 3.20567 6.14257V5.17534C3.20567 5.08721 3.27399 5.01414 3.35725 5.01414H7.32178C7.40505 5.01414 7.47336 5.08721 7.47336 5.17534V6.14257H7.4755ZM16.3567 9.15173C16.3567 9.23986 16.2884 9.31294 16.2052 9.31294H12.2385C12.1552 9.31294 12.0869 9.23986 12.0869 9.15173V8.1845C12.0869 8.09638 12.1552 8.0233 12.2385 8.0233H16.203C16.2863 8.0233 16.3546 8.09638 16.3546 8.1845V9.15173H16.3567ZM16.3567 6.14257C16.3567 6.2307 16.2884 6.30378 16.2052 6.30378H12.2385C12.1552 6.30378 12.0869 6.2307 12.0869 6.14257V5.17534C12.0869 5.08721 12.1552 5.01414 12.2385 5.01414H16.203C16.2863 5.01414 16.3546 5.08721 16.3546 5.17534V6.14257H16.3567Z" fill="#8691AD"/>
											  </svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Berita</span>
									</a>
								</li>
								<li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
									<a href="" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" width="16" height="20" viewBox="0 0 16 20" fill="none">
												<path fill-rule="evenodd" clip-rule="evenodd" d="M9.9735 0.297775C9.9735 0.233175 9.94783 0.17122 9.90216 0.125541C9.85648 0.0798616 9.79452 0.0541992 9.72992 0.0541992H2.9098C2.1992 0.0541992 1.5177 0.336485 1.01523 0.838958C0.512755 1.34143 0.230469 2.02293 0.230469 2.73353V16.3738C0.230469 17.0844 0.512755 17.7659 1.01523 18.2683C1.5177 18.7708 2.1992 19.0531 2.9098 19.0531H12.6528C13.3634 19.0531 14.0449 18.7708 14.5474 18.2683C15.0499 17.7659 15.3322 17.0844 15.3322 16.3738V6.77397C15.3322 6.70937 15.3065 6.64741 15.2608 6.60173C15.2151 6.55605 15.1532 6.53039 15.0886 6.53039H10.7042C10.5104 6.53039 10.3246 6.4534 10.1875 6.31637C10.0505 6.17933 9.9735 5.99346 9.9735 5.79966V0.297775ZM10.7042 9.79723C10.898 9.79723 11.0839 9.87422 11.2209 10.0113C11.358 10.1483 11.435 10.3342 11.435 10.528C11.435 10.7218 11.358 10.9076 11.2209 11.0447C11.0839 11.1817 10.898 11.2587 10.7042 11.2587H4.85841C4.66461 11.2587 4.47874 11.1817 4.34171 11.0447C4.20467 10.9076 4.12768 10.7218 4.12768 10.528C4.12768 10.3342 4.20467 10.1483 4.34171 10.0113C4.47874 9.87422 4.66461 9.79723 4.85841 9.79723H10.7042ZM10.7042 13.6944C10.898 13.6944 11.0839 13.7714 11.2209 13.9085C11.358 14.0455 11.435 14.2314 11.435 14.4252C11.435 14.619 11.358 14.8048 11.2209 14.9419C11.0839 15.0789 10.898 15.1559 10.7042 15.1559H4.85841C4.66461 15.1559 4.47874 15.0789 4.34171 14.9419C4.20467 14.8048 4.12768 14.619 4.12768 14.4252C4.12768 14.2314 4.20467 14.0455 4.34171 13.9085C4.47874 13.7714 4.66461 13.6944 4.85841 13.6944H10.7042Z" fill="#8691AD"/>
												<path d="M11.4349 0.613413C11.4349 0.434142 11.623 0.320148 11.7623 0.432193C11.8802 0.527675 11.9864 0.638745 12.077 0.765405L15.0126 4.85455C15.0788 4.94809 15.0067 5.0689 14.8918 5.0689H11.6785C11.6139 5.0689 11.552 5.04324 11.5063 4.99756C11.4606 4.95188 11.4349 4.88992 11.4349 4.82532V0.613413Z" fill="#8691AD"/>
											  </svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Survey</span>
									</a>
								</li>
								<li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
									<a href="" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
												<path d="M9.7812 3.62425C9.7812 3.20265 9.69852 2.78518 9.53787 2.39568C9.37723 2.00617 9.14176 1.65226 8.84493 1.35415C8.54809 1.05603 8.19569 0.819556 7.80786 0.658218C7.42002 0.49688 7.00434 0.41384 6.58456 0.41384H3.45457C3.03135 0.408371 2.61127 0.487365 2.21869 0.646236C1.82612 0.805107 1.46886 1.04069 1.16766 1.33933C0.866458 1.63796 0.627305 1.99369 0.464077 2.38588C0.300849 2.77807 0.216797 3.19891 0.216797 3.62398C0.216797 4.04905 0.300849 4.46989 0.464077 4.86208C0.627305 5.25428 0.866458 5.61001 1.16766 5.90864C1.46886 6.20727 1.82612 6.44286 2.21869 6.60173C2.61127 6.7606 3.03135 6.83959 3.45457 6.83412H4.06723V8.38407C4.06723 8.38407 9.7812 7.60936 9.7812 3.62425ZM6.87131 12.1035C6.87131 13.2778 5.92427 14.2289 4.75503 14.2289C3.58578 14.2289 2.63874 13.2778 2.63874 12.1035C2.63874 10.9292 3.58578 9.97811 4.75503 9.97811C5.92427 9.97811 6.87131 10.9292 6.87131 12.1035ZM4.75503 15.2916C3.25405 15.2916 0.257921 16.0514 0.257921 17.5589V19.5424H9.25213V17.5589C9.25213 16.0509 6.256 15.2916 4.75503 15.2916ZM14.8074 14.2289C15.9766 14.2289 16.9237 13.2778 16.9237 12.1035C16.9237 10.9292 15.9766 9.97811 14.8074 9.97811C13.6381 9.97811 12.6911 10.9292 12.6911 12.1035C12.6911 13.2778 13.6381 14.2289 14.8074 14.2289ZM14.8074 15.2916C13.3064 15.2916 10.3103 16.0514 10.3103 17.5589V19.5424H19.3045V17.5589C19.3045 16.0509 16.3084 15.2916 14.8074 15.2916ZM14.036 0.945188C13.1882 0.945188 12.3751 1.28343 11.7756 1.8855C11.1761 2.48756 10.8393 3.30414 10.8393 4.1556C10.8393 8.14071 15.9184 8.91542 15.9184 8.91542V7.36547H16.1078C16.5311 7.37094 16.9511 7.29195 17.3437 7.13308C17.7363 6.97421 18.0935 6.73862 18.3947 6.43999C18.6959 6.14136 18.9351 5.78562 19.0983 5.39343C19.2616 5.00124 19.3456 4.5804 19.3456 4.15533C19.3456 3.73026 19.2616 3.30942 19.0983 2.91723C18.9351 2.52504 18.6959 2.16931 18.3947 1.87067C18.0935 1.57204 17.7363 1.33646 17.3437 1.17758C16.9511 1.01871 16.5311 0.93972 16.1078 0.945188H14.036Z" fill="#8691AD"/>
											  </svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">PI-LDMS</span>
									</a>
								</li>
								
								<li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
									<a href="{{ route('logout') }}" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" width="21" height="19" viewBox="0 0 21 19" fill="none">
												<path d="M15.5492 13.1195L19.3526 9.34406M19.3526 9.34406L15.5492 5.56864M19.3526 9.34406H6.04069M11.7458 13.1195V14.0633C11.7458 14.8143 11.4452 15.5345 10.9103 16.0656C10.3753 16.5966 9.64978 16.8949 8.89324 16.8949H5.08985C4.33331 16.8949 3.60775 16.5966 3.0728 16.0656C2.53784 15.5345 2.2373 14.8143 2.2373 14.0633V4.62478C2.2373 3.8738 2.53784 3.15358 3.0728 2.62256C3.60775 2.09154 4.33331 1.79321 5.08985 1.79321H8.89324C9.64978 1.79321 10.3753 2.09154 10.9103 2.62256C11.4452 3.15358 11.7458 3.8738 11.7458 4.62478V5.56864" stroke="#8691AD" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
											  </svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Log Out</span>
									</a>
								</li>
								
							</ul>
							<!--end::Menu Nav-->
						</div>

							<!--begin::Menu Nav-->
						<div style="position: relative; left:0; top:0; width:100%; height:100%">
									<svg preserveAspectRatio="none" width="265px" height="400px" viewBox="0 0 265 400" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
										<path d="M183.325 164.837C192.112 50.1692 262.77 7.4499 297 0.423706V459.515H1.00684V354.544C94.9119 371.828 172.342 308.171 183.325 164.837Z" fill="url(#paint0_linear_1871_2668)"/>
										<path d="M146.292 327.332C137.901 238.276 45.2677 207.866 0 203.793V463.542H297V443.631C250.26 441.972 154.683 416.389 146.292 327.332Z" fill="url(#paint1_linear_1871_2668)" fill-opacity="0.8"/>
										<path d="M146.292 279.719C137.901 158.215 45.2677 116.726 0 111.169V465.556H297V438.39C250.26 436.127 154.683 401.223 146.292 279.719Z" fill="url(#paint2_linear_1871_2668)" fill-opacity="0.4"/>
										<rect x="64" y="249" width="168" height="79" fill="url(#pattern0)"/>
										<defs>
										<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
										<use xlink:href="#image0_1871_2668" transform="matrix(0.00356241 0 0 0.00757576 -0.00586219 0)"/>
										</pattern>
										<linearGradient id="paint0_linear_1871_2668" x1="15.2848" y1="-92.7436" x2="189.487" y2="525.087" gradientUnits="userSpaceOnUse">
										<stop stop-color="#F0F5FF"/>
										<stop offset="1" stop-color="#F0F5FF" stop-opacity="0"/>
										</linearGradient>
										<linearGradient id="paint1_linear_1871_2668" x1="148.5" y1="203.793" x2="125.421" y2="475.801" gradientUnits="userSpaceOnUse">
										<stop stop-color="#F4F8FF"/>
										<stop offset="1" stop-color="#EAF0FF"/>
										</linearGradient>
										<linearGradient id="paint2_linear_1871_2668" x1="138.432" y1="423.775" x2="118.893" y2="25.1445" gradientUnits="userSpaceOnUse">
										<stop stop-color="#F4F8FF"/>
										<stop offset="1" stop-color="#EAF0FF"/>
										</linearGradient>
										</defs>
										</svg>
										
						</div>

						<!--end::Menu Container-->
					</div>
					<!--end::Aside Menu-->
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
										<form>
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
										</form>
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
											<span id="user_acc" class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">{{ Auth::user()->name }} ({{ Auth::user()->nik }})</span>
										</div>
									</div>
					
									<div class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0" style="">
										<div class="d-flex align-items-center justify-content-between flex-wrap p-8 bgi-size-cover bgi-no-repeat rounded-top" style="background-image: url('https://pismart-dev.pupuk-indonesia.com/public/media/misc/bg-1.jpg')">
											<div class="d-flex align-items-center mr-2">
												{{-- <div class="text-white m-0 flex-grow-1 mr-3 font-size-h5">{{ auth()->user()->username }}</div> --}}
												<div class="text-white m-0 flex-grow-1 mr-3 font-size-h5">{{ Auth::user()->name }}</div>
											</div>
											<span class="label label-success label-lg font-weight-bold label-inline">{{ Auth::user()->nik}}</span>
										</div>
					
										<div class="navi navi-spacer-x-0 pt-5">
											<div class="d-flex justify-content-center">
												<div class="symbol symbol-100 mr-5">
													<img alt="Pic" src="https://pismart-dev.pupuk-indonesia.com/public/assets/media/users/default.jpg">  
													<i class="symbol-badge bg-success"></i>
												</div>
												<div class="d-flex flex-column">
													<div href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">{{ Auth::user()->name }}</div>
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
																<span class="navi-text text-muted text-hover-primary">{{ Auth::user()->nik }}</span>
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
									<h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Halaman Utama</h5>
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
								{{-- <input class="form-control" type="hidden" id="position" name="position" value="91300383">
								<input class="form-control" type="hidden" id="company" name="company" value="A000">
								<input class="form-control" type="hidden" id="emp_no" name="emp_no" value="91010187"> --}}
						
								<div class="row">
									<div class="col-lg-8 col-xxl-8">
										<div class="row">
											<div class="col-lg-12 col-xxl-12">
												<div class="card card-custom  card-stretch gutter-b">
													<!--begin::Header-->
													<div class="card-header border-0 pt-7">
														<h3 class="card-title align-items-start flex-column">
															<span class="card-label font-weight-bold font-size-h4 text-dark-75"><i class="flaticon2-open-text-book"></i> Berita Terbaru</span>
															<span class="text-muted mt-3 font-weight-bold font-size-sm">Menampilkan
																<span class="text-primary font-weight-bolder">3 berita terbaru</span></span>
														</h3>
														<div class="card-toolbar">
															<a href="#" class="btn btn-light-primary py-2 px-4 font-weight-bolder font-size-sm">Lihat Semua Berita</a>
														</div>
													</div>
													<!--end::Header-->
						
													<!--begin::Body-->
													<div class="card-body pt-1">
														<div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
															
															<div class="carousel-inner">
																				<div class="carousel-item active">
																<img class="d-block view-image" alt="Srikandi Pupuk Indonesia Dampingi Liza Thohir Bagikan Bantuan Kepada KOrban Gempa Cianjur" src="https://storage.googleapis.com/pupukindonesia/berita/13012023_071439_FOTO-04-min.png" data-holder-rendered="true">
																	<div class="carousel-caption d-none d-md-block">
																		<a href="#" class="text-white text-hover-primary">
																						<h5>Srikandi Pupuk Indonesia Dampingi Liza Thohir Bagikan Bantuan Kepada KOrban Gempa Cianjur </h5>
																		</a>
																		<p class="text-secondary mb-0">Dipublish January 2023</p>
																	</div>
																</div>
																				<div class="carousel-item">
																<img class="d-block view-image" alt="Karyawan Baik pasti Presensi kehadiran dong hanya di PI Smart" src="https://storage.googleapis.com/pupukindonesia/berita/22062023_032148_BANNER%20PRESENSI%20WEBSITE.png" data-holder-rendered="true">
																	<div class="carousel-caption d-none d-md-block">
																		<a href="#" class="text-white text-hover-primary">
																			<h5>Karyawan Baik pasti Presensi kehadiran dong hanya di PI Smart</h5>
																		</a>
																		<p class="text-secondary mb-0">Dipublish bulan lalu</p>
																	</div>
																</div>
																				<div class="carousel-item">
																<img class="d-block view-image" alt="Pupuk Indonesia Go Global Lewat Ekspansi Di Dubai" src="https://storage.googleapis.com/pupukindonesia/berita/13012023_071517_FOTO-02-min.png" data-holder-rendered="true">
																	<div class="carousel-caption d-none d-md-block">
																		<a href="#" class="text-white text-hover-primary">
																			<h5>Pupuk Indonesia Go Global Lewat Ekspansi Di Dubai</h5>
																		</a>
																		<p class="text-secondary mb-0">Dipublish January 2023</p>
																	</div>
																</div>
																			</div>
															<a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
																<span class="carousel-control-prev-icon" aria-hidden="true"></span>
																<span class="sr-only">Previous</span>
															</a>
															<a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
																<span class="carousel-control-next-icon" aria-hidden="true"></span>
																<span class="sr-only">Next</span>
															</a>
														</div>
													</div>
													<!--end::Body-->
												</div>
											</div>
						
											<div class="col-lg-12 col-xxl-12">
												<div class="card card-custom  card-stretch gutter-b">
							
													<!--begin::Body-->
													<div class="card-body p-3">
														<div class="row">
															<div class="col-md-12 col-lg-12 col-xs-12">
																<div class="card card-custom bgi-no-repeat card-stretch gutter-b m-0">
																	<!--begin::Body-->
																	<div class="card-body p-0">
																		<div class="row">
																			<div class="col-lg-12 col-md-12 col-sm-12">
																				<img src="https://storage.googleapis.com/lumen-oauth-storage/smartpedia/SMARTPEDIA-BANNER-01.png" width="100%" alt="Smart Pedia">
																			</div>
																			<div class="col-lg-12 col-md-12 col-sm-12 text-right pr-lg-15 pr-md-12 pr-sm-10 mt-n25">
																				<a class="btn btn-sm btn-success btn-hover-bg-success border-0 btn-text-white font-weight-bold" href="#" style="background-color: #3EA51C;" target="_blank">
																					Jelajahi Lebih Lanjut</a>
																			</div>
																		</div>
																	</div>
																	<!--end::Body-->
																</div>
															</div>
														</div>
													</div>
													<!--end::Body-->
												</div>
											</div>
						
											<div class="col-lg-12 col-xxl-12">
												<div class="card card-custom  card-stretch gutter-b">
													<!--begin::Header-->
													<div class="card-header border-0 pt-7">
														<h2 class="card-title align-items-start flex-column">
															<span class="card-label font-weight-bold font-size-h3 text-dark-75"><i class="flaticon-security mr-2"></i> Smart Services</span>
														</h2>
														<div class="card-toolbar">
														</div>
													</div>
													<!--end::Header-->
													<!--begin::Body-->
													<div class="card-body pb-0">
														<!--begin::Nav Tabs-->
														<ul class="dashboard-tabs nav nav-pills nav-danger row row-paddingless m-0 p-0 flex-column flex-sm-row" role="tablist">
															<!--begin::Item-->
															<li class="nav-item d-flex col-sm flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
																<a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center active" data-toggle="pill" href="#tab_forms_widget_1">
																	<span class="nav-icon py-2 w-auto">
																		<span class="svg-icon svg-icon-primary svg-icon-3x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\Navigation\Sign-in.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24"></rect>
																					<rect fill="#000000" opacity="0.3" transform="translate(9.000000, 12.000000) rotate(-270.000000) translate(-9.000000, -12.000000) " x="8" y="6" width="2" height="12" rx="1"></rect>
																					<path d="M20,7.00607258 C19.4477153,7.00607258 19,6.55855153 19,6.00650634 C19,5.45446114 19.4477153,5.00694009 20,5.00694009 L21,5.00694009 C23.209139,5.00694009 25,6.7970243 25,9.00520507 L25,15.001735 C25,17.2099158 23.209139,19 21,19 L9,19 C6.790861,19 5,17.2099158 5,15.001735 L5,8.99826498 C5,6.7900842 6.790861,5 9,5 L10.0000048,5 C10.5522896,5 11.0000048,5.44752105 11.0000048,5.99956624 C11.0000048,6.55161144 10.5522896,6.99913249 10.0000048,6.99913249 L9,6.99913249 C7.8954305,6.99913249 7,7.89417459 7,8.99826498 L7,15.001735 C7,16.1058254 7.8954305,17.0008675 9,17.0008675 L21,17.0008675 C22.1045695,17.0008675 23,16.1058254 23,15.001735 L23,9.00520507 C23,7.90111468 22.1045695,7.00607258 21,7.00607258 L20,7.00607258 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.000000, 12.000000) rotate(-90.000000) translate(-15.000000, -12.000000) "></path>
																					<path d="M16.7928932,9.79289322 C17.1834175,9.40236893 17.8165825,9.40236893 18.2071068,9.79289322 C18.5976311,10.1834175 18.5976311,10.8165825 18.2071068,11.2071068 L15.2071068,14.2071068 C14.8165825,14.5976311 14.1834175,14.5976311 13.7928932,14.2071068 L10.7928932,11.2071068 C10.4023689,10.8165825 10.4023689,10.1834175 10.7928932,9.79289322 C11.1834175,9.40236893 11.8165825,9.40236893 12.2071068,9.79289322 L14.5,12.0857864 L16.7928932,9.79289322 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.500000, 12.000000) rotate(-90.000000) translate(-14.500000, -12.000000) "></path>
																				</g>
																			</svg>
																			<!--end::Svg Icon-->
																		</span>
																	</span>
																	<span class="nav-text font-size-lg py-2 font-weight-bold text-center">Onboarding Services</span>
																</a>
															</li>
															<!--end::Item-->
															<!--begin::Item-->
															<li class="nav-item d-flex col-sm flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
																<a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center " data-toggle="pill" href="#tab_forms_widget_2">
																	<span class="nav-icon py-2 w-auto">
																		<span class="svg-icon svg-icon-primary svg-icon-3x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Group.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<polygon points="0 0 24 0 24 24 0 24"></polygon>
																					<path d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																					<path d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z" fill="#000000" fill-rule="nonzero"></path>
																				</g>
																			</svg><!--end::Svg Icon--></span>
																	</span>
																	<span class="nav-text font-size-lg py-2 font-weight-bolder text-center">Employee Services</span>
																</a>
															</li>
															<!--end::Item-->
															<!--begin::Item-->
															<li class="nav-item d-flex col-sm flex-grow-1 flex-shrink-0 mr-3 mb-3 mb-lg-0">
																<a class="nav-link border py-10 d-flex flex-grow-1 rounded flex-column align-items-center" data-toggle="pill" href="#tab_forms_widget_3">
																	<span class="nav-icon py-2 w-auto">
																		<span class="svg-icon svg-icon-primary svg-icon-3x"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\Clothes\Briefcase.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																				<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																					<rect x="0" y="0" width="24" height="24"></rect>
																					<path d="M5.84026576,8 L18.1597342,8 C19.1999115,8 20.0664437,8.79732479 20.1528258,9.83390904 L20.8194924,17.833909 C20.9112219,18.9346631 20.0932459,19.901362 18.9924919,19.9930915 C18.9372479,19.9976952 18.8818364,20 18.8264009,20 L5.1735991,20 C4.0690296,20 3.1735991,19.1045695 3.1735991,18 C3.1735991,17.9445645 3.17590391,17.889153 3.18050758,17.833909 L3.84717425,9.83390904 C3.93355627,8.79732479 4.80008849,8 5.84026576,8 Z M10.5,10 C10.2238576,10 10,10.2238576 10,10.5 L10,11.5 C10,11.7761424 10.2238576,12 10.5,12 L13.5,12 C13.7761424,12 14,11.7761424 14,11.5 L14,10.5 C14,10.2238576 13.7761424,10 13.5,10 L10.5,10 Z" fill="#000000"></path>
																					<path d="M10,8 L8,8 L8,7 C8,5.34314575 9.34314575,4 11,4 L13,4 C14.6568542,4 16,5.34314575 16,7 L16,8 L14,8 L14,7 C14,6.44771525 13.5522847,6 13,6 L11,6 C10.4477153,6 10,6.44771525 10,7 L10,8 Z" fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
																				</g>
																			</svg><!--end::Svg Icon--></span>
																	</span>
																	<span class="nav-text font-size-lg py-2 font-weight-bolder text-center">Offboarding Services</span>
																</a>
															</li>
															<!--end::Item-->
														</ul>
														
														<!--end::Nav Tabs-->
														<!--begin::Nav Content-->
														<div class="tab-content m-0 p-0">
															<div class="tab-pane active " id="tab_forms_widget_1" role="tabpanel">
																<div class="card card-custom gutter-b">
																	<div class="card-header">
																		<div class="card-title">
																			<h3 class="card-label">
																				Fitur tersedia dari Onboarding Service
																			</h3>
																		</div>
																	</div>
																	<div class="card-body">
																		<div class="navi navi-hover navi-active navi-link-rounded navi-bold navi-icon-center navi-light-icon">
																			<!--begin:Item-->
																			<div class="navi-item my-2">
																				<a href="#" class="navi-link px-0">
																					<span class="navi-icon mr-4">
																						<span class="svg-icon svg-icon-lg">
																							<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-heart.svg-->
																							<img src="assets/media/logos/icon_info_data.png" alt="IKD" width="50px">
																							<!--end::Svg Icon-->
																						</span>
																					</span>
																					<div class="navi-text">
																						<div class="text-dark-75 mb-1 font-size-lg">Informasi Kelengkapan Data</div>
																						<div class="text-muted">Menu Kelengkapan Data Karyawan</div>
																					</div>
																				</a>
																			</div>
																			<!--end:Item-->
																		</div>
																	</div>
																</div>
															</div>
															<div class="tab-pane" id="tab_forms_widget_2" role="tabpanel">
																<div class="card card-custom gutter-b">
																	<div class="card-header">
																		<div class="card-title">
																			<h3 class="card-label">
																				Fitur tersedia dari Employee Service
																			</h3>
																		</div>
																	</div>
																	<div class="card-body">
																		<div class="navi navi-hover navi-active navi-link-rounded navi-bold navi-icon-center navi-light-icon">
																			<!--begin:Item-->
																			<div class="navi-item my-2">
																				<a href="#" class="navi-link px-0">
																					<span class="navi-icon mr-4">
																						<span class="svg-icon svg-icon-lg">
																							<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-heart.svg-->
																							<img src="https://pismart.pupuk-indonesia.com/public/assets/media/icon-menu/travel-icon.svg" alt="Kpi" width="50px">
																							<!--end::Svg Icon-->
																						</span>
																					</span>
																					<div class="navi-text">
																						<div class="text-dark-75 mb-1 font-size-lg">Travel Management System</div>
																						<div class="text-muted">Surat Perintah Perjalanan Dinas</div>
																					</div>
																					<div class="navi-label">
																						&gt;
																					</div>
																				</a>
																			</div>
																			<!--end:Item-->
																			<!--begin:Item-->
																			<div class="navi-item my-2">
																				<a href="#" class="navi-link px-0">
																					<span class="navi-icon mr-4">
																						<span class="svg-icon svg-icon-lg">
																							<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-heart.svg-->
																							<img src="https://pismart.pupuk-indonesia.com/public/assets/media/icon-menu/ICON_PERBAIKAN_PRESENSI.png" alt="Kpi" width="50px">
																							<!--end::Svg Icon-->
																						</span>
																					</span>
																					<div class="navi-text">
																						<div class="text-dark-75 mb-1 font-size-lg">Perbaikan Presensi</div>
																						<div class="text-muted">Menu Perbaikan Presensi Karyawan</div>
																					</div>
																					<div class="navi-label">
																						&gt;
																					</div>
																				</a>
																			</div>
																			<!--end:Item-->
																			<!--begin:Item-->
																			<div class="navi-item my-2">
																				<a href="#" class="navi-link px-0">
																					<span class="navi-icon mr-4">
																						<span class="svg-icon svg-icon-lg">
																							<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-heart.svg-->
																							<img src="assets/media/logos/icon_history_presensi.png" alt="HPK" width="50px">
																							<!--end::Svg Icon-->
																						</span>
																					</span>
																					<div class="navi-text">
																						<div class="text-dark-75 mb-1 font-size-lg">History Presensi</div>
																						<div class="text-muted">Menu History Presensi Karyawan</div>
																					</div>
																					<div class="navi-label">
																						&gt;
																					</div>
																				</a>
																			</div>
																			<!--end:Item-->
																			<!--begin:Item-->
																			<div class="navi-item my-2">
																				<a href="{{ route('dashboard_cuti') }}" class="navi-link px-0">
																					<span class="navi-icon mr-4">
																						<span class="svg-icon svg-icon-lg">
																							<!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Mail-heart.svg-->
																							<img src="assets/media/logos/icon_history_presensi.png" alt="HPK" width="50px">
																							<!--end::Svg Icon-->
																						</span>
																					</span>
																					<div class="navi-text">
																						<div class="text-dark-75 mb-1 font-size-lg">Management Cuti</div>
																						<div class="text-muted">Menu Management Cuti Karyawan</div>
																					</div>
																					<div class="navi-label">
																						&gt;
																					</div>
																				</a>
																			</div>
																			<!--end:Item-->
																		</div>
																	</div>
																</div>
															</div>
															<div class="tab-pane" id="tab_forms_widget_3" role="tabpanel">
																<div class="card card-custom gutter-b">
																	<div class="card-header">
																		<div class="card-title">
																			<h3 class="card-label">
																				Fitur tersedia dari Offboarding
																			</h3>
																		</div>
																	</div>
																	<div class="card-body">
																		<div class="row">
																			<div class="col-12">
																				<!--begin::Item-->
																				<div class="d-flex flex-wrap align-items-center mb-5">
																					<div class="symbol symbol-40 symbol-light-primary mr-5">
																						<span class="symbol-label"><i class="flaticon2-file icon-lg"></i></span>
																					</div>
																					<div class="d-flex flex-column font-weight-bold">
																						<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Form Kelengkapan Data Pensiun</a>
																					</div>
																				</div>
																				<!--end::Item-->
																				<!--begin::Item-->
																				<div class="d-flex flex-wrap align-items-center mb-5">
																					<div class="symbol symbol-40 symbol-light-primary mr-5">
																						<span class="symbol-label"><i class="flaticon2-information icon-lg"></i></span>
																					</div>
																					<div class="d-flex flex-column font-weight-bold">
																						<a href="#" class="text-dark text-hover-primary mb-1 font-size-lg">Informasi Hak-Hak Terakhir</a>
																					</div>
																				</div>
																				<!--end::Item-->
																			</div>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<!--end::Nav Content-->
													</div>
													<!--end::Body-->
												</div>
											</div>
						
											{{-- Start- Smart Learning body  --}}
											<div class="col-lg-12 col-xxl-12">
												<div class="card card-custom  card-stretch gutter-b">
													<!--begin::Header-->
													<div class="card-header border-0 pt-7">
														<h2 class="card-title align-items-start flex-column">
															<span class="card-label font-weight-bold font-size-h3 text-dark-75"><i class="flaticon-presentation-1 mr-2"></i> Smart Learning</span>
														</h2>
														<div class="card-toolbar">
														</div>
													</div>
													<!--end::Header-->
													<div class="card-body pt-1">
														<div class="row">
															<div class="col-sm-6">
																<div class="card card-custom bgi-repeat-y card-stretch card-stretch-half gutter-b" style=" background-image: url('../../assets/media/logos/Banner_TA.png'); background-size: cover; height:70%">
																	<!--begin::Body Text-->
																	<div class="card-body d-flex align-items-center">
																		<div class="d-flex w-100 px-xl-4">
																			<div class="row">
																				<div class="col-sm-2 mt-3">
																					<img src="assets/media/logos/icon_LDMS.png" width="40px">
																				</div>
																				<div class="col-sm-10">
																					<h3 style="font-size: 25px;" class="text-white font-weight-bolder line-height-lg mb-1">Training Administration</h3>
																					<p style="color:white">Mengurus Administrasi Training Lebih Mudah</p>
																					<a href="" target="_blank" class="btn btn-sm btn-light  font-weight-bold float-right">Lihat Detail</a>
																				</div>
																			</div>
																		</div>
																	</div>
																	<!--end::Body Text-->
																</div>
															</div>

															<div class="col-sm-6">
																<div class="card card-custom bgi-repeat-y card-stretch card-stretch-half gutter-b bgi-size-cover" style=" background-image: url('../../assets/media/logos/Banner_LXP.png'); height:70%">
																	<!--begin::Body Text-->
																	<div class="card-body d-flex align-items-center">
																		<div class="d-flex w-100 px-xl-4">
																			<div class="row">
																				<div class="col-sm-2 mt-3">
																					<img src="assets/media/logos/icon_LXP.png" width="40px">
																				</div>
																				<div class="col-sm-10">
																					<h3 style="font-size: 25px;" class="text-white font-weight-bolder line-height-lg mb-1">Learning Experience Platform</h3>
																					<p style="color:white">Tingkatkan Pengetahuan dan Skill</p>
																					<a href="" target="_blank" class="btn btn-sm btn-light  font-weight-bold float-right">Lihat Detail</a>
																				</div>
																				
																			</div>
																		</div>
																	</div>
																	<!--end::Body Text-->
																</div>
															</div>
														</div>
													</div>
												</div>
											</div>
											{{-- End- Smart Learning body  --}}
						
											<div class="col-lg-12 col-xxl-12">
												<div class="card card-custom  card-stretch gutter-b">
													<!--begin::Header-->
													<div class="card-header border-0 pt-7">
														<h2 class="card-title align-items-start flex-column">
															<span class="card-label font-weight-bold font-size-h3 text-dark-75"><i class="flaticon-customer mr-2"></i> Smart Talent</span>
														</h2>
														<div class="card-toolbar">
														</div>
													</div>
													<!--end::Header-->
													<!--begin::Body-->
													<div class="card-body pt-1">
														<div class="row">
															<div class="col-md-12">
																<div class="card card-custom bgi-repeat-y  card-stretch gutter-b" style=" background-image: url('../../assets/media/error/BANNER-RPM.png'); background-size: cover">
																	<!--begin::Body Text-->
																	<div class="card-body d-flex align-items-center">
																		<div class="d-flex w-100 px-xl-4">
																			<div>
																				<h3 style="font-size: 25px;" class="text-dark font-weight-bolder mb-1">RMP</h3>
																				<h3 class="text-dark font-weight-bolder mb-1">Rotasi, Mutasi, dan Promosi</h3>
																				<p style="color:#495d75">Usulkan Talenta Paling Kompeten</p>
																				<a href="" class="btn btn-sm btn-light font-weight-bold text-dark">Lihat Detail</a>
																			</div>
																		</div>
																	</div>
																	<!--end::Body Text-->
																</div>
															</div>
														</div>
													</div>
													<!--end::Body-->
												</div>
											</div>
										</div>
									</div>
						
									<div class="col-lg-4 col-xxl-4 order-1">
										<div class="row">
											<div class="col-lg-12 col-xxl-12">
												<div class="card card-custom card-stretch gutter-b">
						
													<div class="card-header border-0">
														<h3 class="card-title font-weight-bolder"><i class="flaticon-app mr-2"></i>Aplikasi Disukai</h3>
														<div class="card-toolbar">
															<div class="dropdown dropdown-inline">
															</div>
														</div>
													</div>
												
													<!--begin::Body-->
													<div class="card-body pt-0">
														<!--begin:Nav-->
														<div class="navi navi-hover navi-active navi-link-rounded navi-bold navi-icon-center navi-light-icon">
															<!--begin:Item-->
															<div class="navi-item my-2">
																<a href="" class="navi-link px-0">
																	<span class="navi-icon mr-4">
																		<span class="svg-icon svg-icon-lg">
																			<!--begin::Svg Icon-->
																			<img src="assets/media/logos/icon_kpi.png" alt="Kpi" width="50px">
																			<!--end::Svg Icon-->
																		</span>
																	</span>
																	<div class="navi-text">
																		<div class="text-dark-75 mb-1 font-size-lg">Performance Management System</div>
																		<div class="text-muted">Key Performance Indicator (KPI)</div>
																	</div>
																	<div class="navi-label">
																		&gt;
																	</div>
																</a>
															</div>
															<!--end:Item-->

															<!--begin:Item-->
															<div class="navi-item my-2">
																<a href="#" class="navi-link px-0">
																	<span class="navi-icon mr-4">
																		<span class="svg-icon svg-icon-lg">
																			<!--begin::Svg Icon-->
																			<img src="assets/media/logos/icon_akhlak.png" alt="Kpi" width="50px">
																			<!--end::Svg Icon-->
																		</span>
																	</span>
																	<div class="navi-text">
																		<div class="text-dark-75 mb-1 font-size-lg">AKHLAK</div>
																		<div class="text-muted">Penilaian AKHLAK Pegawai</div>
																	</div>
																	<div class="navi-label">
																		&gt;
																	</div>
																</a>
															</div>
															<!--end:Item-->
															<!--begin:Item-->
															<div class="navi-item my-2">
																<a href="#" class="navi-link px-0">
																	<span class="navi-icon mr-4">
																		<span class="svg-icon svg-icon-lg">
																			<!--begin::Svg Icon-->
																			<img src="assets/media/logos/icon_penilaian360.png" alt="360" width="50px">
																			<!--end::Svg Icon-->
																		</span>
																	</span>
																	<div class="navi-text">
																		<div class="text-dark-75 mb-1 font-size-lg">Penilaian 360</div>
																		<div class="text-muted">Penilaian Kompetensi Perilaku</div>
																	</div>
																	<div class="navi-label">
																		&gt;
																	</div>
																</a>
															</div>
															<!--end:Item-->
															<!--begin:Item-->
															<div class="navi-item my-2">
																<a href="#" class="navi-link px-0">
																	<span class="navi-icon mr-4">
																		<span class="svg-icon svg-icon-lg">
																			<!--begin::Svg Icon-->
																			<img src="assets/media/logos/icon_diklat.png" alt="DIKLAT" width="50px">
																			<!--end::Svg Icon-->
																		</span>
																	</span>
																	<div class="navi-text">
																		<div class="text-dark-75 mb-1 font-size-lg">LDMS</div>
																		<div class="text-muted">Aplikasi PI-LDMS</div>
																	</div>
																	<div class="navi-label">
																		&gt;
																	</div>
																</a>
															</div>
															<!--end:Item-->
														</div>
														<!--end:Nav-->
													</div>
													<!--end::Body-->
												
													<div class="card-footer d-flex justify-content-center py-5">
														<a href="{{ route('daftarAplikasi') }}" class="btn btn-light-primary font-weight-bold text-center">Lihat Semua Aplikasi</a>
													</div>
													
												</div>
											</div>
						
											<div class="col-lg-12 col-xxl-12">
												<div class="card card-custom card-stretch gutter-b">
						
													<div class="card-header border-0">
														<h3 class="card-title font-weight-bolder"><i class="flaticon-time mr-2"></i>Aplikasi Terakhir Diakses</h3>
														<div class="card-toolbar">
															<div class="dropdown dropdown-inline">
															</div>
														</div>
													</div>
												
													<!--begin::Body-->
													<div class="card-body pt-0">
														<!--begin:Nav-->
														<div class="navi navi-hover navi-active navi-link-rounded navi-bold navi-icon-center navi-light-icon">
															<!--begin:Item-->
															<div class="navi-item my-2">
																<a href="#" class="navi-link px-0">
																	<span class="navi-icon mr-4">
																		<span class="svg-icon svg-icon-lg">
																			<!--begin::Svg Icon-->
																			<img src="assets/media/logos/icon_kpi.png" alt="Kpi" width="50px">
																			<!--end::Svg Icon-->
																		</span>
																	</span>
																	<div class="navi-text">
																		<div class="text-dark-75 mb-1 font-size-lg">Performance Management System</div>
																		<div class="text-muted">Key Performance Indicator (KPI)</div>
																	</div>
																	<div class="navi-label">
																		&gt;
																	</div>
																</a>
															</div>
															<!--end:Item-->
															<!--begin:Item-->
															<div class="navi-item my-2">
																<a href="#" class="navi-link px-0">
																	<span class="navi-icon mr-4">
																		<span class="svg-icon svg-icon-lg">
																			<!--begin::Svg Icon-->
																			<img src="assets/media/logos/icon_akhlak.png" alt="Kpi" width="50px">
																			<!--end::Svg Icon-->
																		</span>
																	</span>
																	<div class="navi-text">
																		<div class="text-dark-75 mb-1 font-size-lg">AKHLAK</div>
																		<div class="text-muted">Penilaian AKHLAK Pegawai</div>
																	</div>
																	<div class="navi-label">
																		&gt;
																	</div>
																</a>
															</div>
															<!--end:Item-->
														</div>
														<!--end:Nav-->
													</div>
													<!--end::Body-->
												</div>
											</div>
						
											<div class="col-lg-12 col-xxl-12">
												<div class="card card-custom card-stretch gutter-b" id="card-task" style="">
							
													<div class="card-header border-0">
														<h3 class="card-title font-weight-bolder"><i class="flaticon2-notepad mr-2"></i>Daftar Tugas</h3>
														<div class="card-toolbar">
															<div class="dropdown dropdown-inline">
															</div>
														</div>
													</div>
												
													<div class="card-body pt-0">
														<!--begin:Nav-->
														<div class="navi navi-hover navi-active navi-link-rounded navi-bold navi-icon-center navi-light-icon" id="body-task">
														  
														</div>
														<!--end:Nav-->
													</div>
												</div>
											</div>
						
											<div class="col-lg-12 col-xxl-12">
												<div class="card card-custom card-stretch gutter-b">
							
													<div class="card-header border-0">
														<h3 class="card-title font-weight-bolder"><i class="flaticon-reply mr-2"></i>Tautan Pintasan</h3>
														<div class="card-toolbar">
															<div class="dropdown dropdown-inline">
															</div>
														</div>
													</div>
												
													
													<div class="card-body pt-2">
														<div class="scroll scroll-pull" data-scroll="true" data-wheel-propagation="true" style="height: 150px; overflow: auto;">
														   <!--begin::Item-->
														   <div class="d-flex flex-wrap align-items-center mb-5">
																<!--begin::Title-->
																<div class="d-flex flex-column flex-grow-1 my-lg-0">
																	<div class="row">
																		<div class="col-10">
																			<a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Pengajuan Surat Keterangan</a><br>
																			<span class="text-muted font-weight-bold">Ajukan surat keterangan secara online</span>
																		</div>
																		<div class="col-2">
																		<!--begin::Btn-->
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-success">
																					<span class="svg-icon svg-icon-md">
																						<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																								<polygon points="0 0 24 0 24 24 0 24"></polygon>
																								<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1"></rect>
																								<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																							</g>
																						</svg>
																						<!--end::Svg Icon-->
																					</span>
																				</span>
																			</a>
																		<!--end::Btn-->
																		</div>
																	</div>
																</div>
																<!--end::Title-->
															</div>
															<!--end::Item-->
												
															<!--begin::Item-->
														   <div class="d-flex flex-wrap align-items-center mb-5">
																<!--begin::Title-->
																<div class="d-flex flex-column flex-grow-1 my-lg-0">
																	<div class="row">
																		<div class="col-10">
																			<a href="#" class="text-dark-75 font-weight-bold text-hover-primary font-size-lg mb-1">Presensi Online</a><br>
																			<span class="text-muted font-weight-bold">Presensi via Web</span>
																		</div>
																		<div class="col-2">
																		<!--begin::Btn-->
																			<a href="#" class="btn btn-icon btn-light btn-sm">
																				<span class="svg-icon svg-icon-success">
																					<span class="svg-icon svg-icon-md">
																						<!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Arrow-right.svg-->
																						<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
																							<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
																								<polygon points="0 0 24 0 24 24 0 24"></polygon>
																								<rect fill="#000000" opacity="0.3" transform="translate(12.000000, 12.000000) rotate(-90.000000) translate(-12.000000, -12.000000)" x="11" y="5" width="2" height="14" rx="1"></rect>
																								<path d="M9.70710318,15.7071045 C9.31657888,16.0976288 8.68341391,16.0976288 8.29288961,15.7071045 C7.90236532,15.3165802 7.90236532,14.6834152 8.29288961,14.2928909 L14.2928896,8.29289093 C14.6714686,7.914312 15.281055,7.90106637 15.675721,8.26284357 L21.675721,13.7628436 C22.08284,14.136036 22.1103429,14.7686034 21.7371505,15.1757223 C21.3639581,15.5828413 20.7313908,15.6103443 20.3242718,15.2371519 L15.0300721,10.3841355 L9.70710318,15.7071045 Z" fill="#000000" fill-rule="nonzero" transform="translate(14.999999, 11.999997) scale(1, -1) rotate(90.000000) translate(-14.999999, -11.999997)"></path>
																							</g>
																						</svg>
																						<!--end::Svg Icon-->
																					</span>
																				</span>
																			</a>
																		<!--end::Btn-->
																		</div>
																	</div>
																</div>
																<!--end::Title-->
															</div>
															<!--end::Item-->
														</div>
													</div>
												</div>
											</div>
										</div>
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
		<script>var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";</script>
		<!--begin::Global Config(global config for global JS scripts)-->
		<script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1400 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#8950FC", "warning": "#FFA800", "danger": "#F64E60", "light": "#E4E6EF", "dark": "#181C32" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#EBEDF3", "success": "#C9F7F5", "info": "#EEE5FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#ffffff", "secondary": "#3F4254", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#EBEDF3", "gray-300": "#E4E6EF", "gray-400": "#D1D3E0", "gray-500": "#B5B5C3", "gray-600": "#7E8299", "gray-700": "#5E6278", "gray-800": "#3F4254", "gray-900": "#181C32" } }, "font-family": "Poppins" };</script>
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
	</body>
	<!--end::Body-->
@endsection
 
