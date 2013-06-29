<?php
App::uses('AppController', 'Controller');
App::uses('CakeEmail', 'Network/Email');
/**
 * Contact Controller
 *
 * @property Contact $Contact
 */

class ContactsController extends ContactFormAppController {

    public $uses = array('ContactForm.Contact');

    public function beforeFilter() {
        $this->Auth->allow();
    }

    public function add() {
        if ($this->request->is('post')) {
            $this->Contact->set($this->request->data);
            if ($this->Contact->validates()) {
                $this->_sendEmail();
                $this->Session->setFlash(__('Email Sent'), 'alert-info');
                $this->redirect(array('action' => 'add'));
            }
        }
    }

    private function _sendEmail() {
        $email = new CakeEmail('smtp');
        $email->to(Configure::read('User.email'));

        $email->template('contact');
        $email->viewVars(array(
            'details' => $this->request->data['Contact']['details']
        ));
        $email->from($this->request->data['Contact']['email']);
        $email->subject(__('[FoodScaper] Message from Contact Form'));
        $email->send();
    }
}
