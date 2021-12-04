<?php namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table      = 'user';
    protected $primaryKey = 'id_user';

    protected $returnType = 'array';

    protected $allowedFields = ['username','password','level'];

    
    public function login($username,$password)
    {
        return $this->where(['Username'=>$username,'Password'=>$password])
                    ->get()->getRowArray();
    }
}