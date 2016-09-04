<?php
namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController
{
    public function index() {
        $users = $this->Users->find('all');
        $this->set(compact('users'));
    }

    public function add() {
        $user = $this->Users->newEntity();
        if($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data());
            if($this->Users->save($user)){
                $this->Flash->success(__('User added'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('User not added'));
        }
        $this->set(compact('user'));
    }
}