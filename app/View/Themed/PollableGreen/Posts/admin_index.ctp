<div class="offset1 span10 margin-bottom">
    <?php foreach ($posts as $post):?>
        <?php debug($post);?>
        <h3><?php echo $this->Html->link($post['Post']['title'], array('controller' => 'posts', 'action' => 'edit', $post['Post']['id'], 'admin' => true)
        );?></h3>
    <?php endforeach; ?>
    <?php echo $this->element('blog/pagination');?>
</div>