<?php namespace App\Controllers;

use App\Models\UserModel;

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
	public function out()
	{
		$session=\Config\Services::session();
		$session->destroy();
		return redirect()->route('Login');
		
	}
	public function in()
	{
		$session=\Config\Services::session();
		$session->start();


		$UserModel=new UserModel;

		$username=$this->request->getVar('username');
		$password=$this->request->getVar('password');


		$admin=$UserModel->login($username,$password);
		
		if (!empty($admin)) {
			$session->set([
				'Username'=>$username,
				'Level'=>$admin['level'],
				'ID_User'=>$admin['id_user']
			]);
			return redirect()->route('admin/Dashboard');
			
		}
		
		else{
			session()->setFlashdata('error','Username Atau Password Salah');
			return redirect()->to('Login');
		}
		
	}

	//--------------------------------------------------------------------

}
