<div class="pagination">
    <ul>
        <?php echo $this->Paginator->first('&laquo;', array('tag' => 'li', 'escape' => false)); ?>
        <?php echo $this->Paginator->prev('&larr; ' . __('Previous'), array(
            'tag' => 'li',
            'class' => 'prev',
            'escape' => false,
        ),
        $this->Paginator->link('&larr; ' . __('Previous'), array(), array('escape' => false)),
        array(
            'tag' => 'li',
            'escape' => false,
            'class' => 'prev disabled',
        )); ?>

        <?php
        echo $this->Paginator->numbers(array(
            'tag' => 'li',
            'separator' => '',
            'currentClass' => 'disabled',
            'currentTag' => 'a'
        ));
        ?>
        <?php echo $this->Paginator->next(__('Next') . ' &rarr;', array(
            'tag' => 'li',
            'class' => 'next',
            'escape' => false,
        ),
        $this->Paginator->link(__('Next') . ' &rarr;', array(), array('escape' => false)),
        array(
            'tag' => 'li',
            'escape' => false,
            'class' => 'next disabled',
        )); ?>

        <?php echo str_replace('<>', '', $this->Html->tag('li', $this->Paginator->last('&raquo;', array(
            'tag' => null,
            'escape' => false
        )), array(
            'class' => 'next',
        ))); ?>

    </ul>
</div>