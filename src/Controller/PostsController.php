<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Exception\NotFoundException;

class PostsController extends AppController
{
    public function index()
    {
        $posts = $this->Posts->find('all');
        $this->set('posts', $posts);


//        $this->set('color','pink');
//        $goods = array(
//            'title' => 'Name',
//            'price' => 1000,
//            'description' => 'Product description'
//        );
//        $posts = $this->Posts->find('all', array(
//            'conditions' => array('id >' => 1)
//            'conditions' => array('id IN' => array(1,3))
//            'conditions' => array('id NOT IN' => array(1,3))
//            'conditions' => array('title LIKE' => '%tit%')
//        ));
//        $posts = $this->Posts->find('all')->first();
//        $posts = $this->Posts->find('all')->count();
//        $posts = $this->Posts->find('list')->toArray();
//        $this->loadModel('Categories');

//        $posts = $this->Categories->find('threaded');
//        $posts = $this->Categories->find('all', [
//            'conditions' => ['id BETWEEN 691 AND 700']
//        ]);
//        $posts = $this->Categories->findByTitleOrAlias('iPad mini','ipad-mini');

//        debug($posts->toArray());
//        $this->set($goods);
//        $this->set(compact('posts'));
    }
    public function view($id = null) {
        if(empty($id)){
            throw new NotFoundException(__('Post not found'));
        }
        $post = $this->Posts->get($id);
        $this->set(compact('posts', 'post'));
    }
}