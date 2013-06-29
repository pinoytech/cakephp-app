<div class="offset2 span8 margin-bottom">
    <div class="row">
        <div class="span8">
            <h2>I would like to hear from you!</h2>
            <?php echo $this->Session->flash();?>
            <?php
            echo $this->Form->create('Contact', array(
                'novalidate' => true,
                'inputDefaults' => array(
                    'format' => array('before', 'label', 'between', 'input', 'error', 'after'),
                    'div' => array('class' => 'control-group'),
                    'label' => array('class' => 'control-label'),
                    'between' => '<div class="controls">',
                    'after' => '</div>',
                    'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline'))
                )));
            echo $this->Form->input('name', array('class' => 'span3'));
            echo $this->Form->input('email', array('class' => 'span3'));
            echo $this->Form->input('details', array('class' => 'span5'));
            echo $this->Form->submit('Contact Me!', array('class' => 'btn'));
            echo $this->Form->end();
            ?>
        </div>
    </div>
</div>