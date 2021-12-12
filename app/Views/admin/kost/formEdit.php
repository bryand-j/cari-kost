
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Edit Data <?=$title ?></h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
           <i aria-hidden="true" class="ki ki-close"></i>
        </button>
      </div>
      <form id="edit-form" action="" method="_post">
	      <div class="modal-body" style="height: 500px; overflow: auto;">
	      	<input type="hidden" name="id" value="<?=$data['id'] ?>">
					<div class="form-group">
						<label>Nama Kost <span class="text-danger">*</span></label>
						<input type="text" name="nama" value="<?=$data['nama'] ?>" class="form-control"  placeholder="Masukan Nama Kost" required="" />
					</div>
					<div class="form-group">
						<label>Kategori <span class="text-danger">*</span></label>
						<select name="jenis" class="form-control" required="">
							<option selected disabled>Pilih Kategori</option>
							<?php foreach ($jenis as $key) :?>
								<option value="<?=$key['jenis']?>" <?=($data['jenis']==$key['jenis']) ? 'selected' : '';?> ><?=$key['jenis']?></option>
							<?php endforeach ;?>
						</select>
					</div>
					<div class="form-group">
						<label>Nama Jumlah Kamar <span class="text-danger">*</span></label>
						<input type="text" value="<?=$data['jumlah_kamar'] ?>" name="jumlah_kamar" class="form-control"  placeholder="Masukan Jumlah Kamar" required="" />
					</div>
					<div class="form-group">
						<label>Kamar Terisi <span class="text-danger">*</span></label>
						<input type="text"  value="<?=$data['terisi'] ?>" name="terisi" class="form-control"  placeholder="Masukan Kamar Terisi" required="" />
					</div>
					<div class="form-group">
						<label>harga <span class="text-danger">*</span></label>
						<input type="number"  value="<?=$data['harga'] ?>" name="harga" class="form-control"  placeholder="Maukan Harga" required="" />
					</div>
					<div class="form-group">
						<label>Fasilitas <span class="text-danger">*</span></label>
						<textarea name="fasilitas" rows="5" class="form-control"  placeholder="Maukan Fasilitas"><?=$data['fasilitas'] ?></textarea>
					</div>
					<div class="form-group">
						<label>Alamat <span class="text-danger">*</span></label>
						<textarea name="alamat" rows="5" class="form-control"  placeholder="Maukan Alamat"><?=$data['alamat'] ?></textarea>
					</div>
		
			  
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-text-danger btn-hover-light-danger mr-5" data-dismiss="modal">Batal</button>
	        <button type="submit" class="btn btn-primary" id="kt_btn_1">Update</button>
	      </div>
    	</form>


<script>
	$("#bry-modal").modal("show");
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
		
		Crud.post('/<?=$base?>/update',new FormData(this),(result)=>{
			Dialog.toast(result.type,result.message);
			KTUtil.btnRelease(btn);
			getTable(tb_url);
		})
	});
</script>