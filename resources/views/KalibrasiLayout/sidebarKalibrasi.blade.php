<!--begin::Aside-->
<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
	<!--begin::Brand-->
	<div class="brand flex-column-auto" id="kt_brand">
		<!--begin::Logo-->
		<div class="brand-logo">
            <a href="https://pismart-dev.pupuk-indonesia.com">
                <img alt="PI-Smart" height="20" width="100" src="https://pismart-dev.pupuk-indonesia.com/public/media/logos/logo-pismart-light.png"/>
            </a>
        </div>
		<!--end::Logo-->
		<!--begin::Toggle-->
		<button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
			<span class="svg-icon svg-icon svg-icon-xl">
				<!--begin::Svg Icon-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <polygon points="0 0 24 0 24 24 0 24"/>
                        <path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999) "/>
                        <path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999) "/>
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
				<li id="menu-item-dashboard" class="menu-item" aria-haspopup="true">
					<a href="{{ route('kalibrasi') }}" class="menu-link ">
						<span class="svg-icon menu-icon">
							<!--begin::Svg Icon-->
							<svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path id="Vector" d="M1 10H7C7.55 10 8 9.55 8 9V1C8 0.45 7.55 0 7 0H1C0.45 0 0 0.45 0 1V9C0 9.55 0.45 10 1 10ZM1 18H7C7.55 18 8 17.55 8 17V13C8 12.45 7.55 12 7 12H1C0.45 12 0 12.45 0 13V17C0 17.55 0.45 18 1 18ZM11 18H17C17.55 18 18 17.55 18 17V9C18 8.45 17.55 8 17 8H11C10.45 8 10 8.45 10 9V17C10 17.55 10.45 18 11 18ZM10 1V5C10 5.55 10.45 6 11 6H17C17.55 6 18 5.55 18 5V1C18 0.45 17.55 0 17 0H11C10.45 0 10 0.45 10 1Z" fill="#94A6CF"/>
                            </svg>
							<!--end::Svg Icon-->
						</span>
						<span class="menu-text">Dashboard</a></span>
					</a>
				</li>

				<li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
					<a href="{{route('homepage')}}" class="menu-link menu-toggle">
						<span class="svg-icon menu-icon">
							<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
							<svg width="24" height="19" viewBox="0 0 24 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.10797 3.8C6.10797 3.91176 6.21704 4.02353 6.32611 4.13529L8.50752 6.37059C8.72567 6.59412 8.94381 6.70588 9.27102 6.70588C9.59823 6.70588 9.81637 6.59412 10.0345 6.37059C10.4708 5.92353 10.4708 5.25294 10.0345 4.80588L9.7073 4.47059H14.2883L13.9611 4.80588C13.7429 5.02941 13.6339 5.25294 13.6339 5.58824C13.6339 6.25882 14.0701 6.70588 14.7246 6.70588C15.0518 6.70588 15.2699 6.59412 15.4881 6.37059L17.6695 4.13529C17.7785 4.02353 17.8876 3.91176 17.8876 3.8C17.8876 3.68824 17.9967 3.57647 17.9967 3.35294C17.9967 3.24118 17.9967 3.01765 17.8876 2.90588C17.7785 2.79412 17.7785 2.68235 17.6695 2.57059L15.4881 0.335294C15.0518 -0.111765 14.3973 -0.111765 13.9611 0.335294C13.5248 0.782353 13.5248 1.45294 13.9611 1.9L14.2883 2.23529H9.7073L10.0345 1.9C10.4708 1.45294 10.4708 0.782353 10.0345 0.335294C9.59823 -0.111765 8.94381 -0.111765 8.50752 0.335294L6.32611 2.57059C6.21704 2.68235 6.10797 2.79412 6.10797 2.90588C6.10797 3.01765 5.9989 3.12941 5.9989 3.35294C5.9989 3.46471 5.9989 3.68824 6.10797 3.8ZM5.45354 12.5176C6.98053 12.5176 8.28938 11.1765 8.28938 9.61176C8.28938 8.04706 6.98053 6.70588 5.45354 6.70588C3.92655 6.70588 2.6177 8.04706 2.6177 9.61176C2.6177 11.1765 3.92655 12.5176 5.45354 12.5176ZM9.59823 15.5353C6.76239 13.1882 2.6177 13.6353 0.327212 16.5412C0.109071 16.8765 0 17.2118 0 17.5471C0 18.3294 0.654425 19 1.41792 19H9.48916C10.0345 19 10.5799 18.6647 10.798 18.2176C11.0162 17.7706 11.0162 17.1 10.5799 16.6529C10.2527 16.2059 9.92545 15.8706 9.59823 15.5353ZM15.7062 9.61176C15.7062 11.1765 17.015 12.5176 18.542 12.5176C20.069 12.5176 21.3779 11.1765 21.3779 9.61176C21.3779 8.04706 20.069 6.70588 18.542 6.70588C17.015 6.70588 15.7062 8.04706 15.7062 9.61176ZM23.6684 16.6529C23.3412 16.3176 23.0139 15.8706 22.6867 15.6471C19.8509 13.3 15.7062 13.7471 13.4157 16.6529C13.1976 16.8765 13.0885 17.2118 13.0885 17.5471C13.0885 18.3294 13.7429 19 14.5064 19H22.5777C23.123 19 23.6684 18.6647 23.8865 18.2176C24.1047 17.6588 23.9956 17.1 23.6684 16.6529Z" fill="#94A6CF"/>
                            </svg>
							<!--end::Svg Icon-->
						</span>
						<span class="menu-text">Performance Calibration</span>
					</a>
				</li>

				<li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
					<a href="{{route('homepage')}}" class="menu-link menu-toggle">
						<span class="svg-icon menu-icon">
							<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
							<svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.5 2C8.57174 2 7.6815 2.36875 7.02513 3.02513C6.36875 3.6815 6 4.57174 6 5.5C6 6.42826 6.36875 7.3185 7.02513 7.97487C7.6815 8.63125 8.57174 9 9.5 9C10.4283 9 11.3185 8.63125 11.9749 7.97487C12.6313 7.3185 13 6.42826 13 5.5C13 4.57174 12.6313 3.6815 11.9749 3.02513C11.3185 2.36875 10.4283 2 9.5 2ZM4 5.5C4 4.04131 4.57946 2.64236 5.61091 1.61091C6.64236 0.579463 8.04131 0 9.5 0C10.9587 0 12.3576 0.579463 13.3891 1.61091C14.4205 2.64236 15 4.04131 15 5.5C15 6.95869 14.4205 8.35764 13.3891 9.38909C12.3576 10.4205 10.9587 11 9.5 11C8.04131 11 6.64236 10.4205 5.61091 9.38909C4.57946 8.35764 4 6.95869 4 5.5ZM6 14C4.93913 14 3.92172 14.4214 3.17157 15.1716C2.42143 15.9217 2 16.9391 2 18H10.05V20H0V18C0 16.4087 0.632141 14.8826 1.75736 13.7574C2.88258 12.6321 4.4087 12 6 12H10V14H6ZM17.5 10.75V12.126C18.215 12.31 18.852 12.686 19.354 13.198L20.547 12.509L21.547 14.241L20.355 14.929C20.5493 15.6298 20.5493 16.3702 20.355 17.071L21.547 17.759L20.547 19.491L19.354 18.802C18.8449 19.3212 18.2039 19.6918 17.5 19.874V21.25H15.5V19.874C14.796 19.692 14.155 19.3214 13.646 18.802L12.453 19.491L11.453 17.759L12.645 17.071C12.4505 16.3702 12.4505 15.6298 12.645 14.929L11.453 14.241L12.453 12.509L13.646 13.197C14.1551 12.678 14.7961 12.3077 15.5 12.126V10.75H17.5ZM14.749 15.033C14.5849 15.3289 14.4988 15.6617 14.499 16C14.499 16.35 14.59 16.68 14.749 16.967L14.785 17.03C14.9625 17.3264 15.2138 17.5717 15.5144 17.7421C15.8149 17.9124 16.1545 18.002 16.5 18.002C16.8455 18.002 17.1851 17.9124 17.4856 17.7421C17.7862 17.5717 18.0375 17.3264 18.215 17.03L18.251 16.967C18.41 16.68 18.5 16.351 18.5 16C18.5 15.65 18.41 15.32 18.251 15.033L18.215 14.97C18.0375 14.6736 17.7862 14.4283 17.4856 14.2579C17.1851 14.0876 16.8455 13.998 16.5 13.998C16.1545 13.998 15.8149 14.0876 15.5144 14.2579C15.2138 14.4283 14.9625 14.6736 14.785 14.97L14.749 15.033Z" fill="#94A6CF"/>
                            </svg>
							<!--end::Svg Icon-->
						</span>
						<span class="menu-text">Calibration Setting</span>
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

