<?php namespace App\Controllers;

use App\Models\UserModel;

class MyProfile extends BaseController
{

	public function index()
	{
		$level=session()->get('Level');
		$user=session()->get('Username');

		$UserModel=new UserModel;
		$data=[
			"title"=>"My Profile",
			"data"=> $UserModel->where('Username',$user)->get()->getRowArray(),

		];
		return view('profile/index',$data);
		
		
	}

	public function update()
	{
		$password=$this->request->getVar('oldPass');
		
		$id=$this->request->getVar('id_user');
		$UserModel=new UserModel;
		$user =$UserModel->getWhere(['id_user'=>$id,'password'=>$password])->getRow();
		if(!empty($user)){
			$data=[
				"id_user"=>$this->request->getVar('id_user'),
				"username"=> $this->request->getVar('username'),
				"password"=> $this->request->getVar('password'),
			];
			$UserModel->save($data);
			session()->setFlashdata('success','Data Berhasil Di Ubah');
		}
		else{
			session()->setFlashdata('error','Password Lama Salah');
		}
		
		return redirect()->to('/MyProfile');
		
		
	}

	//--------------------------------------------------------------------

}
