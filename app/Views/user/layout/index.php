<!DOCTYPE html>

<html lang="en">
	<!--begin::Head-->
	<head>
		<base href="">
		<meta charset="utf-8" />
		<title><?=$title; ?> - Pencarian Kost</title>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="shortcut icon" href="<?=base_url()?>/logo/logo.png" />
		<!--begin::Fonts-->
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700" />
		<!--end::Fonts-->
		<!--begin::Global Stylesheets Bundle(used by all pages)-->
		<link href="<?=base_url()?>/user/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="<?=base_url()?>/user/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
		<!--end::Global Stylesheets Bundle-->
		<style>
			*::-webkit-scrollbar {
					width: 0.8em;
			}
			
			*::-webkit-scrollbar-track {
				background-color:transparent;
				
				
			}
			
			*::-webkit-scrollbar-thumb {
				background-color: rgba(117, 117, 117,0.3);
				border-radius:100em;

				
			}
			*::-webkit-scrollbar-thumb:hover {
				background-color: rgba(117, 117, 117,0.6);
			}
			*::-webkit-scrollbar-button{
				height: 2px;
				background-color: rgba(117, 117, 117, 0);
			}
			/* clears the ‘X’ from Internet Explorer */
			input[type=search]::-ms-clear { display: none; width : 0; height: 0; }
			input[type=search]::-ms-reveal { display: none; width : 0; height: 0; }
			/* clears the ‘X’ from Chrome */
			input[type="search"]::-webkit-search-decoration,
			input[type="search"]::-webkit-search-cancel-button,
			input[type="search"]::-webkit-search-results-button,
			input[type="search"]::-webkit-search-results-decoration { display: none; }

			.my-card{
				background-size: cover;
				transition:0.3s;
			}
			.my-card .card-footer{
				color:white;
				background: rgb(2,0,36);
				background: linear-gradient(0deg, rgba(2,0,36,0.8463760504201681) 0%, rgba(2,0,36,0.4009978991596639) 59%, rgba(255,255,255,0) 94%);
			}
			.my-card:hover{
				transform: scale(103%);
			}

		</style>
	</head>
	<!--end::Head-->
	<!--begin::Body-->
	<body id="kt_body" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-disabled">
		<!--begin::Main-->
		<!--begin::Root-->
		<div class="d-flex flex-column flex-root">
			<!--begin::Page-->
			<div class="page d-flex flex-row flex-column-fluid">
				<!--begin::Aside-->
				<?=view('user/layout/aside'); ?>
				<!--end::Aside-->
				<!--begin::Wrapper-->
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<!--begin::Header-->
          <?=view('user/layout/header'); ?>
					<!--end::Header-->
					<!--begin::Content-->
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<!--begin::Container-->
						<?=$this->renderSection('content'); ?>
						<!--end::Container-->
					</div>
					<!--end::Content-->
					<!--begin::Footer-->
          <?=view('user/layout/footer'); ?>
					<!--end::Footer-->
				</div>
				<!--end::Wrapper-->
			</div>
			<!--end::Page-->
		</div>
		<!--end::Root-->
	


		<!--end::Modals-->
		<!--begin::Scrolltop-->
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<!--begin::Svg Icon | path: icons/duotone/Navigation/Up-2.svg-->
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
					<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
						<polygon points="0 0 24 0 24 24 0 24" />
						<rect fill="#000000" opacity="0.5" x="11" y="10" width="2" height="10" rx="1" />
						<path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
					</g>
				</svg>
			</span>
			<!--end::Svg Icon-->
		</div>
		<!--end::Scrolltop-->
		<!--end::Main-->
		<!--begin::Javascript-->
		<!--begin::Global Javascript Bundle(used by all pages)-->
		<script src="<?=base_url()?>/user/assets/plugins/global/plugins.bundle.js"></script>
		<script src="<?=base_url()?>/user/assets/js/scripts.bundle.js"></script>
		<!--end::Global Javascript Bundle-->
		<!--begin::Page Custom Javascript(used by this page)-->
		<script src="<?=base_url()?>/user/assets/js/custom/widgets.js"></script>
		<!--end::Page Custom Javascript-->
		<!--end::Javascript-->
		<script>
			const current = location.pathname.split("/").slice(-1)[0].replace(/^\/|\/$/g, '');
			$('.menu-item a[href~="<?=base_url()?>/' + current + '"]').addClass('active');
		</script>
		<?= view("admin/partials/_utils/crud") ?>
		<script>
			function setfav(id) {
				$('#'+id).toggleClass('btn-color-danger');
				$('#'+id).toggleClass('btn-color-white');
				$.ajax({
					url: '<?=base_url()?>/Favorit/set',
					type: 'GET',
					dataType:'json',
					data: {id:id}
				})
				.done(function (res) {
					
				})
				.fail(function(res) {
					console.log(res);
				})
			}
		</script>
    <?=$this->renderSection('script'); ?>
	</body>
	<!--end::Body-->
</html>