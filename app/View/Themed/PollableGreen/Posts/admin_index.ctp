<div class="offset2 span8 margin-bottom">
    <?php foreach ($posts as $post):?>
        <h3><?php echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'edit', $post['Post']['id'], 'admin' => true)
        );?></h3>
    <?php endforeach; ?>
    <?php echo $this->element('blog/pagination');?>
</div>