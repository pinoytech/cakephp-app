<?php

class Post extends AppModel {
    public $name = 'Post';
    public $actsAs = array(
        'Sluggable' => array(
            'title_field' => 'title',
            'slug_field' => 'slug',
            'slug_max_length' => 100,
            'separator' => '_'
        )
    );

    public $validate = array(
        'title' => array(
            'notEmpty'
        ),
        'body' => array(
            'notEmpty'
        )
    );
}