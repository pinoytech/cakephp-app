<div class="offset1 span10 margin-bottom">
    <?php foreach ($posts as $post):?>
        <h3><?php echo $this->Html->link($post['Post']['title'],
        "/{$post[0]['year']}/{$post[0]['month']}/{$post[0]['day']}/{$post['Post']['slug']}"
        );?></h3>
        <?php echo $post['Post']['body'];?>
    <?php endforeach; ?>
    <?php echo $this->element('blog/pagination');?>
</div>