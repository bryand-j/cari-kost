<?php namespace App\Controllers;


class Map extends BaseController
{

	public function index()
	{
		
		$data=[
			'title'=>'Peta',
			
		];
		return view('user/peta/index',$data);
		
	}

	
	//--------------------------------------------------------------------

}
