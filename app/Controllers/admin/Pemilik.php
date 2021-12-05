<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\PemilikModel;
class Pemilik extends BaseController
{
	protected $title="Pemilik";
	protected $base="Admin/Pemilik";

	public function index()
	{
		$data=[
			"title" =>$this->title,
      "base"  =>$this->base
		];
		return view('admin/pemilik/index',$data);
	}
	public function table()
	{
		$Pemilik=new PemilikModel;
		$data=[

			"Pemilik"	=>$Pemilik->findAll()
		];
		return view('admin/pemilik/table',$data);
	}
	
	
}