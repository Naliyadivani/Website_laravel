<!--begin::Aside-->
<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">
	<!--begin::Brand-->
	<div class="brand flex-column-auto" id="kt_brand">
		<!--begin::Logo-->
		<a href="{{ route('homepage') }}" class="brand-logo">
			<img alt="Logo" src="assets/media/logos/PI-SMART-LOGO.png" width="162.092px" height="48.325px" />
		</a>
		<!--end::Logo-->
		<!--begin::Toggle-->
		<button class="brand-toggle btn btn-sm px-0" id="kt_aside_toggle">
			<span class="svg-icon svg-icon svg-icon-xl">
				<!--begin::Svg Icon-->
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<path d="M5.29288961,6.70710318 C4.90236532,6.31657888 4.90236532,5.68341391 5.29288961,5.29288961 C5.68341391,4.90236532 6.31657888,4.90236532 6.70710318,5.29288961 L12.7071032,11.2928896 C13.0856821,11.6714686 13.0989277,12.281055 12.7371505,12.675721 L7.23715054,18.675721 C6.86395813,19.08284 6.23139076,19.1103429 5.82427177,18.7371505 C5.41715278,18.3639581 5.38964985,17.7313908 5.76284226,17.3242718 L10.6158586,12.0300721 L5.29288961,6.70710318 Z" fill="#000000" fill-rule="nonzero" transform="translate(8.999997, 11.999999) scale(-1, 1) translate(-8.999997, -11.999999)" />
						<path d="M10.7071009,15.7071068 C10.3165766,16.0976311 9.68341162,16.0976311 9.29288733,15.7071068 C8.90236304,15.3165825 8.90236304,14.6834175 9.29288733,14.2928932 L15.2928873,8.29289322 C15.6714663,7.91431428 16.2810527,7.90106866 16.6757187,8.26284586 L22.6757187,13.7628459 C23.0828377,14.1360383 23.1103407,14.7686056 22.7371482,15.1757246 C22.3639558,15.5828436 21.7313885,15.6103465 21.3242695,15.2371541 L16.0300699,10.3841378 L10.7071009,15.7071068 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(15.999997, 11.999999) scale(-1, 1) rotate(-270.000000) translate(-15.999997, -11.999999)" />
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
				<li class="menu-section menu-section--first">
					<h4 class="menu-text">HALAMAN UTAMA</h4>
					<i class="menu-icon flaticon-more-v2"></i>
				</li>
				<li id="menu-item-dashboard" class="menu-item" aria-haspopup="true">
					<a href="{{ route('dashboard_absen') }}" class="menu-link ">
						<span class="svg-icon menu-icon">
							<!--begin::Svg Icon-->
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
								<path d="M1.34888 13.9299L9.17584 19.6697C9.53775 19.9351 10.0321 19.9269 10.385 19.6496L17.6646 13.9299" stroke="#264178" stroke-width="1.5" stroke-linecap="round" />
								<path d="M18.4005 7.81967L10.4329 1.50117C10.0583 1.20407 9.52575 1.21375 9.16216 1.52427L1.14752 8.36902C0.668865 8.7778 0.682391 9.52185 1.17558 9.91297L9.14314 16.2315C9.51778 16.5286 10.0503 16.5189 10.4139 16.2084L18.4286 9.36362C18.9072 8.95483 18.8937 8.21078 18.4005 7.81967Z" fill="#264178" />
							</svg>
							<!--end::Svg Icon-->
						</span>
						<span class="menu-text">Halaman Utama</a></span>
					</a>
				</li>

				<li class="menu-section menu-section--first">
					<h4 class="menu-text">ABSENCE MANAGEMENT</h4>
					<i class="menu-icon flaticon-more-v2"></i>
				</li>
				<li id="menu-item-pengajuan-absen" class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
					<a href="{{ route('pengajuan_absen') }}" class="menu-link menu-toggle">
						<span class="svg-icon menu-icon flaticon-clock-2">
						</span>
						<span class="menu-text">Pengajuan Absen</span>
					</a>
				</li>

				@if($user['is_superior'])
					<li class="menu-section menu-section--first">
						<h4 class="menu-text">MANAGER</h4>
						<i class="menu-icon flaticon-more-v2"></i>
					</li>
	
					<li id="menu-item-absence-approver" class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
						<a href="{{ route('absence_approver') }}" class="menu-link menu-toggle">
							<span class="svg-icon menu-icon">
								<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
									<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
										<rect x="0" y="0" width="24" height="24" />
										<path d="M12.9863016,8.83409843 C12.9953113,8.88805868 13,8.94348179 13,9 L13,11 L17,11 C18.1045695,11 19,11.8954305 19,13 L19,16 L5,16 L5,13 C5,11.8954305 5.8954305,11 7,11 L11,11 L11,9 C11,8.94348179 11.0046887,8.88805868 11.0136984,8.83409843 C9.84135601,8.42615464 9,7.31133193 9,6 C9,4.34314575 10.3431458,3 12,3 C13.6568542,3 15,4.34314575 15,6 C15,7.31133193 14.158644,8.42615464 12.9863016,8.83409843 Z" fill="#000000" />
										<rect fill="#000000" opacity="0.3" x="5" y="18" width="14" height="2" rx="1" />
									</g>
								</svg><!--end::Svg Icon-->
							</span>
							<span class="menu-text">Absence Approver</span>
						</a>
					</li>
					@endif
				

					@foreach($user['roles'] as $role)
						@if($role['name'] === 'admin_absen_Karyawan')
							<!-- You can add other sidebar elements for this role here -->
							<li class="menu-section menu-section--first">
								<h4 class="menu-text">MANAGER</h4>
								<i class="menu-icon flaticon-more-v2"></i>
							</li>
			
							<li id="menu-item-absence-approver" class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
								<a href="{{ route('absence_approver') }}" class="menu-link menu-toggle">
									<span class="svg-icon menu-icon">
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M12.9863016,8.83409843 C12.9953113,8.88805868 13,8.94348179 13,9 L13,11 L17,11 C18.1045695,11 19,11.8954305 19,13 L19,16 L5,16 L5,13 C5,11.8954305 5.8954305,11 7,11 L11,11 L11,9 C11,8.94348179 11.0046887,8.88805868 11.0136984,8.83409843 C9.84135601,8.42615464 9,7.31133193 9,6 C9,4.34314575 10.3431458,3 12,3 C13.6568542,3 15,4.34314575 15,6 C15,7.31133193 14.158644,8.42615464 12.9863016,8.83409843 Z" fill="#000000" />
												<rect fill="#000000" opacity="0.3" x="5" y="18" width="14" height="2" rx="1" />
											</g>
										</svg><!--end::Svg Icon-->
									</span>
									<span class="menu-text">Absence Approver</span>
								</a>
							</li>

							
							<li class="menu-section menu-section--first">
								<h4 class="menu-text">ADMIN</h4>
								<i class="menu-icon flaticon-more-v2"></i>
							</li>
			
			
							<li id="menu-item-management-saldo" class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
								<a href="{{ route('management_saldo') }}" class="menu-link menu-toggle">
									<span class="svg-icon menu-icon flaticon-add">
									</span>
									<span class="menu-text">Management Saldo</span>
								</a>
							</li>
						@endif
				
						{{-- Add similar conditions for other roles if needed --}}
					@endforeach
				

				<li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
					<a href="{{route('homepage')}}" class="menu-link menu-toggle">
						<span class="svg-icon menu-icon">
							<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24"></rect>
									<path d="M3.95709826,8.41510662 L11.47855,3.81866389 C11.7986624,3.62303967 12.2013376,3.62303967 12.52145,3.81866389 L20.0429,8.41510557 C20.6374094,8.77841684 21,9.42493654 21,10.1216692 L21,19.0000642 C21,20.1046337 20.1045695,21.0000642 19,21.0000642 L4.99998155,21.0000673 C3.89541205,21.0000673 2.99998155,20.1046368 2.99998155,19.0000673 L2.99999828,10.1216672 C2.99999935,9.42493561 3.36258984,8.77841732 3.95709826,8.41510662 Z M10,13 C9.44771525,13 9,13.4477153 9,14 L9,17 C9,17.5522847 9.44771525,18 10,18 L14,18 C14.5522847,18 15,17.5522847 15,17 L15,14 C15,13.4477153 14.5522847,13 14,13 L10,13 Z" fill="#000000"></path>
								</g>
							</svg>
							<!--end::Svg Icon-->
						</span>
						<span class="menu-text">Back To Home</span>
					</a>
				</li>

				<li class="menu-item" aria-haspopup="true" data-menu-toggle="hover">
					<a href="{{ route('logout') }}" class="menu-link menu-toggle">
						{{-- <span class="svg-icon menu-icon">
							<!--begin::Svg Icon | path:assets/media/svg/icons/General/Settings-1.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" width="21" height="19" viewBox="0 0 21 19" fill="none">
								<path d="M15.5492 13.1195L19.3526 9.34406M19.3526 9.34406L15.5492 5.56864M19.3526 9.34406H6.04069M11.7458 13.1195V14.0633C11.7458 14.8143 11.4452 15.5345 10.9103 16.0656C10.3753 16.5966 9.64978 16.8949 8.89324 16.8949H5.08985C4.33331 16.8949 3.60775 16.5966 3.0728 16.0656C2.53784 15.5345 2.2373 14.8143 2.2373 14.0633V4.62478C2.2373 3.8738 2.53784 3.15358 3.0728 2.62256C3.60775 2.09154 4.33331 1.79321 5.08985 1.79321H8.89324C9.64978 1.79321 10.3753 2.09154 10.9103 2.62256C11.4452 3.15358 11.7458 3.8738 11.7458 4.62478V5.56864" stroke="#8691AD" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round" />
							</svg>
						</span> --}}
						<span class="svg-icon menu-icon"><!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\legacy\metronic\theme\html\demo1\dist/../src/media/svg/icons\Navigation\Sign-out.svg-->
							<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
								<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
									<rect x="0" y="0" width="24" height="24"/>
									<path d="M14.0069431,7.00607258 C13.4546584,7.00607258 13.0069431,6.55855153 13.0069431,6.00650634 C13.0069431,5.45446114 13.4546584,5.00694009 14.0069431,5.00694009 L15.0069431,5.00694009 C17.2160821,5.00694009 19.0069431,6.7970243 19.0069431,9.00520507 L19.0069431,15.001735 C19.0069431,17.2099158 17.2160821,19 15.0069431,19 L3.00694311,19 C0.797804106,19 -0.993056895,17.2099158 -0.993056895,15.001735 L-0.993056895,8.99826498 C-0.993056895,6.7900842 0.797804106,5 3.00694311,5 L4.00694793,5 C4.55923268,5 5.00694793,5.44752105 5.00694793,5.99956624 C5.00694793,6.55161144 4.55923268,6.99913249 4.00694793,6.99913249 L3.00694311,6.99913249 C1.90237361,6.99913249 1.00694311,7.89417459 1.00694311,8.99826498 L1.00694311,15.001735 C1.00694311,16.1058254 1.90237361,17.0008675 3.00694311,17.0008675 L15.0069431,17.0008675 C16.1115126,17.0008675 17.0069431,16.1058254 17.0069431,15.001735 L17.0069431,9.00520507 C17.0069431,7.90111468 16.1115126,7.00607258 15.0069431,7.00607258 L14.0069431,7.00607258 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.006943, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-9.006943, -12.000000) "/>
									<rect fill="#000000" opacity="0.3" transform="translate(14.000000, 12.000000) rotate(-270.000000) translate(-14.000000, -12.000000) " x="13" y="6" width="2" height="12" rx="1"/>
									<path d="M21.7928932,9.79289322 C22.1834175,9.40236893 22.8165825,9.40236893 23.2071068,9.79289322 C23.5976311,10.1834175 23.5976311,10.8165825 23.2071068,11.2071068 L20.2071068,14.2071068 C19.8165825,14.5976311 19.1834175,14.5976311 18.7928932,14.2071068 L15.7928932,11.2071068 C15.4023689,10.8165825 15.4023689,10.1834175 15.7928932,9.79289322 C16.1834175,9.40236893 16.8165825,9.40236893 17.2071068,9.79289322 L19.5,12.0857864 L21.7928932,9.79289322 Z" fill="#000000" fill-rule="nonzero" transform="translate(19.500000, 12.000000) rotate(-90.000000) translate(-19.500000, -12.000000) "/>
								</g>
						</svg><!--end::Svg Icon--></span>

						<span class="menu-text">Log Out</span>
					</a>
				</li>
			</ul>
			<!--end::Menu Nav-->
		</div>
		<!--end::Menu Container-->
	</div>
	<!--end::Aside Menu-->
	
	{{-- <div class="image-asideBar" style="background-size: cover">
		<svg width="260px" height="400" viewBox="0 0 297 466" fill="none" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
			<path d="M183.325 164.837C192.112 50.1692 262.77 7.4499 297 0.423706V459.515H1.00684V354.544C94.9119 371.828 172.342 308.171 183.325 164.837Z" fill="url(#paint0_linear_1871_2668)" />
			<path d="M146.292 327.332C137.901 238.276 45.2677 207.866 0 203.793V463.542H297V443.631C250.26 441.972 154.683 416.389 146.292 327.332Z" fill="url(#paint1_linear_1871_2668)" fill-opacity="0.8" />
			<path d="M146.292 279.719C137.901 158.215 45.2677 116.726 0 111.169V465.556H297V438.39C250.26 436.127 154.683 401.223 146.292 279.719Z" fill="url(#paint2_linear_1871_2668)" fill-opacity="0.4" />
			<rect x="64" y="249" width="168" height="79" fill="url(#pattern0)" />
			<defs>
				<pattern id="pattern0" patternContentUnits="objectBoundingBox" width="1" height="1">
					<use xlink:href="#image0_1871_2668" transform="matrix(0.00356241 0 0 0.00757576 -0.00586219 0)" />
				</pattern>
				<linearGradient id="paint0_linear_1871_2668" x1="15.2848" y1="-92.7436" x2="189.487" y2="525.087" gradientUnits="userSpaceOnUse">
					<stop stop-color="#F0F5FF" />
					<stop offset="1" stop-color="#F0F5FF" stop-opacity="0" />
				</linearGradient>
				<linearGradient id="paint1_linear_1871_2668" x1="148.5" y1="203.793" x2="125.421" y2="475.801" gradientUnits="userSpaceOnUse">
					<stop stop-color="#F4F8FF" />
					<stop offset="1" stop-color="#EAF0FF" />
				</linearGradient>
				<linearGradient id="paint2_linear_1871_2668" x1="138.432" y1="423.775" x2="118.893" y2="25.1445" gradientUnits="userSpaceOnUse">
					<stop stop-color="#F4F8FF" />
					<stop offset="1" stop-color="#EAF0FF" />
				</linearGradient>
				<image id="image0_1871_2668" width="275" height="79" top="-1786px" left="-2500px" xlink:href="data:image/png;base64,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" />
			</defs>
		</svg>
	</div> --}}
</div>
<!--end::Aside-->

