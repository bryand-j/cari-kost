<div  class="table datatable-bordered datatable-head-custom datatable-hover" id="kt_datatable" >
<table style="display: none;">
<thead >
  <tr>
    <th class="text-center">No</th>
    <th>Nama Pemilik</th>
    <th>Email</th>
    <th>Telepon (WA)</th>
    <th>Alamat</th>
  </tr>
</thead>
<tbody id="tb-data">
<?php $no=1; foreach ($Pemilik as $row): ?>
<tr>
	<td class="text-center"><?=$no++ ?></td>
	<td><?=$row['nama'] ?></td>
	<td><?=$row['email'] ?></td>
	<td><?=$row['no_wa'] ?></td>
	<td><?=$row['alamat'] ?></td>

</tr>
<?php endforeach ?>
 </tbody>
</table>
</div>