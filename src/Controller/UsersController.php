<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;

class UsersController extends AppController
{
    public function index() {
        $users = $this->Users->find('all');
        $this->set(compact('users'));
    }
    public function view($id) {
        $user = $this->Users->find($id);
        $this->set(compact('user'));
    }
    public function add() {
        $user = $this->Users->newEntity();
        if($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->data());
            if($this->Users->save($user)){
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('Unable to add the user.'));
        }
        $this->set(compact('user'));
    }
    public function login() {

    }
    public function logout(){

    }
    public function beforeFilter(Event $event)
    {
        parent::beforeFilter($event);
        $this->Auth->allow(['add', 'logout']);
    }
}