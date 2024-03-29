<?php
// src/Controller/UsersController.php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\EventInterface;

class UsersController extends AppController
{
    public function index()
    {
        $this->set('users', $this->Users->find()->all());
    }

    public function dashboard()
    {
        $this->set('users', $this->Users->find()->all());
    }
    public function view($id)
    {
        $user = $this->Users->get($id);
        $this->set(compact('user'));
    }
    
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('Unable to add the user.'));
        }
        $this->set('user', $user);
    }

    public function register()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));
                return $this->redirect(['action' => 'dashboard']);
            }
            $this->Flash->error(__('Unable to register the user.'));
        }
        $this->set('user', $user);
    }
}