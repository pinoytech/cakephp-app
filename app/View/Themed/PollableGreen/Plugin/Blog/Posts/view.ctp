<?php $this->startIfEmpty('header');?>
<title><?php echo $post['Post']['title'];?></title>
<?php $this->end('end');?>
<?php $this->append('header');?>
<meta property="og:title" content="<?php echo $post['Post']['title'];?>"/>
<meta property="og:url" content="<?php echo Router::url(array(
    'controller' => 'posts',
    'action' => 'view',
    'year' => $post['Post']['year'],
    'month' => $post['Post']['month'],
    'day' => $post['Post']['day'],
    'slug' => $post['Post']['slug']
));?>"/>
<?php $this->end();?>
<div class="offset2 span8 margin-bottom body">
  <div class="row-fluid">
    <div class="span12">
      <h2><?php echo $post['Post']['title'];?></h2>
      <p class="muted"><?php echo $post['Post']['created'];?></p>
      <?php echo $post['Post']['body'];?>
    </div>
  </div>
</div>
<div class="offset2 span8 margin-bottom margin-bottom post-footer">
  <small class="muted">DISCLAIMER:</small>
  <small class="muted">The thoughts and opinions expressed here are mine alone, and are not necessarily shared by any other living person.</small>
</div>