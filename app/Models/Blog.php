<?php namespace App\Models;

use CodeIgniter\Model;

//Hero la clase de codeigniter
class Blog extends Model{
    protected $table = 'posts';
    protected $allowedFields = ['title','slug','body'];
    public function getPosts($slug = null){
        if(!$slug)
        return $this->findAll();

        
         //consulta a la base de datos
    return $this->asArray()
    
    ->where(['slug' => $slug])
    ->first();
    }

   


}
