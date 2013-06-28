<?php

Router::connect('/:year/:month/:day/:slug',
    array('plugin' => 'blog', 'controller' => 'posts', 'action' => 'view'),
    array(
        'pass' => array('year', 'month', 'day', 'slug'),
        'year' => '[0-9]{4}',
        'month' => '[0-9]{1,2}',
        'day' => '[0-9]{1,2}',
        'slug' => '[a-z0-9_\-]+'
    )
);

Router::connect('/sitemap.xml', array('plugin' => 'blog', 'controller' => 'posts', 'action' => 'sitemap', 'ext' => 'xml'));
Router::connect('/sitemap.json', array('plugin' => 'blog', 'controller' => 'posts', 'action' => 'sitemap', 'ext' => 'json'));
Router::connect('/feed.rss', array('plugin' => 'blog', 'controller' => 'posts', 'action' => 'feed', 'ext' => 'rss'));
Router::connect('/archives', array('plugin' => 'blog', 'controller' => 'posts', 'action' => 'archives'));
Router::connect('/', array('plugin' => 'blog', 'controller' => 'posts', 'action' => 'index'));