<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\KostModel;
class Kost extends BaseController
{
	protected $title="Kost";
	protected $base="Admin/Kost";

	public function index()
	{
		if (session()->get('email')) {
			$data=[
				"title" =>$this->title,
				"base"  =>$this->base,
				"pemilik"=>session()->get('id')
			];
			return view('admin/kost/index',$data);
		}

		session()->setFlashdata('error','Silahkan Login Terlebih Dahulu');
    return redirect()->to('/Auth');
	}
	public function table()
	{
		
		$Kost=new KostModel;
		$dtKost=$Kost->getAll();
		if(session()->get('id')){
			$dtKost=$Kost->getMy(session()->get('id'));
		}
		$data=[

			"Kost"	=>$dtKost,
			"pemilik"=>session()->get('id')
			
		];
		return view('admin/kost/table',$data);
	}
	public function formEdit($id)
	{
		$db = db_connect();
		$Kost=new KostModel;
		$data=[
			"title"	=>$this->title,
      "base"  =>$this->base,
			"data"  =>$Kost->find($id),
			"jenis"	=>$db->table('jenis')->get()->getResultArray()
		];
		return view('admin/kost/formEdit',$data);

	}
	public function formAdd()
	{
		$db = db_connect();
		$data=[
			"title" =>$this->title,
      "base"  =>$this->base,
			"jenis"	=>$db->table('jenis')->get()->getResultArray()
		];
		return view('admin/kost/formAdd',$data);

	}
	public function formUpload($id)
	{
		$data=[
			"title"	=>$this->title,
      "base"  =>$this->base,
			"id"  =>$id,
		];
		return view('admin/kost/formUpload',$data);
	}

	public function upload($id=null)
	{
		$db = db_connect();
		helper(['form', 'url','filesystem']);
		if ($this->request->getFileMultiple('files')) {
			$db->table('foto')->where(['id_kost'=>$id])->delete();
			delete_files('uploads/'.$id, true);
			foreach($this->request->getFileMultiple('files') as $file)
			{   

				$file->move('uploads/'.$id);

				$data = [
					'id_kost' =>  $id,
					'foto' =>  $file->getClientName(),
				];
				
				$db->table('foto')->insert($data);

			}
			
 		}
		 

	}

	public function save()
	{

		$Kost=new KostModel;
		$data=[
			"nama"=>$this->request->getVar('nama'),
			"id_pemilik"=>session()->get('id'),
			"jumlah_kamar"=>$this->request->getVar('jumlah_kamar'),
			"terisi"=>$this->request->getVar('terisi'),
			"jenis"=>$this->request->getVar('jenis'),
			"harga"=>$this->request->getVar('harga'),
			"fasilitas"=>$this->request->getVar('fasilitas'),
			"alamat"=>$this->request->getVar('alamat'),
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

		$Kost=new KostModel;
		$data=[
			"id"=>$this->request->getVar('id'),
			"nama"=>$this->request->getVar('nama'),
			"id_pemilik"=>session()->get('id'),
			"jumlah_kamar"=>$this->request->getVar('jumlah_kamar'),
			"terisi"=>$this->request->getVar('terisi'),
			"jenis"=>$this->request->getVar('jenis'),
			"harga"=>$this->request->getVar('harga'),
			"fasilitas"=>$this->request->getVar('fasilitas'),
			"alamat"=>$this->request->getVar('alamat'),
		];
		$do=$Kost->save($data);
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