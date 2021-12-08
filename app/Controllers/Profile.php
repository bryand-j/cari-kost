<?php namespace App\Controllers;


class Profile extends BaseController
{

	public function index()
	{
		
		$data=[
			'title'=>'Profil Saya',
			
		];
		return view('user/user/profile',$data);
		
	}

	
	//--------------------------------------------------------------------

}
