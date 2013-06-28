<?php
Router::connect('/contact',
    array(
        'plugin' => 'contact_form',
        'controller' => 'contacts',
        'action' => 'add'
    )
);