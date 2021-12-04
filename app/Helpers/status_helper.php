<?php 



function status($id)
{
	$model= new \App\Models\LaporanModel;

	$data=$model->getStatus($id);

	if ($data['j2'] < 1) {
		return '<span class="label label-lg label-light-danger label-inline text-danger font-weight-bold">
			Belum Mulai
		</span>';
	}
	else if($data["j2"]==$data["j1"]){
		return '<span class="label label-lg label-light-success label-inline text-success  font-weight-bold">
			Selesai
		</span>';
	}
	else if ($data["j2"] > 0){
		return '<span class="label label-lg label-light-warning label-inline text-warning  font-weight-bold">
			Dalam Proses
		</span>';
	
	}
	
}