<?php namespace App\Controllers;

use App\Models\PenggunaModel;
class Profile extends BaseController
{

	public function index()
	{
		$dt=new PenggunaModel;
		$id=session()->get('id');
		$data=[
			'title'=>'Profil Saya',
			'user'=>$dt->find($id),
			'jumlah_kost'=>$dt->jkost($id),
			'isPemilik'=>$dt->isPemilik($id)
		];
		return view('user/user/profile',$data);
		
	}

	public function set()
	{
		$id=session()->get('id');
		$data=[
			'id'=>$id,
			'pemilik'=>'Ya'
		];
		$pengguna=new PenggunaModel;
		$pengguna->save($data);

	}
	public function edit()
	{
		$pengguna=new PenggunaModel;
		$id=session()->get('id');
		$data=[
			'title'=>'Ubah Profile',
			'data'=>$pengguna->find($id),
		];
		return view('user/user/formEdit',$data);
	}

	public function submit()
	{
		$User=new PenggunaModel;
		$data=[
			"id"=>session()->get('id'),
			"nama"=>$this->request->getVar('name'),
			"email"=>$this->request->getVar('email'),
			"telepon"=>$this->request->getVar('no_wa'),
		];
		$do=$User->save($data);
		if ($do) {
			$session=\Config\Services::session();
			$session->start();
			$db = db_connect();
			$ses=$db->table('pengguna')->where('email',$this->request->getVar('email'))->get()->getRowArray();
			$session->set($ses);
			session()->setFlashdata('success','Profil Berhasil Di Update');

			return redirect()->to('/Profile');
		}
		else{
			session()->setFlashdata('error','Profil Gagal Di Update');
			return redirect()->to('/Profile');
		}
	}

	
	//--------------------------------------------------------------------

}
