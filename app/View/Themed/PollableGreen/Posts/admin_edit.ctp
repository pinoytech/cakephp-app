<div class="offset1 span10">
    <?php echo $this->Form->create('Post', array(
            'action' => 'edit',
            'inputDefaults' => array(
                'format' => array('before', 'label', 'between', 'input', 'error', 'after'),
                'div' => array('class' => 'control-group'),
                'label' => array('class' => 'control-label'),
                'between' => '<div class="controls">',
                'after' => '</div>',
                'error' => array('attributes' => array('wrap' => 'span', 'class' => 'help-inline'))
                ))); ?>
    <?php echo $this->Session->flash();?>
    <?php echo $this->Form->input('id', array('type' => 'hidden'));?>
    <?php echo $this->Form->input('title', array('class' => 'span8'));?>
    <div id="toolbar" style="display: none;">
        <a data-wysihtml5-command="bold" title="CTRL+B">bold</a> |
        <a data-wysihtml5-command="italic" title="CTRL+I">italic</a> |
        <a data-wysihtml5-command="createLink">insert link</a> |
        <a data-wysihtml5-command="insertImage">insert image</a> |
        <a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h1">h1</a> |
        <a data-wysihtml5-command="formatBlock" data-wysihtml5-command-value="h2">h2</a> |
        <a data-wysihtml5-command="insertUnorderedList">insertUnorderedList</a> |
        <a data-wysihtml5-command="insertOrderedList">insertOrderedList</a>
    <a data-wysihtml5-action="change_view">switch to html view</a>

    <div data-wysihtml5-dialog="createLink" style="display: none;">
      <label>
        Link:
        <input data-wysihtml5-dialog-field="href" value="http://">
      </label>
      <a data-wysihtml5-dialog-action="save">OK</a>&nbsp;<a data-wysihtml5-dialog-action="cancel">Cancel</a>
    </div>

    <div data-wysihtml5-dialog="insertImage" style="display: none;">
      <label>
        Image:
        <input data-wysihtml5-dialog-field="src" value="http://">
      </label>
      <label>
        Align:
        <select data-wysihtml5-dialog-field="className">
          <option value="">default</option>
          <option value="wysiwyg-float-left">left</option>
          <option value="wysiwyg-float-right">right</option>
        </select>
      </label>
      <a data-wysihtml5-dialog-action="save">OK</a>&nbsp;<a data-wysihtml5-dialog-action="cancel">Cancel</a>
    </div>

    </div>
    <?php echo $this->Form->input('body', array('id' => 'textarea', 'rows' => '25', 'class' => 'span8', 'label' => false));?>
    <?php echo $this->Form->submit(__('Post'), array('class' => 'btn'));?>
    <?php echo $this->Form->end();?>
</div>
<?php echo $this->Html->script('wys/advanced'); ?>
<?php echo $this->Html->script('wys/wysihtml5-0.3.0.min'); ?>
<?php echo $this->Html->script('wys/wysscript'); ?>