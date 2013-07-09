<?php

App::uses('CakeEmail', 'Network/Email');

class UsersController extends AppController {

    public $components = array(
        'String',
        'Security' => array(
            'csrfExpires' => '+1 hour'
        ),
    );

    public function beforeFilter() {
        parent::beforeFilter();
        $this->Auth->allow('logout', 'forgot_password', 'reset_password');
    }

    public function login() {
        if ($this->Session->read('Auth.User')) {
            $this->redirect(array('action' => 'add'));
        }

        if ($this->request->is('post')) {
            var_dump($this->request->data);
            echo '<br />';
            var_dump($_POST);
            // if ($this->Auth->login()) {
                //return $this->redirect($this->Auth->redirectUrl());
            //} else {
                //$this->Session->setFlash(__('Invalid username or password, try again'));
                //$this->redirect($this->here);
            //}
        }
    }

    public function isAuthorized($user) {
        if (in_array($this->request->action, array('edit'))) {
            return true;
        }
        return parent::isAuthorized($user);
    }

    public function logout() {
        $this->redirect($this->Auth->logout());
    }

    public function admin_index() {
        $this->User->recursive = 0;
        $this->set('users', $this->paginate());
    }

    public function admin_view($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        $this->set('user', $this->User->read(null, $id));
    }

    public function reset_password() {
        $key = isset($this->request->query['key']) ? $this->request->query['key'] : '';
        $user = $this->User->findByRandomString($key);
        if ($user) {
            $this->Auth->login($user['User']);
            if ($this->request->is('post')) {
                $this->User->set($this->request->data);
                if ($this->User->validates()) {
                    $this->request->data['User']['id'] = $this->Session->read('Auth.User.id');
                    $this->request->data['User']['random_string'] = '';
                    $this->User->save($this->request->data);
                    $this->Session->setFlash(__('Your password has been reset'), 'alert-info');
                    $this->redirect(array('controller' => 'users', 'action' => 'login'));
                }
            }
        } else {
            $this->Session->setFlash(__('We do not Recognize Your Key.'), 'alert-error');
            $this->redirect(array('action' => 'add'));
        }
    }

    public function forgot_password() {
        if ($this->Session->read('Auth.User')) {
            $this->Session->setFlash(__('You are already logged in.'), 'alert-info');
            $this->redirect(array('action' => 'add'));
        } else {
            if ($this->request->is('post') || $this->request->is('put')) {
                $this->User->set($this->request->data);
                unset($this->User->validate['email']['isUnique']);
                if ($this->User->validates()) {
                    $user = $this->User->findByEmail($this->request->data('User.email'));
                    if ($user) {
                        $this->request->data['User']['id'] = $user['User']['id'];
                        $random_string = $this->String->random();
                        $this->request->data['User']['random_string'] = $random_string;
                        unset($this->request->data['User']['email']);
                        $this->User->save($this->request->data);
                        $this->_sendEmail($user, $random_string);
                        $this->Session->setFlash(__('Instructions has been sent to your email.'), 'alert-info');
                        $this->redirect(array('action' => 'forgot_password'));
                    } else {
                        $this->Session->setFlash(__('Email does not exist in the system'), 'alert-error');
                        $this->redirect(array('action' => 'forgot_password'));
                    }
                }
            }
        }
    }

    public function admin_edit($id = null) {
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->request->is('post') || $this->request->is('put')) {
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been saved'));
                $this->redirect(array('action' => 'index'));
            } else {
                $this->Session->setFlash(__('The user could not be saved. Please, try again.'));
            }
        } else {
            $this->request->data = $this->User->read(null, $id);
            unset($this->request->data['User']['password']);
        }
    }

    public function admin_delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }
        $this->User->id = $id;
        if (!$this->User->exists()) {
            throw new NotFoundException(__('Invalid user'));
        }
        if ($this->User->delete()) {
            $this->Session->setFlash(__('User deleted'));
            $this->redirect(array('action' => 'index'));
        }
        $this->Session->setFlash(__('User was not deleted'));
        $this->redirect(array('action' => 'index'));
    }

    private function _sendEmail($user, $random_string) {
        $email = new CakeEmail('smtp');
        $email->template('forgot_password');
        $email->viewVars(array(
            'activationLink' => Router::url("/users/reset_password/?key={$random_string}", TRUE)
        ));
        $email->to($user['User']['email']);
        $email->subject(__('Forget Your Password'));
        $email->send();
    }
}