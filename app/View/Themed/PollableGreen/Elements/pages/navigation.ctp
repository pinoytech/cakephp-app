<div class="offset2 span8 navbar">
    <div class="navbar-inner">
        <ul class="nav">
            <li class="<?php echo $this->request->controller === 'posts' ? 'active': '';?>"><?php echo $this->Html->link('Blog', array('plugin' => 'blog', 'controller' => 'posts', 'action' => 'index', 'admin' => false));?></li>
            <li class="<?php echo $this->request->controller === 'pages' ? 'active': '';?>"><?php echo $this->Html->link('About', array('plugin' => null, 'controller' => 'pages', 'action' => 'display', 'about', 'admin' => false));?></li>
            <li class="<?php echo $this->request->controller === 'contacts' ? 'active': '';?>"><?php echo $this->Html->link('Contact', array('plugin' => 'contact_form', 'controller' => 'contacts', 'action' => 'add', 'admin' => false));?></li>
        </ul>
        <ul class="nav pull-right">
            <li class="<?php echo $this->request->action === 'archives' ? 'active': '';?>"><?php echo $this->Html->link('Archives', array('plugin' => 'blog', 'controller' => 'posts', 'action' => 'archives', 'admin' => false));?></li>
        </ul>
    </div>
</div>
<div class="clearfix">&nbsp;</div>