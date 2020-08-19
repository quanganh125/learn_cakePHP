<?php
namespace App\Controller;
use Cake\Event\Event;
use Cake\Event\EventInterface;

class BlogsController extends AppController{

    public function beforeFilter(EventInterface $event)
    {
        $this->viewBuilder()->setLayout('blog');
        // debug($event);
        // exit();
    }
    public function home(){
        //exit("Hello");     
    }

    public function about(){
        //about go here
    }

    public function contact(){
        // contact go here
    }
}
