<?php

App::uses('AppController', 'Controller');

class ContactFormAppController extends AppController {
    public $uses = array('ContactForm.Contact');
}