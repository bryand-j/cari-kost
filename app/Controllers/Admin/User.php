<?php namespace App\Controllers\Admin;

use App\Controllers\BaseController;
use App\Models\UserModel;
class User extends BaseController
{
	protected $title="Admin";

	public function index()
	{
		$data=[
			"title"=>$this->title,
		];
		return view('admin/user/index',$data);
	}
	public function table()
	{
		$User=new UserModel;
		$data=[
			"User"	=>$User->findAll()
		];
		return view('admin/user/table',$data);
	}
	public function formEdit($id)
	{
		$User=new UserModel;
		$data=[
			"title"	=>$this->title,
			"data"=>$User->find($id)
		];
		return view('admin/user/formEdit',$data);

	}
	public function formAdd()
	{
	
		$data=[
			"title"			=>$this->title,
		];
		return view('admin/user/formAdd',$data);

	}

	public function save()
	{

		$User=new UserModel;
		$data=[
			
			"username"=>$this->request->getVar('username'),
			"password"=>$this->request->getVar('password'),
		];
		$User->save($data);
		$result=[
			'type'		=>'successs',
			'message'	=>'Data '.$this->title.' Berhasil di Input'
		];
		
		echo json_encode($result);

	}

	public function update()
	{

		$User=new UserModel;
		$data=[
			"id_user"=>$this->request->getVar('id_user'),
			"username"=>$this->request->getVar('username'),
			"password"=>$this->request->getVar('password'),
		];
		$User->save($data);
		$result=[
			'type'		=>'successs',
			'message'	=>'Data '.$this->title.' Berhasil di Edit'
		];
		
		echo json_encode($result);

	}

	public function delete()
	{
		
		if ($this->request->isAJAX()) {
			$User=new UserModel;
			$id=$this->request->getVar('id');
			$User->delete($id);
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