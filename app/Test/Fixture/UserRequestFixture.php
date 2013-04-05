<?php
class UserRequestFixture extends CakeTestFixture {
    public $import = 'UserRequest';
    /* Optional. Set this property to load fixtures to a different test datasource */
    public $useDbConfig = 'test';

    public $fields = array(
        'id' => array('type' => 'integer', 'key' => 'primary'),
        'session_id' => array('type' => 'integer'),
        'visitor_id' => array('type' => 'integer'),
        'created' => 'datetime',
        'modified' => 'datetime',
        'ip_address' => '127.0.0.1',
        'is_new_visitor' => 1,
        'is_entry_page' => 1,
        'is_repeat_visitor' => 1
    );

    public $records = array(array(
            'id' => 27,
            'session_id' => null,
            'visitor_id' => 37,
            'created' => '2012-10-19 04:01:52',
            'modified' => '2012-10-19 04:01:52',
            'ip_address' => '127.0.0.1',
            'is_new_visitor' => 1,
            'is_entry_page' => 1,
            'is_repeat_visitor' => 1
        ), array(
            'id' => 28,
            'session_id' => null,
            'visitor_id' => 37,
            'created' => '2012-10-19 04:01:55',
            'modified' => '2012-10-19 04:01:55',
            'ip_address' => '127.0.0.1',
            'is_new_visitor' => 1,
            'is_entry_page' => 1,
            'is_repeat_visitor' => 1
        ), array(
            'id' => 29,
            'session_id' => null,
            'visitor_id' => 37,
            'created' => '2012-10-20 04:01:55',
            'modified' => '2012-10-20 04:01:55',
            'ip_address' => '127.0.0.1',
            'is_new_visitor' => 1,
            'is_entry_page' => 1,
            'is_repeat_visitor' => 1
        )
    );
 }