<div class="offset1 span10 max-height">
    <div class="row">
        <div class="span3">
            <h3 class="pull-right">Reset Password</h3>
            <div class="clearfix"></div>
            <p class="muted pull-right">Change your user password</p>
        </div>
        <div class="span4 left-bordered">
            <?php echo $this->Form->create('User', array('inputDefaults' => array(
                    'format' => array('before', 'label', 'between', 'input', 'error', 'after'),
                    'div' => array('class' => 'control-group'),
                    'label' => array('class' => 'control-label'),
                    'between' => '<div class="controls">',
                    'after' => '</div>',
                    'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline'))
                    ))); ?>
            <?php echo $this->Session->flash();?>
            <?php echo $this->Form->input('password', array('label' => '', 'class' => 'span4'));?>
            <?php echo $this->Form->input('confirm_password', array('type' => 'password', 'label' => '', 'class' => 'span5'));?>
            <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn')); ?>
            <?php echo $this->Form->end(); ?>
        </div>
    </div>
</div>