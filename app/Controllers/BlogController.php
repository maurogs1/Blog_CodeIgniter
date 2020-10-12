<?php namespace App\Controllers;
use App\Models\Blog;
class BlogController extends BaseController
{


    function post($slug){
        
        $model = new Blog();
        $data['post'] = $model->getPosts($slug);

        echo view('templates/header',$data);
        echo view('blog/post');
        echo view('templates/footer');
    }

    function create(){
        helper('form');
        $model = new Blog();
        //validar desde el formulario con la propiedad name de los input
        if(! $this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
            'body' => 'required'
        ])){
            //mandamos a la vista de create si la validación no es correcta
            echo view('templates/header');
            echo view('/blog/create');
            echo view('templates/footer');
        }else{
            $model->save([
                'title' => $this->request->getVar('title'),
                'body'  => $this->request->getVar('body'),
                'slug' => url_title($this->request->getVar('title')),

            ]);
            $session = \Config\Services::session();
            $session->setFlashdata('success','Se agregó el nuevo post!');
            return redirect()->to('/');
        }

    }
}