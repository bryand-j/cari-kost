
<!--begin::Aside-->
				<div class="aside aside-left aside-fixed d-flex flex-column flex-row-auto" id="kt_aside">

					<!--begin::Brand-->
					<div class="brand flex-column-auto" id="kt_brand">

						<!--begin::Logo-->
						<a href="#" class="brand-logo">
							<img alt="Logo" src="<?=base_url()?>/logo/logo.png" width="100" />
						</a>

						<!--end::Logo-->

						<!--begin::Toggle-->
						<button class="brand-toggle btn btn-sm px-0 burger-icon burger-icon-left" id="kt_aside_toggle">
							<span class="">

								<!-- begin::Svg Icon | path:assets/media/svg/icons/Navigation/Angle-double-left.svg
								<svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-card-text" viewBox="0 0 16 16">
									<path d="M14.5 3a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-13a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h13zm-13-1A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13z"/>
									<path d="M3 5.5a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9a.5.5 0 0 1-.5-.5zM3 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1h-9A.5.5 0 0 1 3 8zm0 2.5a.5.5 0 0 1 .5-.5h6a.5.5 0 0 1 0 1h-6a.5.5 0 0 1-.5-.5z"/>
								</svg> -->

								<!--end::Svg Icon-->
							</span>
						</button>

						<!--end::Toolbar-->
					</div>

					<!--end::Brand-->

					<!--begin::Aside Menu-->
					<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">

						<!--begin::Menu Container-->
						<div id="kt_aside_menu" class="aside-menu my-4" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">
							<!--begin::Menu Nav-->
							<ul class="menu-nav">
								<li class="menu-item" aria-haspopup="true">
									<a href="<?=base_url()?>/admin/Dashboard" class="menu-link">
										<i class="menu-icon flaticon2-poll-symbol"></i>
										<span class="menu-text">Dashboard</span>
									</a>
								</li>
								<li class="menu-section">
									<h4 class="menu-text">Data</h4>
									<i class="menu-icon ki ki-bold-more-hor icon-md"></i>
								</li>
								<li class="menu-item" aria-haspopup="true">
									<a href="<?=base_url()?>/admin/Kos" class="menu-link">
										<i class="menu-icon fas fa-border-all"></i>
										<span class="menu-text">Data Kos</span>
									</a>
								</li>
								<li class="menu-item" aria-haspopup="true">
									<a href="<?=base_url()?>/admin/pemilik" class="menu-link">
										<i class="menu-icon fas fa-user-tag"></i>
										<span class="menu-text">Data Pemilik</span>
									</a>
								</li>
								<li class="menu-item" aria-haspopup="true">
									<a href="<?=base_url()?>/admin/pengguna" class="menu-link">
										<i class="menu-icon fas fa-users"></i>
										<span class="menu-text">pengguna</span>
									</a>
								</li>

								<hr>
									
								
								<li class="menu-item" aria-haspopup="true">
									<a href="<?=base_url()?>/admin/User" class="menu-link">
										<i class="menu-icon fas fa-user-cog"></i>
										<span class="menu-text">admin</span>
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