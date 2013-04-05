<?php
App::uses('Site', 'Model');

class SiteTest extends CakeTestCase {
    public $fixtures = array('app.site','app.visitor', 'app.user_request', 'app.referer');

    public function setUp() {
        parent::setUp();
        $this->Site = ClassRegistry::init('Site');
    }

    public function testGetVisitors() {
        $this->Site->recursive = -1;

        $this->Site->id = 16;

        $result = $this->Site->getVisitors();

        $this->assertTrue(!empty($result));
        $expected = array(array(
            'Visitor' => array(
                'id' => '37',
                'site_id' => '16',
                'created' => '2012-10-19 04:01:52',
                'modified' => '2012-10-19 04:01:52'
            ),
            'Site' => array(
                'id' => '16',
                'name' => 'Google',
                'address' => 'http://www.google.com/',
                'tracker' => 'ruijhJhjHjHjhq',
                'created' => '2012-10-19 04:01:52',
                'modified' => '2012-10-19 04:01:52',
                'user_id' => null
            ),
            'UserRequest' => array(
                array(
                    'id' => 27,
                    'session_id' => null,
                    'visitor_id' => 37,
                    'created' => '2012-10-19 04:01:52',
                    'modified' => '2012-10-19 04:01:52',
                    'ip_address' => '127.0.0.1',
                    'is_new_visitor' => 1,
                    'is_entry_page' => 1,
                    'is_repeat_visitor' => 1
                ),
                array(
                    'id' => 28,
                    'session_id' => null,
                    'visitor_id' => 37,
                    'created' => '2012-10-19 04:01:55',
                    'modified' => '2012-10-19 04:01:55',
                    'ip_address' => '127.0.0.1',
                    'is_new_visitor' => 1,
                    'is_entry_page' => 1,
                    'is_repeat_visitor' => 1
                ),
                array(
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
            )
        ));

        $this->assertEquals($expected, $result);
    }

    public function testGetPageViews() {
        $this->Site->recursive = -1;

        $this->Site->id = 16;

        $visitors = $this->Site->getVisitors();

        $result = $this->Site->getPageViews($visitors);

        $this->assertTrue(!empty($result));

        $expected = array(
            array(
                array('request_count' => '2',
                'request_date' => 'Oct 19 2012')
            ),
            array(
                array('request_count' => '1',
                'request_date' => 'Oct 20 2012')
            )               

        );

        $this->assertEquals($expected, $result);       
    }

    public function testGetReferers() {
        $this->Site->recursive = -1;

        $this->Site->id = 16;

        $result = $this->Site->getReferers();

        $this->assertTrue(!empty($result));

        $expected = array(
            array(
                array(
                    'referer_count' => 1,
                ),
                'Referer' => array(
                    'url' => 'http://localhost/'
                )
            ),
            array(
                array(
                    'referer_count' => 1
                ),
                'Referer' => array(
                    'url' => 'http://yahoo/'
                )
            )
        );

        $this->assertEquals($expected, $result);       
    }
}