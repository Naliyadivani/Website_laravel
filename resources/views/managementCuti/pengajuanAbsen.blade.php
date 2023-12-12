<style>
    .dt-body-nowarp {
        white-space: nowrap;
    }

    #kt_datatable_filter input {
        width: 400px !important;
    }
</style>

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

                                        <div class="card-body">
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

                                                        <tbody>
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
                            <a href="" target="_blank" class="nav-link pr-3 pl-0">Panduan Pengguna</a>
                            <a href="" target="_blank" class="nav-link pr-3 pl-0">Kebijakan Privasi</a>
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
    {{-- <script src="assets/js/plugins/custom/datatables/datatables.bundle.js"></script> --}}
    <!--end::Page Vendors-->
    <!--begin::Page Scripts(used by this page)-->
    <script src="assets/js/pages/widgets.js"></script>
    <!--end::Page Scripts-->
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    
    <script src="https://pismart.pupuk-indonesia.com/public/plugins/custom/datatables/datatables.bundle.js" type="text/javascript"></script>
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" /> -->
    <!-- <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script> -->



    <script>
        var emp_no = $("#nik_user").val();
        var company = $("#company").val();
        var year = 2023;
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
        }); 

        $(document).ready(function() {
            // Function to perform table data search
            $('#my_input').on('keyup', function() {
                var searchText = $(this).val().toLowerCase(); // Get input value and convert to lowercase
                $('#formAbsen tr').filter(function() {
                    $(this).toggle($(this).text().toLowerCase().indexOf(searchText) > -1);
                });
            });
        });

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
            bLengthChange: false,
            pageLength: 6, // Set the number of rows per page as per your requirement
        });


        readFormAbsen()
        //read DB
        function readFormAbsen(){
            $.ajax({
                type: "get",
                url: "http://10.9.12.197:9096/api/cuti/myCuti?nik="+{{ Auth::user()->nik }}+"&tahun="+year,
                
                success: function (data) {
                    var arr = data.data
                    table.clear().draw()
                    arr.forEach((y,i) => {
                        if (y.status == "WaitApproved"){
                            statusHtml = `<span class="label label-primary label-lg label-inline font-weight-bolder" style="color:#D8891D; background-color:#FFE7C7;"> ${y.status} </span>`
                        }else if (y.status == "Approved"){
                            statusHtml = `<span class="label label-primary label-lg label-inline font-weight-bolder" style="color:#299233; background-color:#E6FFD2;"> ${y.status} </span>`
                        }else{
                            statusHtml = `<span class="label label-primary label-lg label-inline font-weight-bolder" style="color:#E03046; background-color:#FFD6D6;">${y.status}</span>`
                        }
                        var iteration = `<span class="font-weight-bold font-size-sm text-dark-50">${i+1}</span>`
                        var tipeAbsen = `<span class="font-weight-bold font-size-sm text-dark-50">${y.tipe_absen.nama_tipe_absen}</span>`
                        var mulaiAbsen = `<span class="font-weight-bold font-size-sm text-dark-50">${y.mulai_absen}</span>`
                        var akhirAbsen = `<span class="font-weight-bold font-size-sm text-dark-50">${y.akhir_absen}</span>`
                        var status = statusHtml
                        var action = `<button type="button" onclick="showAbsen('${y.id_pengajuan_absen}')" class="btn btn-icon my-2 btn-sm btn-warning" data-toggle="modal">
                                            <i class="flaticon2-edit"></i>
                                      </button> 
                                      <button type="button" onclick="deleteListAbsen('${y.id_pengajuan_absen}')" class="btn btn-icon my-2 btn-sm btn-danger">
                                            <i class="flaticon2-trash"></i>
                                      </button>`
                    // $('#formAbsen').append(html)
                    table.row.add([iteration,tipeAbsen,mulaiAbsen,akhirAbsen,status,action]).draw(false)
                    });
                }
            });
        }

        // Fungsi untuk menampilkan data dengan pagination
    function displayDataWithPagination(data) {
        // Tentukan jumlah item per halaman
        var itemsPerPage = 6;

        // Hitung jumlah halaman
        var totalPages = Math.ceil(data.length / itemsPerPage);

        // Inisialisasi halaman saat ini
        var currentPage = 1;

        // Fungsi untuk menampilkan data pada halaman tertentu
        function displayDataOnPage(page) {
            var startIndex = (page - 1) * itemsPerPage;
            var endIndex = startIndex + itemsPerPage;
            var currentPageData = data.slice(startIndex, endIndex);
            console.log(currentPageData[0].status);

            // Tampilkan data pada halaman saat ini
            $('#formAbsen').empty();
            currentPageData.forEach((y,i) => {
                // console.log(y.status);
                if (y.status == "WaitApproved"){
                    statusHtml = `
                    <td>
                        <span class="label label-primary label-lg label-inline font-weight-bolder" style="color:#D8891D; background-color:#FFE7C7;"> ${y.status} </span>
                    </td>`
                }else if (y.status == "Approved"){
                    statusHtml = `
                    <td>
                        <span class="label label-primary label-lg label-inline font-weight-bolder" style="color:#299233; background-color:#E6FFD2;"> ${y.status} </span>
                    </td>`
                }else{
                    statusHtml = `
                    <td>
                        <span class="label label-primary label-lg label-inline font-weight-bolder" style="color:#E03046; background-color:#FFD6D6;">${y.status}</span>
                    </td>
                    `
                }
                var html=`<tr>
                <td>${i+1}</td>
                <td>${y.tipe_absen.nama_tipe_absen}</td>
                
                <td>${y.mulai_absen}</td>
                <td>${y.akhir_absen}</td>
                ${statusHtml};
                <td class=" dt-body-nowarp">
                    <button type="button" onclick="showAbsen('${y.id_pengajuan_absen}')" class="btn btn-icon my-2 btn-sm btn-warning" data-toggle="modal">
                        <i class="flaticon2-edit"></i>
                        </button> <button type="button" onclick="deleteListAbsen('${y.id_pengajuan_absen}')" class="btn btn-icon my-2 btn-sm btn-danger">
                            <i class="flaticon2-trash"></i>
                            </button>
                            </td>
                            </tr>`
            $('#formAbsen').append(html)
            });
            // currentPageData.forEach(function(item) {
            //     // Tampilkan data sesuai kebutuhan
            //     $('#formAbsen').append('<div>' + item + '</div>');
            // });
        }

        // Fungsi untuk menampilkan pagination
        function displayPagination() {
            $('#pagination-container').empty();

            for (var i = 1; i <= totalPages; i++) {
                // Tambahkan tombol pagination
                $('#pagination-container').append('<button onclick="changePage(' + i + ')">' + i + '</button>');
            }
        }

        // Fungsi untuk mengubah halaman saat tombol pagination diklik
        window.changePage = function(page) {
            currentPage = page;
            displayDataOnPage(currentPage);
            displayPagination();
        };

        // Tampilkan data dan pagination untuk halaman pertama
        displayDataOnPage(currentPage);
        displayPagination();
    }

        function showAbsen(id_absen){
            $.ajax({
                type: "get",
                url: "http://10.9.12.197:9096/api/cuti/showPengajuanCuti/"+ id_absen,
                data: "data",
                success: function (response) {
                    // Store the 'arr' data in localStorage
            localStorage.setItem('arrData', JSON.stringify(response.data));

            // Redirect to the 'form_pengajuan_absen' page
            window.location.href = 'form_pengajuan_absen';
                    // readFormAbsen()
                    // $('nama_tipe_absen').val(arr.nama_tipe_absen);
                    // $('deskripsi').val(arr.deskripsi);
                    // $('start_Date').val(arr.start_date);
                    // $('end_Date').val(arr.end_Date);
                    
                }
            });
        }
        
        function deleteListAbsen(id_absen){
            swal.fire({
                title: 'Apakah anda yakin ingin menghapus kegiatan ini ?',
                text: 'Mohon untuk melakukan pengecekan data kembali',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'Ya, Submit!',
                cancelButtonText: 'Batalkan!',
                reverseButtons: true
            }).then((result) => {
                $.ajax({
                    type: "DELETE",
                    url: "http://10.9.12.197:9096/api/cuti/deletePengajuanCuti/"+id_absen,
                    success: function (response) {
                        if(response.unsuccess){
                            swal.fire('Gagal', 'Gagal Menghapus Data', 'error');
                        }else{
                            swal.fire('Berhasil', 'Berhasil Menghapus Data','success');
                            readFormAbsen()
                        }
                    },
                    error:function(error){
                        console.error('Error:', error);
                    }
                });
            })
        }
    </script>


</body>
@endsection
