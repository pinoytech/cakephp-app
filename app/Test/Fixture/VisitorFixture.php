<?php
class VisitorFixture extends CakeTestFixture {
    public $import = 'Visitor';
    /* Optional. Set this property to load fixtures to a different test datasource */
    public $useDbConfig = 'test';

    public $fields = array(
        'id' => array('type' => 'integer', 'key' => 'primary'),
        'site_id' => array('type' => 'integer'),
        'created' => 'datetime',
        'modifed' => 'datetime'
    );

    public $records = array(array(
        'id' => 37,
        'site_id' => 16,
        'created' => '2012-10-19 04:01:52',
        'modified' => '2012-10-19 04:01:52'
    ));
}