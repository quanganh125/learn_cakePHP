<?php
namespace App\Controller;

class BlogsController extends AppController{

    public function home(){
        //exit("Hello");
        $this->viewBuilder()->setLayout('ajax');
    }
}
