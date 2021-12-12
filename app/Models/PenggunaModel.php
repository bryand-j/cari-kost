<?php namespace App\Models;

use CodeIgniter\Model;

class PenggunaModel extends Model
{
    protected $table      = 'pengguna';
    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $allowedFields = [
      'nama',
      'email',
      'telepon',
      'password',
      'pemilik',
    ];
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $createdField  = 'create_at';
    protected $updatedField  = 'update_at';
    protected $deletedField  = 'delete_at';

    public function pemilik()
    {
      return $this->db->table('pengguna')->where('pemilik','Ya')->where('delete_at',null)
      ->get()->getResultArray();
    }
    public function jkost($id)
    {
      return $this->db->table('kost')->where('id_pemilik',$id)->where('delete_at',null)
      ->get()->getNumRows();
    }
    public function isPemilik($id)
    {
      return $this->db->table('pengguna')->where('id',$id)->where('pemilik','Ya')
      ->get()->getNumRows();
    }


}