@extends('layout.tempNewLogin')

@section('newLogin')


<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable">
    <!--begin::Main-->
    <div class="d-flex flex-column flex-root">
        <!--begin::Login-->
        <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid bg-gradient" id="kt_login">
            <!--begin::Aside-->
            <div class="login-aside d-flex flex-row-auto bgi-size-cover bgi-no-repeat p-10 p-lg-10" style="background-image: url('assets/media/logos/asset_loginpage.png')">
                <!--begin: Aside Container-->
               
                <!--end: Aside Container-->
            </div>
            <!--begin::Aside-->
            <!--begin::Content-->
            <div class="d-flex flex-column flex-row-fluid position-relative p-7 overflow-hidden">
                <!--begin::Content body-->
                <div class="d-flex flex-column-fluid flex-center mt-30 mt-lg-0">
                    <!--begin::Signin-->
                    <div class="login-form login-signin">
                        <div class="text-center mb-10 mb-lg-20">
                            <h3 class="font-size-h1-login">Log In</h3>
                            <p class="text-muted font-weight-bold"></p>
                        </div>
                        <!--begin::Form-->
                        <form class="floating-form" id="login_page" action="{{ url('/login') }}" method="post">
                            {{-- <input type="hidden" name="_token" value=" "> --}}
                            @csrf
                            <div class="inputBox">
                                <input type="text" name="username" id="username" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Username</label>
                            </div>

                            <div class="inputBox">
                                <input type="password" name="password" id="password" required>
                                <span class="highlight"></span>
                                <span class="bar"></span>
                                <label>Password</label>
                            </div>

                            <div class="form-group d-flex flex-wrap justify-content-between align-items-center mt-3">
                                <div class="checkbox-inline">
                                    <label class="checkbox checkbox-primary text-fp">
                                        <input type="checkbox" name="remember-me">
                                        <span class="mr-4" style="border: 2px solid #1D2657;"></span>Remember Me
                                    </label>
                                </div>
                                <!-- <a href="http://127.0.0.1:8000/password/reset" class="text-fp text-hover-primary">Forgot Password ?</a> -->
                            </div>
                            <!--begin::Action-->

                            <button type="submit" class="form-control btn btn-login submit px-3 text-light">Log In</button>
                                <p class="mr-4" style="color:  #1D2657;">New User ?
                                    <button type="button" class=" btn btn-link font-weight-bold" data-toggle="modal" data-target="#registerOptionModal">Register</button>
                                </p> 

                            <!--end::Action-->
                            {{-- </form> --}}
                            <!--end::Form-->
                    </div>
                    <!--end::Signin-->
                </div>
                <!--end::Content body-->
                <!-- Modal-->
                    <div class="modal fade" id="registerOptionModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel">Register As</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <i aria-hidden="true" class="ki ki-close"></i>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <a href="https://pismart.pupuk-indonesia.com/magang_app/register" class="btn btn-primary btn-lg btn-block"><i class="fas fa-user-tie"></i> Peserta Magang</a>
                                    <a href="https://pismart.pupuk-indonesia.com/vendor_app/register" class="btn btn-primary btn-lg btn-block"><i class="fas fa-user-tie"></i> Vendor</a>
                                    <a href="https://pismart.pupuk-indonesia.com/universitas/register" class="btn btn-primary btn-lg btn-block"><i class="fas fa-user-tie"></i> Universitas</a>
                                    <a href="https://pismart.pupuk-indonesia.com/magang_ldms/register" class="btn btn-primary btn-lg btn-block"><i class="fas fa-user-tie"></i> Peserta Magang LDMS</a>
                                    <a href="https://pismart.pupuk-indonesia.com/pembimbing_instansi/register" class="btn btn-primary btn-lg btn-block"><i class="fas fa-user-tie"></i> Pembimbing Instansi</a>
                                    <a href="https://pismart.pupuk-indonesia.com/vendor_outsourcing/register" class="btn btn-primary btn-lg btn-block"><i class="fas fa-user-tie"></i> Vendor Outsourcing</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--end::Main-->
                <!--begin::Content footer for mobile-->
                <div class="d-flex flex-column-auto flex-column flex-sm-row justify-content-between align-items-center mt-5 p-5">
                    <div class="text-dark-50 font-weight-bold order-2 order-sm-1 my-2">© 2021 PI-Smart</div>
                    <div class="d-flex order-1 order-sm-2 my-2">
                        <a href="#" class="nav-link pr-3 pl-0">Panduan Pengguna</a>
                        <a href="#" class="nav-link pr-3 pl-0">Kebijakan Privasi</a>
                    </div>
                </div>
                <!--end::Content footer for mobile-->
            </div>
            <!--end::Content-->
        </div>
        <!--end::Login-->
    </div>

    <!--end::Main-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>

    <script>
        var HOST_URL = "https://preview.keenthemes.com/metronic/theme/html/tools/preview";
    </script>
    <script src="assets/plugins/global/plugins.bundle.js"></script>
    <script src="assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <script src="assets/js/scripts.bundle.js"></script>
    <script src="assets/plugins/custom/fullcalendar/fullcalendar.bundle.js"></script>
    <script src="assets/js/pages/widgets.js"></script>

</body>

@endsection