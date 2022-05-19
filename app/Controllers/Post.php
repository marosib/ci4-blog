<?php

namespace App\Controllers;

use App\Models\PostModel;

class Post extends BaseController
{
    public function index()
    {
        $model = new PostModel();
        $data['posts'] = $model->getPosts();

        echo view('templates/header', $data);
		echo view('posts/index');
		echo view('templates/footer');
    }

    public function create()
    {
        helper('form');
        $model = new PostModel();

        if (!$this->validate([
            'title' => 'required|min_length[3]|max_length[255]',
            'text' => 'required|min_length[3]|max_length[255]',
        ])) {    
            echo view('templates/header');
            echo view('posts/create');
            echo view('templates/footer');
        } else {
            $model->save([
                'title' => $this->request->getVar('title'),
                'text' => $this->request->getVar('text'),
                'slug' => url_title($this->request->getPost('title')),
            ]);

            return redirect()->to('/');
        }

    }
}
