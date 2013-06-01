<?php

App::uses('CakeTime', 'Utility');

class PostsController extends AppController {

    public $components = array('Paginator', 'RequestHandler');

    public function beforeFilter() {
        $this->Auth->allow('index', 'view', 'sitemap', 'archives');
    }

    public function isAuthorized($user) {
        // Only admins can access admin functions
        if (isset($this->request->params['admin'])) {
            return (bool)($user['role'] === 'admin');
        }
        return parent::isAuthorized($user);
    }

    public function sitemap(){
        $sitemap = $this->Post->generateSiteMap();
        // Render view and don't use specific view engines
        $this->RequestHandler->respondAs($this->request->params['ext']);

        $this->set('sitemap', $sitemap);
    }

    public function archives() {
        $this->response->cache('-1 minute', '+2 week');

        $posts = $this->Post->find('all', array(
            'fields' => array('body', 'title', 'slug', "year", "month", "day", "created"),
            'order' => array(
                'Post.created' => 'DESC'
            )
        ));
        $this->set('posts', $posts);
    }

    public function index() {
        $this->response->cache('-1 minute', '+2 week');

        $posts = $this->Post->find('all', array(
            'limit' => 2,
            'fields' => array('body', 'title', 'slug', "year", "month", "day", "created"),
            'order' => array(
                'Post.created' => 'DESC'
            )
        ));
        $this->set('posts', $posts);
    }


    public function admin_add() {
        if ($this->request->is('post')) {
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash('Your Blog has been saved.', 'alert-info');
                $this->redirect(array('action' => 'admin_add'));
            }
        }
    }

    public function admin_index() {
        $this->response->cache('-1 minute', '+2 week');
        $this->paginate = array(
            'contain' => array(),
            'order' => array(
                'Post.created' => 'DESC'
            ),
            'limit' => 8,
            'paramType' => 'querystring'
        );

        $this->set('posts', $this->paginate('Post'));
        $this->set('pagination_model', 'Post');
    }

    public function admin_edit($id = null) {

        if (!$this->Post->exists($id)) {
            throw new NotFoundException(__('Invalid Post'));
        }

        if ($this->request->is('put') || $this->request->is('post')) {
            if ($this->Post->save($this->request->data)) {
                $this->Session->setFlash('Your Blog has been saved.', 'alert-info');
                // $this->redirect($this->here);
            }
        } else {
            $this->request->data = $this->Post->findById($id);
        }
    }

    public function view($year, $month, $day, $slug) {
        $this->response->cache('-1 minute', '+2 week');
        $post = $this->Post->find('first', array(
            'contain' => array(),
            'fields' => array(
                'body', 'title', 'slug',
                "DATE_FORMAT(created, '%Y') as year",
                "DATE_FORMAT(created, '%m') as month",
                "DATE_FORMAT(created, '%e') as day",
                "DATE_FORMAT(created, '%e %b %Y') as created",
                'title',
                'body',
                'modified'
            ),
            'conditions' => array(
                'YEAR(created)' => $year,
                'MONTH(created)' => $month,
                'DAY(created)' => $day,
            )
        ));

        $this->response->modified($post['Post']['modified']);
        $this->set('post', $post);
    }

    public function admin_delete($id = null) {
        if (!$this->request->is('post')) {
            throw new MethodNotAllowedException();
        }

        $this->Post->id = $id;

        if (!$this->Post->exists()) {
            throw new NotFoundException(__('Invalid Post'));
        }

        if ($this->Post->delete()) {
            $this->Session->setFlash(__('Post deleted'));
        } else {
            $this->Session->setFlash(__('Post was not deleted'));
        }

        $this->redirect(array('action' => 'index'));
    }
}