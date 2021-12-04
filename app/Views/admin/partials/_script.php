
					</div>

				</div>

				<!--end::Wrapper-->
			</div>

			<!--end::Page-->
		</div>

		<!--end::Main-->
		<?=view('admin/partials/_extras/offcanvas/quick-user'); ?>
		<?=view('admin/partials/_extras/scrolltop'); ?>


		<!--begin::Global Config(global config for global JS scripts)-->
		<script>
			
			var KTAppSettings = {
				"breakpoints": {
					"sm": 576,
					"md": 768,
					"lg": 992,
					"xl": 1200,
					"xxl": 1400
				},
				"colors": {
					"theme": {
						"base": {
							"white": "#ffffff",
							"primary": "#3699FF",
							"secondary": "#E5EAEE",
							"success": "#1BC5BD",
							"info": "#8950FC",
							"warning": "#FFA800",
							"danger": "#F64E60",
							"light": "#E4E6EF",
							"dark": "#181C32"
						},
						"light": {
							"white": "#ffffff",
							"primary": "#E1F0FF",
							"secondary": "#EBEDF3",
							"success": "#C9F7F5",
							"info": "#EEE5FF",
							"warning": "#FFF4DE",
							"danger": "#FFE2E5",
							"light": "#F3F6F9",
							"dark": "#D6D6E0"
						},
						"inverse": {
							"white": "#ffffff",
							"primary": "#ffffff",
							"secondary": "#3F4254",
							"success": "#ffffff",
							"info": "#ffffff",
							"warning": "#ffffff",
							"danger": "#ffffff",
							"light": "#464E5F",
							"dark": "#ffffff"
						}
					},
					"gray": {
						"gray-100": "#F3F6F9",
						"gray-200": "#EBEDF3",
						"gray-300": "#E4E6EF",
						"gray-400": "#D1D3E0",
						"gray-500": "#B5B5C3",
						"gray-600": "#7E8299",
						"gray-700": "#5E6278",
						"gray-800": "#3F4254",
						"gray-900": "#181C32"
					}
				},
				"font-family": "Poppins"
			};
		</script>

		<!--end::Global Config-->

		<!--begin::Global Theme Bundle(used by all pages)-->
		<script src="<?=base_url()?>/assets/plugins/global/plugins.bundle.min.js"></script>
		<script src="<?=base_url()?>/assets/plugins/global/jquery-ui.min.js"></script>
		<script src="<?=base_url()?>/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
		<script src="<?=base_url()?>/assets/js/scripts.bundle.js"></script>

		
		<!--begin::Page Scripts(used by this page)-->
		<script src="<?=base_url()?>/assets/js/pages/widgets.js"></script>
		<script>
		const current = location.pathname.split("/").slice(-1)[0].replace(/^\/|\/$/g, '');
		$('.menu-nav a[href~="<?=base_url()?>/admin/' + current + '"]').parent('li').addClass('menu-item-active');

		$("#bry-modal").draggable({
		    handle:".modal-header",
		});
		</script>
		<script src="<?=base_url()?>/assets/js/pages/crud/ktdatatable/base/html-table1ff3.js?v=7.1.2"></script>
