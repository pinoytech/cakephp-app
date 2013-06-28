<?php

/**
 * Contact Model
 *
 */
class Contact extends ContactFormAppModel {

    /**
     * Use table
     *
     * @var mixed False or table name
     */
    public $useTable = false;

    public $_schema = array(
        'name'      => array('type'=>'string', 'length'=>100),
        'email'     => array('type'=>'string', 'length'=>255),
        'details'   => array('type'=>'text')
    );

    public $validate = array(
        'name' => array(
            'rule'=>array('minLength', 1),
            'message'=>'Name is required'),
        'email' => array(
            'rule'=>'email',
            'message'=>'Must be a valid email address'),
        'details' => array(
            'rule'=>array('minLength', 1),
            'message'=>'Feedback is required' )
    );


}