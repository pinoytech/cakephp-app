<?php if ($this->Session->read('Auth.User')): ?>
    <div class="offset2 span8 header">
        <div class="well">
            <div class="media">
                <?php echo $this->Html->link($this->Component->gravatar($this->Session->read('Auth.User.email'), 75, array('class' => 'media-object img-rounded')), array('controller' => 'blogs', 'action' => 'index'), array('escape' => false, 'class' => 'pull-left'));?>
                <div class="media-body">
                    <h3 class="media-heading"><?php echo $this->Session->read('Auth.User.email');?></h3>
                </div>
            </div>
        </div>
    </div>
<?php else: ?>
    <div class="offset2 span8 header">
        <h1><?php echo $this->Html->link('Thorpe Obazee', '/', array('escape' => false));?></h1>
    </div>
<?php endif;?>
<div class="clearfix">&nbsp;</div>
<?php echo $this->element('pages/navigation', array());?>