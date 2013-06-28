<div class="offset2 span8">
    <div class="well">
        <?php echo $this->Session->flash(); ?>
        <?php echo $this->Form->create('User'); ?>
            <legend><?php echo __('Please enter your username and password'); ?></legend>
            <?php
                echo $this->Form->input('email');
                echo $this->Form->input('password');
                echo $this->Form->submit('Login', array('class' => 'btn'));
            ?>
        <?php echo $this->Form->end(); ?>
        <div class="clearfix"></div>
        <?php echo $this->Html->link('Forgot Password?', "/users/forgot_password"); ?>
    </div>
</div>