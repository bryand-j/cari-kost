<div class="modal-header">
	<h5 class="modal-title" id="exampleModalLabel">Tambah Data <?=$title ?></h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<i aria-hidden="true" class="ki ki-close"></i>
	</button>
</div>
<form id="add-form" action="" method="_post">
	<div class="modal-body" style="max-height: 500px; overflow: auto;">
		<div class="form-group">
			<label class="">Upload Foto</label>
			<div class="uppy" id="kt_uppy_2">
				<div class="uppy-dashboard"></div>
				<div class="uppy-progress"></div>
			</div>
		</div>
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-text-danger btn-hover-light-danger mr-5" data-dismiss="modal">Tutup</button>
	</div>
</form>


<!-- <script src="<?=base_url()?>/assets/js/pages/crud/file-upload/uppy.js"></script> -->
<script>
var KTUppy = function () {
	const Tus = Uppy.Tus;
	const XHR = Uppy.XHRUpload;
	// to get uppy companions working, please refer to the official documentation here: https://uppy.io/docs/companion/
	const Dashboard = Uppy.Dashboard;

	var initUppy2 = function(){
		var id = '#kt_uppy_2';

		var options = {
			proudlyDisplayPoweredByUppy: false,
			target: id,
			inline: true,
			replaceTargetContent: true,
			showProgressDetails: true,
			note: '2–3 file, up to 2 MB',
			height: 300,
			metaFields: [
				{ id: 'name', name: 'Name', placeholder: 'file name' },
				{ id: 'caption', name: 'Caption', placeholder: 'describe what the image is about' }
			],
			browserBackButtonClose: true
		}

		var uppyDashboard = Uppy.Core({
			autoProceed: true,
			restrictions: {
				maxFileSize: 2000000, // 1mb
				maxNumberOfFiles: 5,
				minNumberOfFiles: 1,
				allowedFileTypes: ['image/*']
			}
		});

		uppyDashboard.use(Dashboard, options);
		uppyDashboard.use(XHR, { 
			endpoint: '<?=base_url().'/'.$base?>/upload/<?=$id?>',
			responseType: 'text',
			formData:true,
			bundle:true,
	
		});
		uppyDashboard.on('upload-success', (responseText, response) => {

				console.log(response)
				console.log(responseText)

			// do something with file and response
		})
	}

	return {
		// public functions
		init: function() {
		
			initUppy2();

		}
	};
}();

KTUtil.ready(function() {
	KTUppy.init();
});

	$("#bry-modal").modal("show");
</script>
