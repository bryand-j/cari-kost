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
      "pengguna" =>$db->table('pengguna')->countAll(),
      "pemilik" =>$db->table('pemilik')->countAll(),
      "kost" =>$db->table('kost')->countAll(),
      "admin" =>$db->table('user')->countAll(),
		];
		return view('admin/dashboard/index',$data);
	}
	
	
}