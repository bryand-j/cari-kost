<?php namespace App\Controllers;


class App extends BaseController
{

	public function index()
	{
		
		$data=[
			'title'=>'Home',
			
		];
		return view('user/dashboard/index',$data);
		
	}

	
	//--------------------------------------------------------------------

}
