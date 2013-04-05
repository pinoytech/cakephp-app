<div class="offset1 span10">
    <div class="well">
        <h4>Settings</h4>
        <?php echo $this->Form->create('User', array('action' => 'edit',
            'inputDefaults' => array(
                'format' => array('before', 'label', 'between', 'input', 'error', 'after'),
                'div' => array('class' => 'control-group'),
                'label' => array('class' => 'control-label'),
                'between' => '<div class="controls">',
                'after' => '</div>',
                'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline'))
                ))); ?>
        <?php
            echo $this->Form->input('email');
            echo $this->Form->input('password');
            echo $this->Form->input('id', array('type' => 'hidden'));
            echo $this->Form->submit('Update', array('class' => 'button'));
            echo $this->Form->end();
        ?>
    </div>
</div>