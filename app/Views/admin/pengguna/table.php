<div  class="table datatable-bordered datatable-head-custom datatable-hover" id="kt_datatable" >
<table style="display: none;">
<thead >
  <tr>
    <th class="text-center">No</th>
    <th>Nama Pengguna</th>
    <th>Email</th>
    <th>Telepon</th>
  </tr>
</thead>
<tbody id="tb-data">
<?php $no=1; foreach ($Pengguna as $row): ?>
<tr>
	<td class="text-center"><?=$no++ ?></td>
	<td><?=$row['nama'] ?></td>
	<td><?=$row['email'] ?></td>
	<td><?=$row['telepon'] ?></td>
</tr>
<?php endforeach ?>
 </tbody>
</table>
</div>