<?php namespace App\Models;

use CodeIgniter\Model;

class PemilikModel extends Model
{
    protected $table      = 'pemilik';
    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $allowedFields = [
      'nama',
      'email',
      'no_wa',
      'password',
      'alamat',
    ];
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $createdField  = 'create_at';
    protected $updatedField  = 'update_at';
    protected $deletedField  = 'delete_at';

}