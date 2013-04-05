<?php
class SiteFixture extends CakeTestFixture {
      public $import = 'Site';
      /* Optional. Set this property to load fixtures to a different test datasource */
      public $useDbConfig = 'test';

      public $fields = array(
          'id' => array('type' => 'integer', 'key' => 'primary'),
          'name' => array('type' => 'string', 'length' => 255, 'null' => false),
          'address' => array('type' => 'string', 'length' => 255, 'null' => false),
          'tracker' => array('type' => 'string', 'length' => 255, 'null' => false),
          'created' => 'datetime',
          'modifed' => 'datetime'
      );

      public $records = array(array(
        'id' => '16',
        'name' => 'Google',
        'address' => 'http://www.google.com/',
        'tracker' => 'ruijhJhjHjHjhq',
        'created' => '2012-10-19 04:01:52',
        'modified' => '2012-10-19 04:01:52'
      )
      );
 }