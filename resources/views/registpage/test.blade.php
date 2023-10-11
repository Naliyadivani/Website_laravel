<body id="kt_body"
        class="page-loading-enabled quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-minimize-hoverable aside-fixed">
        
        
        <div id="kt_header_mobile" class="header-mobile  header-mobile-fixed ">
            <div class="mobile-logo">
                <a href="assets/media/logos/PI-SMART-LOGO.png">
                </a>
            </div>

            <div class="d-flex align-items-center">
                <button class="btn p-0 burger-icon burger-icon-left" id="kt_aside_mobile_toggle">
                    <span></span>
                </button>

                <button class="btn btn-hover-text-primary p-0 ml-2" id="kt_header_mobile_topbar_toggle">
                    <span
                        class="svg-icon svg-icon-xl"><!--begin::Svg Icon | path:public/media/svg/icons/General/User.svg--><svg
                            xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24"></polygon>
                                <path
                                    d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                    fill="#000000" fill-rule="nonzero" opacity="0.3"></path>
                                <path
                                    d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                    fill="#000000" fill-rule="nonzero"></path>
                            </g>
                        </svg><!--end::Svg Icon--></span>
                </button>

            </div>
        </div>
        
        <div class="d-flex flex-column flex-root">
            <div class="d-flex flex-row flex-column-fluid page">

                <div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
                    <div class="brand flex-column-auto" id="kt_brand">
                            <a href="{{ route('dashboard') }}" class="brand-logo">
                                <img alt="Logo" src="assets/media/logos/PI-SMART-LOGO.png" width="162.092px" height="48.325px"/>
                            </a>
                        

                        <button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
                            <span
                                class="svg-icon svg-icon svg-icon-xl">
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
                    </div>

                    <!--begin::Aside Menu-->
                    <div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">
                        <!--begin::Menu Container-->
                        <div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1">
                            <!--begin::Menu Nav-->
                            <ul class="menu-nav ">
                                <li class="menu-item menu-item-active" aria-haspopup="true">
                                    <a href="{{ route('dashboard') }}" class="menu-link ">
                                        <span class="svg-icon menu-icon">
											<!--begin::Svg Icon-->
											<svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
												<path d="M1.34888 13.9299L9.17584 19.6697C9.53775 19.9351 10.0321 19.9269 10.385 19.6496L17.6646 13.9299" stroke="#264178" stroke-width="1.5" stroke-linecap="round"/>
												<path d="M18.4005 7.81967L10.4329 1.50117C10.0583 1.20407 9.52575 1.21375 9.16216 1.52427L1.14752 8.36902C0.668865 8.7778 0.682391 9.52185 1.17558 9.91297L9.14314 16.2315C9.51778 16.5286 10.0503 16.5189 10.4139 16.2084L18.4286 9.36362C18.9072 8.95483 18.8937 8.21078 18.4005 7.81967Z" fill="#264178"/>
											  </svg>
											<!--end::Svg Icon-->
										</span>
										<span class="menu-text">Halaman Utama</a></span>
                                    </a>
                                </li>

                                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
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

                                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
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

								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
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

                                <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="javascript:;" class="menu-link menu-toggle">
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
								
								<li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
									<a href="{{ url('loginpage') }}" class="menu-link menu-toggle">
										<span class="svg-icon menu-icon">
											<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
											<svg xmlns="http://www.w3.org/2000/svg" width="21" height="19" viewBox="0 0 21 19" fill="none">
												<path d="M15.5492 13.1195L19.3526 9.34406M19.3526 9.34406L15.5492 5.56864M19.3526 9.34406H6.04069M11.7458 13.1195V14.0633C11.7458 14.8143 11.4452 15.5345 10.9103 16.0656C10.3753 16.5966 9.64978 16.8949 8.89324 16.8949H5.08985C4.33331 16.8949 3.60775 16.5966 3.0728 16.0656C2.53784 15.5345 2.2373 14.8143 2.2373 14.0633V4.62478C2.2373 3.8738 2.53784 3.15358 3.0728 2.62256C3.60775 2.09154 4.33331 1.79321 5.08985 1.79321H8.89324C9.64978 1.79321 10.3753 2.09154 10.9103 2.62256C11.4452 3.15358 11.7458 3.8738 11.7458 4.62478V5.56864" stroke="#8691AD" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
											  </svg>

                                              {{-- <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                    <rect x="0" y="0" width="24" height="24"></rect>
                                                    <path d="M14.0069431,7.00607258 C13.4546584,7.00607258 13.0069431,6.55855153 13.0069431,6.00650634 C13.0069431,5.45446114 13.4546584,5.00694009 14.0069431,5.00694009 L15.0069431,5.00694009 C17.2160821,5.00694009 19.0069431,6.7970243 19.0069431,9.00520507 L19.0069431,15.001735 C19.0069431,17.2099158 17.2160821,19 15.0069431,19 L3.00694311,19 C0.797804106,19 -0.993056895,17.2099158 -0.993056895,15.001735 L-0.993056895,8.99826498 C-0.993056895,6.7900842 0.797804106,5 3.00694311,5 L4.00694793,5 C4.55923268,5 5.00694793,5.44752105 5.00694793,5.99956624 C5.00694793,6.55161144 4.55923268,6.99913249 4.00694793,6.99913249 L3.00694311,6.99913249 C1.90237361,6.99913249 1.00694311,7.89417459 1.00694311,8.99826498 L1.00694311,15.001735 C1.00694311,16.1058254 1.90237361,17.0008675 3.00694311,17.0008675 L15.0069431,17.0008675 C16.1115126,17.0008675 17.0069431,16.1058254 17.0069431,15.001735 L17.0069431,9.00520507 C17.0069431,7.90111468 16.1115126,7.00607258 15.0069431,7.00607258 L14.0069431,7.00607258 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.006943, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-9.006943, -12.000000) "></path>
                                                    <rect fill="#000000" opacity="0.3" transform="translate(14.000000, 12.000000) rotate(-270.000000) translate(-14.000000, -12.000000) " x="13" y="6" width="2" height="12" rx="1"></rect>
                                                    <path d="M21.7928932,9.79289322 C22.1834175,9.40236893 22.8165825,9.40236893 23.2071068,9.79289322 C23.5976311,10.1834175 23.5976311,10.8165825 23.2071068,11.2071068 L20.2071068,14.2071068 C19.8165825,14.5976311 19.1834175,14.5976311 18.7928932,14.2071068 L15.7928932,11.2071068 C15.4023689,10.8165825 15.4023689,10.1834175 15.7928932,9.79289322 C16.1834175,9.40236893 16.8165825,9.40236893 17.2071068,9.79289322 L19.5,12.0857864 L21.7928932,9.79289322 Z" fill="#000000" fill-rule="nonzero" transform="translate(19.500000, 12.000000) rotate(-90.000000) translate(-19.500000, -12.000000) "></path>
                                                </g>
                                            </svg> --}}
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
                </div>
                <!--end::Aside-->


                <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">
                    <div id="kt_header" class="header  header-fixed ">

                        <div class="container-fluid d-flex align-items-center justify-content-between">
                            <div></div>
                            <div class="topbar">

                                <div class="dropdown">

                                    <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                        <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1">
                                            <span
                                                class="svg-icon svg-icon-xl svg-icon-primary"><!--begin::Svg Icon | path:public/media/svg/icons/Code/Compiling.svg--><svg
                                                    xmlns="http://www.w3.org/2000/svg"
                                                    xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                                                    height="24px" viewBox="0 0 24 24" version="1.1">
                                                    <g stroke="none" stroke-width="1" fill="none"
                                                        fill-rule="evenodd">
                                                        <rect x="0" y="0" width="24"
                                                            height="24"></rect>
                                                        <path
                                                            d="M2.56066017,10.6819805 L4.68198052,8.56066017 C5.26776695,7.97487373 6.21751442,7.97487373 6.80330086,8.56066017 L8.9246212,10.6819805 C9.51040764,11.267767 9.51040764,12.2175144 8.9246212,12.8033009 L6.80330086,14.9246212 C6.21751442,15.5104076 5.26776695,15.5104076 4.68198052,14.9246212 L2.56066017,12.8033009 C1.97487373,12.2175144 1.97487373,11.267767 2.56066017,10.6819805 Z M14.5606602,10.6819805 L16.6819805,8.56066017 C17.267767,7.97487373 18.2175144,7.97487373 18.8033009,8.56066017 L20.9246212,10.6819805 C21.5104076,11.267767 21.5104076,12.2175144 20.9246212,12.8033009 L18.8033009,14.9246212 C18.2175144,15.5104076 17.267767,15.5104076 16.6819805,14.9246212 L14.5606602,12.8033009 C13.9748737,12.2175144 13.9748737,11.267767 14.5606602,10.6819805 Z"
                                                            fill="#000000" opacity="0.3"></path>
                                                        <path
                                                            d="M8.56066017,16.6819805 L10.6819805,14.5606602 C11.267767,13.9748737 12.2175144,13.9748737 12.8033009,14.5606602 L14.9246212,16.6819805 C15.5104076,17.267767 15.5104076,18.2175144 14.9246212,18.8033009 L12.8033009,20.9246212 C12.2175144,21.5104076 11.267767,21.5104076 10.6819805,20.9246212 L8.56066017,18.8033009 C7.97487373,18.2175144 7.97487373,17.267767 8.56066017,16.6819805 Z M8.56066017,4.68198052 L10.6819805,2.56066017 C11.267767,1.97487373 12.2175144,1.97487373 12.8033009,2.56066017 L14.9246212,4.68198052 C15.5104076,5.26776695 15.5104076,6.21751442 14.9246212,6.80330086 L12.8033009,8.9246212 C12.2175144,9.51040764 11.267767,9.51040764 10.6819805,8.9246212 L8.56066017,6.80330086 C7.97487373,6.21751442 7.97487373,5.26776695 8.56066017,4.68198052 Z"
                                                            fill="#000000"></path>
                                                    </g>
                                                </svg><!--end::Svg Icon--></span>
                                        </div>
                                    </div>


                                    <div
                                        class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg shadow-lg">
                                        <form>
                                            <!--begin::Header-->
                                            <div class="d-flex flex-column pt-12 bgi-size-cover bgi-no-repeat rounded-top py-5"
                                                style="background-image: url('https://pismart.pupuk-indonesia.com/public/media/misc/bg-1.jpg')">
                                                <!--begin::Title-->
                                                <h4 class="d-flex flex-center rounded-top mb-5">
                                                    <span class="text-white">Modul Aplikasi</span>
                                                    <!-- <span class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2">23 new</span> -->
                                                </h4>
                                                <!--end::Title-->
                                            </div>
                                            <!--end::Header-->
                                            <!--begin::Content-->
                                            <div class="tab-content">
                                                <!--begin::Tabpane-->
                                                <div class="tab-pane active show" id="topbar_notifications_notifications"
                                                    role="tabpanel">
                                                    <!--begin::Scroll-->
                                                    <div class="navi navi-hover scroll ps" data-scroll="true"
                                                        data-height="250" data-mobile-height="200"
                                                        style="height: 250px; overflow: hidden;">
                                                        <!--begin::Item-->
                                                        <a href="https://pismart.pupuk-indonesia.com/performance/my_kpi"
                                                            class="navi-item">
                                                            <div class="navi-link d-flex align-items-center">
                                                                <div class="symbol symbol-40 mr-5 shadow-sm">
                                                                    <span class="symbol-label">
                                                                        <span class="svg-icon svg-icon-lg svg-icon-danger">
                                                                            <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\Files\File.svg-->
                                                                            <img src="https://pismart.pupuk-indonesia.com/public/assets/media/icon-menu/KPI4-22.svg"
                                                                                alt="Kpi" width="50px">
                                                                            <!--end::Svg Icon-->
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                                <div class="navi-text">
                                                                    <div class="text-dark-75 mb-1 font-size-lg">Performance
                                                                        Management System</div>
                                                                    <div class="text-muted">Key Performance Indicator (KPI)
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <a href="https://pismart.pupuk-indonesia.com/akhlak/my_akhlak"
                                                            class="navi-item">
                                                            <div class="navi-link d-flex align-items-center">
                                                                <div class="symbol symbol-40 mr-5 shadow-sm">
                                                                    <span class="symbol-label">
                                                                        <span
                                                                            class="svg-icon svg-icon-lg svg-icon-primary">
                                                                            <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\General\Star.svg-->
                                                                            <img src="https://pismart.pupuk-indonesia.com/public/assets/media/icon-menu/AKHLAK-13.svg"
                                                                                alt="Kpi" width="50px">
                                                                            <!--end::Svg Icon-->
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                                <div class="navi-text">
                                                                    <div class="text-dark-75 mb-1 font-size-lg">AKHLAK
                                                                    </div>
                                                                    <div class="text-muted">Penilaian AKHLAK Pegawai</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <a href="https://pismart.pupuk-indonesia.com/administrasi"
                                                            class="navi-item">
                                                            <div class="navi-link d-flex align-items-center">
                                                                <div
                                                                    class="symbol symbol-40 symbol-light-primary mr-5 shadow-sm">
                                                                    <span class="symbol-label">
                                                                        <span
                                                                            class="svg-icon svg-icon-lg svg-icon-primary">
                                                                            <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\Communication\Add-user.svg-->
                                                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                                                xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                                width="24px" height="24px"
                                                                                viewBox="0 0 24 24" version="1.1">
                                                                                <g stroke="none" stroke-width="1"
                                                                                    fill="none" fill-rule="evenodd">
                                                                                    <rect x="0" y="0"
                                                                                        width="24" height="24">
                                                                                    </rect>
                                                                                    <path d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                                                                        fill="#000000" opacity="0.3">
                                                                                    </path>
                                                                                    <path
                                                                                        d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                                                                        fill="#000000"></path>
                                                                                    <rect fill="#000000" opacity="0.3"
                                                                                        x="7" y="10"
                                                                                        width="5" height="2"
                                                                                        rx="1"></rect>
                                                                                    <rect fill="#000000" opacity="0.3"
                                                                                        x="7" y="14"
                                                                                        width="9" height="2"
                                                                                        rx="1"></rect>
                                                                                </g>
                                                                            </svg>
                                                                            <!--end::Svg Icon-->
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                                <div class="navi-text">
                                                                    <div class="text-dark-75 mb-1 font-size-lg">
                                                                        Administrasi</div>
                                                                    <div class="text-muted">Administrasi Pegawai</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <!--end::Item-->
                                                        <!--begin::Item-->
                                                        <a href="https://pismart.pupuk-indonesia.com/ldms"
                                                            class="navi-item" target="_blank">
                                                            <div class="navi-link d-flex align-items-center">
                                                                <div class="symbol symbol-40 mr-5 shadow-sm">
                                                                    <span class="symbol-label">
                                                                        <span class="svg-icon svg-icon-lg svg-icon-info">
                                                                            <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Shield-user.svg-->
                                                                            <img src="https://pismart.pupuk-indonesia.com/public/assets/media/icon-menu/DIKLAT-18.svg"
                                                                                alt="Kpi" width="50px">
                                                                            <!--end::Svg Icon-->
                                                                        </span>
                                                                    </span>
                                                                </div>
                                                                <div class="navi-text">
                                                                    <div class="text-dark-75 mb-1 font-size-lg">LDMS</div>
                                                                    <div class="text-muted">Aplikasi PI-LDMS</div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <!--end::Item-->
                                                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                                            <div class="ps__thumb-x" tabindex="0"
                                                                style="left: 0px; width: 0px;"></div>
                                                        </div>
                                                        <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                                            <div class="ps__thumb-y" tabindex="0"
                                                                style="top: 0px; height: 0px;"></div>
                                                        </div>
                                                    </div>
                                                    <!--end::Scroll-->
                                                    <!--begin::Action-->
                                                    <div class="d-flex flex-center py-7">
                                                        <a href="https://pismart.pupuk-indonesia.com/daftar_aplikasi"
                                                            class="btn btn-light-primary font-weight-bold text-center">Lihat
                                                            Semua Aplikasi</a>
                                                    </div>
                                                    <!--end::Action-->
                                                </div>
                                                <!--end::Tabpane-->
                                            </div>
                                            <!--end::Content-->
                                        </form>
                                    </div>
                                </div>


                                <div class="dropdown">

                                    <div class="topbar-item" data-toggle="dropdown" data-offset="10px,0px">
                                        <div class="btn btn-icon btn-clean btn-dropdown btn-lg mr-1 pulse pulse-primary">
                                            <i class="flaticon2-bell-5 text-primary"></i>
                                            <span class="pulse-ring"></span>
                                        </div>
                                    </div>


                                    <div
                                        class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg">
                                        <form>
                                            <div class="d-flex flex-column pt-12 pb-5 bgi-size-cover bgi-no-repeat rounded-top"
                                                style="background-image: url('https://pismart.pupuk-indonesia.com/public/media/misc/bg-1.jpg')">

                                                <h4 class="d-flex flex-center rounded-top">
                                                    <span class="text-white">Notifikasi</span>
                                                    <span
                                                        class="btn btn-text btn-success btn-sm font-weight-bold btn-font-md ml-2 jumlah-notif">1
                                                        Belum dibaca</span>
                                                </h4>


                                                <!-- <ul class="nav nav-bold nav-tabs nav-tabs-line nav-tabs-line-2x nav-tabs-line-transparent-white nav-tabs-line-active-border-success mt-3 px-8" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active show" data-toggle="tab" href="#topbar_notifications_events"  >Events</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#topbar_notifications_logs"  >Logs</a>
                </li>
            </ul> -->
                                            </div>
                                            <div class="tab-content">
                                                <div class="tab-pane  active show" id="topbar_notifications_events" role="tabpanel">

                                                    <div class="navi navi-hover scroll my-4 notif-list ps"
                                                        id="topbar-notif-container" data-scroll="true" data-height="300"
                                                        data-mobile-height="250" style="height: 300px; overflow: hidden;">

                                                        <div class="ps__rail-x" style="left: 0px; bottom: 0px;">
                                                            <div class="ps__thumb-x" tabindex="0"
                                                                style="left: 0px; width: 0px;"></div>
                                                        </div>
                                                        <div class="ps__rail-y" style="top: 0px; right: 0px;">
                                                            <div class="ps__thumb-y" tabindex="0"
                                                                style="top: 0px; height: 0px;"></div>
                                                        </div><a href="#" class="navi-item">
                                                            <div class="navi-link">
                                                                <div class="navi-icon mr-3">
                                                                    <img widht="30px" height="30px" class="rounded"
                                                                        src="https://storage.googleapis.com/lumen-oauth-storage/DataKaryawan/Foto/A000/82105096.jpg">
                                                                </div>
                                                                <div class="navi-text">
                                                                    <div class="font-weight-bold">
                                                                        Doni telah menyetujui Travel Request dengan no trip
                                                                        A23002097
                                                                    </div>
                                                                    <div class="text-muted">
                                                                        30 Aug 23
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a><a href="#" class="navi-item">
                                                            <div class="navi-link">
                                                                <div class="navi-icon mr-3">
                                                                    <img widht="30px" height="30px" class="rounded"
                                                                        src="https://storage.googleapis.com/lumen-oauth-storage/DataKaryawan/Foto/B000/2105096.jpg">
                                                                </div>
                                                                <div class="navi-text">
                                                                    <div class="font-weight-bold">
                                                                        Doni telah Mensetujui KPI Individu anda
                                                                    </div>
                                                                    <div class="text-muted">
                                                                        05 Jul 23
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                </div>
                                                     <!--<div class="tab-pane" id="topbar_notifications_logs" role="tabpanel">
            
                                                    <div class="d-flex flex-center text-center text-muted min-h-200px">
                                                        All caught up!
                                                        <br/>
                                                        No new notifications.
                                                    </div>
                                                </div>-->
                                            </div>
                                        </form>
                                    </div>
                                </div>


                                <div class="dropdown">
                                    <div class="topbar-item" data-toggle="dropdown" data-offset="0px,0px">
                                        <div class="btn btn-icon w-auto btn-clean d-flex align-items-center btn-lg px-2">
                                            <span
                                                class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>
                                            <span
                                                class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">
                                                Alif Friesen (1200024)</span>
                                        </div>
                                    </div>


                                    <div
                                        class="dropdown-menu p-0 m-0 dropdown-menu-right dropdown-menu-anim-up dropdown-menu-lg p-0">
                                        <div class="d-flex align-items-center justify-content-between flex-wrap p-8 bgi-size-cover bgi-no-repeat rounded-top"
                                            style="background-image: url('https://pismart.pupuk-indonesia.com/public/media/misc/bg-1.jpg')">
                                            <div class="d-flex align-items-center mr-2">

                                                <div class="text-white m-0 flex-grow-1 mr-3 font-size-h5">Alif Friesen</div>
                                            </div>
                                            <span
                                                class="label label-success label-lg font-weight-bold label-inline">1200024</span>
                                        </div>


                                        <div class="navi navi-spacer-x-0 pt-5">


                                            <div class="d-flex justify-content-center">
                                                <div class="symbol symbol-100 mr-5">
                                                    <img alt="Pic"
                                                        src="https://pismart.pupuk-indonesia.com/public/assets/media/users/default.jpg">
                                                    <i class="symbol-badge bg-success"></i>
                                                </div>
                                                <div class="d-flex flex-column">
                                                    <div href="#"
                                                        class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">
                                                        Alif Friesen</div>
                                                    <div class="navi mt-2">
                                                        <div href="#" class="navi-item">
                                                            <span class="navi-link p-0 pb-2">
                                                                <span class="navi-icon mr-1">
                                                                    <span
                                                                        class="svg-icon svg-icon-primary svg-icon-lg"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\General\User.svg--><svg
                                                                            xmlns="http://www.w3.org/2000/svg"
                                                                            xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                            width="24px" height="24px"
                                                                            viewBox="0 0 24 24" version="1.1">
                                                                            <g stroke="none" stroke-width="1"
                                                                                fill="none" fill-rule="evenodd">
                                                                                <polygon points="0 0 24 0 24 24 0 24">
                                                                                </polygon>
                                                                                <path
                                                                                    d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                                                                    fill="#000000" fill-rule="nonzero"
                                                                                    opacity="0.3"></path>
                                                                                <path
                                                                                    d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                                                                    fill="#000000" fill-rule="nonzero">
                                                                                </path>
                                                                            </g>
                                                                        </svg><!--end::Svg Icon--></span>
                                                                </span>
                                                                <span
                                                                    class="navi-text text-muted text-hover-primary">1200024</span>
                                                            </span>
                                                        </div>
                                                        <a href="https://pismart.pupuk-indonesia.com/profile/personal"
                                                            class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5">My
                                                            Profile</a>
                                                    </div>
                                                </div>
                                            </div>


                                            <div class="navi-separator mt-3"></div>
                                            <div class="navi-footer px-8 py-5">
                                                <a href="{{route('loginpage')}}"
                                                    class="btn btn-light-danger font-weight-bold btn-lg btn-block">Log
                                                    Out</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
                        <div class="subheader py-2  subheader-solid " id="kt_subheader">
                            <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                                <div class="d-flex align-items-center flex-wrap mr-1">
                                    <h5 class="text-dark font-weight-bold my-2 mr-5">Daftar Aplikasi</h5>
                                </div>
                                {{-- <div class="d-flex align-items-center">
                                </div> --}}
                            </div>
                        </div>

                        <div class="d-flex flex-column-fluid">

                            <div class="container-fluid">
                                <div class="content pt-0 d-flex flex-column flex-column-fluid" id="kt_content">
                                    <!--begin::Entry-->
                                    <!--begin::Section-->
                                    <div class="container gutter-b">
                                        <div class="row">
                                            <div class="col-lg-4 mb-5">
                                                <!--begin::Callout-->
                                                <a href="#" class="card card-custom mb-8 mb-lg-0 shadow-sm wave wave-animate-slow ">
                                                    <div class="card-body px-0">
                                                        <div class="d-flex align-items-center p-6">
                                                            <!--begin::Icon-->
                                                            <div class="mr-6">
                                                                <span class="svg-icon svg-icon-primary">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
                                                                    <img src=" "
                                                                        alt="Kpi" width="50px">
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Content-->
                                                            <div class="d-flex flex-column">
                                                                <h3 class="text-dark h3 mb-3">Performance Management System
                                                                </h3>
                                                                <div class="text-dark-50">Key Performance Indicator (KPI)
                                                                </div>
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                    </div>
                                                </a>
                                                <!--end::Callout-->
                                            </div>
                                            <div class="col-lg-4 mb-5">
                                                <!--begin::Callout-->
                                                <a href="" class="card card-custom mb-8 mb-lg-0 shadow-sm wave wave-animate-slow">
                                                    <div class="card-body px-0">
                                                        <div class="d-flex align-items-center p-6">
                                                            <!--begin::Icon-->
                                                            <div class="mr-6">
                                                                <span class="svg-icon svg-icon-warning">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Clipboard-check.svg-->
                                                                    <img src="" alt="Kpi" width="50px">
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Content-->
                                                            <div class="d-flex flex-column">
                                                                <h3 class="text-dark h3 mb-3">AKHLAK</h3>
                                                                <div class="text-dark-50">Penilaian AKHLAK Pegawai</div>
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                    </div>
                                                </a>
                                                <!--end::Callout-->
                                            </div>
                                            <div class="col-lg-4 mb-5">
                                                <!--begin::Callout-->
                                                <a href="#" class="card card-custom mb-8 mb-lg-0 shadow-sm wave wave-animate-slow">
                                                    <div class="card-body px-0">
                                                        <div class="d-flex align-items-center p-6">
                                                            <!--begin::Icon-->
                                                            <div class="mr-6">
                                                                <span class="svg-icon svg-icon-danger svg-icon-4x">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Clipboard-check.svg-->
                                                                    {{-- <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <polygon points="0 0 24 0 24 24 0 24">
                                                                            </polygon>
                                                                            <path
                                                                                d="M18,8 L16,8 C15.4477153,8 15,7.55228475 15,7 C15,6.44771525 15.4477153,6 16,6 L18,6 L18,4 C18,3.44771525 18.4477153,3 19,3 C19.5522847,3 20,3.44771525 20,4 L20,6 L22,6 C22.5522847,6 23,6.44771525 23,7 C23,7.55228475 22.5522847,8 22,8 L20,8 L20,10 C20,10.5522847 19.5522847,11 19,11 C18.4477153,11 18,10.5522847 18,10 L18,8 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                                                fill="#000000" fill-rule="nonzero"
                                                                                opacity="0.3"></path>
                                                                            <path
                                                                                d="M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                                                fill="#000000" fill-rule="nonzero"></path>
                                                                        </g>
                                                                    </svg> --}}
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Content-->
                                                            <div class="d-flex flex-column">
                                                                <h3 class="text-dark h3 mb-3">E-Recruitment</h3>
                                                                <div class="text-dark-50">Rekrutmen dan Magang</div>
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                    </div>
                                                </a>
                                                <!--end::Callout-->
                                            </div>
                                            <div class="col-lg-4 mb-5">
                                                <!--begin::Callout-->
                                                <a href=""
                                                    class="card card-custom mb-8 mb-lg-0 shadow-sm wave wave-animate-slow">
                                                    <div class="card-body px-0">
                                                        <div class="d-flex align-items-center p-6">
                                                            <!--begin::Icon-->
                                                            <div class="mr-6">
                                                                <span class="svg-icon svg-icon-success svg-icon-4x">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Clipboard-check.svg-->
                                                                    {{-- <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <rect x="0" y="0"
                                                                                width="24" height="24"></rect>
                                                                            <path
                                                                                d="M8,3 L8,3.5 C8,4.32842712 8.67157288,5 9.5,5 L14.5,5 C15.3284271,5 16,4.32842712 16,3.5 L16,3 L18,3 C19.1045695,3 20,3.8954305 20,5 L20,21 C20,22.1045695 19.1045695,23 18,23 L6,23 C4.8954305,23 4,22.1045695 4,21 L4,5 C4,3.8954305 4.8954305,3 6,3 L8,3 Z"
                                                                                fill="#000000" opacity="0.3"></path>
                                                                            <path
                                                                                d="M11,2 C11,1.44771525 11.4477153,1 12,1 C12.5522847,1 13,1.44771525 13,2 L14.5,2 C14.7761424,2 15,2.22385763 15,2.5 L15,3.5 C15,3.77614237 14.7761424,4 14.5,4 L9.5,4 C9.22385763,4 9,3.77614237 9,3.5 L9,2.5 C9,2.22385763 9.22385763,2 9.5,2 L11,2 Z"
                                                                                fill="#000000"></path>
                                                                            <rect fill="#000000" opacity="0.3"
                                                                                x="7" y="10"
                                                                                width="5" height="2"
                                                                                rx="1"></rect>
                                                                            <rect fill="#000000" opacity="0.3"
                                                                                x="7" y="14"
                                                                                width="9" height="2"
                                                                                rx="1"></rect>
                                                                        </g>
                                                                    </svg> --}}
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Content-->
                                                            <div class="d-flex flex-column">
                                                                <h3 class="text-dark h3 mb-3">Administrasi</h3>
                                                                <div class="text-dark-50">Administrasi Pegawai</div>
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                    </div>
                                                </a>
                                                <!--end::Callout-->
                                            </div>
                                            <div class="col-lg-4 mb-5">
                                                <!--begin::Callout-->
                                                {{-- <a href="#" class="card card-custom mb-8 mb-lg-0 shadow-sm wave ">
                                                    <div class="card-body px-0">
                                                        <div class="d-flex align-items-center p-6">
                                                            <!--begin::Icon-->
                                                            <div class="mr-6">
                                                                <span class="svg-icon svg-icon-primary svg-icon-4x">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Clipboard-check.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <polygon points="0 0 24 0 24 24 0 24">
                                                                            </polygon>
                                                                            <path
                                                                                d="M18,14 C16.3431458,14 15,12.6568542 15,11 C15,9.34314575 16.3431458,8 18,8 C19.6568542,8 21,9.34314575 21,11 C21,12.6568542 19.6568542,14 18,14 Z M9,11 C6.790861,11 5,9.209139 5,7 C5,4.790861 6.790861,3 9,3 C11.209139,3 13,4.790861 13,7 C13,9.209139 11.209139,11 9,11 Z"
                                                                                fill="#000000" fill-rule="nonzero"
                                                                                opacity="0.3"></path>
                                                                            <path
                                                                                d="M17.6011961,15.0006174 C21.0077043,15.0378534 23.7891749,16.7601418 23.9984937,20.4 C24.0069246,20.5466056 23.9984937,21 23.4559499,21 L19.6,21 C19.6,18.7490654 18.8562935,16.6718327 17.6011961,15.0006174 Z M0.00065168429,20.1992055 C0.388258525,15.4265159 4.26191235,13 8.98334134,13 C13.7712164,13 17.7048837,15.2931929 17.9979143,20.2 C18.0095879,20.3954741 17.9979143,21 17.2466999,21 C13.541124,21 8.03472472,21 0.727502227,21 C0.476712155,21 -0.0204617505,20.45918 0.00065168429,20.1992055 Z"
                                                                                fill="#000000" fill-rule="nonzero"></path>
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Content-->
                                                            <div class="d-flex flex-column">
                                                                <h3 class="text-dark h3 mb-3">Diklat</h3>
                                                                <div class="text-dark-50">Pelatihan dan Sertifikasi</div>
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                    </div>
                                                </a>
                                                <!--end::Callout-->
                                            </div>
                                            <div class="col-lg-4 mb-5">
                                                <!--begin::Callout-->
                                                <a href="https://pismart.pupuk-indonesia.com/elearning"
                                                    class="card card-custom mb-8 mb-lg-0 shadow-sm wave ">
                                                    <div class="card-body px-0">
                                                        <div class="d-flex align-items-center p-6">
                                                            <!--begin::Icon-->
                                                            <div class="mr-6">
                                                                <span class="svg-icon svg-icon-warning svg-icon-4x">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Clipboard-check.svg-->
                                                                    <svg xmlns="http://www.w3.org/2000/svg"
                                                                        xmlns:xlink="http://www.w3.org/1999/xlink"
                                                                        width="24px" height="24px" viewBox="0 0 24 24"
                                                                        version="1.1">
                                                                        <g stroke="none" stroke-width="1" fill="none"
                                                                            fill-rule="evenodd">
                                                                            <rect x="0" y="0"
                                                                                width="24" height="24"></rect>
                                                                            <path
                                                                                d="M13.6855025,18.7082217 C15.9113859,17.8189707 18.682885,17.2495635 22,17 C22,16.9325178 22,13.1012863 22,5.50630526 L21.9999762,5.50630526 C21.9999762,5.23017604 21.7761292,5.00632908 21.5,5.00632908 C21.4957817,5.00632908 21.4915635,5.00638247 21.4873465,5.00648922 C18.658231,5.07811173 15.8291155,5.74261533 13,7 C13,7.04449645 13,10.79246 13,18.2438906 L12.9999854,18.2438906 C12.9999854,18.520041 13.2238496,18.7439052 13.5,18.7439052 C13.5635398,18.7439052 13.6264972,18.7317946 13.6855025,18.7082217 Z"
                                                                                fill="#000000"></path>
                                                                            <path
                                                                                d="M10.3144829,18.7082217 C8.08859955,17.8189707 5.31710038,17.2495635 1.99998542,17 C1.99998542,16.9325178 1.99998542,13.1012863 1.99998542,5.50630526 L2.00000925,5.50630526 C2.00000925,5.23017604 2.22385621,5.00632908 2.49998542,5.00632908 C2.50420375,5.00632908 2.5084219,5.00638247 2.51263888,5.00648922 C5.34175439,5.07811173 8.17086991,5.74261533 10.9999854,7 C10.9999854,7.04449645 10.9999854,10.79246 10.9999854,18.2438906 L11,18.2438906 C11,18.520041 10.7761358,18.7439052 10.4999854,18.7439052 C10.4364457,18.7439052 10.3734882,18.7317946 10.3144829,18.7082217 Z"
                                                                                fill="#000000" opacity="0.3"></path>
                                                                        </g>
                                                                    </svg>
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Content-->
                                                            <div class="d-flex flex-column">
                                                                <h3 class="text-dark h3 mb-3">E-Learning</h3>
                                                                <div class="text-dark-50">Smart E-Learning</div>
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                    </div>
                                                </a> --}}
                                                <!--end::Callout-->
                                            </div>
                                            <div class="col-lg-4 mb-5">
                                                <!--begin::Callout-->
                                                {{-- <a href="https://pismart.pupuk-indonesia.com/ldms"
                                                    class="card card-custom mb-8 mb-lg-0 shadow-sm wave ">
                                                    <div class="card-body px-0">
                                                        <div class="d-flex align-items-center p-6">
                                                            <!--begin::Icon-->
                                                            <div class="mr-6">
                                                                <span class="svg-icon svg-icon-danger">
                                                                    <!--begin::Svg Icon | path:assets/media/svg/icons/Communication/Clipboard-check.svg-->
                                                                    <img src="https://pismart.pupuk-indonesia.com/public/assets/media/icon-menu/DIKLAT-18.svg"
                                                                        alt="Kpi" width="50px">
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Content-->
                                                            <div class="d-flex flex-column">
                                                                <h3 class="text-dark h3 mb-3">LDMS</h3>
                                                                <div class="text-dark-50">Aplikasi PI-LDMS</div>
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                    </div>
                                                </a> --}}
                                                <!--end::Callout-->
                                            </div>
                                            <div class="col-lg-4 mb-5">
                                                <!--begin::Callout-->
                                                {{-- <a href="https://pismart.pupuk-indonesia.com/survey_three_sixty/index"
                                                    class="card card-custom mb-8 mb-lg-0 shadow-sm wave ">
                                                    <div class="card-body px-0">
                                                        <div class="d-flex align-items-center p-6">
                                                            <!--begin::Icon-->
                                                            <div class="mr-6">
                                                                <span class="svg-icon svg-icon-primary svg-icon-4x">
                                                                    <img src="https://pismart.pupuk-indonesia.com/public/assets/media/icon-menu/PENILAIAN-360.svg"
                                                                        alt="360" width="50px">
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Content-->
                                                            <div class="d-flex flex-column">
                                                                <h3 class="text-dark h3 mb-3">Penilaian 360</h3>
                                                                <div class="text-dark-50">Penilaian Kompetensi Perilaku
                                                                </div>
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                    </div>
                                                </a> --}}
                                                <!--end::Callout-->
                                            </div>
                                            <div class="col-lg-4 mb-5">
                                                <!--begin::Callout-->
                                                <a href="{{ route('tjsl') }}"
                                                    class="card card-custom mb-8 mb-lg-0 shadow-sm wave ">
                                                    <div class="card-body px-0">
                                                        <div class="d-flex align-items-center p-6">
                                                            <!--begin::Icon-->
                                                            <div class="mr-6">
                                                                <span class="svg-icon svg-icon-primary svg-icon-4x">
                                                                    <img src=" "
                                                                        alt="360" width="50px">
                                                                    <!--end::Svg Icon-->
                                                                </span>
                                                            </div>
                                                            <!--end::Icon-->
                                                            <!--begin::Content-->
                                                            <div class="d-flex flex-column">
                                                                <h3 class="text-dark h3 mb-3">TJSL</h3>
                                                                <div class="text-dark-50">Tanggung Jawab Sosial dan
                                                                    Lingkungan</div>
                                                            </div>
                                                            <!--end::Content-->
                                                        </div>
                                                    </div>
                                                </a>
                                                <!--end::Callout-->
                                            </div>
                                        </div>
                                    </div>
                                    <!--end::Section-->
                                    <!--end::Entry-->
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="footer bg-white py-4 d-flex flex-lg-column " id="kt_footer">

                        <div
                            class=" container-fluid  d-flex flex-column flex-md-row align-items-center justify-content-between">

                            <div class="text-dark order-2 order-md-1">
                                <span class="text-muted font-weight-bold mr-2">2023 ©</span>
                                <a href="#" class="text-dark-75 text-hover-primary">PI-Smart</a>
                            </div>


                            <div class="nav nav-dark order-1 order-md-2">
                                <a href="https://pismart.pupuk-indonesia.com/panduan_pengguna"
                                    class="nav-link pr-3 pl-0">Panduan Pengguna</a>
                                <a href="https://pismart.pupuk-indonesia.com/kebijakan_privasi"
                                    class="nav-link pr-3 pl-0">Kebijakan Privasi</a>
                            
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="kt_scrolltop" class="scrolltop">
            <span class="svg-icon"><!--begin::Svg Icon | path:public/media/svg/icons/Navigation/Up-2.svg--><svg
                    xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24"></polygon>
                        <rect fill="#000000" opacity="0.3" x="11" y="10" width="2"
                            height="10" rx="1"></rect>
                        <path
                            d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                            fill="#000000" fill-rule="nonzero"></path>
                    </g>
                </svg><!--end::Svg Icon--></span>

        </div>

        <svg id="SvgjsSvg1001" width="2" height="0" xmlns="http://www.w3.org/2000/svg" version="1.1"
            xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:svgjs="http://svgjs.com/svgjs"
            style="overflow: hidden; top: -100%; left: -100%; position: absolute; opacity: 0;">
            <defs id="SvgjsDefs1002"></defs>
            <polyline id="SvgjsPolyline1003" points="0,0"></polyline>
            <path id="SvgjsPath1004" d="M0 0 "></path>
        </svg>

    </body>