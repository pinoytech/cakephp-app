<div class="offset2 span8 margin-bottom body">
    <?php foreach ($posts as $key => $post):?>
        <h3><?php echo $this->Html->link($post['Post']['title'],
        "/{$post[0]['year']}/{$post[0]['month']}/{$post[0]['day']}/{$post['Post']['slug']}"
        );?></h3>
        <?php echo $post['Post']['body'];?>
        <?php echo $key;?>
        <?php if ($key < count($posts) - 1):?>
        <div class="progress divider">
            <div class="bar bar-info progress-striped active" style="width: 15%;"></div>
            <div class="bar bar-success progress-striped active" style="width: 35%;"></div>
            <div class="bar bar-warning progress-striped active" style="width: 20%;"></div>
            <div class="bar bar-danger progress-striped active" style="width: 10%;"></div>
        </div>
        <?php endif;?>
    <?php endforeach; ?>
    <?php echo $this->element('blog/pagination');?>
</div>