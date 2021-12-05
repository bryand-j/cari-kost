<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KostModel;
class Kost extends BaseController
{
	protected $title="Kost";
	protected $base="Admin/Kost";

	public function index()
	{
		$data=[
			"title" =>$this->title,
      "base"  =>$this->base
		];
		return view('admin/kost/index',$data);
	}
	public function table()
	{
		$Kost=new KostModel;
		$data=[

			"Kost"	=>$Kost->getAll()
		];
		return view('admin/kost/table',$data);
	}
	public function formEdit($id)
	{
		$Kost=new KostModel;
		$data=[
			"title"	=>$this->title,
      "base"  =>$this->base,
			"data"  =>$Kost->find($id)
		];
		return view('admin/kost/formEdit',$data);

	}
	public function formAdd()
	{
	
		$data=[
			"title" =>$this->title,
      "base"  =>$this->base
		];
		return view('admin/kost/formAdd',$data);

	}

	public function save()
	{

		$Kost=new KostModel;
		$data=[
			"nama"=>$this->request->getVar('nama'),
			"id_pemilik"=>$this->request->getVar('id_pemilik'),
			"jumlah_kamar"=>$this->request->getVar('jumlah_kamar'),
			"terisi"=>$this->request->getVar('terisi'),
			"fasilitas"=>$this->request->getVar('fasilitas'),
			"alamat"=>$this->request->getVar('alamat'),
			"kordinat"=>$this->request->getVar('kordinat'),
		];
		$do=$Kost->save($data);
    if ($do) {
      $result=[
        'type'		=>'successs',
        'message'	=>'Data '.$this->title.' Berhasil di Input'
      ];
      echo json_encode($result);
    } else {
      $result=[
        'type'		=>'error',
        'message'	=>'Data '.$this->title.' Gagal di Input'
      ];
      echo json_encode($result);
    }

	}

	public function update()
	{

		$User=new UserModel;
		$data=[
			"id"=>$this->request->getVar('id'),
      "nama"=>$this->request->getVar('nama'),
			"id_pemilik"=>$this->request->getVar('id_pemilik'),
			"jumlah_kamar"=>$this->request->getVar('jumlah_kamar'),
			"terisi"=>$this->request->getVar('terisi'),
			"fasilitas"=>$this->request->getVar('fasilitas'),
      "alamat"=>$this->request->getVar('alamat'),
			"kordinat"=>$this->request->getVar('kordinat'),
		];
		$do=$User->save($data);
    if ($do) {
      $result=[
        'type'		=>'successs',
        'message'	=>'Data '.$this->title.' Berhasil di Edit'
      ];
      
      echo json_encode($result);
    } else {
      $result=[
        'type'		=>'error',
        'message'	=>'Data '.$this->title.' Gagal di Edit'
      ];
      
      echo json_encode($result);
    }

	}

	public function delete()
	{
		
		if ($this->request->isAJAX()) {
			$Kost=new KostModel;
			$id=$this->request->getVar('id');
			$Kost->delete($id);
			$result=[
				'type'		=>'success',
			];
			
			echo json_encode($result);
		}
		else{
			echo "Access Denide!!";
		}
		

	}
}