@extends('layout.tempWeb')

@section('kontenpage')

<body id="kt_body" class="page-loading-enabled quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-minimize-hoverable aside-fixed">
    <script>
        document.title = 'Pengajuan Absen | PI-Smart'
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
            @include('layout.sidebarAbsence')
            <!--begin::Wrapper-->
            <div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

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
                            <div class="d-flex align-items-center">
                                <div id="selectYear"></div>
                            </div>
                        </div>
                    </div>
                    <!--end::Subheader-->

                    <!--begin::Entry Dashboard Page-->
                    <div class="d-flex flex-column-fluid">
                        <div class="container-fluid">
                            <div class="d-flex flex-column-fluid">
                                <div class="container-fluid p-0">
                                    {{-- <input class="form-control" type="hidden" id="nik_user" name="nik_user" value="2105096">
                                    <input class="form-control" type="hidden" id="company" name="company" value="B000"> --}}
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
                                        <div class="card-body py-10">
                                            <div class="table-responsive">
                                                <table class="table table-head-custom table-head-bg table-hover text-center display nowrap" role="grid" id="kt_datatable">
                                                    <thead>
                                                        <tr class="text-center" role="row">
                                                            <th>#</th>
                                                            <th>Tipe Absen</th>
                                                            {{-- <th>Deskripsi</th> --}}
                                                            <th>Tanggal Mulai</th>
                                                            <th>Tanggal Akhir</th>
                                                            <th>Status</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>

                                                    <tbody id="formAbsen">
                                                        <input type="hidden" id="token_oauth" name="token_oauth" value="{{$user['token']['access_token']}}" />
                                                        <input class="form-control" type="hidden" id="nik_user" name="nik_user" value="{{$user['nik']}}" />
                                                        <input class="form-control" type="hidden" id="company" name="company" value="{{$user['comp_code']}}" />
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
    <script src="https://pismart-dev.pupuk-indonesia.com/public/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
    <!--end::Page Scripts-->
    <script>
        $(document).ready(function() {
            $("body").popover({
                selector: '[data-toggle=popover]',
                html: true
            })
        });

        var token_oauth = $('#token_oauth').val();
        var emp_no = $("#nik_user").val();
        var company = $("#company").val();

        var current_year = new Date().getFullYear();
        selectYear(current_year)

        var year = $('#absence_year').val();
        $("#absence_year").change(function() {
            year = $('#absence_year').val();
            readFormAbsen()
        });

        function selectYear(year) {
            var start_year = new Date();
            start_year.setFullYear(year - 1) // set year from date -1
            // dropdown periode 
            var html =
                '<select class="form-control selectpicker" id="absence_year" data-style="btn-primary">' +
                '<optgroup label="Periode Tahun" id="listYear">' +
                '</optgroup>' +
                '</select>'
            $('#selectYear').html(html)
            var get_year = start_year.getFullYear();
            //looping periode
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
                get_year++ //add new year
            }
            $('#absence_year').selectpicker('refresh')
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        readFormAbsen()
        let table = $('#kt_datatable').DataTable({
            dom: '<"pull-left"f><"pull-right"l>tip',
            scrollY: '80vh',
            scrollX: true,
            scrollCollapse: true,
            searching: true,
            columnDefs: [{
                className: 'dt-body-nowarp',
                targets: "_all"
            }],
            processing: true,
            bLengthChange: true
        });

        function readFormAbsen() {
            $.ajax({
                type: "get",
                url: "https://601zgltt-9096.asse.devtunnels.ms/api/cuti/myCuti?nik=" + emp_no + "&tahun=" + year,
                beforeSend: function(xhr) {
                    KTApp.block('#kt_datatable', {
                        overlayColor: '#000000',
                        state: 'danger',
                        message: 'Please wait...',
                        centerY: false,
                        centerX: false,
                        css: {
                            position: 'fixed',
                            margin: 'auto'
                        }
                    });
                    xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                },
                success: function(data) {
                    var arr = data.data
                    table.clear().draw()
                    if (arr != null) {
                        arr.forEach((y, i) => {
                            approval = y.approved_by;
                            console.log(approval);

                            id_absens = y.id_pengajuan_absen
                            var url = `{{ url('form_pengajuan_absen') }}?id=` + id_absens
                            var action = `
                                    <a href="${url}" class="btn btn-icon my-2 btn-sm btn-warning">
                                        <i class="flaticon2-edit"></i>
                                    </a>
                                    <button type="button" onclick="deleteListAbsen(${y.id_pengajuan_absen})" class="btn btn-icon my-2 btn-sm btn-danger">
                                        <i class="flaticon2-trash"></i>
                                    </button>`

                            let statusHtml = '';
                            let actionButtons = '';
                            var statusApprov = '';
                            var keteranganRejected = [];
                            var jumlahApproval = 0;
                            var jumlahApproved = 0;
                            if (y.status == "Drafted") {
                                statusApprov = "Draft";

                                statusHtml = `
                                        <span class="label label-primary label-lg label-inline font-weight-bolder" style="color:#D8891D; background-color:#FFE7C7;">` + statusApprov + ` </span>`

                                actionButtons = action
                            } else if (y.status == "Submitted") {
                                approval.forEach((z, i) => {
                                    jumlahApproval = i + 1; // Increment i to get the correct count
                                    if (z.status == "Approved") {
                                        jumlahApproved++;
                                    }
                                });

                                statusHtml = `
                                                <span class="label label-primary label-lg label-inline font-weight-bolder" style="color:#D8891D; background-color:#FFE7C7;">
                                                (${jumlahApproved}/${jumlahApproval}) ${y.status}
                                                </span>`;
                                actionButtons = action;
                            } else if (y.status == "Completed") {
                                statusHtml = `
                                        <span class="label label-primary label-lg label-inline font-weight-bolder" style="color:#299233; background-color:#E6FFD2;"> ${y.status} </span>`
                            } else {
                                approval.forEach((z, i) => {
                                    if (z.status == "Rejected") {
                                        keteranganRejected.push(`${z.type_approver} : ${z.keterangan}`)
                                    }
                                })
                                var keteranganRejectedHtml = keteranganRejected.map(item => `<span>${item}</span>`).join('\n');
                                statusHtml = `
                                <div style="display: inline-block; position: relative;">
                                        <i class="fas fa-info-circle text-primary" data-toggle="popover" data-trigger="click" data-content="${keteranganRejectedHtml}" data-original-title title aria-describedby="popover88969"></i>
                                        <span class="label label-primary label-lg label-inline font-weight-bolder" style="color:#E03046; background-color:#FFD6D6; margin-left: 5px;">${y.status}</span>
                                    </div>`

                                actionButtons = action
                            }
                            table.row.add([
                                i + 1,
                                y.tipe_absen.nama_tipe_absen,
                                y.mulai_absen,
                                y.akhir_absen,
                                statusHtml,
                                actionButtons
                            ]).draw(false)
                        });
                    }
                    KTApp.unblock('#kt_datatable')
                },
                error: function(data) {
                    KTApp.unblock('#kt_datatable')
                }
            });
        }


        function showAbsen(id_pengajuan_absen) {
            $.ajax({
                type: "get",
                url: "https://601zgltt-9096.asse.devtunnels.ms/api/cuti/showPengajuanCuti/" + id_pengajuan_absen,
                data: "data",
                beforeSend: function(xhr) {
                    xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                },
                success: function(response) {

                }
            });
        }

        function deleteListAbsen(id_pengajuan_absen) {
            swal.fire({
                title: 'Apakah anda yakin ingin Menghapus Permohonan Pengajuan Absen ini ?',
                text: 'Mohon untuk melakukan pengecekan data kembali',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Ya, Submit!',
                cancelButtonText: 'Batalkan!',
                reverseButtons: true
            }).then(function(result) {
                if (result.isConfirmed) {
                    $.ajax({
                        type: "DELETE",
                        url: "https://601zgltt-9096.asse.devtunnels.ms/api/cuti/deletePengajuanCuti/" + id_pengajuan_absen,
                        beforeSend: function(xhr) {
                            Swal.fire({
                                html: 'Please Wait ...',
                                allowEscapeKey: false,
                                allowOutsideClick: false,
                                didOpen: () => {
                                    Swal.showLoading()
                                }
                            });
                            xhr.setRequestHeader('Authorization', 'Bearer ' + token_oauth);
                        },
                        success: function(response) {
                            Swal.fire("Berhasil", "Berhasil Menghapus Data", "success");
                            readFormAbsen()
                        },
                        error: function(data) {
                            Swal.fire("Gagal", "Gagal Menghapus Data", "error");
                        }
                    });
                }
            });
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