<?php
namespace App\Controller;

use App\Controller\AppController;

class PostsController extends AppController
{
    public function index()
    {
        $this->set('color','pink');
        $goods = array(
            'title' => 'Name',
            'price' => 1000,
            'description' => 'Product description'
        );
//        $posts = $this->Posts->find('all', array(
//            'conditions' => array('id >' => 1)
//            'conditions' => array('id IN' => array(1,3))
//            'conditions' => array('id NOT IN' => array(1,3))
//            'conditions' => array('title LIKE' => '%tit%')
//        ));
//        $posts = $this->Posts->find('all')->first();
//        $posts = $this->Posts->find('all')->count();
        $posts = $this->Posts->find('list')->toArray();
        debug($posts);
        $this->set($goods);
        $this->set(compact('posts'));
    }
//    public function view() {
//
//    }
}