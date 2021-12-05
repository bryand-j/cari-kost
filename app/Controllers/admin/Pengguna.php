<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PenggunaModel;
class Pengguna extends BaseController
{
	protected $title="Pengguna";
	protected $base="Admin/Pengguna";

	public function index()
	{
		$data=[
			"title" =>$this->title,
      "base"  =>$this->base
		];
		return view('admin/pengguna/index',$data);
	}
	public function table()
	{
		$Pengguna=new PenggunaModel;
		$data=[

			"Pengguna"	=>$Pengguna->findAll()
		];
		return view('admin/pengguna/table',$data);
	}
	
	
}