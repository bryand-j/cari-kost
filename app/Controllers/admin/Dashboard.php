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
      "pengguna" =>$db->table('pengguna')->where('delete_at',null)->get()->getNumRows(),
      "pemilik" =>$db->table('pengguna')->where('delete_at',null)->where('pemilik','Ya')->get()->getNumRows(),
      "kost" =>$db->table('kost')->where('delete_at',null)->get()->getNumRows(),
      "admin" =>$db->table('user')->get()->getNumRows(),
		];
		return view('admin/dashboard/index',$data);
	}
	
	
}