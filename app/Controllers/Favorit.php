<?php namespace App\Controllers;

use App\Models\KostModel;
class Favorit extends BaseController
{

	public function index()
	{
    $id_user='1';
		$Kost=new KostModel;
		$data=[
			'title'=>'Favorit',
			'data'=>$Kost->favorit($id_user),
		];
		return view('user/eksplor/favorit',$data);
		
	}
	public function set()
	{
    $id_user='1';
		$Kost=new KostModel;
    $id=$_GET['id'];
    $isfav=$Kost->favorit($id_user,$id);
    $db = db_connect();
    if ($isfav) {
      $db->table('favorit')->where(['id_user'=>$id_user,'id_kost'=>$id])->delete();
      $res=[
        'type'=>'success',
        'msg'=>'berhasil dihapus dari Favortit'
      ];
      echo json_encode($res);
      
    } else {
      
      $db->table('favorit')->insert(['id_user'=>$id_user,'id_kost'=>$id]);
      $res=[
        'type'=>'success',
        'msg'=>'berhasil tambahkan ke Favortit'
      ];
    }
    

	
	}

	
	//--------------------------------------------------------------------

}
