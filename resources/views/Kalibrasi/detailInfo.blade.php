@extends('KalibrasiLayout.tempKalibrasi')

@section('kalibrasiPage')

    <body id="kt_body"
        class="page-loading-enabled quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-minimize-hoverable aside-fixed">
        <script>
            document.title = 'Detail Info | PI-Smart'
        </script>
        <!--begin::Main-->
        <!--begin::Header Mobile-->
        <div id="kt_header_mobile" class="header-mobile header-mobile-fixed">
            <!--begin::Logo-->
            <div class="mobile-logo">
                <a href="https://pismart-dev.pupuk-indonesia.com">
                </a>
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
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                            height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path
                                    d="M12,11 C9.790861,11 8,9.209139 8,7 C8,4.790861 9.790861,3 12,3 C14.209139,3 16,4.790861 16,7 C16,9.209139 14.209139,11 12,11 Z"
                                    fill="#000000" fill-rule="nonzero" opacity="0.3" />
                                <path
                                    d="M3.00065168,20.1992055 C3.38825852,15.4265159 7.26191235,13 11.9833413,13 C16.7712164,13 20.7048837,15.2931929 20.9979143,20.2 C21.0095879,20.3954741 20.9979143,21 20.2466999,21 C16.541124,21 11.0347247,21 3.72750223,21 C3.47671215,21 2.97953825,20.45918 3.00065168,20.1992055 Z"
                                    fill="#000000" fill-rule="nonzero" />
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

                {{-- <!--begin::Aside use include in layout.sidebarAbsence-->
            <!--end::Aside--> --}}
                @include('KalibrasiLayout.sidebarKalibrasi')

                <!--begin::Wrapper-->
                <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

                    {{-- <!--begin::Navbar use include in layout.navbar-->
                <!--end::Navbar--> --}}

                    <!--begin::Content Subheader-->
                    <div class="content d-flex flex-column flex-column-fluid" id="kt_content">
                        <!--begin::Subheader-->
                        <div class="subheader py-2 subheader-solid" id="kt_subheader">
                            <div
                                class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                                <!--begin::Info-->
                                <div class="d-flex align-items-center flex-wrap mr-1">
                                    <!--begin::Page Title-->
                                    <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Performance Calibration</h5>
                                    <!--end::Page Title-->
                                </div>
                                <!--end::Info-->
                            </div>
                        </div>
                        <!--end::Subheader-->

                        <!--begin::Entry Dashboard Page-->
                        <div class="d-flex flex-column-fluid">
                            <div class="container-fluid">
                                <!--begin::Container-->
                                <div class="container">
                                    <!--begin::Profile Personal Information-->
                                    <div class="d-flex flex-row">
                                        <!--begin::Aside-->
                                        <div class="flex-row-auto offcanvas-mobile w-250px w-xxl-350px"
                                            id="kt_profile_aside">
                                            <!--begin::Profile Card-->
                                            <div class="card card-custom card-stretch">
                                                <!--begin::Body-->
                                                <div class="card-body pt-4">
                                                    <!--begin::User-->
                                                    <div class="row">
                                                        <div class="col-md-4 px-3">
                                                            <img src="assets/media/logos/foto_pribadi.png"
                                                                class="img-fluid image-input image-input-outline"
                                                                alt="profile">
                                                        </div>
                                                        <div class="col-md-7 px-2">
                                                            <a href="#"
                                                                class="font-weight-bolder font-size-h5 text-dark-75 text-hover-primary">Aidan
                                                                Pouros</a>
                                                            <div class="text-muted">SMdy I Sumber Daya Manusia</div>
                                                            <div class="text-dark">Nilai <b>100.03</b></div>
                                                        </div>
                                                    </div>
                                                    <!--end::User-->
                                                    <!--begin::Contact-->
                                                    <div class="pt-5">
                                                        <div class="d-flex align-items-center  mb-2">
                                                            <span class="font-weight-bold mr-2">PT Pupuk Indonesia
                                                                (Persero)</span>
                                                        </div>
                                                    </div>
                                                    <!--end::Contact-->
                                                    <!--begin::Nav-->
                                                    <div class="navi navi-bold navi-hover navi-active navi-link-rounded">
                                                        <div class="navi-item mb-2 active"
                                                            onclick="showCard('detail_info_data_diri')" id="nav-data-diri">
                                                            <a href="#" class="navi-link py-4 ">
                                                                <span class="navi-icon mr-2">
                                                                    <span class="svg-icon">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/General/User.svg-->
                                                                        <svg width="14" height="15"
                                                                            viewBox="0 0 14 15" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M2.91667 4.03846C2.91667 5.10953 3.34687 6.13673 4.11265 6.89408C4.87842 7.65144 5.91703 8.07692 7 8.07692C8.08297 8.07692 9.12158 7.65144 9.88735 6.89408C10.6531 6.13673 11.0833 5.10953 11.0833 4.03846C11.0833 2.96739 10.6531 1.9402 9.88735 1.18284C9.12158 0.425479 8.08297 0 7 0C5.91703 0 4.87842 0.425479 4.11265 1.18284C3.34687 1.9402 2.91667 2.96739 2.91667 4.03846ZM12.8333 15H0.583333C0.428624 15 0.280251 14.9392 0.170854 14.831C0.0614583 14.7228 0 14.5761 0 14.4231V12.6923C0 11.9273 0.307291 11.1935 0.854272 10.6526C1.40125 10.1116 2.14312 9.80769 2.91667 9.80769H11.0833C11.8569 9.80769 12.5987 10.1116 13.1457 10.6526C13.6927 11.1935 14 11.9273 14 12.6923V14.4231C14 14.5761 13.9385 14.7228 13.8291 14.831C13.7198 14.9392 13.5714 15 13.4167 15H12.8333Z"
                                                                                fill="#379BFC" />
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </span>
                                                                <span class="navi-text font-size-lg" id="">Data
                                                                    Diri</span>
                                                            </a>
                                                        </div>
                                                        <div class="navi-item mb-2"onclick="showCard('detail_info_appraisal')"
                                                            id="nav-appraisal">
                                                            <a href="#" class="navi-link py-4 ">
                                                                <span class="navi-icon mr-2">
                                                                    <span class="svg-icon">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
                                                                        <svg width="14" height="17"
                                                                            viewBox="0 0 14 17" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M8.71795 0.217949C8.71795 0.160145 8.69499 0.104709 8.65411 0.0638357C8.61324 0.0229624 8.5578 0 8.5 0H2.39744C1.7616 0 1.1518 0.252586 0.702193 0.702193C0.252586 1.1518 0 1.7616 0 2.39744V14.6026C0 15.2384 0.252586 15.8482 0.702193 16.2978C1.1518 16.7474 1.7616 17 2.39744 17H11.1154C11.7512 17 12.361 16.7474 12.8106 16.2978C13.2602 15.8482 13.5128 15.2384 13.5128 14.6026V6.01277C13.5128 5.95497 13.4899 5.89953 13.449 5.85866C13.4081 5.81778 13.3527 5.79482 13.2949 5.79482H9.37179C9.19838 5.79482 9.03208 5.72593 8.90946 5.60331C8.78684 5.48069 8.71795 5.31439 8.71795 5.14097V0.217949ZM9.37179 8.71795C9.54521 8.71795 9.71151 8.78684 9.83413 8.90946C9.95675 9.03208 10.0256 9.19838 10.0256 9.37179C10.0256 9.54521 9.95675 9.71151 9.83413 9.83413C9.71151 9.95675 9.54521 10.0256 9.37179 10.0256H4.14103C3.96761 10.0256 3.80131 9.95675 3.67869 9.83413C3.55607 9.71151 3.48718 9.54521 3.48718 9.37179C3.48718 9.19838 3.55607 9.03208 3.67869 8.90946C3.80131 8.78684 3.96761 8.71795 4.14103 8.71795H9.37179ZM9.37179 12.2051C9.54521 12.2051 9.71151 12.274 9.83413 12.3966C9.95675 12.5193 10.0256 12.6856 10.0256 12.859C10.0256 13.0324 9.95675 13.1987 9.83413 13.3213C9.71151 13.4439 9.54521 13.5128 9.37179 13.5128H4.14103C3.96761 13.5128 3.80131 13.4439 3.67869 13.3213C3.55607 13.1987 3.48718 13.0324 3.48718 12.859C3.48718 12.6856 3.55607 12.5193 3.67869 12.3966C3.80131 12.274 3.96761 12.2051 4.14103 12.2051H9.37179Z"
                                                                                fill="#9AABC8" />
                                                                            <path
                                                                                d="M10.0257 0.500554C10.0257 0.340144 10.1939 0.238144 10.3186 0.3384C10.4241 0.423836 10.5191 0.523221 10.6002 0.636554L13.2269 4.29548C13.2862 4.37917 13.2217 4.48727 13.1188 4.48727H10.2436C10.1858 4.48727 10.1304 4.46431 10.0895 4.42344C10.0486 4.38256 10.0257 4.32713 10.0257 4.26932V0.500554Z"
                                                                                fill="#9AABC8" />
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </span>
                                                                <span class="navi-text font-size-lg">Appraissal</span>
                                                            </a>
                                                        </div>
                                                        <div class="navi-item mb-2"onclick="showCard('detail_info_from_star')"
                                                            id="nav-from-star">
                                                            <a href="#" class="navi-link py-4 ">
                                                                <span class="navi-icon mr-2">
                                                                    <span class="svg-icon">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
                                                                        <svg width="20" height="20"
                                                                            viewBox="0 0 20 20" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                                                d="M10 1.6665V7.08317C10 7.41469 10.1317 7.73263 10.3662 7.96705C10.6006 8.20148 10.9185 8.33317 11.25 8.33317H16.6667V16.6665C16.6667 17.1085 16.4911 17.5325 16.1786 17.845C15.866 18.1576 15.4421 18.3332 15 18.3332H5.00004C4.55801 18.3332 4.13409 18.1576 3.82153 17.845C3.50897 17.5325 3.33337 17.1085 3.33337 16.6665V3.33317C3.33337 2.89114 3.50897 2.46722 3.82153 2.15466C4.13409 1.8421 4.55801 1.6665 5.00004 1.6665H10ZM9.71171 9.749L8.96671 11.0282L7.51921 11.3415C7.46219 11.3539 7.40942 11.381 7.36616 11.4201C7.3229 11.4593 7.29068 11.5091 7.27272 11.5646C7.25475 11.6201 7.25166 11.6794 7.26377 11.7364C7.27588 11.7935 7.30275 11.8464 7.34171 11.8898L8.32837 12.994L8.17837 14.4673C8.1725 14.5254 8.18196 14.584 8.20583 14.6372C8.22969 14.6905 8.26711 14.7365 8.31436 14.7708C8.3616 14.805 8.41701 14.8263 8.47504 14.8324C8.53307 14.8385 8.59169 14.8293 8.64504 14.8057L10 14.209L11.355 14.8057C11.4084 14.8293 11.467 14.8385 11.525 14.8324C11.5831 14.8263 11.6385 14.805 11.6857 14.7708C11.733 14.7365 11.7704 14.6905 11.7943 14.6372C11.8181 14.584 11.8276 14.5254 11.8217 14.4673L11.6717 12.994L12.6592 11.8898C12.6982 11.8463 12.725 11.7934 12.7371 11.7363C12.7491 11.6791 12.746 11.6198 12.7279 11.5643C12.7099 11.5088 12.6775 11.459 12.6342 11.4199C12.5908 11.3808 12.538 11.3538 12.4809 11.3415L11.0334 11.0282L10.2884 9.749C10.2591 9.69849 10.217 9.65656 10.1664 9.62742C10.1158 9.59827 10.0584 9.58293 10 9.58293C9.94164 9.58293 9.88427 9.59827 9.83367 9.62742C9.78307 9.65656 9.74101 9.69849 9.71171 9.749ZM11.6667 1.70234C11.9824 1.7693 12.2719 1.9265 12.5 2.15484L16.1784 5.83317C16.4067 6.06128 16.5639 6.35077 16.6309 6.6665H11.6667V1.70234Z"
                                                                                fill="#9AABC8" />
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </span>

                                                                <span class="navi-text font-size-lg">From Star</span>
                                                            </a>
                                                        </div>
                                                        <div class="navi-item mb-2"
                                                            onclick="showCard('detail_info_catatan')" id="nav-catatan">
                                                            <a href="#" class="navi-link py-4 ">
                                                                <span class="navi-icon mr-2">
                                                                    <span class="svg-icon">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
                                                                        <svg width="14" height="15"
                                                                            viewBox="0 0 14 15" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M1.55556 15C1.12778 15 0.761704 14.8532 0.457333 14.5597C0.152963 14.2662 0.000518518 13.913 0 13.5V3C0 2.5875 0.152444 2.2345 0.457333 1.941C0.762222 1.6475 1.1283 1.5005 1.55556 1.5H4.82222C4.99074 1.05 5.27281 0.6875 5.66844 0.4125C6.06407 0.1375 6.50793 0 7 0C7.49259 0 7.9367 0.1375 8.33233 0.4125C8.72796 0.6875 9.00978 1.05 9.17778 1.5H12.4444C12.8722 1.5 13.2386 1.647 13.5434 1.941C13.8483 2.235 14.0005 2.588 14 3V13.5C14 13.9125 13.8478 14.2657 13.5434 14.5597C13.2391 14.8537 12.8727 15.0005 12.4444 15H1.55556ZM7 2.4375C7.16852 2.4375 7.308 2.38425 7.41844 2.27775C7.52889 2.17125 7.58385 2.037 7.58333 1.875C7.58333 1.7125 7.52811 1.57825 7.41767 1.47225C7.30722 1.36625 7.168 1.313 7 1.3125C6.83148 1.3125 6.69226 1.36575 6.58233 1.47225C6.47241 1.57875 6.41718 1.713 6.41667 1.875C6.41667 2.0375 6.47189 2.172 6.58233 2.2785C6.69278 2.385 6.832 2.438 7 2.4375ZM3.5 12H4.43333C4.53704 12 4.63763 11.978 4.73511 11.934C4.83259 11.89 4.91348 11.837 4.97778 11.775L9.41111 7.5375L7.73889 5.925L3.34444 10.1625C3.26667 10.2375 3.20833 10.3217 3.16944 10.4152C3.13055 10.5087 3.11111 10.606 3.11111 10.707V11.625C3.11111 11.725 3.15 11.8125 3.22778 11.8875C3.30556 11.9625 3.3963 12 3.5 12ZM9.95555 7.0125L10.7722 6.1875C10.85 6.1125 10.8889 6.025 10.8889 5.925C10.8889 5.825 10.85 5.7375 10.7722 5.6625L9.68333 4.6125C9.60555 4.5375 9.51481 4.5 9.41111 4.5C9.30741 4.5 9.21667 4.5375 9.13889 4.6125L8.28333 5.4L9.95555 7.0125Z"
                                                                                fill="#9AABC8" />
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </span>

                                                                <span class="navi-text font-size-lg">Catatan 2 Tahun
                                                                    Terakhir</span>
                                                            </a>
                                                        </div>
                                                        <div class="navi-item mb-2"
                                                            onclick="showCard('detail_info_inovasi')" id="nav-inovasi">
                                                            <a href="#" class="navi-link py-4 ">
                                                                <span class="navi-icon mr-2">
                                                                    <span class="svg-icon">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
                                                                        <svg width="15" height="15"
                                                                            viewBox="0 0 15 15" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M14.9211 0.203354C14.915 0.173741 14.9005 0.146485 14.8795 0.12478C14.8584 0.103076 14.8316 0.087822 14.8022 0.0808076C12.8411 -0.398664 8.30994 1.30996 5.85499 3.7639C5.41713 4.19822 5.01796 4.66988 4.66201 5.17352C3.90497 5.10655 3.14792 5.16247 2.50271 5.44372C0.682262 6.24496 0.152232 8.33562 0.0045731 9.23496C-0.00380236 9.28419 -0.000643133 9.33468 0.0138022 9.38248C0.0282475 9.43028 0.0535851 9.47407 0.0878221 9.51042C0.122059 9.54676 0.164262 9.57467 0.211111 9.59194C0.25796 9.60922 0.308178 9.61539 0.357815 9.60997L3.28118 9.28753C3.28327 9.50793 3.29657 9.72809 3.32103 9.94714C3.33574 10.0993 3.40327 10.2414 3.51188 10.3489L4.64393 11.4783C4.75154 11.5868 4.89365 11.6543 5.04572 11.6692C5.26355 11.6935 5.48247 11.7068 5.70164 11.709L5.38088 14.6287C5.37553 14.6783 5.38175 14.7285 5.39905 14.7753C5.41634 14.8221 5.44425 14.8643 5.48058 14.8985C5.51691 14.9327 5.56067 14.9581 5.60844 14.9725C5.6562 14.987 5.70667 14.9902 5.75589 14.9819C6.65356 14.8379 8.7479 14.3079 9.54445 12.4875C9.8257 11.8423 9.88329 11.0889 9.81833 10.3355C10.3232 9.97956 10.7961 9.58028 11.2316 9.14221C13.6943 6.69196 15.3932 2.26187 14.9211 0.203354ZM8.77468 6.21918C8.54981 5.99446 8.39664 5.70809 8.33454 5.3963C8.27244 5.08451 8.30421 4.76131 8.42582 4.46758C8.54743 4.17384 8.75342 3.92278 9.01774 3.74613C9.28206 3.56949 9.59283 3.4752 9.91075 3.4752C10.2287 3.4752 10.5394 3.56949 10.8038 3.74613C11.0681 3.92278 11.2741 4.17384 11.3957 4.46758C11.5173 4.76131 11.5491 5.08451 11.487 5.3963C11.4249 5.70809 11.2717 5.99446 11.0468 6.21918C10.8977 6.36851 10.7206 6.48697 10.5257 6.5678C10.3307 6.64863 10.1218 6.69023 9.91075 6.69023C9.69972 6.69023 9.49076 6.64863 9.29582 6.5678C9.10088 6.48697 8.92379 6.36851 8.77468 6.21918Z"
                                                                                fill="#9AABC8" />
                                                                            <path
                                                                                d="M4.56692 12.2962C4.38344 12.48 4.08913 12.5516 3.73488 12.6129C2.939 12.7485 2.2362 12.0608 2.37917 11.2562C2.43374 10.9512 2.59513 10.5236 2.69558 10.4231C2.71753 10.4016 2.73215 10.3737 2.73734 10.3434C2.74254 10.3131 2.73806 10.2819 2.72453 10.2543C2.711 10.2267 2.68911 10.204 2.66198 10.1896C2.63484 10.1751 2.60384 10.1696 2.57337 10.1737C2.1283 10.2282 1.71425 10.4299 1.39712 10.7469C0.609946 11.5348 0.535614 14.4581 0.535614 14.4581C0.535614 14.4581 3.46066 14.3838 4.24783 13.596C4.56581 13.2791 4.76784 12.8644 4.82139 12.4187C4.83378 12.2788 4.66335 12.1954 4.56692 12.2962Z"
                                                                                fill="#9AABC8" />
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </span>

                                                                <span class="navi-text font-size-lg">Inovasi</span>
                                                            </a>
                                                        </div>
                                                        <div class="navi-item mb-2"
                                                            onclick="showCard('detail_info_from_sanksi')" id="nav-sanksi">
                                                            <a href="#" class="navi-link py-4 ">
                                                                <span class="navi-icon mr-2">
                                                                    <span class="svg-icon">
                                                                        <!--begin::Svg Icon | path:assets/media/svg/icons/Code/Compiling.svg-->
                                                                        <svg width="13" height="16"
                                                                            viewBox="0 0 13 16" fill="none"
                                                                            xmlns="http://www.w3.org/2000/svg">
                                                                            <path
                                                                                d="M11.375 0H4.875L0.01625 4.8L0 14.4C0 15.28 0.73125 16 1.625 16H11.375C12.2688 16 13 15.28 13 14.4V1.6C13 0.72 12.2688 0 11.375 0ZM7.3125 12H5.6875V10.4H7.3125V12ZM7.3125 8.8H5.6875V4.8H7.3125V8.8Z"
                                                                                fill="#9AABC8" />
                                                                        </svg>
                                                                        <!--end::Svg Icon-->
                                                                    </span>
                                                                </span>

                                                                <span class="navi-text font-size-lg">Sanksi dan
                                                                    pelanggaran</span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                    <!--end::Nav-->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Profile Card-->
                                        </div>
                                        <!--end::Aside-->

                                        <!--begin::Content-->
                                        <div class="flex-row-fluid ml-lg-8 page-detail" id="detail_info_data_diri">
                                            <!--begin::Card-->
                                            <div class="card card-custom card-stretch">
                                                <!--begin::Header-->
                                                <div class="card-header py-6">
                                                    <div class="card-title align-items-start flex-column">
                                                        <h3 class="card-label font-weight-bolder text-dark">Detail Info
                                                        </h3>
                                                    </div>
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Form-->
                                                <form class="form" id="form_data_pribadi"
                                                    action="https://pismart-dev.pupuk-indonesia.com/save/personal/profile"
                                                    method="POST">
                                                    <!--begin::Body-->
                                                    <div class="card-body">
                                                        <div class="row">
                                                            <label class="col-xl-3"></label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <h5 class="font-weight-bold mb-6"></h5>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Foto</label>
                                                            <div class="col-lg-9 col-xl-6">

                                                                <div class="image-input image-input-outline"
                                                                    id="kt_profile_avatar"
                                                                    style="background-image: url(assets/media/users/blank.png)">
                                                                    <div class="image-input-wrapper h-100">
                                                                        <img src="assets/media/logos/foto_pribadi.png"
                                                                            alt="profile"
                                                                            class="img-fluid image-input image-input-outline">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Nama
                                                                Lengkap</label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <input class="form-control  form-control-solid"
                                                                    type="text" value="Aidan Pouros" readonly />
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <label class="col-xl-3"></label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <h5 class="font-weight-bold mt-10 mb-6">Informasi Kontak
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Nomor Handphone
                                                                Utama <span class="text-danger">*</span></label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <div class="input-group input-group-lg input-group-solid">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">
                                                                            <i class="la la-phone"></i>
                                                                        </span>
                                                                    </div>
                                                                    <input type="text" name="val_nohp1"
                                                                        class="form-control form-control-solid phonenumber-format"
                                                                        value="088228492338"
                                                                        placeholder="Masukkan nomor handphone" readonly />
                                                                </div>
                                                                <!--<span class="form-text text-muted">We'll never share your email with anyone else.</span>-->
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Nomor Handphone
                                                                Kedua </label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <div class="input-group input-group-lg input-group-solid">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">
                                                                            <i class="la la-phone"></i>
                                                                        </span>
                                                                    </div>
                                                                    <input type="text" name="val_nohp2"
                                                                        class="form-control form-control-solid phonenumber-format"
                                                                        value=""
                                                                        placeholder="Masukkan nomor handphone" readonly />
                                                                </div>
                                                                <!--<span class="form-text text-muted">We'll never share your email with anyone else.</span>-->
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Email Utama
                                                                <span class="text-danger">*</span></label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <div class="input-group input-group-lg input-group-solid">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">
                                                                            <i class="la la-at"></i>
                                                                        </span>
                                                                    </div>
                                                                    <input type="text" name="val_email1"
                                                                        class="form-control form-control-solid email-format"
                                                                        value="doni.pahlevi@gmail.com"
                                                                        placeholder="Masukkan Email" readonly />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Email
                                                                Kedua</label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <div class="input-group input-group-lg input-group-solid">
                                                                    <div class="input-group-prepend">
                                                                        <span class="input-group-text">
                                                                            <i class="la la-at"></i>
                                                                        </span>
                                                                    </div>
                                                                    <input type="text" name="val_email2"
                                                                        class="form-control form-control-solid email-format"
                                                                        value=""
                                                                        placeholder="Masukkan Email"readonly />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <label class="col-xl-3"></label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <h5 class="font-weight-bold mt-10 mb-6">Informasi Alamat
                                                                </h5>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Alamat <span
                                                                    class="text-danger">*</span></label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <div class="input-group input-group-lg input-group-solid">
                                                                    <input type="text" name="val_alamat"
                                                                        class="form-control form-control-solid"
                                                                        value="Jl. Pongangan"
                                                                        placeholder="Masukkan alamat contoh jln kenangan no 10"
                                                                        readonly />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Kelurahan <span
                                                                    class="text-danger">*</span></label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <div class="input-group input-group-lg input-group-solid">
                                                                    <input type="text" name="val_kelurahan"
                                                                        class="form-control form-control-solid"
                                                                        value="Kedung Waringin"
                                                                        placeholder="Masukkan kelurahan" required
                                                                        readonly />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Kecamatan <span
                                                                    class="text-danger">*</span></label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <div class="input-group input-group-lg input-group-solid">
                                                                    <input type="text" name="val_kecamatan"
                                                                        class="form-control form-control-solid"
                                                                        value="Kecamatan Tanah Sereal"
                                                                        placeholder="Masukkan kecamatan" required
                                                                        readonly />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Kabupaten <span
                                                                    class="text-danger">*</span></label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <div class="input-group input-group-lg input-group-solid">
                                                                    <input type="text" name="val_kabupaten"
                                                                        class="form-control form-control-solid"
                                                                        value="Kota Gresik"
                                                                        placeholder="Masukkan Kabupaten" required
                                                                        readonly />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Provinsi <span
                                                                    class="text-danger">*</span></label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <div class="input-group input-group-lg input-group-solid">
                                                                    <input type="text" name="val_provinsi"
                                                                        class="form-control form-control-solid"
                                                                        value="Jawa Timur" placeholder="Masukkan Provinsi"
                                                                        required readonly />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Kode Pos <span
                                                                    class="text-danger">*</span></label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <div class="input-group input-group-lg input-group-solid">
                                                                    <input type="text" name="val_kodepos"
                                                                        class="form-control form-control-solid kodepos-format"
                                                                        value="16164" placeholder="Masukkan Kode Pos"
                                                                        required readonly />
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="form-group row">
                                                            <label class="col-xl-3 col-lg-3 col-form-label">Tipe Domisili
                                                                <span class="text-danger">*</span></label>
                                                            <div class="col-lg-9 col-xl-6">
                                                                <input type="text" name="val_kodepos"
                                                                    class="form-control" value="Pribadi"
                                                                    nama="val_tipedomisili" required readonly />
                                                                {{-- <select class="form-control" name="val_tipedomisili" id="" required >
                                                                <option value="" disabled>Pilih Tipe Domisili</option>
                                                                <option value="1">Pribadi</option>
                                                                <option value="3"selected>Ortu</option>
                                                                <option value="4">Kontrak</option>
                                                                <option value="5">Kos</option>
                                                                <option value="9">Lain</option>
                                                                <option value="2">Dinas</option>
                                                            </select> --}}
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Body-->
                                                </form>
                                                <!--end::Form-->
                                            </div>
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Content-->
                                        <div class="flex-row-fluid ml-lg-8 page-detail" id="detail_info_appraisal">
                                            <!--begin::Card-->
                                            <div class="card card-custom card-stretch">
                                                <!--begin::Header-->
                                                <div class="card-header py-6">
                                                    <div class="card-title align-items-start flex-column">
                                                        <h3 class="card-label font-weight-bolder text-dark">Appraisal</h3>
                                                    </div>
                                                    <div class="d-flex align-items-center">
                                                        <div id="selectYear">
                                                            <div class="dropdown bootstrap-select form-control">
                                                                <select class="form-control selectpicker" id="kpi_year"
                                                                    data-style="btn-primary" tabindex="null">
                                                                    <optgroup label="Periode Tahun" id="listYear">
                                                                        <option value="2023">Periode thn 2023</option>
                                                                        <option value="2024" selected="selected">Periode
                                                                            thn 2024</option>
                                                                        <option value="2025">Periode thn 2025</option>
                                                                    </optgroup>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <!--end::Header-->
                                                <div class="card-body" style="overflow-x:auto;">
                                                    <h5 class="card-label">Tanggal Pengajuan Terakhir: October 31, 2023
                                                    </h5>
                                                    <!--begin: Datatable-->
                                                    <table class="table table-separate table-head-custom table-checkable">
                                                        <thead>
                                                            <tr>
                                                                <th>KPI</th>
                                                                <th>Polaritas</th>
                                                                <th id="">Target / Realisasi<br>Januari s.d. Maret</th>
                                                                <th id="">Pencapaian<br>Januari s.d. Maret</th>
                                                                <th>Konversi Nilai</th>
                                                                <th>Bobot</th>
                                                                <th>Nilai</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody id="body-monitoring" style="position: relative; zoom: 1;">
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <h6 class="mt-1">1.</h6>
                                                                        <div class="ml-4">
                                                                            <div
                                                                                class="text-dark-75 font-weight-bolder font-size-lg mb-0">
                                                                                % Implementasi Human Capital Single
                                                                                Platform<br>
                                                                            </div>
                                                                            <a>Website</a>
                                                                            <br>
                                                                            <a href="#"
                                                                                class="text-muted font-weight-bold text-hover-primary"
                                                                                style="pointer-events: none;">
                                                                                <span
                                                                                    class="symbol-label rounded px-2 bg-success text-white">
                                                                                    <small>Strategis</small>
                                                                                </span>
                                                                            </a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mb-0">Maximize</div>
                                                                </td>
                                                                <td>
                                                                    <div class="font-weight-bold text-success">Target:</div>
                                                                    <div class="mb-0">
                                                                        <strong
                                                                            class="font-weight-bolder font-size-lg">84.00
                                                                        </strong>
                                                                        <span class="font-size-sm"> %</span>
                                                                    </div>
                                                                    <div class="font-weight-bold text-success">Realisasi:</div>
                                                                    <div class="mb-0">
                                                                        <strong
                                                                            class="font-weight-bolder font-size-lg">84.85
                                                                        </strong>
                                                                        <span class="font-size-sm"> %</span>
                                                                    </div>
                                                                </td>
                                                                <td nowrap="nowrap">
                                                                    <div class="d-flex flex-column w-100 mr-2">
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-between mb-2">
                                                                            <span
                                                                                class="text-muted mr-2 font-size-sm font-weight-bold">101.01%</span><span
                                                                                class="text-muted font-size-sm font-weight-bold">Pencapaian</span>
                                                                        </div>
                                                                        <div class="progress progress-xs w-100">
                                                                            <div class="progress-bar bg-success"
                                                                                role="progressbar" style="width: 101.01%;"
                                                                                aria-valuenow="101.01" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mb-0"><strong
                                                                            class="font-weight-bolder font-size-lg">101.01%</strong>
                                                                    </div>
                                                                   
                                                                </td>
                                                                <td>
                                                                    <div class="mb-0"><strong
                                                                            class="font-weight-bolder font-size-lg">20%</strong>
                                                                </td>
                                                                <td>
                                                                    <div class="mb-0"><strong
                                                                            class="font-weight-bolder font-size-lg">20.2%</strong>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <h6 class="mt-1">2.</h6>
                                                                        <div class="ml-4">
                                                                            <div
                                                                                class="text-dark-75 font-weight-bolder font-size-lg mb-0">
                                                                                Komitmen Anti-Fraud (Zero Fraud Tolerance)
                                                                                <br></div><a href="#"
                                                                                class="text-muted font-weight-bold text-hover-primary"
                                                                                style="pointer-events: none;"><span
                                                                                    class="symbol-label rounded px-2 bg-light-dark text-dark"><small>Generik</small></span></a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mb-0"></div>
                                                                </td>
                                                                <td>
                                                                    <div class="font-weight-bold text-success"></div>
                                                                    <div class="mb-0">
                                                                        <strong
                                                                            class="font-weight-bolder font-size-lg">
                                                                        </strong>
                                                                        <span class="font-size-sm"> </span>
                                                                    </div>
                                                                    <div class="font-weight-bold text-success"></div>
                                                                    <div class="mb-0">
                                                                        <strong
                                                                            class="font-weight-bolder font-size-lg">
                                                                        </strong>
                                                                        <span class="font-size-sm"> </span>
                                                                    </div>
                                                                </td>
                                                                <td nowrap="nowrap">
                                                                    <div class="d-flex flex-column w-100 mr-2">
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-center ">
                                                                            <i class="flaticon-warning"style="font-size: 40px; color: #FF9843;"></i>
                                                                        </div>
                                                                        <div class="d-flex text-dark font-weight-bolder align-items-center justify-content-center">
                                                                            Inactive
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mb-0"><strong
                                                                            class="font-weight-bolder font-size-lg"></strong>
                                                                </td>
                                                                <td>
                                                                    <div class="mb-0"><strong
                                                                            class="font-weight-bolder font-size-lg"></strong>
                                                                </td>
                                                                <td>
                                                                    <div class="mb-0"><strong
                                                                            class="font-weight-bolder font-size-lg"></strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <h6 class="mt-1">3.</h6>
                                                                        <div class="ml-4">
                                                                            <div
                                                                                class="text-dark-75 font-weight-bolder font-size-lg mb-0">
                                                                                Efektifitas Pelaksanaan Proses Bisnis Unit
                                                                                Kerja<br></div><a href="#"
                                                                                class="text-muted font-weight-bold text-hover-primary"
                                                                                style="pointer-events: none;"><span
                                                                                    class="symbol-label rounded px-2 bg-light-dark text-dark"><small>Generik</small></span></a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mb-0"></div>
                                                                </td>
                                                                <td>
                                                                    <div class="font-weight-bold text-success"></div>
                                                                    <div class="mb-0">
                                                                        <strong
                                                                            class="font-weight-bolder font-size-lg">
                                                                        </strong>
                                                                        <span class="font-size-sm"> </span>
                                                                    </div>
                                                                    <div class="font-weight-bold text-success"></div>
                                                                    <div class="mb-0">
                                                                        <strong
                                                                            class="font-weight-bolder font-size-lg">
                                                                        </strong>
                                                                        <span class="font-size-sm"> </span>
                                                                    </div>
                                                                </td>
                                                                <td nowrap="nowrap">
                                                                    <div class="d-flex flex-column w-100 mr-2">
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-center ">
                                                                            <i class="flaticon-warning"style="font-size: 40px; color: #FF9843;"></i>
                                                                        </div>
                                                                        <div class="d-flex text-dark font-weight-bolder align-items-center justify-content-center">
                                                                            Inactive
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mb-0"><strong
                                                                            class="font-weight-bolder font-size-lg"></strong>
                                                                </td>
                                                                <td>
                                                                    <div class="mb-0"><strong
                                                                            class="font-weight-bolder font-size-lg"></strong>
                                                                </td>
                                                                <td>
                                                                    <div class="mb-0"><strong
                                                                            class="font-weight-bolder font-size-lg"></strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <h6 class="mt-1">4.</h6>
                                                                        <div class="ml-4">
                                                                            <div
                                                                                class="text-dark-75 font-weight-bolder font-size-lg mb-0">
                                                                                # Continues improvement<br></div><a
                                                                                href="#"
                                                                                class="text-muted font-weight-bold text-hover-primary"
                                                                                style="pointer-events: none;"><span
                                                                                    class="symbol-label rounded px-2 bg-danger text-white"><small>Teknis
                                                                                        Unit Kerja</small></span></a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mb-0"></div>
                                                                </td>
                                                                <td>
                                                                    <div class="font-weight-bold text-success"></div>
                                                                    <div class="mb-0">
                                                                        <strong
                                                                            class="font-weight-bolder font-size-lg">
                                                                        </strong>
                                                                        <span class="font-size-sm"> </span>
                                                                    </div>
                                                                    <div class="font-weight-bold text-success"></div>
                                                                    <div class="mb-0">
                                                                        <strong
                                                                            class="font-weight-bolder font-size-lg">
                                                                        </strong>
                                                                        <span class="font-size-sm"> </span>
                                                                    </div>
                                                                </td>
                                                                <td nowrap="nowrap">
                                                                    <div class="d-flex flex-column w-100 mr-2">
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-center ">
                                                                            <i class="flaticon-warning"style="font-size: 40px; color: #FF9843;"></i>
                                                                        </div>
                                                                        <div class="d-flex text-dark font-weight-bolder align-items-center justify-content-center">
                                                                            Inactive
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mb-0"><strong
                                                                            class="font-weight-bolder font-size-lg"></strong>
                                                                </td>
                                                                <td>
                                                                    <div class="mb-0"><strong
                                                                            class="font-weight-bolder font-size-lg"></strong>
                                                                </td>
                                                                <td>
                                                                    <div class="mb-0"><strong
                                                                            class="font-weight-bolder font-size-lg"></strong>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <h6 class="mt-1">5.</h6>
                                                                        <div class="ml-4">
                                                                            <div
                                                                                class="text-dark-75 font-weight-bolder font-size-lg mb-0">
                                                                                % Handling issue sesuai SLA<br></div><a
                                                                                href="#"
                                                                                class="text-muted font-weight-bold text-hover-primary"
                                                                                style="pointer-events: none;"><span
                                                                                    class="symbol-label rounded px-2 bg-danger text-white"><small>Teknis
                                                                                        Unit Kerja</small></span></a>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mb-0">Maximize</div>
                                                                </td>
                                                                <td>
                                                                    <div class="font-weight-bold text-success">Target:</div>
                                                                    <div class="mb-0">
                                                                        <strong
                                                                            class="font-weight-bolder font-size-lg">90.00
                                                                        </strong>
                                                                        <span class="font-size-sm"> %</span>
                                                                    </div>
                                                                    <div class="font-weight-bold text-success">Realisasi:</div>
                                                                    <div class="mb-0">
                                                                        <strong
                                                                            class="font-weight-bolder font-size-lg">100.00
                                                                        </strong>
                                                                        <span class="font-size-sm"> %</span>
                                                                    </div>
                                                                </td>
                                                                <td nowrap="nowrap">
                                                                    <div class="d-flex flex-column w-100 mr-2">
                                                                        <div
                                                                            class="d-flex align-items-center justify-content-between mb-2">
                                                                            <span
                                                                                class="text-muted mr-2 font-size-sm font-weight-bold">110%</span><span
                                                                                class="text-muted font-size-sm font-weight-bold">Pencapaian</span>
                                                                        </div>
                                                                        <div class="progress progress-xs w-100">
                                                                            <div class="progress-bar bg-success"
                                                                                role="progressbar" style="width: 101.01%;"
                                                                                aria-valuenow="101.01" aria-valuemin="0"
                                                                                aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mb-0"><strong
                                                                            class="font-weight-bolder font-size-lg">110%</strong>
                                                                    </div>
                                                                   
                                                                </td>
                                                                <td>
                                                                    <div class="mb-0"><strong
                                                                            class="font-weight-bolder font-size-lg">20%</strong>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="mb-0"><strong
                                                                            class="font-weight-bolder font-size-lg">22%</strong>
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                        <tfoot>
                                                            <tr>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th colspan="2">
                                                                    <div class="d-flex flex-column align-items-end">
                                                                        Total Bobot dan KPI Aktif:
                                                                    </div>
                                                                </th>
                                                                <th>
                                                                        <span
                                                                            id="total_bobot">100%
                                                                        </span>
                                                                </th>
                                                                <th>
                                                                    <span
                                                                        id="total_kpi">100%
                                                                    </span>
                                                                 </th>
                                                            </tr>
                                                            <tr>
                                                                <th></th>
                                                                <th></th>
                                                                <th></th>
                                                                <th colspan="2">
                                                                    <div class="d-flex flex-column align-items-end">
                                                                        <span>Pencapaian Skor KPI:
                                                                        </span> 
                                                                    </div>
                                                                </th>
                                                                <th colspan="2">
                                                                    <div class="d-flex flex-column align-items-center" style="font-size: 17px;">
                                                                        <span>200%
                                                                        </span> 
                                                                    </div>
                                                                </th>    
                                                            </tr>
                                                        </tfoot>

                                                    </table>
                                                    <!--end: Datatable-->

                                                </div>
                                            </div>
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Content-->
                                        <div class="flex-row-fluid ml-lg-8 page-detail" id="detail_info_from_star">
                                            <!--begin::Card-->
                                            <div class="card card-custom card-stretch">
                                                <!--begin::Header-->
                                                <div class="card-header py-6">
                                                    <div class="card-title align-items-start flex-column">
                                                        <h3 class="card-label font-weight-bolder text-dark">From Star</h3>
                                                    </div>
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Form-->
                                                <form class="form" id="form_data_pribadi"
                                                    action="https://pismart-dev.pupuk-indonesia.com/save/personal/profile"
                                                    method="POST">
                                                    <!--begin::Body-->
                                                    <div class="card-body">
                                                        <div class="card card-custom card-fit card-border">
                                                            <div class="card-body pt-2">Lorem Ipsum is simply dummy text of
                                                                the printing and typesetting industry. Lorem Ipsum has been
                                                                the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled.
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled.
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                standard dummy text ever since the 1500s, when an unknown
                                                                printer took a galley of type and scrambled.
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled.
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                standard dummy text ever since the 1500s, when an unknown
                                                                printer took a galley of type and scrambled.
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled.
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                standard dummy text ever since the 1500s, when an unknown
                                                                printer took a galley of type and scrambled.
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled.
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                standard dummy text ever since the 1500s, when an unknown
                                                                printer took a galley of type and scrambled.
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Body-->
                                                </form>
                                                <!--end::Form-->
                                            </div>
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Content-->
                                        <div class="flex-row-fluid ml-lg-8 page-detail" id="detail_info_catatan">
                                            <!--begin::Card-->
                                            <div class="card card-custom card-stretch">
                                                <!--begin::Header-->
                                                <div class="card-header py-6">
                                                    <div class="card-title align-items-start flex-column">
                                                        <h3 class="card-label font-weight-bolder text-dark">Catatan 2 Tahun
                                                            Terakhir</h3>
                                                    </div>
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Form-->
                                                <form class="form" id="form_data_pribadi"
                                                    action="https://pismart-dev.pupuk-indonesia.com/save/personal/profile"
                                                    method="POST">
                                                    <!--begin::Body-->
                                                    <div class="card-body">
                                                        <div class="timeline timeline-5">
                                                            <div class="timeline-items">
                                                                <!--begin::Item-->
                                                                <div class="timeline-item">
                                                                    <!--begin::Icon-->
                                                                    <div class="timeline-media bg-success">
                                                                        <span class="svg-icon-primary svg-icon-md">
                                                                        </span>
                                                                    </div>
                                                                    <!--end::Icon-->
                                                                    <!--begin::Info-->
                                                                    <div class="timeline-desc timeline-desc-success">
                                                                        <span class="card-label font-weight-bolder" style="font-size: 17px;">Tahun 2022</span>
                                                                        <div class="card card-custom card-fit card-border">
                                                                            <div class="card-body pt-2">Lorem Ipsum is simply dummy text of
                                                                                the printing and typesetting industry. Lorem Ipsum has been
                                                                                the industry's standard dummy text ever since the 1500s,
                                                                                when an unknown printer took a galley of type and scrambled.
                                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                                standard dummy text ever since the 1500s,
                                                                                when an unknown printer took a galley of type and scrambled.
                                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                                standard dummy text ever since the 1500s, when an unknown
                                                                                printer took a galley of type and scrambled.
                                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                                standard dummy text ever since the 1500s,
                                                                                when an unknown printer took a galley of type and scrambled.
                                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                                standard dummy text ever since the 1500s, when an unknown
                                                                                printer took a galley of type and scrambled.
                                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                                standard dummy text ever since the 1500s,
                                                                                when an unknown printer took a galley of type and scrambled.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                                <!--end::Item-->
                                                        
                                                                <!--begin::Item-->
                                                                <div class="timeline-item">
                                                                    <!--begin::Icon-->
                                                                    <div class="timeline-media bg-success">
                                                                        <span class="svg-icon-primary svg-icon-md">
                                                                        </span>
                                                                    </div>
                                                                    <!--end::Icon-->
                                                                    <!--begin::Info-->
                                                                    <div class="timeline-desc timeline-desc-success">
                                                                        <span class="card-label font-weight-bolder" style="font-size: 17px;">Tahun 2023</span>
                                                                        <div class="card card-custom card-fit card-border">
                                                                            <div class="card-body pt-2">Lorem Ipsum is simply dummy text of
                                                                                the printing and typesetting industry. Lorem Ipsum has been
                                                                                the industry's standard dummy text ever since the 1500s,
                                                                                when an unknown printer took a galley of type and scrambled.
                                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                                standard dummy text ever since the 1500s,
                                                                                when an unknown printer took a galley of type and scrambled.
                                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                                standard dummy text ever since the 1500s, when an unknown
                                                                                printer took a galley of type and scrambled.
                                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                                standard dummy text ever since the 1500s,
                                                                                when an unknown printer took a galley of type and scrambled.
                                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                                standard dummy text ever since the 1500s, when an unknown
                                                                                printer took a galley of type and scrambled.
                                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                                standard dummy text ever since the 1500s,
                                                                                when an unknown printer took a galley of type and scrambled.
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <!--end::Info-->
                                                                </div>
                                                                <!--end::Item-->
                                                        
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Body-->
                                                </form>
                                                <!--end::Form-->
                                            </div>
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Content-->
                                        <div class="flex-row-fluid ml-lg-8 page-detail" id="detail_info_inovasi">
                                            <!--begin::Card-->
                                            <div class="card card-custom card-stretch">
                                                <!--begin::Header-->
                                                <div class="card-header py-6">
                                                    <div class="card-title align-items-start flex-column">
                                                        <h3 class="card-label font-weight-bolder text-dark">Inovasi</h3>
                                                    </div>
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Form-->
                                                <form class="form" id="" action="" method="">
                                                    <!--begin::Body-->
                                                    <div class="card-body">
                                                        <div class="card card-custom card-fit card-border">
                                                            <div class="card-body pt-2">Lorem Ipsum is simply dummy text of
                                                                the printing and typesetting industry. Lorem Ipsum has been
                                                                the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled.
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled.
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                standard dummy text ever since the 1500s, when an unknown
                                                                printer took a galley of type and scrambled.
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled.
                                                                <br>
                                                                <br>
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                standard dummy text ever since the 1500s, when an unknown
                                                                printer took a galley of type and scrambled.
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled.
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                standard dummy text ever since the 1500s, when an unknown
                                                                printer took a galley of type and scrambled.
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled.
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!--end::Body-->
                                                </form>
                                                <!--end::Form-->
                                            </div>
                                        </div>
                                        <!--end::Content-->
                                        <!--begin::Content-->
                                        <div class="flex-row-fluid ml-lg-8 page-detail" id="detail_info_sanksi">
                                            <!--begin::Card-->
                                            <div class="card card-custom card-stretch">
                                                <!--begin::Header-->
                                                <div class="card-header py-6">
                                                    <div class="card-title align-items-start flex-column">
                                                        <h3 class="card-label font-weight-bolder text-dark">Sanksi dan
                                                            Pelanggaran</h3>
                                                    </div>
                                                </div>
                                                <!--end::Header-->
                                                <!--begin::Form-->
                                                <form class="form" id="" action="" method="">
                                                    <!--begin::Body-->
                                                    <div class="card-body">
                                                        <!--begin::Header-->
                                                        <h5 class="card-label">Sanksi</h5>
                                                        <!--end::Header-->
                                                        <div class="card card-custom card-fit card-border">
                                                            <div class="card-body pt-2">Lorem Ipsum is simply dummy text of
                                                                the printing and typesetting industry. Lorem Ipsum has been
                                                                the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled.
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled.
                                                            </div>
                                                        </div>
                                                        <!--begin::Header-->
                                                        <h5 class="card-label mt-6">Pelanggaran</h5>
                                                        <!--end::Header-->
                                                        <div class="card card-custom card-fit card-border">
                                                            <div class="card-body pt-2">Lorem Ipsum is simply dummy text of
                                                                the printing and typesetting industry. Lorem Ipsum has been
                                                                the industry's standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled.
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled.
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                standard dummy text ever since the 1500s, when an unknown
                                                                printer took a galley of type and scrambled.
                                                                Lorem Ipsum is simply dummy text of the printing and
                                                                typesetting industry. Lorem Ipsum has been the industry's
                                                                standard dummy text ever since the 1500s,
                                                                when an unknown printer took a galley of type and scrambled.
                                                            </div>
                                                        </div>
                                                        <!--end::Body-->
                                                </form>
                                                <!--end::Form-->
                                            </div>
                                        </div>
                                        <!--end::Content-->
                                    </div>
                                    <!--end::Profile Personal Information-->
                                </div>
                                <!--end::Container-->
                            </div>
                        </div>
                        <!--end::Entry Dashboard Page-->
                    </div>
                </div>
                <!--end::Content Subheader-->

                <!--begin::Footer-->
                <div class="footer bg-white py-4 d-flex flex-lg-column" id="kt_footer">
                    <!--begin::Container-->
                    <div class="container-fluid d-flex flex-column flex-md-row align-items-center justify-content-between">
                        <!--begin::Copyright-->
                        <div class="text-dark order-2 order-md-1">
                            <span class="text-muted font-weight-bold mr-2">2023 ©</span>
                            <a href="http://keenthemes.com/metronic" target="_blank"
                                class="text-dark-75 text-hover-primary">PI-Smart</a>
                        </div>

                        <div class="nav nav-dark order-1 order-md-2">
                            <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pr-3 pl-0">Panduan
                                Pengguna</a>
                            <a href="http://keenthemes.com/metronic" target="_blank" class="nav-link pr-3 pl-0">Kebijakan
                                Privasi</a>
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
                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px"
                    height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24" />
                        <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10"
                            rx="1" />
                        <path
                            d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z"
                            fill="#000000" fill-rule="nonzero" />
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
        <script src="assets/js/pages/crud/forms/widgets/bootstrap-datepicker.js"></script>

        <script>
            function showCard(sectionId) {
                // Hide all card sections
                document.querySelectorAll('.page-detail').forEach(function(section) {
                    section.style.display = 'none';
                });
                // Remove "active" class from all navigation items
                // document.querySelectorAll('.navi-item').forEach(function(navItem) {
                //     navItem.classList.remove('active');
                // });
                // Show the selected card section
                document.getElementById(sectionId).style.display = 'block';
                // Add "active" class to the clicked navigation item
                // document.getElementById(navId).classList.add('active');
            }

            // Add click event listeners to navigation items
            document.getElementById('nav-data-diri').addEventListener('click', function() {
                showCard('detail_info_data_diri', 'nav-data-diri');
            });

            document.getElementById('nav-appraisal').addEventListener('click', function() {
                showCard('detail_info_appraisal', 'nav-appraisal');
            });
            document.getElementById('nav-from-star').addEventListener('click', function() {
                showCard('detail_info_from_star', 'nav-from-star');
            });
            document.getElementById('nav-catatan').addEventListener('click', function() {
                showCard('detail_info_catatan', 'nav-catatan');
            });
            document.getElementById('nav-inovasi').addEventListener('click', function() {
                showCard('detail_info_inovasi', 'nav-inovasi');
            });
            document.getElementById('nav-sanksi').addEventListener('click', function() {
                showCard('detail_info_sanksi', 'nav-sanksi');
            });

            // Initial view (optional, you can choose which card to show by default)
            showCard('detail_info_data_diri');



            // function hideDetail() { 
            //     $('#detail_info_data_diri').replaceWith(span)
            //  };

            $(document).ready(function() {
                $('#kt_datepicker_1').datepicker({
                    format: 'DD-MM-YYYY'
                });
            });

            function addCalibration() {
                $('#addCalibration').modal('show');
            }

            function clearForm() {

            }

            function store() {

            }
        </script>
        

    </body>
@endsection
