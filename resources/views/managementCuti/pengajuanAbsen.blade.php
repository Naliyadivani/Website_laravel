@extends('layout.tempWeb')

@section('kontenpage')

<body id="kt_body" class="page-loading-enabled quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-minimize-hoverable aside-fixed">
    <script>
        document.title='Pengajuan Absen | PI-Smart'
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
                        <ul class="menu-nav ">
                            <li class="menu-section menu-section--first">
                                <h4 class="menu-text">HALAMAN UTAMA</h4>
                                <i class="menu-icon flaticon-more-v2"></i>
                            </li>
                            <li class="menu-item menu-item-active" aria-haspopup="true">
                                <a href="{{ route('dashboard_absen') }}" class="menu-link ">
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

                            <li class="menu-section menu-section--first">
                                <h4 class="menu-text">ABSENCE MANAGEMENT</h4>
                                <i class="menu-icon flaticon-more-v2"></i>
                            </li>
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="{{ route('pengajuan_absen') }}" class="menu-link menu-toggle">
                                    <span class="svg-icon menu-icon flaticon-clock-2">
                                    </span>
                                    <span class="menu-text">Pengajuan Absen</span>
                                </a>
                            </li>

                            <li class="menu-section menu-section--first">
                                <h4 class="menu-text">MANAGER</h4>
                                <i class="menu-icon flaticon-more-v2"></i>
                            </li>
                            
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="javascript:;" class="menu-link menu-toggle">
                                    <span class="svg-icon menu-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"/>
                                                <path d="M12.9863016,8.83409843 C12.9953113,8.88805868 13,8.94348179 13,9 L13,11 L17,11 C18.1045695,11 19,11.8954305 19,13 L19,16 L5,16 L5,13 C5,11.8954305 5.8954305,11 7,11 L11,11 L11,9 C11,8.94348179 11.0046887,8.88805868 11.0136984,8.83409843 C9.84135601,8.42615464 9,7.31133193 9,6 C9,4.34314575 10.3431458,3 12,3 C13.6568542,3 15,4.34314575 15,6 C15,7.31133193 14.158644,8.42615464 12.9863016,8.83409843 Z" fill="#000000"/>
                                                <rect fill="#000000" opacity="0.3" x="5" y="18" width="14" height="2" rx="1"/>
                                            </g>
                                        </svg><!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-text">Absence Approver</span>
                                </a>
                            </li>

                            <li class="menu-section menu-section--first">
                                <h4 class="menu-text">ADMIN</h4>
                                <i class="menu-icon flaticon-more-v2"></i>
                            </li>

                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="{{ route('management_saldo') }}" class="menu-link menu-toggle">
                                    <span class="svg-icon menu-icon flaticon-add">
                                    </span>
                                    <span class="menu-text">Management Saldo</span>
                                </a>
                            </li>

                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="{{route('home')}}" class="menu-link menu-toggle">
                                    <span class="svg-icon menu-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <rect x="0" y="0" width="24" height="24"></rect>
                                                <path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z" fill="#000000"></path>
                                            </g>
                                        </svg>
                                        <!--end::Svg Icon-->
                                    </span>
                                    <span class="menu-text">Back To Home</span>
                                </a>
                            </li>
                            
                            <li class="menu-item menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                                <a href="{{ route('logout') }}" class="menu-link menu-toggle">
                                    <span class="svg-icon menu-icon">
                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
                                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="19" viewBox="0 0 21 19" fill="none">
                                            <path d="M15.5492 13.1195L19.3526 9.34406M19.3526 9.34406L15.5492 5.56864M19.3526 9.34406H6.04069M11.7458 13.1195V14.0633C11.7458 14.8143 11.4452 15.5345 10.9103 16.0656C10.3753 16.5966 9.64978 16.8949 8.89324 16.8949H5.08985C4.33331 16.8949 3.60775 16.5966 3.0728 16.0656C2.53784 15.5345 2.2373 14.8143 2.2373 14.0633V4.62478C2.2373 3.8738 2.53784 3.15358 3.0728 2.62256C3.60775 2.09154 4.33331 1.79321 5.08985 1.79321H8.89324C9.64978 1.79321 10.3753 2.09154 10.9103 2.62256C11.4452 3.15358 11.7458 3.8738 11.7458 4.62478V5.56864" stroke="#8691AD" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        </svg>
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
                                        <span class="label label-success label-lg font-weight-bold label-inline">{{ Auth::user()->nik }}</span>
                                    </div>
                
                                    <div class="navi navi-spacer-x-0 pt-5">
                                        <div class="d-flex justify-content-center">
                                            <div class="symbol symbol-100 mr-5">
                                                <img alt="Pic" src="https://pismart-dev.pupuk-indonesia.com/public/assets/media/users/default.jpg">  
                                                <i class="symbol-badge bg-success"></i>
                                            </div>
                                            <div class="d-flex flex-column">
                                                <div href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">{{ Auth::user()->name}}</div>
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
                                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Pengajuan Absen Pegawai </h5>
                                <!--end::Page Title-->
                            </div>
                            <!--end::Info-->
                        </div>
                    </div>
                    <!--end::Subheader-->

                    <!--begin::Entry Dashboard Page-->
                    <div class="d-flex flex-column-fluid">
                        <div class="container-fluid">
                            <div class="d-flex flex-column-fluid">
                                <div class="container-fluid p-0">
                                    <div class="card card-custom gutter-b">
                                        {{-- header  --}}
                                        <div class="card-header">
                                            <div class="card-title">
                                                <label>Daftar Pengajuan Absen Anda</label>
                                            </div>

                                            <div class="card-toolbar">
                                                <a href="{{ route('form_pengajuan_absen') }}" class="btn btn-primary py-2 px-4 font-weight-bolder font-size-m">
                                                    <i class="flaticon2-plus icon-sm"></i>Ajukan Absen
                                                </a>
                                            </div>
                                        </div>
                                        {{-- end- header  --}}

                                        {{-- body table  --}}
                                        <div class="card-body">

                                            {{-- <div class="pull-left">
                                            </div>

                                            <div class="pull-right">
                                                <div class="dataTables_length" id="kt_datatable_length">
                                                    <label>Show 
                                                        <select name="kt_datatable_length" aria-controls="kt_datatable" class="custom-select custom-select-sm form-control form-control-sm">
                                                            <option value="10">10</option>
                                                            <option value="25">25</option>
                                                            <option value="50">50</option>
                                                            <option value="100">100</option>
                                                        </select> entries
                                                    </label>
                                                </div>
                                            </div> --}}

                                            <div class="dataTables_scroll">
                                                <div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;">
                                                    <div class="dataTables_scrollHeadInner" style="box-sizing: content-box; padding-right: 15px;">
                                                        <table class="table table-head-custom table-head-bg table-hover text-center table-vertical-center dataTable no-footer" role="grid" id="kt_datatable">
                                                            <thead>
                                                                <tr class="text-center" role="row">
                                                                    <th>#</th>
                                                                    <th>Tipe Absen</th>
                                                                    <th>Deskripsi</th>
                                                                    <th>Tanggal Mulai</th>
                                                                    <th>Tanggal Akhir</th>
                                                                    <th>Status</th>
                                                                    <th>Action</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody id="formAbsen">
                                                                <input class="form-control" type="hidden" id="nik_user" name="nik_user" value="7222622" />
																<input class="form-control" type="hidden" id="company" name="company" value="A000" />
                                                            </tbody>
                                                        </table>
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

    <script>
        var emp_no = $("#nik_user").val();
        var company = $("#company").val();
        var year = 2023;
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        }); 
        
        readFormAbsen()
        //read DB
        function readFormAbsen(){
            $.ajax({
                type: "get",
                url: "http://10.9.12.150:9096/api/cuti/myCuti?nik="+{{ Auth::user()->nik }}+"&tahun="+year,
                
                success: function (data) {
                    var arr = data.data
                    $('#formAbsen').html('')
                    arr.forEach((y,i) => {
                        var html=`<tr>
                        <td>${i+1}</td>
                        <td>${y.tipe_absen.nama_tipe_absen}</td>
                        <td>${y.deskripsi}</td>
                        <td>${y.mulai_absen}</td>
                        <td>${y.akhir_absen}</td>
                        <td>${y.status}</td>
						<td class=" dt-body-nowarp">
							<button type="button" onclick="show('${y.id_pengajuan_absen}')" class="btn btn-icon my-2 btn-sm btn-warning" data-toggle="modal">
                            <i class="flaticon2-edit"></i>
                            </button> <button type="button" onclick="deleteItem('${y.id_pengajuan_absen}')" class="btn btn-icon my-2 btn-sm btn-danger">
                            <i class="flaticon2-trash"></i>
                            </button>
						</td>
                    </tr>`
                    $('#formAbsen').append(html)
                    });
                }
            });
        }

        function showAbsen(id_absen){
            $.ajax({
                type: "method",
                url: "url"+ id_absen,
                data: "data",
                dataType: "dataType",
                success: function (response) {
                    
                }
            });
        }
        
        
    </script>

</body>
@endsection
