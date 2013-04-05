<div class="navbar navbar-inverse top-navigation">
    <div class="navbar-inner">
        <div class="container">
            <div class="row">
                <div class="offset1 span10">
                    <!--nocache-->
                    <ul class="nav pull-right">
                        <?php if ($this->Session->read('Auth.User')):?>
                            <?php echo $this->element('top-navigation-user-menu');?>
                        <?php else: ?>
                            <li><?php echo $this->Html->link('Sign In', array('controller' => 'users', 'action' => 'login'));?></li>
                        <?php endif;?>
                    </ul>
                    <!--/nocache-->
                </div>
            </div>
        </div>
    </div>
</div>