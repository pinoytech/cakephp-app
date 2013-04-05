<li class="dropdown active">
    <?php echo $this->Html->link("{$this->Component->gravatar($this->Session->read('Auth.User.email'), 30, array('class' => 'img-rounded'))} <b class='caret'></b>", '/sites', array('data-toggle' => 'dropdown', 'class' => 'dropdown-toggle', 'data-target' => '#', 'role' => 'button', 'escape' => false));?>
    <ul class="dropdown-menu" role="menu">
        <li><?php echo $this->Html->link('Manage Blogs', array('controller' => 'blogs', 'action' => 'index', 'admin' => true));?></li>
        <li><?php echo $this->Html->link('Add Post', array('controller' => 'blogs', 'action' => 'add', 'admin' => true));?></li>
        <li class="divider"></li>
        <li><?php echo $this->Html->link('Settings', '/users/edit');?></li>
        <li><?php echo $this->Html->link('Logout', '/users/logout');?></li>
    </ul>
</li>