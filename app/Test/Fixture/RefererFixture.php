<?php
class RefererFixture extends CakeTestFixture {
    public $import = 'Referer';
    /* Optional. Set this property to load fixtures to a different test datasource */
    public $useDbConfig = 'test';

    public $fields = array(
        'id' => array('type' => 'integer', 'key' => 'primary'),
        'url' => array('type' => 'string', 'length' => 255, 'null' => false),
        'site_id' => array('type' => 'integer'),
        'site_name' => array('type' => 'string', 'length' => 255, 'null' => false),
        'query_terms' => array('type' => 'integer'),
        'is_searchengine' => array('type' => 'integer'),
        'created' => 'datetime',
        'modifed' => 'datetime'
    );

    public $records = array(
        array(
            'id' => 37,
            'url' => 'http://localhost/',
            'site_id' => 16,
            'site_name' => 'Google',
            'is_searchengine' => 1,
            'query_terms' => 1,
            'created' => '2012-10-19 04:01:52',
            'modified' => '2012-10-19 04:01:52'
        ),
        array(
            'id' => 38,
            'url' => 'http://yahoo/',
            'site_id' => 16,
            'site_name' => 'Yahoo',
            'is_searchengine' => 1,
            'query_terms' => 1,
            'created' => '2012-10-19 04:01:52',
            'modified' => '2012-10-19 04:01:52'
        )
    );
}