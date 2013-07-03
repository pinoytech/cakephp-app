<div class="offset2 span8">
    <?php echo $this->Form->create('Post', array(
            'inputDefaults' => array(
                'format' => array('before', 'label', 'between', 'input', 'error', 'after'),
                'div' => array('class' => 'control-group'),
                'label' => array('class' => 'control-label'),
                'between' => '<div class="controls">',
                'after' => '</div>',
                'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline'))
                ))); ?>
    <?php echo $this->Session->flash();?>
    <?php echo $this->Form->input('title', array('class' => 'span8'));?>
    <?php
      echo $this->Form->input('status', array(
        'type' => 'select',
        'class' => 'span8',
        'options' => array(
          'draft' => 'Draft',
          'published' => 'Published'
        ),
        'value' => 'draft'
      ));
    ?>
    <?php echo $this->Form->input('textile', array('id' => 'textarea', 'rows' => '25', 'class' => 'span8', 'label' => false));?>
    <?php echo $this->Form->submit(__('Post'), array('class' => 'btn'));?>
    <?php echo $this->Form->end();?>
</div>