<?php namespace App\Controllers;

use App\Models\PenggunaModel;

class Auth extends BaseController
{

	public function index()
	{

		$data=[
			"title"=>"Login"
		];
		return view('auth/login',$data);
		
	}
	public function signup()
	{
		return view('auth/signup');
	}
	public function up()
	{
		$User=new PenggunaModel;
		$data=[
			"nama"=>$this->request->getVar('name'),
			"email"=>$this->request->getVar('email'),
			"telepon"=>$this->request->getVar('no_wa'),
			"password"=>$this->request->getVar('password'),
		];
		$do=$User->save($data);
		if ($do) {
			$session=\Config\Services::session();
			$session->start();
			$db = db_connect();
			$ses=$db->table('pengguna')->where('email',$this->request->getVar('email'))->get()->getRowArray();
			$session->set($ses);
			return redirect()->to('/');
		}
		
		

	}
	public function google()
	{
		
		$session=\Config\Services::session();
		$session->start();
		$email=$this->request->getVar('email');
		$password= md5($this->request->getVar('id'));
		$db = db_connect();
		$ses=$db->table('pengguna')
						->where('email',$email)
						->get()->getRowArray();
		if (empty($ses)) {
			$data=[
				"nama"=>$this->request->getVar('name'),
				"email"=>$this->request->getVar('email'),
				"password"=>md5($this->request->getVar('id')),
			];
			$User=new PenggunaModel;
			$do=$User->save($data);
		
			if ($do) {
				$ses=$db->table('pengguna')
						->where('email',$email)
						->where('password',$password)
						->get()->getRowArray();
				$ses['image']=$this->request->getVar('image');
				$session->set($ses);
				echo json_encode(['to'=>'/Profile/edit']);
			}

		}
		else{
			$ses=$db->table('pengguna')
						->where('email',$email)
						->where('password',$password)
						->get()->getRowArray();
			$session->set($ses);
			echo json_encode(['to'=>'/']);
		}
		
	}
	
	public function in()
	{
		$session=\Config\Services::session();
		$session->start();

		$email=$this->request->getVar('email');
		$password=$this->request->getVar('password');


		$db = db_connect();
		$ses=$db->table('pengguna')
						->where('email',$email)
						->where('password',$password)
						->get()->getRowArray();
		$admin=$db->table('user')->where('password',$password)->get()->getRowArray();
		
		if (!empty($ses)) {
			$session->set($ses);
			return redirect()->to('/');
		}
		else if(($admin) && ($admin['username'].'@admin'==$email)){
			$ses=[
				'email'=>$admin['username'],
				'role'=>'Admin',
			];
			$session->set($ses);
			return redirect()->to('/Admin/Dashboard');
		}
		
		else{
			session()->setFlashdata('error','Email Atau Password Tidak Terdaftar');
			return redirect()->to('Auth');
		}
		
	}

	public function out()
	{
		$session=\Config\Services::session();
		$session->destroy();
		return redirect()->to('Auth');
		
	}

	//--------------------------------------------------------------------

}
