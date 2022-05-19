<?php namespace App\Models;

use CodeIgniter\Model;

class PostModel extends Model
{

  protected $table = 'posts';
  protected $allowedFields = ['title', 'text', 'created_by_id', 'slug', 'created_at', 'updated_at'];
  protected $beforeInsert = ['beforeInsert'];
  protected $beforeUpdate = ['beforeUpdate'];

    public function getPosts($slug = null)
    {
        if (!$slug) {
            return $this->findAll();
        }
    }

  protected function beforeInsert(array $data)
  {
    $data['data']['created_at'] = date('Y-m-d H:i:s');

    return $data;
  }

  protected function beforeUpdate(array $data)
  {
    $data['data']['updated_at'] = date('Y-m-d H:i:s');

    return $data;
  }

}