<script>

		const Crud = {
			get : (url=null, data=null, {...rest} = {})=>{
				return $('#data-tb').DataTable({
					scrollX: true,
					language: {
						url: "//cdn.datatables.net/plug-ins/1.10.20/i18n/Indonesian.json"
					},
					processing: true,
					deferRender: true,
					ajax: {
						url: '<?=base_url()?>/'+url,
						type: "POST",
						data: data,
					},
					...rest,

				});
			},
			post: (url,data,result)=>{
				$.ajax({
					url: url,
					type: 'POST',
					dataType:'json',
					processData:false,
					contentType:false,
					cache:false,
					data: data
				})
				.done(result)
				.fail(function(res) {
					console.log(res);
					$("#bry-modal").modal("hide");
					Dialog.toast('error',`[${res.status}] `+res.statusText);
				})
				
			},
			delete: (url,id,result)=>{
				$.ajax({
					url: '<?=base_url()?>/'+url,
					type: 'POST',
					dataType:'json',
					data: {id:id}
				})
				.done(result)
				.fail(function(res) {
					console.log(res);
					Dialog.toast('error',`[${res.status}] `+res.statusText);
				})
			},
			getHtml: (url,result)=>{
				$("#load-m").modal("show");
				$.ajax({
					url: '<?=base_url()?>/'+url,
				})
				.done(result)
				.fail(function(res) {
					console.log(res);
					Dialog.toast('error',`[${res.status}] `+res.statusText);
				})
				.always(function(result){
					if(result){
						setTimeout(() => {
							$("#load-m").modal("hide");
						}, 400);
					}
					
				})

			}
		};
		const Dialog ={
			form:()=>{ console.log("oke")},
			alert:()=>{},
			confirm:(param)=>{
			    Swal.fire({
			        title: "Anda Yakin?",
			        text: "Anda akan menghapus data secara permanen !",
			        icon: "warning",
			        showCancelButton: true,
			        confirmButtonText: "Hapus Data !",
			        cancelButtonText: "Batal",
			        reverseButtons: true,
			        customClass: {
					   confirmButton: "btn btn-danger",
					   cancelButton: "btn btn-light-primary"
					}
			    }).then(function(result) {
			        if (result.value) {
			        	param();
			           
			            // result.dismiss can be "cancel", "overlay",
			            // "close", and "timer"
			        } 
			    });
			},
			toast:(type='success',message)=>{
				toastr.options = {
				  "closeButton": true,
				  "debug": false,
				  "newestOnTop": false,
				  "progressBar": false,
				  "positionClass": "toast-bottom-right",
				  "preventDuplicates": false,
				  "onclick": null,
				  "showDuration": "300",
				  "hideDuration": "1000",
				  "timeOut": "5000",
				  "extendedTimeOut": "1000",
				  "showEasing": "swing",
				  "hideEasing": "linear",
				  "showMethod": "fadeIn",
				  "hideMethod": "fadeOut"
				};
				if (type=='error') return toastr.error(message, 'Gagal');
				return toastr.success(message, 'Berhasil');
				
			}
		}

				// hapus 
		function del(url,id,success) {
			Dialog.confirm(()=>{
				Crud.delete(url,id,(result)=>{
					if(result.type==='success'){
					success();
					 Swal.fire(
			              "Terhapus",
			              "Data Anda Telah Terhapus !",
			              "success"
			          )
					}
					else {
						Swal.fire(
			              "Gagal",
			              "Data Anda Gagal di Hapus !",
			              "error"
			          )
					}
				});
			});
		}

		function getTable(url){
			$("#load-m").modal("show");
			$.ajax({
					url: '<?=base_url()?>/'+url,
				})
				.done((result)=>{
					$('#dt-table').html(result);
					KTDatatableHtmlTableDemo.init();
				})
				.fail(function(res) {
					console.log(res);
					Dialog.toast('error',`[${res.status}] `+res.statusText);
				})
				.always(function(res){
					if(res){
						setTimeout(() => {
							$("#load-m").modal("hide");
						}, 400);
					}
					
				})
		}



		
		
</script>