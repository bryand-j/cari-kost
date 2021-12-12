<?php 

function rupiah($angka){
	
	$hasil_rupiah = "Rp " . number_format($angka,0,',','.');
	return $hasil_rupiah;
 
}
function isfav($id_user,$id_kost)
{
	$model= new \App\Models\KostModel;

	$data=$model->favorit($id_user,$id_kost);
	if ($data) {
		
		return '<a  id="'.$id_kost.'" onclick="setfav('.$id_kost.')" class="btn btn-icon btn-link btn-color-danger ">
							<i class="bi bi-heart-fill fs-3"></i>
						</a>';
	}
	return '<a  id="'.$id_kost.'" onclick="setfav('.$id_kost.')" class="btn btn-icon btn-link btn-color-white ">
						<i class="bi bi-heart-fill fs-3"></i>
					</a>';

	
}