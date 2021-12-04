
<!--begin::Header-->
					<div id="kt_header" class="header header-fixed">

						<!--begin::Container-->
						<div class="container-fluid d-flex align-items-stretch justify-content-between">
							<div></div>

							<!--begin::Topbar-->
							<div class="topbar">


								<!--begin::User-->
								<div class="topbar-item">
									<div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">
										<span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hallo,</span>
										<span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">
											<?=(session()->get('Nama')) ? session()->get('Nama') : session()->get('Username') ;?>
											</span>
										<span class="symbol symbol-lg-35 symbol-25 symbol-light-success">
											<span class="symbol-label font-size-h5 font-weight-bold">
												<?php if (session()->get('Nama')): ?>
													
												<?=substr(session()->get('Nama'), 0,1); ?>
												<?php elseif (session()->get('Username')): ?>
												<?=substr(session()->get('Username'), 0,1); ?>
												<?php else:?>
													Ad
												<?php endif ?>
											</span>
										</span>
									</div>
								</div>

								<!--end::User-->
							</div>

							<!--end::Topbar-->
						</div>

						<!--end::Container-->
					</div>

					<!--end::Header-->