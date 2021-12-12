<div  class="table datatable-bordered datatable-head-custom datatable-hover" id="kt_datatable" >
<table style="display: none;">
<thead >
  <tr>
    <th class="text-center">No</th>
    <th>Nama Kostt</th>
    
    <th>Pemilik</th>
    <th>Jumlah Kamar</th>
    <th>Terisi</th>
    <th>Fasilitas</th>
    <th>Harga</th>
    <th>Jenis</th>
    <th>Alamat</th>
    <?php if ($pemilik) :?>
			<th>Action</th>
		<?php endif;?>
  </tr>
</thead>
<tbody id="tb-data">
<?php $no=1; foreach ($Kost as $row): ?>
<tr>
	<td class="text-center"><?=$no++ ?></td>
	<td><?=$row['nama'] ?></td>
	<td><?=$row['nmpemilik'] ?></td>
	<td><?=$row['jumlah_kamar'] ?></td>
	<td><?=$row['terisi'] ?></td>
	<td><?=$row['fasilitas'] ?></td>
	<td><?=$row['harga'] ?></td>
	<td><?=$row['jenis'] ?></td>
	<td><?=$row['alamat'] ?></td>
  <?php if ($pemilik) :?>
		<td nowrap="nowrap">
		<div class="d-flex w-100">

		
		<a class="btn btn-sm btn-icon btn-light-primary mr-2" title="Upload Foto" href="#" onclick="addImg(<?=$row['id'] ?>)">
			<i class="flaticon2-image-file"></i>
		</a>
		<a class="btn btn-sm btn-icon btn-light-success mr-2" title="edit" href="#" onclick="formEdit(<?=$row['id'] ?>)">
			<i class="fas fa-pen"></i>
		</a>
		<a class="btn btn-sm btn-icon btn-light-danger" href="#" title="hapus" onclick="hapus(<?=$row['id'] ?>)">
			<i class="flaticon2-rubbish-bin-delete-button"></i>
		</a>
		</div>
		
	</td>
	<?php endif;?>

</tr>
<?php endforeach ?>
 </tbody>
</table>
</div>