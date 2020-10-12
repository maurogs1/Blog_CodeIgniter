<?php namespace App\Controllers;
use App\Models\Blog;
class Pages extends BaseController
{
    
  
    

	public function index()
	{
      
            $model = new Blog();
        $data['news'] = $model->getPosts();
        echo view('templates/header',$data );
        echo view('pages/home');
        echo view('templates/footer');    
    }

    function showme($page = 'home'){        
        $model = new Blog();
        $data['news'] = $model->getPosts();
        if(!is_file(APPPATH.'/Views/pages/'.$page.'.php'))
            throw new \CodeIgniter\Exceptions\PageNotFoundException($page);

        echo view('templates/header', $data);
        echo view('pages/'.$page);
        echo view('templates/footer');
    }
	//--------------------------------------------------------------------

}