<div class="modal-header">
	<h5 class="modal-title" id="exampleModalLabel">Tambah Data <?=$title ?></h5>
	<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<i aria-hidden="true" class="ki ki-close"></i>
	</button>
</div>
<form id="add-form" action="" method="_post">
	<div class="modal-body" style="height: 500px; overflow: auto;">
		<div class="form-group">
			<label>Nama Kost <span class="text-danger">*</span></label>
			<input type="text" name="nama" class="form-control"  placeholder="Masukan Nama Kost" required="" />
		</div>
		<div class="form-group">
			<label>Kategori <span class="text-danger">*</span></label>
			<select name="jenis" class="form-control" required="">
				<option selected disabled>Pilih Kategori</option>
				<?php foreach ($jenis as $key) :?>
					<option value="<?=$key['jenis']?>"><?=$key['jenis']?></option>
				<?php endforeach ;?>
			</select>
		</div>
		<div class="form-group">
			<label>Nama Jumlah Kamar <span class="text-danger">*</span></label>
			<input type="text" name="jumlah_kamar" class="form-control"  placeholder="Masukan Jumlah Kamar" required="" />
		</div>
		<div class="form-group">
			<label>Kamar Terisi <span class="text-danger">*</span></label>
			<input type="text" name="terisi" class="form-control"  placeholder="Masukan Kamar Terisi" required="" />
		</div>
		<div class="form-group">
			<label>harga <span class="text-danger">*</span></label>
			<input type="number" name="harga" class="form-control"  placeholder="Maukan Harga" required="" />
		</div>
		<div class="form-group">
			<label>Fasilitas <span class="text-danger">*</span></label>
			<textarea name="fasilitas" rows="5" class="form-control"  placeholder="Maukan Fasilitas"></textarea>
		</div>
		<div class="form-group">
			<label>Alamat <span class="text-danger">*</span></label>
			<textarea name="alamat" rows="5" class="form-control"  placeholder="Maukan Alamat"></textarea>
		</div>		
	</div>
	<div class="modal-footer">
		<button type="button" class="btn btn-text-danger btn-hover-light-danger mr-5" data-dismiss="modal">Batal</button>
		<button type="submit" class="btn btn-primary" id="kt_btn_1">Simpan</button>
	</div>
</form>


<script>


	$('#toggle').click(function(event) {
		if ($('#password').attr('type') =='password') {
			$('#password').attr('type', 'text');
		} 
		else {
			$('#password').attr('type', 'password');
		}
		$('.fa-eye , .fa-eye-slash').toggleClass('d-none');
	});
	
	$('#isi #add-form').submit(function(event) {
			const btn = KTUtil.getById("kt_btn_1");
			event.preventDefault();
			KTUtil.btnWait(btn);
			
			Crud.post('/<?=$base?>/save',new FormData(this),(result)=>{
				Dialog.toast(result.type,result.message);
				KTUtil.btnRelease(btn);
				getTable(tb_url);
			})
		});
	
</script>
