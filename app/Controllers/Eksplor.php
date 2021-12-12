<?php namespace App\Controllers;

use App\Models\KostModel;
use App\Models\PenggunaModel;
class Eksplor extends BaseController
{

	public function index()
	{

		$Kost=new KostModel;
		$Pemilik=new PenggunaModel;
		if (isset($_GET['detail'])) {
			$id=$_GET['detail'];
			$db = db_connect();
			$dt=$Kost->find($id);
			$data=[
				'title'=>$dt['nama'],
				'data'=>$dt,
				'foto'=>$db->table('foto')->where('id_kost',$id)->get()->getResultArray(),
				'pemilik'=>$Pemilik->find($dt['id_pemilik'])
			];
			return view('user/eksplor/detail',$data);
		}
		$data=[
			'title'=>'Eksplor ',
			'data'=>$Kost->getAll(),
		];
		return view('user/eksplor/index',$data);
		
	}


	
	//--------------------------------------------------------------------

}
