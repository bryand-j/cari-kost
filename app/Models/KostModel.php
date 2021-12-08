<?php namespace App\Models;

use CodeIgniter\Model;

class KostModel extends Model
{
    protected $table      = 'kost';
    protected $primaryKey = 'id';

    protected $returnType = 'array';

    protected $allowedFields = [
      'nama',
      'id_pemilik',
      'jumlah_kamar',
      'terisi',
      'fasilitas',
      'alamat',
      'kordinat',
      'harga',
      'jenis',
    ];
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $createdField  = 'create_at';
    protected $updatedField  = 'update_at';
    protected $deletedField  = 'delete_at';

    public function getAll()
    {
        return $this->db->table('kost')
                    ->select('kost.*,pengguna.nama as nmpemilik,pengguna.telepon,pengguna.email')
                    ->join('pengguna','pengguna.id=kost.id_pemilik')
                    ->where('kost.delete_at',null)
                    ->get()->getResultArray();
    }
    public function favorit($id_user,$id_kost=null)
    {
      $builder=$this->db->table('favorit')->where('id_user',$id_user);
      if ($id_kost) {
        return $builder->where('id_kost',$id_kost)->get()->getNumRows();
      }
      return  $builder->join('kost','favorit.id_kost=kost.id')->get()->getResultArray();

    }
}