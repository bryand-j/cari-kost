<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
class Dashboard extends BaseController
{
	protected $title="Dashboard";
	protected $base="Admin/Dashboard";

	public function index()
	{
    $db = db_connect();
		$data=[
			"title" =>$this->title,
      "base"  =>$this->base,
      "pengguna" =>$db->query('select * from pengguna')->getNumRows(),
      "pemilik" =>$db->query('select * from pemilik')->getNumRows(),
      "kost" =>$db->query('select * from kost')->getNumRows(),
      "admin" =>$db->query('select * from user')->getNumRows(),
		];
		return view('admin/dashboard/index',$data);
	}
	
	
}