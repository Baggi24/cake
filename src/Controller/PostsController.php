<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Exception\NotFoundException;
use Cake\Event\Event;

class PostsController extends AppController
{
    public function initialize()
    {
        parent::initialize();
        $this->loadComponent('Flash');
    }
    public function beforeFilter(Event $event) {
        parent::beforeFilter($event);
        $this->viewBuilder()->layout('new_layout');
    }

    public function index()
    {
//        $this->viewBuilder()->layout('new_layout');
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
        //if(empty($id))
        if(!$this->Posts->exists(['id' => $id])){
            throw new NotFoundException(__('Post not found'));
        }
        $post = $this->Posts->get($id);
        $this->set(compact('post'));
    }
    public function add() {
        $categories = $this->Posts->Categories->find('list', ['limit' => 100]);
        $this->set(compact('categories'));

        $post = $this->Posts->newEntity();
        if($this->request->is('post')){
            $post = $this->Posts->patchEntity($post, $this->request->data());
            if($this->Posts->save($post)){
                $this->Flash->success(__('Post created.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to save post.'));
        }
        $this->set(compact('post'));
    }
    public function delete($id) {
//        if(!$this->Posts->exists(['id' => $id])){
//            throw new NotFoundException(__('Post not found'));
//        }
        $this->request->allowMethod(['post', 'delete']);
        $post = $this->Posts->get($id);
        if($this->Posts->delete($post)) {
            $this->Flash->success(__('The post number {0} has been deleted', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
    public function edit($id){
        $categories = $this->Posts->Categories->find('list', ['limit' => 100]);
        $this->set(compact('categories'));

//        if(!$this->Posts->exists(['id' => $id])){
//            throw new NotFoundException(__('Post not found'));
//        }
        $post = $this->Posts->get($id);
        if($this->request->is(['post','put'])){
            $post = $this->Posts->patchEntity($post, $this->request->data());
            if($this->Posts->save($post)){
                $this->Flash->success(__('Post updated'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Post not updated'));
        }
        $this->set(compact('post'));
    }
    public function search($search = null) {
        if(!$search) {
            $this->set('posts', 'Search not entered...');
        }
        else {
            $posts = $this->Posts->find('all', [
                'conditions' => array('Posts.title LIKE' => '%' . $search . '%')
            ]);
            $this->set('posts', $posts);
        }
        $this->render('index');
    }
}