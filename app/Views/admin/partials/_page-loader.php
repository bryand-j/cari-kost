
<!--begin::Page loader-->
		<div class="page-loader page-loader-logo">
			<img alt="Logo" class="max-h-75px" src="<?=base_url()?>/logo/logo.png" />
			<div class="spinner spinner-primary"></div>
		</div>

		<div id="load">
			<div class="modal fade"   data-backdrop="static" tabindex="-2" role="dialog" aria-labelledby="staticBackdrop" aria-hidden="true" >
				<div class="modal-dialog modal-dialog-centered modal-sm" role="document">
					<div class="modal-content" id="load-m">
						<div  class="modal-body row justify-content-center align-items-center" style="height: 400px; overflow: auto;">
							<h5 class="mr-2">Memuat... </h5>
							<div class="spinner spinner-primary "> </div>
							
						</div>
					</div>
				</div>
			</div>
		</div>

		<div id="load-tb" class="d-none">
			<div class="row justify-content-center align-items-center">
				<h5 class="mr-2">Memuat... </h5>
				<div class="spinner spinner-primary "> </div>
			</div>
		</div>

		<!--end::Page Loader-->