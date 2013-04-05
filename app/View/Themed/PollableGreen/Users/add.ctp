<div class="offset1 span10">
  <div class="row">
    <div class="span8">
      <?php echo $this->Session->flash();?>
      <?php echo $this->Form->create('User', array('inputDefaults' => array(
              'format' => array('before', 'label', 'between', 'input', 'error', 'after'),
              'div' => array('class' => 'control-group'),
              'label' => array('class' => 'control-label'),
              'between' => '<div class="controls">',
              'after' => '</div>',
              'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline'))
              ))); ?>
      <legend><?php echo __('Sign Up'); ?></legend>
      <?php
          echo $this->Form->input('email');
          echo $this->Form->input('password');
          // echo $this->Form->input('role', array(
              //'options' => array('admin' => 'Admin', 'author' => 'Author')
          // ));
      ?>
      <?php echo $this->Form->submit(__('Submit'), array('class' => 'btn')); ?>
      <?php echo $this->Form->end(); ?>
      <?php echo $this->Html->link('Forgot Password?', "/users/forgot_password"); ?>
    </div>
  </div>
</div>