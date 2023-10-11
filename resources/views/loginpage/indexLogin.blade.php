@extends('layout.tempLogin')

@section('loginpage')
  
<body id="kt_body" class="header-fixed header-mobile-fixed subheader-enabled subheader-fixed aside-enabled aside-fixed aside-minimize-hoverable">
    <div class="d-flex flex-column flex-root">
        <div class="login login-1 login-signin-on d-flex flex-column flex-lg-row flex-column-fluid" id="kt_login" style="background-color: rgba(72, 149, 46, 0.15">
            <div class="login-aside login-aside-bg d-flex flex-row-auto ">
                <div class="aside-img d-flex flex-row-fluid bgi-no-repeat bgi-position-y-bottom bgi-position-x-center" style="background-image: url('assets/media/logos/logo-aside.png')"></div>
            </div>

            <div class="d-flex flex-column flex-row-fluid position-relative p-7 overflow-hidden">
                <div class="d-flex flex-column-fluid flex-center mt-30 mt-lg-0">
                    <div class="login-form login-signin">
                        <div class="text-center mb-10 mb-lg-20">
                            <h3 class="login-header font-size-h1">Login</h3>
                        </div>

                        <form class="form" action="{{ route('loginAction') }}" id="kt_login_signin_form" method="post">
                           {{-- <input type="hidden" name="_token" value=" "> --}}
                            <!--begin::Title-->
                            @csrf
                            <!--begin::Form group-->
                            <div class="form-group">
                                <label class="form-label">Username or Email</label>
                                <div class="icon icon-login d-flex">
                                    <span><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M3.33334 17.5V16.6667C3.33334 13.9053 5.57192 11.6667 8.33334 11.6667H11.6667C14.4281 11.6667 16.6667 13.9053 16.6667 16.6667V17.5" stroke="black" stroke-width="2" stroke-linecap="round"/>
                                        <path d="M10 9.16667C8.15907 9.16667 6.66669 7.67428 6.66669 5.83333C6.66669 3.99238 8.15907 2.5 10 2.5C11.8409 2.5 13.3334 3.99238 13.3334 5.83333C13.3334 7.67428 11.8409 9.16667 10 9.16667Z" stroke="black" stroke-width="2" stroke-linecap="round"/>
                                      </svg></span>
                                </div>
                                <input class="form-control h-67" type="text" name="username" autocomplete="off"> <span></span>
                            </div>
                            <!--end::Form group-->

                            <!--begin::Form group-->
                            <div class="form-group">
                                <label class="form-label">Password</label>
                                <input class="form-control h-67" type="password" name="password" autocomplete="off">
                            </div>

                            {{-- <div class="form-group">
                                <label class="form-label">Password</label>
                                <input class="form-control form-control-solid h-auto py-5 px-6" type="password" name="password" autocomplete="off" id="password" required="">
                                <i class="far fa-eye field-icon" id="toggle-pwd" style="cursor: pointer;"></i>
                            </div> --}}

                            <div class="form-group d-flex flex-wrap justify-content-between align-items-center mt-3">
                                <div  class="checkbox-inline">
                                    <label class="checkbox checkbox-success text-fp">
                                        <input type="checkbox" name="remember-me">
                                        <span class="mr-4" style="border: 2px solid #4C9C30;"></span>Remember Me
                                    </label>
                                </div>
                                <a href="#" class="text-fp text-hover-primary">Forgot Password ?</a>
							</div>
                            <!--end::Form group-->

                            <!--begin::Action-->
                            <div class="form-group">
                                <button type="submit" class="form-control btn btn-login submit px-3 text-light">LOG IN</button>
                            </div>
                            <p class="text-center btn-text">
                                Don't have an account?<a href="/registpage" class="btn btn-link btn-regist">Register</a>
                            </p>
                            <!--end::Action-->
                        </form>
                    </div>
                </div>

                <div class="d-flex flex-column-auto flex-column flex-sm-row justify-content-between align-items-center mt-footer p-5">
					<div class="text-dark-50 font-weight-bold order-2 order-sm-1 my-2">© 2021 PI-Smart</div>
					<div class="d-flex order-1 order-sm-2 my-2">
						<a href="#" class="nav-link pr-3 pl-0">Panduan Pengguna</a>

						<a href="#" class="nav-link pr-3 pl-0">Kebijakan Privasi</a>

					</div>
				</div>
            </div>
        </div>
    </div>
								
    
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
        <script>
            function login() {
                // Ambil nilai username dan password dari input
                var username = document.querySelector('input[name="username"]').value;
                var password = document.querySelector('input[name="password"]').value;
        
                // Lakukan validasi username dan password di sini (contoh sederhana)
                if (username === "user" && password === "password") {
                    alert("test")
                    // Redirect ke halaman utama jika berhasil login
                    window.location.href = "{{ url('dashboard') }}";
                } else {
                    // Tampilkan pesan error jika login gagal
                    alert("Username atau password salah. Silakan coba lagi.");
                }
            }
        </script>

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
    
</body>
@endsection
