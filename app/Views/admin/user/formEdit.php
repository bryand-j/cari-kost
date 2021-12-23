
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data <?=$title ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <i aria-hidden="true" class="ki ki-close"></i>
        </button>
      </div>
      <form id="edit-form" action="" method="_post">
	      <div class="modal-body" data-scroll="false" data-height="500">
	      	<input type="hidden" name="id_user" value="<?=$data['id_user'] ?>">
					<div class="form-group">
						<label>Username<span class="text-danger">*</span></label>
						<input type="text" value="<?=$data['username'] ?>" name="username" class="form-control"  placeholder="Masukan Username" required="" />
					</div>
					<div class="form-group input-icon input-icon-right">
						<label>Password<span class="text-danger">*</span></label>
						<input type="password" id="passworde"  value="<?=$data['password'] ?>" name="password" class="form-control"  placeholder="Masukan Password" required=""/>
						<span id="toggle">
						<i class="far fa-eye text-muted edit1"></i>
						<i class="far fa-eye-slash text-muted edit2 d-none"></i>
					</span>
						<p class="form-text text-muted">Default Password: <code>user</code></p>
					</div>
			  
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-text-danger btn-hover-light-danger mr-5" data-dismiss="modal">Batal</button>
	        <button type="submit" class="btn btn-primary" id="kt_btn_1">Update</button>
	      </div>
    	</form>


<script>
	$('#toggle').click(function(event) {
		if ($('#passworde').attr('type') =='password') {
			$('#passworde').attr('type', 'text');
		} 
		else {
			$('#passworde').attr('type', 'password');
		}
		$('.fa-eye , .fa-eye-slash').toggleClass('d-none');

	});

	$('#isi #edit-form').submit(function(event) {
		const btn = KTUtil.getById("kt_btn_1");
		event.preventDefault();
		KTUtil.btnWait(btn);
		
		Crud.post('/admin/User/update',new FormData(this),(result)=>{
			Dialog.toast(result.type,result.message);
			KTUtil.btnRelease(btn);
			getTable(tb_url);
		})
	});
</script>