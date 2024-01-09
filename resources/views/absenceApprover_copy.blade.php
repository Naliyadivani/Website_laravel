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
                                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">Absence Approver</h5>
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
                                                <label>Daftar</label>
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
                                                                    <th>Nama Pegawai</th>
                                                                    <th>Tipe Absen</th>
                                                                    <th>Tanggal Pengajuan</th>
                                                                    <th>Detail Pengajuan</th>
                                                                </tr>
                                                            </thead>

                                                            <tbody id="absenceApprover">
                                                                <input class="form-control" type="hidden" id="nik_user" name="nik_user" value="82105096" />
																<input class="form-control" type="hidden" id="company" name="company" value="A000" />
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="modal fade" tabindex="-1" data-backdrop="static" id="modalApprover"  aria-hidden="true" role="dialog">
                                            <div class="modal-dialog modal-xl modal-dialog-centered modal-dialog-scrollable" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h4 class="modal-title">Detail Pengajuan Absen</h4>
                                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <i aria-hidden="true" class="ki ki-close"></i>
                                                        </button>
                                                    </div>

                                                    <div class="modal-body">
                                                        <div class="form-group row mb-3 mx-2">
                                                            <label class="col-3 col-form-label p-0">NIK</label>
                                                            <label class="col-1 text-right px-0">:</label>
                                                            <label class="col-8 px-3 mb-0" id="detail_nik">Not Yet</label>
                                                        </div>
                                                        <div class="form-group row mb-3 mx-2">
                                                            <label class="col-3 col-form-label p-0">Nama</label>
                                                            <label class="col-1 text-right px-0">:</label>
                                                            <label class="col-8 px-3 mb-0" id="detail_nama">Not Yet</label>
                                                        </div>
                                                        <div class="form-group row mb-3 mx-2">
                                                            <label class="col-3 col-form-label p-0">Tipe Absen</label>
                                                            <label class="col-1 text-right px-0">:</label>
                                                            <label class="col-8 px-3 mb-0" id="tipe_absen_detail">Not Yet</label>
                                                        </div>
                                                        <div class="form-group row mb-3 mx-2">
                                                            <label class="col-3 col-form-label p-0">Deskripsi</label>
                                                            <label class="col-1 text-right px-0">:</label>
                                                            <label class="col-8 px-3 mb-0" id="deskripsi_detail">Not Yet</label>
                                                        </div>
                                                        <div class="form-group row mb-3 mx-2">
                                                            <label class="col-3 col-form-label p-0">Start Date</label>
                                                            <label class="col-1 text-right px-0">:</label>
                                                            <label class="col-8 px-3 mb-0" id="start_Date_detail">Not Yet</label>
                                                        </div>
                                                        <div class="form-group row mb-3 mx-2">
                                                            <label class="col-3 col-form-label p-0">End Date</label>
                                                            <label class="col-1 text-right px-0">:</label>
                                                            <label class="col-8 px-3 mb-0" id="end_Date_detail">Not Yet</label>
                                                        </div>
                                                        <div class="form-group row mb-3 mx-2">
                                                            <label class="col-3 col-form-label p-0">File</label>
                                                            <label class="col-1 text-right px-0">:</label>
                                                            <label class="col-8 px-3 mb-0" id="file_detail">Not Yet</label>
                                                        </div>
                                                    </div>

                                                    <div class="modal-footer">
                                                        <button type="button" class="btn btn-light-danger font-weight-bold" data-dismiss="modal">Reject</button>
                                                        <button type="button" class="btn btn-success font-weight-bold" onclick="approved()">Approve</button>
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
    <script src="assets/js/pages/widgets.js"></script>

    <script>
        var emp_no = $("#nik_user").val();
        var company = $("#company").val();
        var year = 2023;
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        }); 

        $(function () {
            $('[data-toggle="tooltip"]').tooltip()
        });

        readAbsenceApprover();
        function readAbsenceApprover(){
            $.ajax({
                type: "post",
                url: "https://api-pismart-dev.pupuk-indonesia.com/golang/api/cuti/listApprovalCuti",
                data: {
                    nik:emp_no,
                    tahun:year,
                },
                success: function (response) {
                    var arr = response.data
                    console.log(response);
                    $('#absenceApprover').html('')
                    arr.forEach((y,i) => {
                        var html=`<tr>
                        <td>${i+1}</td>
                        <td>${y.nik} - ${y.nama}</td>
                        <td>${y.tipe_absen.nama_tipe_absen}</td>
                        <td>${y.tgl_pengajuan}</td>
						<td class=" dt-body-nowarp">
							<button type="button" onclick="show('${y.id_pengajuan_absen}')" class="btn btn-icon my-2 btn-sm btn-light-primary" data-toggle="tooltip" title:"Lihat Detail" data-placement:"bottom">
                            <i class="flaticon-eye"></i>
                            </button>
						</td>
                    </tr>`
                    $('#absenceApprover').append(html)
                    });
                }
            });
        }

        function show(id_pengajuan_absen){
            $.ajax({
                type: "get",
                url: "https://api-pismart-dev.pupuk-indonesia.com/golangapi/cuti/showApprovalPengajuanCuti/"+id_pengajuan_absen,
                success: function (response) {
                    var result = response.data; 
                    console.log(response.data);
                    $('#modalApprover').modal('show');
				// read()
                
                $('#detail_nik').text(result.nik);
                $('#detail_nama').text(result.nama);
                $('#tipe_absen_detail').text(result.tipe_absen.nama_tipe_absen);
                $('#deskripsi_detail').text(result.deskripsi)
                $('#start_Date_detail').text(result.mulai_absen)
                $('#end_Date_detail').text(result.akhir_absen)
                }
            });
        }

        function approved(){
            success: function (response) {
                 Swal.fire({
                text: "Batas maksimal pengajuan absen anda pada tanggal: ",
                icon: "warning",
                buttonsStyling: false,
                confirmButtonText: "Ok!",
                customClass: {
                    confirmButton: "btn font-weight-bold btn-primary",
                }
            
            })
        }
            
        }

    </script>

</body>
@endsection
