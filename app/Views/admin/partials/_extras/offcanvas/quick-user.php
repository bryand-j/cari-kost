
<!-- begin::User Panel-->
		<div id="kt_quick_user" class="offcanvas offcanvas-right p-10">

			<!--begin::Header-->
			<div class="offcanvas-header d-flex align-items-center justify-content-between pb-5">
				<h3 class="font-weight-bold m-0">User Profile
					
				</h3>
				<a href="#" class="btn btn-xs btn-icon btn-light btn-hover-primary" id="kt_quick_user_close">
					<i class="ki ki-close icon-xs text-muted"></i>
				</a>
			</div>

			<!--end::Header-->

			<!--begin::Content-->
			<div class="offcanvas-content pr-5 mr-n5">

				<!--begin::Header-->
				<div class="d-flex align-items-center mt-5">
					<div class="symbol symbol-100 mr-5">
						<span class="symbol symbol-lg-100 symbol-25 symbol-light-success">
							<span class="symbol-label font-size-h1 font-weight-bold">
								<?php if (session()->get('Nama')): ?>
													
								<?=substr(session()->get('Nama'), 0,1) ?>
								<?php else: ?>
								<?=substr(session()->get('Username'), 0,1) ?>
									
								<?php endif ?>
							</span>
						</span>
						<i class="symbol-badge bg-success"></i>
					</div>
					<div class="d-flex flex-column">
						<a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">
							<?=(session()->get('Nama')) ? session()->get('Nama') : session()->get('Username') ;?>
								
						</a>
						<div class="text-muted mt-1"><?=session()->get('Level') ?></div>
						<div class="navi mt-2">
							
							<a href="<?=base_url();?>/Login/out" class="btn btn-sm btn-light-primary font-weight-bolder py-4 px-5">Sign Out</a>
						</div>
					</div>
				</div>

				<!--end::Header-->

				<!--begin::Separator-->
				<div class="separator separator-dashed mt-8 mb-5"></div>

				<!--end::Separator-->

				<!--begin::Nav-->
				<div class="navi navi-spacer-x-0 p-0">

					<!--begin::Item-->
					<a href="/MyProfile" class="navi-item">
						<div class="navi-link">
							<div class="symbol symbol-40 bg-light mr-3">
								<div class="symbol-label">
									<span class="svg-icon svg-icon-md svg-icon-success">

										<!--begin::Svg Icon | path:assets/media/svg/icons/General/Notification2.svg-->
										<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
											<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
												<rect x="0" y="0" width="24" height="24" />
												<path d="M13.2070325,4 C13.0721672,4.47683179 13,4.97998812 13,5.5 C13,8.53756612 15.4624339,11 18.5,11 C19.0200119,11 19.5231682,10.9278328 20,10.7929675 L20,17 C20,18.6568542 18.6568542,20 17,20 L7,20 C5.34314575,20 4,18.6568542 4,17 L4,7 C4,5.34314575 5.34314575,4 7,4 L13.2070325,4 Z" fill="#000000" />
												<circle fill="#000000" opacity="0.3" cx="18.5" cy="5.5" r="2.5" />
											</g>
										</svg>

										<!--end::Svg Icon-->
									</span>
								</div>
							</div>
							<div class="navi-text">
								<div class="font-weight-bold">My Profile</div>
								<div class="text-muted">Pengaturan Akun
									<span class="label label-light-danger label-inline font-weight-bold">update</span>
								</div>
							</div>
						</div>
					</a>

					<!--end:Item-->
				</div>


				<!--end::Notifications-->
			</div>

			<!--end::Content-->
		</div>

		<!-- end::User Panel-->