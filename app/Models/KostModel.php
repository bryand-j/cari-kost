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
      'kordinat'
    ];
    protected $useSoftDeletes = true;
    protected $useTimestamps = true;
    protected $createdField  = 'create_at';
    protected $updatedField  = 'update_at';
    protected $deletedField  = 'delete_at';

    public function getAll()
    {
        return $this->db->table('kost')
                    ->select('kost.*,pemilik.nama as nmpemilik')
                    ->join('pemilik','pemilik.id=kost.id_pemilik')
                    ->where('kost.delete_at',null)
                    ->get()->getResultArray();
    }
}