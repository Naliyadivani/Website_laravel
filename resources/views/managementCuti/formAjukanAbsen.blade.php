@extends('layout.tempWeb')

@section('kontenpage')

<body id="kt_body" class="page-loading-enabled quick-panel-right demo-panel-right offcanvas-right header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-minimize-hoverable aside-fixed">
    <script>
        document.title='Formulir Pengajuan Absen | PI-Smart'
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
                <!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Subheader-->
						<div class="subheader py-2 py-lg-6 subheader-solid" id="kt_subheader">
							<div class="container-fluid d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
								<!--begin::Info-->
								<div class="d-flex align-items-center flex-wrap mr-1">
									<!--begin::Page Heading-->
									<div class="d-flex align-items-baseline flex-wrap mr-5">
										<!--begin::Page Title-->
										<h5 class="text-dark font-weight-bold my-1 mr-5">Formulir Pengajuan Absen</h5>
										<!--end::Page Title-->
									</div>
									<!--end::Page Heading-->
								</div>
								<!--end::Info-->
							</div>
						</div>
						<!--end::Subheader-->
						<!--begin::Entry-->
						<div class="d-flex flex-column-fluid">
							<!--begin::Container-->
							<div class="container">
								<div class="card card-custom card-transparent">
									<div class="card-body p-0">
										<!--begin: Wizard-->
										<div class="wizard wizard-4" id="kt_wizard" data-wizard-state="step-first" data-wizard-clickable="true">
											<!--begin: Wizard Nav-->
											<div class="wizard-nav">
												<div class="wizard-steps">
													<!--begin::Wizard Step 1 Nav-->
													<div class="wizard-step" data-wizard-type="step" data-wizard-state="current">
														<div class="wizard-wrapper">
															<div class="wizard-number">1</div>
															<div class="wizard-label">
																<div class="wizard-title">Setup</div>
																<div class="wizard-desc">Setup Your Absence</div>
															</div>
														</div>
													</div>
													
													<!--begin::Wizard Step 2 Nav-->
													<div class="wizard-step" data-wizard-type="step">
														<div class="wizard-wrapper">
															<div class="wizard-number">2</div>
															<div class="wizard-label">
																<div class="wizard-title">Completed</div>
																<div class="wizard-desc">Review and Submit</div>
															</div>
														</div>
													</div>
													<!--end::Wizard Step 4 Nav-->
												</div>
											</div>
											<!--end: Wizard Nav-->
											<!--begin: Wizard Body-->
											<div class="card card-custom card-shadowless rounded-top-0">
												<div class="card-body p-0">
													<div class="row justify-content-center py-8 px-8">
														<div class="col-xl-12">
															<!--begin: Wizard Form-->
															<form class="form mt-0 mt-lg-10" id="kt_form">
																<!--begin: Wizard Step 1-->
																<div class="pb-5" data-wizard-type="step-content" data-wizard-state="current">
																	<div class="mb-10 font-weight-bold text-dark">Enter your Account Details</div>
																	<!--begin::Input-->
                                                                    <input type="hidden" id="id_pengajuan_absen">

																	<div class="form-group">
																		<label>NIK</label>
																		<input type="text" class="form-control form-control-solid form-control-lg" name="nik" placeholder="NIK" value="{{ Auth::user()->nik }}" readonly/>
																	</div>
																	<!--end::Input-->
																	<!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>Pilih Tipe Absen <span class="text-danger">*</span></label>
                                                                        <select class="form-control form-control-lg selectpicker" id="nama_tipe_absen" name="nama_tipe_absen" onchange="handleTipeAbsenChange(this)">
                                                                            <option selected value="">Pilih Cuti</option>
                                                                        </select>
                                                                    </div>
                                                                    
                                                                    <div id="form_absen" style="display: none">
                                                                    <div class="form-group">
                                                                        <label>Deskripsi<span class="text-danger"> *</span></label>
                                                                        <textarea class="form-control" name="deskripsi_absen" id="deskripsi_absen" placeholder="Enter Absence Descriptions" rows="5"></textarea>
                                                                    </div>

                                                                        {{-- <input type="hidden" name="" id="" value="0"> --}}
                                                                    <!--begin::Input-->
                                                                    <div class="form-group">
                                                                        <label>Start Date <span class="text-danger">*</span></label>
                                                                        <div class="input-group date" id="kt_datetimepicker_7_1" data-target-input="nearest">
                                                                            <input type="text" class="form-control datetimepicker-input" readonly data-toggle="datetimepicker" placeholder="Start Date" name="start_Date" id="start_Date" data-target="#kt_datetimepicker_7_1"/>
                                                                            <div class="input-group-append" data-target="#kt_datetimepicker_7_1" data-toggle="datetimepicker">
                                                                                <span class="input-group-text">
                                                                                    <i class="ki ki-calendar"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <span class="form-text text-muted">Please enter start date.</span>
                                                                    </div>
                                                                    
                                                                    <div class="form-group" id="end_Date_div">
                                                                        <label>End Date<span class="text-danger">*</span></label>
                                                                        <div class="input-group date" id="kt_datetimepicker_7_2" data-target-input="nearest">
                                                                            <input type="text" class="form-control datetimepicker-input" readonly data-toggle="datetimepicker" placeholder="End Date" name="end_Date" id="end_Date" data-target="#kt_datetimepicker_7_2"/>
                                                                            <div class="input-group-append" data-target="#kt_datetimepicker_7_2" data-toggle="datetimepicker">
                                                                                <span class="input-group-text">
                                                                                    <i class="ki ki-calendar"></i>
                                                                                </span>
                                                                            </div>
                                                                        </div>
                                                                        <span class="form-text text-muted">Please enter end date.</span>
                                                                    </div>
                                                                
                                                                <div class="form-group">
                                                                    <label>Dokumentasi Kegiatan<span class="text-muted">(.jpg)</span></label>
                                                                    <div class="dropzone dropzone-default dropzone-success dz-clickable" id="customFile">
                                                                        <div class="dropzone-msg dz-message needsclick">
                                                                            <h3 class="dropzone-msg-title">Upload Gambar disini</h3>
                                                                            <span class="dropzone-msg-desc">Upload up to 15 files and file size maximum 2MB</span>
                                                                        </div>
                                                                    </div>
                                                                </div>   
                                                                    </div>   

																</div>
																
																<!--begin: Wizard Step 2-->
																<div class="pb-5" data-wizard-type="step-content">
																	<!--begin::Section-->
																	<h4 class="mb-10 font-weight-bold text-dark">Review your Details and Submit</h4>
																	<h6 class="font-weight-bolder mb-3">Absence Details:</h6>
																	<div class="text-dark-50 line-height-lg">
                                                                        <div class="col-12">
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
                                                                        </div>
																	</div>
																	<div class="separator separator-dashed my-5"></div>
                                                                    <h6 class="font-weight-bolder mb-3">Approver:</h6>
																	<!--end::Section-->
																
																</div>
																<!--end: Wizard Step 2-->
																<!--begin: Wizard Actions-->
																<div class="d-flex justify-content-between border-top mt-5 pt-10">
																	<div class="mr-2">
																		<button type="button" class="btn btn-light-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-prev">Previous</button>
																	</div>
																	<div>
																		<button type="button" class="btn btn-success font-weight-bolder text-uppercase px-9 py-4 btn-submit" data-wizard-type="action-submit" onclick="storeAbsen()">Submit</button>
																		<button type="button" class="btn btn-primary font-weight-bolder text-uppercase px-9 py-4" data-wizard-type="action-next">Next</button>
																	</div>
																</div>
																<!--end: Wizard Actions-->
															</form>
															<!--end: Wizard Form-->
														</div>
													</div>
												</div>
											</div>
											<!--end: Wizard Bpdy-->
										</div>
										<!--end: Wizard-->
									</div>
								</div>
							</div>
							<!--end::Container-->
						</div>
						<!--end::Entry-->
					</div>
					<!--end::Content-->
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
    <script src="assets/js/pages/custom/wizard/wizard-4.js"></script>
    <script src="assets/js/pages/crud/forms/widgets/bootstrap-datetimepicker.js"></script>

    <script>
        var emp_no = $("#nik_user").val();
        var company = $("#company").val();
        var year = 2023;
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        }); 

        
        function refreshDatetimepicker(){
            $('#kt_datetimepicker_7_1').datetimepicker('destroy');
            $('#kt_datetimepicker_7_1').datetimepicker({
                format: 'YYYY-MM-DD'
            });

            $('#kt_datetimepicker_7_2').datetimepicker('destroy');
            $('#kt_datetimepicker_7_2').datetimepicker({
                useCurrent: false,
                format: 'YYYY-MM-DD'
            });
        }
        
        $('#kt_datetimepicker_7_3').datetimepicker({format:'YYYY-MM-DD'});

        $('#kt_datetimepicker_7_1').on('change.datetimepicker', function (datetimepicker) {
            var jmlhHariKalender = 0;
            var JmlHariKerja = 0;
            var selectedDate = datetimepicker.date.toDate();
            
            if (my_max_absen != null) {
                console.log(my_max_absen);
                if (my_max_absen.tipe_max_absen == "hari_kalender"){
                    while (jmlhHariKalender < my_max_absen.max_absen) {
                        jmlhHariKalender++;
                        
                        // Check if the current day is not Saturday or Sunday
                        if (selectedDate.getDay() !== 0 && selectedDate.getDay() !== 6) {
                            JmlHariKerja++;
                        }
                        selectedDate.setDate(selectedDate.getDate() + 1);
                    }
                }else if (my_max_absen.tipe_max_absen == "hari_kerja"){
                    console.log("Hari Kerja: ", my_max_absen.max_absen);
                    while (JmlHariKerja < my_max_absen.max_absen) {
                        jmlhHariKalender++;
                        
                        // Check if the current day is not Saturday or Sunday
                        if (selectedDate.getDay() !== 0 && selectedDate.getDay() !== 6) {
                            JmlHariKerja++;
                        }
                        selectedDate.setDate(selectedDate.getDate() + 1);
                    }
                }
                var endDate = new Date(selectedDate.getFullYear(),selectedDate.getMonth(),selectedDate.getDate());
                // console.log("Hari Kalender:",jmlhHariKalender,"\nHari Kerja:",JmlHariKerja);
                // console.log("EndDate After:",endDate.toISOString().slice(0, 10));
                $('#end_Date').val(endDate.toISOString().slice(0, 10))
            }else{
                // console.log(saldoObject.saldo);
                while (jmlhHariKalender < my_saldo.saldo) {
                    jmlhHariKalender++;
                    
                    // Check if the current day is not Saturday or Sunday
                    if (selectedDate.getDay() !== 0 && selectedDate.getDay() !== 6) {
                        JmlHariKerja++;
                    }
                    selectedDate.setDate(selectedDate.getDate() + 1);
                }
                console.log("Hari Kalender:",jmlhHariKalender,"\nHari Kerja:",JmlHariKerja);
                
                Swal.fire({
                    text: "Batas maksimal pengajuan absen anda pada tanggal: " + selectedDate.toISOString().slice(0, 10),
                    icon: "warning",
                    buttonsStyling: false,
                    confirmButtonText: "Ok!",
                    customClass: {
                        confirmButton: "btn font-weight-bold btn-primary",
                    }
                });
            }
        });
        
        var my_max_absen
        var my_saldo
        function handleTipeAbsenChange(selectElement) {
            if (arrReadFormAbsen == null) {
                clear();
            }else{
                refreshDatetimepicker();
                $('#start_Date').val(arrReadFormAbsen.mulai_absen);
                $('#end_Date').val(arrReadFormAbsen.akhir_absen);
            }
            // if arrReadFormAbsen == null{
            //     clear();
            // }
            // Get the selected option
            var selectedOption = selectElement.options[selectElement.selectedIndex];
            
            // // Get the data-max-absen attribute value
        // var maxAbsen = selectedOption.getAttribute('data-max-absen');
        my_max_absen = arrTipeCuti[selectElement.selectedIndex-1].my_max_absen
        my_saldo = arrTipeCuti[selectElement.selectedIndex-1].my_saldo
        // console.log(max_absen);
       
        // var maxAbsen = selectedOption.getAttribute('data-max-absen');
        
        $('#form_absen').show();
        // Get the FormValidation instance
        var formValidation = KTWizard4.getValidations()[0]; // Adjust the index as needed
        if (my_max_absen != null){
            $('#end_Date_div :input').prop('disabled', true);
            formValidation.disableValidator('end_Date', 'notEmpty');
        }else{
            Swal.fire({
                text: "Anda Memiliki Sisa Saldo: " + my_saldo.saldo,
                icon: "warning",
                buttonsStyling: false,
                confirmButtonText: "Ok!",
                customClass: {
                confirmButton: "btn font-weight-bold btn-primary",
                }
            });
            $('#end_Date_div :input').prop('disabled', false);
            formValidation.enableValidator('end_Date', 'notEmpty');
        }
    }

    // Read the 'arr' data from localStorage
    var tipeAbsenSelected = null
    var arrReadFormAbsen
function readFormAbsen() {
    var arrData = localStorage.getItem('arrData');
    
    if (arrData) {
        // Parse the JSON string back to an object
        var arr = JSON.parse(arrData);
        arrReadFormAbsen = arr
        console.log(arrReadFormAbsen);
        $('#id_pengajuan_absen').val(arr.id_pengajuan_absen);
        tipeAbsenSelected = arr.tipe_absen.id_tipe_absen;
        $('#nama_tipe_absen').prop('disabled',true)

        $('#deskripsi_absen').val(arr.deskripsi);
        // if(arr.tipe_absen.max_absen == null){
        //     $('#start_Date').val(arr.mulai_absen);
        //     $('#end_Date').val(arr.akhir_absen);
        // }else{
        //     $('#start_Date').val(arr.mulai_absen);
        // }
        
        // Now you can use the 'arr' data as needed
        console.log(arr);
        
        // Optionally, clear the data from localStorage if it's no longer needed
        localStorage.removeItem('arrData');
    } else {
        // Handle the case where 'arr' data is not available
        console.error('No data available');
    }
}

// Call the function to read 'arr' data
readFormAbsen();

        function  storeAbsen(){
            var id_absen = $('#id_pengajuan_absen').val();
            var nik = '{{ Auth::user()->nik }}';
            var tipe_absen_id = $('#nama_tipe_absen').val();
            var deskripsi = $('#deskripsi_absen').val();
            var mulai_absen = $('#start_Date').val();
            var akhir_absen = $('#end_Date').val();
            console.log(id_absen,nik,tipe_absen_id,deskripsi,mulai_absen,akhir_absen);

            // if (tipe_absen_id === '' || deskripsi === '' || mulai_absen === '' || akhir_absen === '') {
            //     Swal.fire({
            //         title: "Gagal Menyimpan Data",
            //         text: "Semua Data Harus Diisi",
            //         icon: "warning",
            //     });
            //     return; // Hentikan eksekusi jika ada kolom yang kosong
            // }

            var storeAbsen ={
                nik:nik,
                tipe_absen_id: tipe_absen_id,
                deskripsi:deskripsi,
                mulai_absen:mulai_absen,
                akhir_absen:akhir_absen,
                created_by: {{ Auth::user()->nik }}
            }

            if (id_absen !== '') {
                storeAbsen.id_pengajuan_absen = id_absen;
            }

            $.ajax({
                type: "post",
                url: "http://10.9.12.150:9096/api/cuti/storeCuti",
                data: storeAbsen,
                dataType: "json",
                // success: function (response) {

                //     // Redirect ke halaman pengajuan_absen setelah pengiriman berhasil
                //     window.location.href = 'pengajuan_absen';
                // },
                // error: function (error) {
                //     // Handle error jika pengiriman gagal
                //     console.error('Error:', error);
                //     // Tambahkan logika atau tindakan lain jika diperlukan
                //     Swal.fire({
				// 		text: "Maaf, Saldo Anda Tidak Cukup!",
				// 		icon: "error",
				// 		buttonsStyling: false,
				// 		confirmButtonText: "Ok, got it!",
				// 		customClass: {
				// 			confirmButton: "btn font-weight-bold btn-primary",
				// 		}
				// 	});
                // }
                success:function(response){
                    Swal.fire({
				text: "All is good! Berhasil Mengajukan Absen!",
				icon: "success",
				showCancelButton: true,
				buttonsStyling: false,
				confirmButtonText: "Yes, submit!",
				cancelButtonText: "No, cancel",
				customClass: {
					confirmButton: "btn font-weight-bold btn-primary",
					cancelButton: "btn font-weight-bold btn-default"
				}
			}).then(function (result) {
                if (result.value) {
                    window.location.href = 'pengajuan_absen';
                    _formEl.submit(); // Submit form
					//functin store
                    // storeAbsen();
				} else if (result.dismiss === 'cancel') {
					Swal.fire({
						text: "Your form has not been submitted!",
						icon: "error",
						buttonsStyling: false,
						confirmButtonText: "Ok, got it!",
						customClass: {
							confirmButton: "btn font-weight-bold btn-primary",
						}
					});
				}
			});
                },
                error: function (error) {
                    // Handle error jika pengiriman gagal
                    console.error('Error:', error);
                    // Tambahkan logika atau tindakan lain jika diperlukan
                    Swal.fire({
						text: "Maaf, Saldo Anda Tidak Cukup!",
						icon: "error",
						buttonsStyling: false,
						confirmButtonText: "Ok, got it!",
						customClass: {
							confirmButton: "btn font-weight-bold btn-primary",
						}
					});
                }
            });
        }


        getTipeAbsen()
        var arrTipeCuti = [];
        function getTipeAbsen(){
            $.ajax({
                type: "get",
                // url: "http://10.9.12.150:9096/api/cuti/getTipeAbsenSaldoPengajuan?nik=91010187&tahun=2023"+ x,
                url: "http://10.9.12.150:9096/api/cuti/getTipeAbsenSaldoPengajuan?nik="+ {{ Auth::user()->nik }}+"&tahun="+year,
                success: function (response) {
                    var arr = response.data
                    // console.log(arr);
                    // return arr
                    $('#nama_tipe_absen').html('')
                    var tipeAbsen = '';
                    var awal = '<option value="">Pilih Cuti</option>';
                    $('#nama_tipe_absen').append(awal);
                    arrTipeCuti = arr;
                    arr.forEach((y,i)=>{
                        tipeAbsen += "<option value='" + y.id_tipe_absen + "'>" + y.nama_tipe_absen + "</option>";
                    });

                    $('#nama_tipe_absen').append(tipeAbsen);
                    $('#nama_tipe_absen').selectpicker("refresh");
                },
                complete: function (data){
                    if(tipeAbsenSelected != null){
                        // console.log(tipeAbsenSelected);
                        $('#nama_tipe_absen').val(tipeAbsenSelected).change();
                    }
                }
            });
        }

    function fetchDataAndUpdateLabels() {
        $('#tipe_absen_detail').text($('#nama_tipe_absen').find(':selected').text())
        $('#deskripsi_detail').text($('#deskripsi_absen').val())
        $('#start_Date_detail').text($('#start_Date').val())
        $('#end_Date_detail').text($('#end_Date').val())
    }

    function clear(){
        $('#start_Date').val('');
        $('#end_Date').val('');
        $('#deskripsi_absen').val('');
        refreshDatetimepicker();
    }

    </script>

    <script>
        "use strict";

// Class definition
var KTWizard4 = function () {
	// Base elements
	var _wizardEl;
	var _formEl;
	var _wizardObj;
	var _validations = [];

	// Private functions
	var _initWizard = function () {
		// Initialize form wizard
		_wizardObj = new KTWizard(_wizardEl, {
			startStep: 1, // initial active step number
			clickableSteps: true  // allow step clicking
		});

		// Validation before going to next page
		_wizardObj.on('change', function (wizard) {
			if (wizard.getStep() > wizard.getNewStep()) {
				return; // Skip if stepped back
			}
            // Call the function to fetch and update data
            fetchDataAndUpdateLabels();

			// Validate form before change wizard step
			var validator = _validations[wizard.getStep() - 1]; // get validator for currnt step

			if (validator) {
				validator.validate().then(function (status) {
					if (status == 'Valid') {
						wizard.goTo(wizard.getNewStep());

						KTUtil.scrollTop();
					} else {
						// Swal.fire({
						// 	text: "Sorry, looks like there are some errors detected, please try again.",
						// 	icon: "error",
						// 	buttonsStyling: false,
						// 	confirmButtonText: "Ok, got it!",
						// 	customClass: {
						// 		confirmButton: "btn font-weight-bold btn-light"
						// 	}
						// }).then(function () {
						// 	KTUtil.scrollTop();
						// });
					}
				});
			}

			return false;  // Do not change wizard step, further action will be handled by he validator
		});

		// Change event
		_wizardObj.on('changed', function (wizard) {
			KTUtil.scrollTop();
		});

		// Submit event
		_wizardObj.on('submit', function (wizard) {

			// Swal.fire({
			// 	text: "All is good! Berhasil Mengajukan Absen!",
			// 	icon: "success",
			// 	showCancelButton: true,
			// 	buttonsStyling: false,
			// 	confirmButtonText: "Yes, submit!",
			// 	cancelButtonText: "No, cancel",
			// 	customClass: {
			// 		confirmButton: "btn font-weight-bold btn-primary",
			// 		cancelButton: "btn font-weight-bold btn-default"
			// 	}
			// }).then(function (result) {
			// 	if (result.value) {
			// 		_formEl.submit(); // Submit form
			// 		//functin store
            //         // storeAbsen();
			// 	} else if (result.dismiss === 'cancel') {
			// 		Swal.fire({
			// 			text: "Your form has not been submitted!",
			// 			icon: "error",
			// 			buttonsStyling: false,
			// 			confirmButtonText: "Ok, got it!",
			// 			customClass: {
			// 				confirmButton: "btn font-weight-bold btn-primary",
			// 			}
			// 		});
			// 	}
			// });
		});
	}

	var _initValidation = function () {
		// Init form validation rules. For more info check the FormValidation plugin's official documentation:https://formvalidation.io/
		// Step 1
		_validations.push(FormValidation.formValidation(
			_formEl,
			{
				fields: {
					nama_tipe_absen: {
						validators: {
							notEmpty: {
								message: 'Absence Type is required'
							}
						}
					},
					deskripsi_absen: {
						validators: {
							notEmpty: {
								message: 'Description is required'
							}
						}
					},
					start_Date: {
						validators: {
							notEmpty: {
								message: 'Start Date is required'
							}
						}
					},
					end_Date: {
						validators: {
							notEmpty: {
								message: 'End Date is required'
							}
						}
					}
				},
				plugins: {
					trigger: new FormValidation.plugins.Trigger(),
					// Bootstrap Framework Integration
					bootstrap: new FormValidation.plugins.Bootstrap({
						//eleInvalidClass: '',
						eleValidClass: '',
					})
				}
			}
		));
	}

	return {
		// public functions
		init: function () {
			_wizardEl = KTUtil.getById('kt_wizard');
			_formEl = KTUtil.getById('kt_form');

			_initWizard();
			_initValidation();
		},

        getValidations:function(){
            return _validations
        }
	};
}();

jQuery(document).ready(function () {
	KTWizard4.init();
});

    </script>
</body>
@endsection
