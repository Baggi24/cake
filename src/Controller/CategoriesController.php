<?php
namespace App\Controller;

use App\Controller\AppController;

class CategoriesController extends AppController
{
    public function initialize()
    {
        parent::initialize();
    }
    public function index(){
        $categories = $this->Categories->find('all');
        $this->set(compact('categories'));
    }
    public function view($id) {
        $category = $this->Categories->get($id);
        $this->set(compact('category'));
    }
    public function edit($id){
        $category = $this->Categories->get($id);

        if($this->request->is(['post','put'])){
            $category = $this->Categories->patchEntity($category, $this->request->data());
            if($this->Categories->save($category)){
                $this->Flash->success(__('Category updated'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Category not updated'));
        }
        $this->set(compact('category'));
    }
    public function add() {
        $category = $this->Categories->newEntity();
        if($this->request->is('post')){
            $category = $this->Categories->patchEntity($category, $this->request->data());
            if($this->Categories->save($category)){
                $this->Flash->success(__('Category created.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to save category.'));
        }
        $this->set(compact('category'));
    }
    public function delete($id) {
        $this->request->allowMethod(['post', 'delete']);
        $category = $this->Categories->get($id);
        if($this->Categories->delete($category)) {
            $this->Flash->success(__('The category number {0} has been deleted', h($id)));
            return $this->redirect(['action' => 'index']);
        }
    }
}