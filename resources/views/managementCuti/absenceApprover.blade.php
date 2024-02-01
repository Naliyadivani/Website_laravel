@extends('layout.tempWeb')

@section('kontenpage')

<body id="kt_body" class="page-loading-enabled quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-minimize-hoverable aside-fixed">
    <script>
        document.title = 'Absence Management | PI-Smart'
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

            {{-- <!--begin::Aside use include in layout.sidebarAbsence-->
            <!--end::Aside--> --}}
            @include('layout.sidebarAbsence')

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
                                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Approval Dashboard</h5>
                                <!--end::Page Title-->
                            </div>
                            <!--end::Info-->
                            <div class="d-flex align-items-center">
                                <div id="selectYear"></div>
                            </div>
                        </div>
                    </div>
                    <!--end::Subheader-->

                    <!--begin::Entry Dashboard Page-->
                    <div class="d-flex flex-column-fluid">
                        <div class="container-fluid">
                            <input type="hidden" id="token_oauth" name="token_oauth" value="{{$user['token']['access_token']}}" />
                            <input class="form-control" type="hidden" id="nik_user" name="nik_user" value="{{$user['nik']}}" />
                            <input class="form-control" type="hidden" id="manager" name="manager" value="{{$user['is_superior']}}" />
                            <input class="form-control" type="hidden" id="company" name="company" value="{{$user['comp_code']}}" />
                            <div class="d-flex flex-column-fluid" id="kt_content">
                                <!--begin::Container-->
                                <div class="container-fluid p-0">
                                    <div class="row">
                                        <div class="col-lg-6 col-md-12 col-sm-12 py-3 px-2 mx-0 mb-0">
                                            <div class="card-waiting-approval shadow-sm row rounded-xl card-information mx-2" onclick="cardActive()">
                                                <div class="col-8 ml-6 mr-0 mt-6 mb-0" style="height:30px">
                                                    <span class="font-weight-bold font-size-h3-lg font-size-h2-md font-size-h2-sm font-size-h2 text-dark" style="white-space: nowrap;">Outstanding Approval</span>
                                                </div>
                                                <div class="col d-flex justify-content-end mx-2 mt-3 mb-0" style="height:30px">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="38" height="25" viewBox="0 0 38 25" fill="none">
                                                        <ellipse cx="2" cy="3.06194" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                                        <ellipse cx="2" cy="12.8584" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                                        <ellipse cx="2" cy="22.6549" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                                        <ellipse cx="19" cy="3.06194" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                                        <ellipse cx="19" cy="12.8584" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                                        <ellipse cx="19" cy="22.6549" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                                        <ellipse cx="36" cy="3.06194" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                                        <ellipse cx="36" cy="12.8584" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                                        <ellipse cx="36" cy="22.6549" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                                    </svg>
                                                </div>
                                                <div class="col-12 d-flex flex-row" style="height:65%">
                                                    <div class="col-3 ml-3 d-flex align-items-center flex-row" style="width: 100%; display:relative; z-index: 1;">
                                                        <img class="d-flex align-self-start pt-3" src="https://pismart.pupuk-indonesia.com/public/assets/media/icon-menu/waiting_icon.png" alt="Card image">
                                                        <span class="font-weight-bolder text-waiting text-dark ml-3 d-flex align-self-start" style="font-size: 40px;">0
                                                        </span>
                                                    </div>
                                                    <div class="col-9 row">
                                                        <div class="col-12" style="height: 20px;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" height="80" width="100%" viewBox="0 0 515 80" preserveAspectRatio="none" fill="none">
                                                                <path d="M2 78.5841C40.5 37.7655 135.7 -30.9186 208.5 20.8938C299.5 85.6593 441.5 99.2655 513 27.969" stroke="url(#paint0_linear_4072_16248)" stroke-width="4" />
                                                                <defs>
                                                                    <linearGradient id="paint0_linear_4072_16248" x1="257.5" y1="2.30319" x2="471.5" y2="96.5" gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="white" />
                                                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                                                    </linearGradient>
                                                                </defs>
                                                            </svg>
                                                        </div>
                                                        <div class="col-7 d-flex justify-content-center" style="width: 100%; height: 20px!important; display:relative; z-index: 1;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="25" viewBox="0 0 38 25" fill="none">
                                                                <ellipse cx="2" cy="3.06194" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                                                <ellipse cx="2" cy="12.8584" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                                                <ellipse cx="2" cy="22.6549" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                                                <ellipse cx="19" cy="3.06194" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                                                <ellipse cx="19" cy="12.8584" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                                                <ellipse cx="19" cy="22.6549" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                                                <ellipse cx="36" cy="3.06194" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                                                <ellipse cx="36" cy="12.8584" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                                                <ellipse cx="36" cy="22.6549" rx="2" ry="2.17699" fill="#FFC87D"></ellipse>
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12 py-3 px-2 mx-0 mb-0">
                                            <div class="card-history-approval shadow-sm row card-information rounded-xl mx-2" onclick="cardActive(true)">
                                                <div class="col-8 ml-6 mr-0 mt-6 mb-0" style="height:30px">
                                                    <span class="font-weight-bold font-size-h3-lg font-size-h2-md font-size-h2-sm font-size-h2 text-dark" style="white-space: nowrap;">History Approval</span>
                                                </div>
                                                <div class="col d-flex justify-content-end mx-2 mt-3 mb-0" style="height:30px">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="38" height="22" viewBox="0 0 38 22" fill="none">
                                                        <circle cx="2" cy="2" r="2" fill="#A0D0FF" />
                                                        <circle cx="2" cy="11" r="2" fill="#A0D0FF" />
                                                        <circle cx="2" cy="20" r="2" fill="#A0D0FF" />
                                                        <circle cx="19" cy="2" r="2" fill="#A0D0FF" />
                                                        <circle cx="19" cy="11" r="2" fill="#A0D0FF" />
                                                        <circle cx="19" cy="20" r="2" fill="#A0D0FF" />
                                                        <circle cx="36" cy="2" r="2" fill="#A0D0FF" />
                                                        <circle cx="36" cy="11" r="2" fill="#A0D0FF" />
                                                        <circle cx="36" cy="20" r="2" fill="#A0D0FF" />
                                                    </svg>
                                                </div>
                                                <div class="col-12 d-flex flex-row" style="height:65%">
                                                    <div class="col-3 ml-3 d-flex align-items-center flex-row" style="width: 100%; display:relative; z-index: 1;">
                                                        <img class="d-flex align-self-start pt-3" src="https://pismart.pupuk-indonesia.com/public/assets/media/icon-menu/history_icon.png" alt="Card image">
                                                    </div>
                                                    <div class="col-9 row">
                                                        <div class="col-12" style="height: 20px;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" height="80" width="100%" viewBox="0 0 515 80" preserveAspectRatio="none" fill="none">
                                                                <path d="M2 78.5841C40.5 37.7655 135.7 -30.9186 208.5 20.8938C299.5 85.6593 441.5 99.2655 513 27.969" stroke="url(#paint0_linear_4072_16248)" stroke-width="4" />
                                                                <defs>
                                                                    <linearGradient id="paint0_linear_4072_16248" x1="257.5" y1="2.30319" x2="471.5" y2="96.5" gradientUnits="userSpaceOnUse">
                                                                        <stop stop-color="white" />
                                                                        <stop offset="1" stop-color="white" stop-opacity="0" />
                                                                    </linearGradient>
                                                                </defs>
                                                            </svg>
                                                        </div>
                                                        <div class="col-7 d-flex justify-content-center" style="width: 100%; height: 20px!important; display:relative; z-index: 1;">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="38" height="22" viewBox="0 0 38 22" fill="none">
                                                                <circle cx="2" cy="2" r="2" fill="#A0D0FF" />
                                                                <circle cx="2" cy="11" r="2" fill="#A0D0FF" />
                                                                <circle cx="2" cy="20" r="2" fill="#A0D0FF" />
                                                                <circle cx="19" cy="2" r="2" fill="#A0D0FF" />
                                                                <circle cx="19" cy="11" r="2" fill="#A0D0FF" />
                                                                <circle cx="19" cy="20" r="2" fill="#A0D0FF" />
                                                                <circle cx="36" cy="2" r="2" fill="#A0D0FF" />
                                                                <circle cx="36" cy="11" r="2" fill="#A0D0FF" />
                                                                <circle cx="36" cy="20" r="2" fill="#A0D0FF" />
                                                            </svg>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div id="filter_detail">
                                        <ul class="nav nav-pills mt-3" id="myTab" role="tablist">
                                            <li class="card card-custom gutter-b mb-3 nav-item">
                                                <a class="nav-link" data-toggle="tab" id="null" onclick="filterCard()" href="#all_data" id="all_data">
                                                    <span class="nav-text text-all-data font-weight-bolder mr-2">0</span>
                                                    <span class="nav-text font-weight-bold">All Data</span>
                                                </a>
                                            </li>
                                            <li class="card card-custom gutter-b mb-3 nav-item">
                                                <a class="nav-link" data-toggle="tab" id="null" onclick="filterCard('rejected')" href="#rejected" id="rejected">
                                                    <span class="nav-text text-rejected font-weight-bolder mr-2">0</span>
                                                    <span class="nav-text font-weight-bold">Rejected</span>
                                                </a>
                                            </li>
                                            <li class="card card-custom gutter-b mb-3 nav-item">
                                                <a class="nav-link text-success" data-toggle="tab" id="null" onclick="filterCard('approved')" href="#approved" id="approved">
                                                    <span class="nav-text text-approved font-weight-bolder mr-2">0</span>
                                                    <span class="nav-text font-weight-bold">Approved</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>

                                    <div id="card-absence">
                                    </div>
                                    <!--end::Container-->
                                </div>

                                <div class="modal fade px-0" id="addModalAbsence" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true">
                                    <div class="modal-dialog modal-xl" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="page-titile"></h5>
                                            </div>
                                            <div class="modal-body" id="modal-body">
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
        var token_oauth = $('#token_oauth').val();
        var emp_no = $("#nik_user").val();
        var manager = $("#manager").val();
        var company = $("#company").val();
        var base_url_web = window.location.origin + "/";
        var year = $('#absence_year').val();
        var current_year = new Date().getFullYear();
        selectYear(current_year)

        var year = $('#absence_year').val();
        $("#absence_year").change(function() {
            year = $('#absence_year').val();
            cardActive()
        });

        function selectYear(year) {
            var start_year = new Date();
            start_year.setFullYear(year - 1)
            var html =
                '<select class="form-control selectpicker" id="absence_year" data-style="btn-primary">' +
                '<optgroup label="Periode Tahun" id="listYear">' +
                '</optgroup>' +
                '</select>'
            $('#selectYear').html(html)
            var get_year = start_year.getFullYear();
            for (let i = 0; i < 3; i++) {
                if (get_year == (current_year)) {
                    $('#listYear').append($("<option></option>").attr({
                        value: get_year,
                        selected: 'selected'
                    }).text('Periode thn ' + get_year));
                } else {
                    $('#listYear').append($("<option></option>").attr('value', get_year).text('Periode thn ' +
                        get_year));
                }
                get_year++
            }
            $('absence_year').selectpicker('refresh')
        }

        cardActive()

        function cardActive(history = false) {
            // countWaitingApproval()
            $('#filter_detail').hide();
            if (history == false) {
                handleData(history);
                $('.card-waiting-approval').addClass('card-information-active')
                $('.card-history-approval').removeClass('card-information-active')
            } else {
                handleData(history);
                $('.card-waiting-approval').removeClass('card-information-active')
                $('.card-history-approval').addClass('card-information-active')
                $('#filter_detail').show();
            }
        }

        function handleData(history = false) {
            $('#card-absence').html('');
            getDataAbsenceAll(history);
            // getDataAppraissalAll(history);
        }

        function countWaitingApproval(count) {
            $('.text-waiting').text(count)
        }

        function countRejectedApproval(count) {
            $('.text-rejected').text(count)
        }

        function countApprovedApproval(count) {
            $('.text-approved').text(count)
        }

        function countAllDataApproval(count) {
            $('.text-all-data').text(count)
        }

        function getDataAbsenceAll(history = false) {
            stats = "";
            if (!history) {
                stats = "Submitted"
            }
            $.ajax({
                type: 'POST',
                url: 'https://api-pismart-dev.pupuk-indonesia.com/golang/api/cuti/listApprovalCuti',
                data: {
                    nik: emp_no,
                    tahun: year,
                    status: stats,
                    is_manager: manager,
                },
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                },
                success: function(result) {
                    var countWaittingApproval = 0;
                    var countRejected = 0;
                    var countApproved = 0;

                    var arr = result.data;

                    arr.forEach((x, p) => {
                        if (x.karyawan != null) {
                            var kondisi = '';
                            var status_badge = '';
                            var status_card = 'not-waiting-card';
                            var data_approved = x.approved_by

                            if (x.status === 'Submitted') {
                                if (manager) {
                                    data_approved.forEach((z) => {
                                        if (emp_no === z.nik) {
                                            if (z.status === 'WaitApv') {
                                                x.status = 'Waiting Approval';
                                                countWaittingApproval++;

                                                status_card = 'waiting-card';
                                                kondisi = '<div class="float-right mr-3">' +
                                                    '<a onclick="rejectedAction(\'' + x.id_pengajuan_absen + '\', \'Rejected\')" data-target="#detailRevisi" data-toggle="modal" class="btn btn-light-danger mr-2">Reject</a>' +
                                                    '<a onclick="approvalAction(\'' + x.id_pengajuan_absen + '\',\'Approved\')" class="btn btn-light-primary">Approve</a>' +
                                                    '</div>';

                                                status_badge = 'label-light-warning';
                                            } else if (z.status === 'Approved') {
                                                x.status = 'Approved';

                                                countApproved++;
                                                status_card = 'approved-card';
                                                status_badge = 'label-light-success';
                                            } else if (z.status === 'Rejected') {
                                                x.status = 'Rejected';

                                                countRejected++;
                                                status_card = 'rejected-card';
                                                status_badge = 'label-light-danger';
                                            }
                                        }
                                    });
                                } else {

                                    let shouldBreak = false;
                                    data_approved.forEach((z, i, arr) => {
                                        if (shouldBreak) {
                                            return;
                                        }
                                        if (z.status === 'WaitApv') {
                                            x.status = 'Waiting Approval';
                                            countWaittingApproval++;

                                            status_card = 'waiting-card';
                                            kondisi = '<div class="float-right mr-3">' +
                                                '<a onclick="rejectedAction(\'' + x.id_pengajuan_absen + '\', \'Rejected\')" data-target="#detailRevisi" data-toggle="modal" class="btn btn-light-danger mr-2">Reject</a>' +
                                                '<a onclick="approvalAction(\'' + x.id_pengajuan_absen + '\',\'Approved\')" class="btn btn-light-primary">Approve</a>' +
                                                '</div>';

                                            status_badge = 'label-light-warning';
                                            shouldBreak = true;
                                        } else if (z.status === 'Approved') {
                                            if ($('.card-history-approval.card-information-active').length > 0) {
                                                if (arr[i + 1] != undefined) {
                                                    if (arr[i + 1].status === 'WaitApv') {
                                                        x.status = 'Approved';

                                                        countApproved++;
                                                        countWaittingApproval++;
                                                        status_card = 'approved-card';
                                                        status_badge = 'label-light-success';

                                                        shouldBreak = true;
                                                    } else if (arr[i + 1].status === "Rejected") {
                                                        countRejected++;
                                                        status_card = 'rejected-card';
                                                        status_badge = 'label-light-danger';
                                                        shouldBreak = true;
                                                    } else {
                                                        x.status = 'Approved';

                                                        countApproved++;
                                                        status_card = 'approved-card';
                                                        status_badge = 'label-light-success';

                                                        shouldBreak = true;
                                                    }
                                                } else {
                                                    x.status = 'Approved';

                                                    countApproved++;
                                                    status_card = 'approved-card';
                                                    status_badge = 'label-light-success';

                                                    shouldBreak = true;
                                                }
                                            } else {
                                                if (arr[i + 1] != undefined) {
                                                    if (arr[i + 1].status === 'WaitApv') {
                                                        x.status = 'Waiting Approval';

                                                        countWaittingApproval++;

                                                        status_card = 'waiting-card';
                                                        kondisi = '<div class="float-right mr-3">' +
                                                            '<a onclick="rejectedAction(\'' + x.id_pengajuan_absen + '\', \'Rejected\')" data-target="#detailRevisi" data-toggle="modal" class="btn btn-light-danger mr-2">Reject</a>' +
                                                            '<a onclick="approvalAction(\'' + x.id_pengajuan_absen + '\',\'Approved\')" class="btn btn-light-primary">Approve</a>' +
                                                            '</div>';

                                                        status_badge = 'label-light-warning';
                                                        shouldBreak = true;
                                                    } else if (arr[i + 1].status === "Rejected") {
                                                        countRejected++;
                                                        status_card = 'rejected-card';
                                                        status_badge = 'label-light-danger';
                                                        shouldBreak = true;
                                                    } else {
                                                        x.status = 'Approved';

                                                        countApproved++;
                                                        status_card = 'approved-card';
                                                        status_badge = 'label-light-success';

                                                        shouldBreak = true;
                                                    }
                                                } else {
                                                    x.status = 'Approved';

                                                    countApproved++;
                                                    status_card = 'approved-card';
                                                    status_badge = 'label-light-success';

                                                    shouldBreak = true;
                                                }
                                            }
                                        } else if (z.status === 'Rejected') {
                                            countRejected++;
                                            status_card = 'rejected-card';
                                            status_badge = 'label-light-danger';
                                            shouldBreak = true;
                                        }
                                    });
                                }
                            } else if (x.status === 'Rejected') {
                                countRejected++;
                                status_card = 'rejected-card';
                                status_badge = 'label-light-danger';
                            } else if (x.status === 'Completed') {
                                x.status = 'Approved';
                                countApproved++;
                                status_card = 'approved-card';
                                status_badge = 'label-light-success';
                            }


                            if (x.tipe_absen.nama_tipe_absen == 'Cuti Tahunan') {
                                status_tipe_absen = 'ribbon-inner bg-green'
                            } else if (x.tipe_absen.nama_tipe_absen == 'Cuti Besar') {
                                status_tipe_absen = 'ribbon-inner bg-teal'
                            } else if (x.tipe_absen.nama_tipe_absen == 'Cuti Ibadah') {
                                status_tipe_absen = 'ribbon-inner bg-blue'
                            } else if (x.tipe_absen.nama_tipe_absen == 'Cuti Istri Melahirkan') {
                                status_tipe_absen = 'ribbon-inner bg-purple'
                            } else if (x.tipe_absen.nama_tipe_absen == 'Cuti Keluarga Inti Wafat') {
                                status_tipe_absen = 'ribbon-inner bg-yellow'
                            } else if (x.tipe_absen.nama_tipe_absen == 'Cuti Keluarga Rumah Wafat') {
                                status_tipe_absen = 'ribbon-inner bg-orange'
                            } else if (x.tipe_absen.nama_tipe_absen == 'Cuti Melahirkan') {
                                status_tipe_absen = 'ribbon-inner bg-pink'
                            }

                            if (x.karyawan.pos_id == 0 || x.karyawan.pos_id == null) {
                                x.karyawan.pos_id = null
                            }
                            if (x.karyawan.pos_title == '' || x.karyawan.pos_title == null) {
                                x.karyawan.pos_title = null
                            }

                            if (x.karyawan.dept_id == 0 || x.karyawan.dept_id == null) {
                                x.karyawan.dept_id = null
                            }
                            if (x.karyawan.dept_title == '' || x.karyawan.dept_title == null) {
                                x.karyawan.dept_title = null
                            }

                            pos_id_title = '<span class="font-weight-bold text-dark-50">' + x.karyawan.pos_id + ' - ' + x.karyawan.pos_title + '</span>'
                            dept_id_title = '<span class="font-weight-bold text-dark-50">' + x.karyawan.dept_id +
                                ' - ' + x.karyawan.dept_title + '</span>' +
                                '</div>'


                            var fileabsen = x.file_absen
                            var htmlFileAbsen = ""
                            fileabsen.forEach((item) => {
                                var img_ext = "https://pismart-dev.pupuk-indonesia.com/public/assets/media/icon-menu/icon_file_travel.png";

                                if (item.extension == ".jpg" || item.extension == ".gif" || item.extension == ".jpeg" || item.extension == ".png" || item.extension == ".svg") {
                                    var img_ext = item.url;
                                }
                                htmlFileAbsen += ` <div class="col-4 py-2 text-center">
                                    <div class="card card-custom card-shadowless">
                                        <div class="card-body p-0">
                                            <div class="overlay max-w-300px max-h-200px">
                                                <div class="overlay-wrapper symbol">
                                                    <div class="symbol-label min-w-300px min-h-200px" style="background-image: url('${img_ext}')"></div>
                                                </div>
                                                <div class="overlay-layer">
                                                    <a href="${item.url}" target="_blank" class="btn font-weight-bolder btn-sm btn-primary mr-2">Quick View</a>
                                                </div>
                                            </div>
                                    </div>
                            </div>
                            </div>`

                            });

                            var html =
                                `<div class="card card-custom gutter-b ${status_card} absence-individu-card">` +
                                '<div class="card-body pt-3">' +
                                '<div class="d-flex align-items-center justify-content-between mb-3 ribbon ribbon-clip ribbon-right mb-5 pb-6">' +
                                '<div class="ribbon-target bg-warning" style="top: 5px; right: -40px;">' +
                                '<span class="' + status_tipe_absen + '"></span>' + x.tipe_absen.nama_tipe_absen +
                                '</div>' +
                                '</div>' +
                                '<div class="d-flex mb-9">' +
                                '<div class="flex-shrink-0 mr-7 mt-lg-0 mt-3">' +
                                '<div class="symbol symbol-50 symbol-lg-120">' +
                                '<img src="' + x.foto + '" onerror="imgError(this, \'' + x.foto_default + '\');" alt="pic"/>' +
                                '</div>' +
                                '<div class="symbol symbol-50 symbol-lg-120 symbol-primary d-none">' +
                                '<span class="font-size-h3 symbol-label font-weight-boldest">JM</span>' +
                                '</div>' +
                                '</div>' +
                                ' <div class="flex-grow-1">' +
                                '<div class="d-flex justify-content-between flex-wrap mt-1">' +
                                '<div class="d-flex mr-3">' +
                                '<a href="#" class="text-dark-75 text-hover-primary font-size-h5 font-weight-bold mr-3">' +
                                (x.karyawan ? x.karyawan.nama : "-") + '</a>' +
                                '<span class="label label-lg font-weight-bold ' + status_badge +
                                ' label-inline" id="status' + x.nik + '">' + x.status +
                                '</span>' +
                                '</div>' +
                                '<div class="my-lg-0 my-3">' +
                                '<img src="' + base_url_web + '' + x.companys.assets_logo_full +
                                '" style="height:40px;width:auto;" alt="Pupuk Indonesia">' +
                                '</div>' +
                                '</div>' +
                                '<div class="d-flex flex-wrap justify-content-between mt-1">' +
                                '<div class="d-flex flex-column flex-grow-1 pr-8">' +
                                '<div class="d-flex flex-wrap mb-4">' +
                                '<a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">' +
                                '<i class="flaticon2-user mr-2 font-size-lg"></i>' + x.karyawan
                                .emp_no + '</a>' +
                                '<a href="#" class="text-dark-50 text-hover-primary font-weight-bold mr-lg-8 mr-5 mb-lg-0 mb-2">' +
                                '<i class="flaticon2-calendar-3 mr-2 font-size-lg"></i>' + x.karyawan
                                .pos_title + '</a>' +
                                '</div>' +
                                pos_id_title +
                                dept_id_title +

                                '</div>' +
                                '</div>' +
                                '</div>' +

                                '<div class="separator separator-solid"></div>' +

                                '<div class="accordion accordion-light accordion-toggle-arrow" id="accordionExample2">' +
                                '<div class="card">' +
                                '<div class="card-header" id="headingOne2">' +
                                '<div class="card-title" data-toggle="collapse" data-target="#id_' + x.karyawan.emp_no + "_" + x.id_pengajuan_absen +
                                '" onclick="getDataAbsenceIndi(' + x.id_pengajuan_absen + ')">' +
                                'Detail Absence' +
                                '&nbsp;<span class="label label-lg font-weight-bold label-light-primary label-inline">Klik Di sini untuk Approval</span>' +

                                '</div>' +

                                '</div>' +
                                '<div id="id_' + x.karyawan.emp_no + "_" + x.id_pengajuan_absen +
                                '" class="collapse" data-parent="#accordionExample2">' +
                                '<div class="card-body" style="overflow-x:auto;">' +
                                '<div class="card border gutter-b p-4 m-4" style="overflow-x:auto;">' +
                                '<h6 class="font-weight-bolder mb-3">Absence Details:</h6>' +
                                '<div class="text-dark-50 line-height-lg">' +
                                '<div class="col-12">' +
                                '<div class="form-group row mb-3 mx-2">' +
                                '<label class="col-3 col-form-label p-0">Tanggal Pengajuan</label>' +
                                ' <label class="col-1 text-right px-0">:</label>' +
                                '<label class="col-8 px-3 mb-0" id="tgl_pengajuan_detail_' + x.karyawan.emp_no + "_" + x.id_pengajuan_absen +
                                '">Not Yet</label>' +
                                '</div>' +
                                '<div class="form-group row mb-3 mx-2">' +
                                '<label class="col-3 col-form-label p-0">Tipe Absen</label>' +
                                ' <label class="col-1 text-right px-0">:</label>' +
                                '<label class="col-8 px-3 mb-0" id="tipe_absen_detail_' + x.karyawan.emp_no + "_" + x.id_pengajuan_absen +
                                '">Not Yet</label>' +
                                '</div>' +
                                '<div class="form-group row mb-3 mx-2">' +
                                '<label class="col-3 col-form-label p-0">Deskripsi</label> ' +
                                '<label class="col-1 text-right px-0">:</label>' +
                                '<label class="col-8 px-3 mb-0" id="deskripsi_detail_' + x.karyawan.emp_no + "_" + x.id_pengajuan_absen +
                                '">Not Yet</label>' +
                                '</div>' +
                                '<div class="form-group row mb-3 mx-2">' +
                                '<label class="col-3 col-form-label p-0">Start Date</label>' +
                                '<label class="col-1 text-right px-0">:</label>' +
                                '<label class="col-8 px-3 mb-0" id="start_Date_detail_' + x.karyawan.emp_no + "_" + x.id_pengajuan_absen +
                                '">Not Yet</label>' +
                                '</div>' +
                                '<div class="form-group row mb-3 mx-2">' +
                                '<label class="col-3 col-form-label p-0">End Date</label>' +
                                '<label class="col-1 text-right px-0">:</label>' +
                                '<label class="col-8 px-3 mb-0" id="end_Date_detail_' + x.karyawan.emp_no + "_" + x.id_pengajuan_absen +
                                '">Not Yet</label>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                `<div class="card border gutter-b p-4 m-4">
                                            <div class="card-header">
                                                <b>Attachment File</b>
                                            </div>
                                            <div class="card-body mt-3">
                                                <div id="listPhotonull" class="row">
                                                   ${htmlFileAbsen}
                            
                            </div></div></div>
                                        </div>` +
                                kondisi +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '</div>' +
                                '</div>';
                        }
                        $('#card-absence').append(html);
                    });
                    countWaitingApproval(countWaittingApproval)
                    countRejectedApproval(countRejected)
                    countApprovedApproval(countApproved)
                    countAllDataApproval(countRejected + countApproved)
                    KTApp.unblock('#kt_content');
                },
                complete: function(data) {
                    if (history == false) {
                        $('.rejected-card').hide();
                        $('.approved-card').hide();
                    } else {
                        $('.waiting-card').hide();
                    }
                },
                error: function(data) {
                    KTApp.unblock('#kt_content');
                }
            });
        }

        function imgError(image, defaultSrc) {
            image.src = defaultSrc;
        }

        function filterCard(tipe = null) {
            $('.waiting-card').hide();
            $('.rejected-card').show();
            $('.approved-card').show();
            if (tipe == 'rejected') {
                $('.approved-card').hide();
            } else if (tipe == 'approved') {
                $('.rejected-card').hide();
            }
        }

        function getDataAbsenceIndi(id_pengajuan) {

            $.ajax({
                type: 'GET',
                url: 'https://api-pismart-dev.pupuk-indonesia.com/golang/api/cuti/showApprovalPengajuanCuti/' + id_pengajuan,
                beforeSend: function(xhr) {
                    //     KTApp.block('#kt_content', {
                    //     overlayColor: '#000000',
                    //     state: 'danger',
                    //     message: 'Please wait...',
                    //     centerY: false,
                    //     centerX: false,
                    //     css: {
                    //         position: 'fixed',
                    //         margin: 'auto'
                    //     }
                    // });
                    xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                },
                success: function(result) {
                    var dataIndiv = result.data;
                    $('#tgl_pengajuan_detail_' + dataIndiv.karyawan.emp_no + "_" + dataIndiv.id_pengajuan_absen + '').html(dataIndiv.tgl_pengajuan);
                    $('#tipe_absen_detail_' + dataIndiv.karyawan.emp_no + "_" + dataIndiv.id_pengajuan_absen + '').html(dataIndiv.tipe_absen.nama_tipe_absen);
                    $('#deskripsi_detail_' + dataIndiv.karyawan.emp_no + "_" + dataIndiv.id_pengajuan_absen + '').html(dataIndiv.deskripsi);
                    $('#start_Date_detail_' + dataIndiv.karyawan.emp_no + "_" + dataIndiv.id_pengajuan_absen + '').html(dataIndiv.mulai_absen);
                    $('#end_Date_detail_' + dataIndiv.karyawan.emp_no + "_" + dataIndiv.id_pengajuan_absen + '').html(dataIndiv.akhir_absen);
                    KTApp.unblock('#kt_content');
                }
            });
            // <h6 class="font-weight-bolder mb-3">Absence Details:</h6>
            // 														
        }

        function rejectedAction(id, status_laporan) {
            Swal.fire({
                title: 'Apakah Anda yakin untuk menolak pengajuan ini ? ',
                input: 'textarea',
                text: "Mohon untuk mengisikan alasan penolakan",
                icon: "question",
                showCancelButton: true,
                confirmButtonText: "Ya, Reject!",
                confirmButtonColor: '#f42c02',
                cancelButtonText: "Batalkan!",
                inputValidator: (value) => {
                    if (!value) {
                        return 'Harap isi alasan penolakan!'
                    }
                }
            }).then(function(result) {

                if (result.value) {
                    var obj = {
                        id_pengajuan_absen: id,
                        nik: emp_no,
                        is_manager: manager,
                        status: status_laporan,
                        keterangan: result.value,
                    }

                    $.ajax({
                        url: 'https://api-pismart-dev.pupuk-indonesia.com/golang/api/cuti/approve',
                        type: "POST",
                        data: obj,
                        beforeSend: function(xhr) {
                            xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                        },
                        success: function(result) {
                            Swal.fire("Rejected Berhasil", "Pengajuan Absence berhasil direject.", "success");
                            cardActive();
                        },
                        error: function(data) {
                            if (data['responseJSON']['errorcode_'] == 503) {
                                Swal.fire(
                                    'Gagal!',
                                    data['responseJSON']['field_'],
                                    'error'
                                )
                            }
                            // handleUnauthorized(data);
                        }
                    })
                }
            })
        }

        function approvalAction(id, status_laporan) {
            var obj = {
                id_pengajuan_absen: id,
                nik: emp_no,
                is_manager: manager,
                status: status_laporan,
                keterangan: '',
            }

            Swal.fire({
                title: "Approve pengajuan perbaikan presensi ini ? ",
                text: "Mohon untuk melakukan pengecekan data kembali",
                icon: "question",
                showCancelButton: true,
                confirmButtonText: "Ya, Approve!",
                cancelButtonText: "Batalkan!",
                //reverseButtons: true
            }).then(function(result) {
                if (result.value) {
                    $.ajax({
                        url: 'https://api-pismart-dev.pupuk-indonesia.com/golang/api/cuti/approve',
                        type: "POST",
                        data: obj,
                        beforeSend: function(xhr) {
                            xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                        },
                        success: function(result) {
                            Swal.fire("Approved Berhasil", "Pengajuan Absence berhasil disetujui.", "success");
                            cardActive();
                        },
                        error: function(data) {
                            // console.log(data);
                            Swal.fire("Gagal", data.responseJSON.keterangan, "error");
                            // cardActive();
                            // Swal.fire("Gagal", "Proses Approved Gagal", "error");
                            // handleUnauthorized(data);
                        }
                    })

                }
            })
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