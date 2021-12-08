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
    <th>Kordinat</th>
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
	<td><?=$row['kordinat'] ?></td>

</tr>
<?php endforeach ?>
 </tbody>
</table>
</div>