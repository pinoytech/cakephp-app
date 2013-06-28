<?php

class Post extends BlogAppModel {
    public $name = 'Post';
    public $actsAs = array(
        'Sluggable' => array(
            'title_field' => 'title',
            'slug_field' => 'slug',
            'slug_max_length' => 100,
            'separator' => '_'
        )
    );
    public $virtualFields = array(
        'year' => "DATE_FORMAT(created, '%Y')",
        'month' => "DATE_FORMAT(created, '%m')",
        'day' => "DATE_FORMAT(created, '%e')",
        'created' => "DATE_FORMAT(created, '%e %b %Y')"
    );
    public $validate = array(
        'title' => array(
            'notEmpty'
        ),
        'body' => array(
            'notEmpty'
        )
    );

    public function __construct($id = false, $table = null, $ds = null) {
        parent::__construct($id, $table, $ds);
        $this->virtualFields += $this->virtualFields;
    }

    public function generateSiteMap() {
        $sitemap = array(
            array(
                'loc' => array(
                    'controller' => 'posts',
                    'action' => 'index'
                ),
                'changefreq' => 'hourly',
                'priority' => '0.5'
            )
        );

        $results = $this->find('all', array(
            'contain' => false,
            'fields' => array(
                'body', 'title', 'slug', 'modified', 'year', 'month', 'day', 'created'
            ),
            'order' => array(
                'Post.created' => 'DESC'
            )
        ));

        foreach ($results as $result) {
            $sitemap[] = array(
                'loc' => array(
                    'plugin' => 'blog',
                    'controller' => 'posts',
                    'action' => 'view',
                    'year' => $result['Post']['year'],
                    'month' => $result['Post']['month'],
                    'day' => $result['Post']['day'],
                    'slug' => $result['Post']['slug']
                ),
                'lastmod' => $result['Post']['modified'],
                'changefreq' => 'daily',
                'priority' => '0.9'
            );
        }

        // Cleanup sitemap
        if ($sitemap) {
            foreach ($sitemap as &$item) {
                if (is_array($item['loc'])) {
                    if (!isset($item['loc']['plugin'])) {
                        $item['loc']['plugin'] = false;
                    }

                    $item['loc'] = h(Router::url($item['loc'], true));
                }

                if (array_key_exists('lastmod', $item)) {
                    if (!$item['lastmod']) {
                        unset($item['lastmod']);
                    } else {
                        $item['lastmod'] = CakeTime::format(DateTime::W3C, $item['lastmod']);
                    }
                }
            }
        }
        return $sitemap;
    }
}