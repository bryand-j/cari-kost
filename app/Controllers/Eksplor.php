<?php namespace App\Controllers;

use App\Models\KostModel;
use App\Models\PemilikModel;
class Eksplor extends BaseController
{

	public function index()
	{
		$Kost=new KostModel;
		$Pemilik=new PemilikModel;
		if (isset($_GET['detail'])) {
			$id=$_GET['detail'];
			
			$dt=$Kost->find($id);
			$data=[
				'title'=>$dt['nama'],
				'data'=>$dt,
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
	public function detail($id=null)
	{
		
	}

	
	//--------------------------------------------------------------------

}
