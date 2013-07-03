<?php $this->startIfEmpty('header');?>
<title><?php echo $post['Post']['title'];?></title>
<?php $this->end('end');?>
<?php $this->append('header');?>
<meta property="og:image" content="http://www.gravatar.com/avatar/2461e49b79f7b1f72273bad5d06f2b3d?s=75"/>
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
      <div class="alert alert-info">
        <!-- AddThis Button BEGIN -->
        <div class="addthis_toolbox addthis_default_style">
        <a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
        <a class="addthis_button_tweet"></a>
        <a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
        <a class="addthis_button_linkedin_counter"></a>
        </div>
        <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-51d1008822f2ffd3"></script>
        <!-- AddThis Button END -->
      </div>
      <?php echo $post['Post']['body'];?>
    </div>
  </div>
</div>
<div class="offset2 span8 margin-bottom margin-bottom post-footer">
  <small class="muted">DISCLAIMER:</small>
  <small class="muted">The thoughts and opinions expressed here are mine alone, and are not necessarily shared by any other living person.</small>
</div>