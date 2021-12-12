
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
								<?php if (session()->get('email')): ?>
													
								<?=substr(session()->get('email'), 0,1) ?>
								<?php else: ?>
								<?=substr(session()->get('username'), 0,1) ?>
									
								<?php endif ?>
							</span>
						</span>
						<i class="symbol-badge bg-success"></i>
					</div>
					<div class="d-flex flex-column">
						<a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">
							<?=(session()->get('email')) ? session()->get('email') : session()->get('username') ;?>
								
						</a>
						<div class="text-muted mt-1">
						<?=(session()->get('pemilik')) ? 'Pemilik' : 'Admin' ;?>
						</div>
						<div class="navi mt-2">
							
							<a href="<?=base_url();?>/Auth/out" class="btn btn-sm btn-light-primary font-weight-bolder py-4 px-5">Sign Out</a>
						</div>
					</div>
				</div>

				<!--end::Header-->

				<!--begin::Separator-->
				<div class="separator separator-dashed mt-8 mb-5"></div>

				<!--end::Separator-->


				<!--end::Notifications-->
			</div>

			<!--end::Content-->
		</div>

		<!-- end::User Panel-->