@extends('KalibrasiLayout.tempKalibrasi')

@section('kalibrasiPage')

<body id="kt_body" class="page-loading-enabled quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-minimize-hoverable aside-fixed">
    <script>
        document.title = 'Dashboard Calibration | PI-Smart'
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
                        <div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
                            <!--begin::Info-->
                            <div class="d-flex align-items-center flex-wrap mr-1">
                                <!--begin::Page Title-->
                                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Dashboard Calibration</h5>
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
                                    <div class="row">
                                        <div class="col-xl-3">
                                            <!--begin::Stats Widget 4-->
                                            <div class="card card-custom card-stretch gutter-b">
                                                <!--begin::Body-->
                                                <div class="card-body d-flex align-items-center py-0 mt-8">
                                                    <div class="d-flex flex-column flex-grow-1 mb-5 py-2 py-lg-5">
                                                        <a href="#" class="card-title font-weight-boldest mb-1 text-hover-primary" style="font-size: 35px; color: #CE0628;">35</a>
                                                        <span class="font-weight-bold text-muted font-size-lg">Belum di Pool</span>
                                                    </div>
                                                    <!-- <img src="http://pismart-web:8888/public/assets/media/svg/avatars/004-boy-1.svg" alt="" class="align-self-end h-100px"> -->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Stats Widget 4-->
                                        </div>
                                        <div class="col-xl-3">
                                            <!--begin::Stats Widget 5-->
                                            <div class="card card-custom card-stretch gutter-b">
                                                <!--begin::Body-->
                                                <div class="card-body d-flex align-items-center py-0 mt-8">
                                                    <div class="d-flex flex-column flex-grow-1 mb-5 py-2 py-lg-5">
                                                        <a href="#" class="card-title font-weight-boldest mb-1 text-hover-primary" style="font-size: 35px; color:#46BB3E;">105</a>
                                                        <span class="font-weight-bold text-muted font-size-lg">Sudah di Pool</span>
                                                    </div>
                                                    <!-- <img src="http://pismart-web:8888/public/assets/media/svg/avatars/004-boy-1.svg" alt="" class="align-self-end h-100px"> -->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Stats Widget 5-->
                                        </div>
                                        <div class="col-xl-3">
                                            <!--begin::Stats Widget 5-->
                                            <div class="card card-custom card-stretch gutter-b">
                                                <!--begin::Body-->
                                                <div class="card-body d-flex align-items-center py-0 mt-8">
                                                    <div class="d-flex flex-column flex-grow-1 mb-5 py-2 py-lg-5">
                                                        <a href="#" class="card-title font-weight-boldest mb-1 text-hover-primary" style="font-size: 35px; color:#FB9811;">23</a>
                                                        <span class="font-weight-bold text-muted font-size-lg">Belum di Kalibrasi</span>
                                                    </div>
                                                    <!-- <img src="http://pismart-web:8888/public/assets/media/svg/avatars/004-boy-1.svg" alt="" class="align-self-end h-100px"> -->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Stats Widget 5-->
                                        </div>
                                        <div class="col-xl-3">
                                            <!--begin::Stats Widget 6-->
                                            <div class="card card-custom card-stretch gutter-b">
                                                <!--begin::Body-->
                                                <div class="card-body d-flex align-items-center py-0 mt-8">
                                                    <div class="d-flex flex-column flex-grow-1 mb-5 py-2 py-lg-5">
                                                        <a href="#" class="card-title font-weight-boldest mb-1 text-hover-primary" style="font-size: 35px; color: #2D50A0;">255</a>
                                                        <span class="font-weight-bold text-muted font-size-lg">Sudah di Kalibrasi</span>
                                                    </div>
                                                    <!-- <img src="http://pismart-web:8888/public/assets/media/svg/avatars/004-boy-1.svg" alt="" class="align-self-end h-100px"> -->
                                                </div>
                                                <!--end::Body-->
                                            </div>
                                            <!--end::Stats Widget 6-->
                                        </div>
                                    </div>
                                    
                                    <div class="card card-custom gutter-b">
                                        <div class="card-header">
                                            <div class="card-title">
                                                <label>Dashboard Calibration</label>
                                            </div>
                                            
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <div id="kt_datatable_wrapper" class="dataTables_wrapper dt-bootstrap4 no-footer"><div class="pull-left"><div id="kt_datatable_filter" class="dataTables_filter"><label>Search:<input type="search" class="form-control form-control-sm" placeholder="" aria-controls="kt_datatable"></label></div></div><div class="pull-right"></div><div class="dataTables_scroll"><div class="dataTables_scrollHead" style="overflow: hidden; position: relative; border: 0px; width: 100%;"><div class="dataTables_scrollHeadInner" style="box-sizing: content-box; width: 1114.5px; padding-right: 0px;"><table class="table table-head-custom table-head-bg table-hover text-center table-vertical-center dataTable no-footer" role="grid" style="margin-left: 0px; width: 1114.5px;"><thead>
                                                        <tr class="text-center" role="row"><th style="min-width: 5px; color: black !important; width: 75.9875px;" class="dt-body-nowarp sorting_asc" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" aria-label="#: activate to sort column descending" aria-sort="ascending">#</th><th style="min-width: 100px; color: black !important; width: 348px;" class="dt-body-nowarp sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" aria-label="Nama Kegiatan: activate to sort column ascending">Nama Kegiatan</th><th style="min-width: 100px; color: black !important; width: 421.788px;" class="dt-body-nowarp sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" aria-label="Deskripsi Kegiatan: activate to sort column ascending">Deskripsi Kegiatan</th><th style="min-width: 80px; color: black !important; width: 268.725px;" class="dt-body-nowarp sorting" tabindex="0" aria-controls="kt_datatable" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending">Action</th></tr>
                                                    </thead></table></div></div><div class="dataTables_scrollBody" style="position: relative; overflow: auto; width: 100%; max-height: 80vh;"><table class="table table-head-custom table-head-bg table-hover text-center table-vertical-center dataTable no-footer" id="kt_datatable" role="grid" aria-describedby="kt_datatable_info" style="width: 1116px;"><thead>
                                                        <tr class="text-center" role="row" style="height: 0px;"><th style="min-width: 5px; color: black !important; width: 75.9875px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" class="dt-body-nowarp sorting_asc" aria-controls="kt_datatable" rowspan="1" colspan="1" aria-label="#: activate to sort column descending" aria-sort="ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">#</div></th><th style="min-width: 100px; color: black !important; width: 348px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" class="dt-body-nowarp sorting" aria-controls="kt_datatable" rowspan="1" colspan="1" aria-label="Nama Kegiatan: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Nama Kegiatan</div></th><th style="min-width: 100px; color: black !important; width: 421.788px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" class="dt-body-nowarp sorting" aria-controls="kt_datatable" rowspan="1" colspan="1" aria-label="Deskripsi Kegiatan: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Deskripsi Kegiatan</div></th><th style="min-width: 80px; color: black !important; width: 268.725px; padding-top: 0px; padding-bottom: 0px; border-top-width: 0px; border-bottom-width: 0px; height: 0px;" class="dt-body-nowarp sorting" aria-controls="kt_datatable" rowspan="1" colspan="1" aria-label="Action: activate to sort column ascending"><div class="dataTables_sizing" style="height: 0px; overflow: hidden;">Action</div></th></tr>
                                                    </thead>
                                                    
                                                    <tbody>
                                                    <tr class="odd"><td valign="top" colspan="4" class="dataTables_empty">No data available in table</td></tr></tbody>
                                                </table></div></div><div class="dataTables_info" id="kt_datatable_info" role="status" aria-live="polite">Showing 0 to 0 of 0 entries</div><div class="dataTables_paginate paging_simple_numbers" id="kt_datatable_paginate"><ul class="pagination"><li class="paginate_button page-item previous disabled" id="kt_datatable_previous"><a href="#" aria-controls="kt_datatable" data-dt-idx="0" tabindex="0" class="page-link">Previous</a></li><li class="paginate_button page-item next disabled" id="kt_datatable_next"><a href="#" aria-controls="kt_datatable" data-dt-idx="1" tabindex="0" class="page-link">Next</a></li></ul></div></div>
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

    <script>
        function modalWorkFlow() {
            $('#modalWorkFlow').modal('show');
        }
    </script>
    <script>
        var currentRoute = window.location.href;

        // Remove the 'menu-item-active' class from all menu items
        $('ul.menu-nav li.menu-item').removeClass('menu-item-active');

        // Add the 'menu-item-active' class to the corresponding menu item based on the current route
        if (currentRoute === "{{route('dashboard_absen')}}") {
            // console.log("A");
            $('#menu-item-dashboard').addClass('menu-item-active');
        } else if (currentRoute === "{{route('pengajuan_absen')}}") {
            // console.log("B");
            $('#menu-item-pengajuan-absen').addClass('menu-item-active');
        } else if (currentRoute === "{{route('absence_approver')}}") {
            // console.log("C");
            $('#menu-item-absence-approver').addClass('menu-item-active');
        } else if (currentRoute === "{{route('management_saldo')}}") {
            // console.log("D");
            $('#menu-item-management-saldo').addClass('menu-item-active');
        }
    </script>

</body>
@endsection