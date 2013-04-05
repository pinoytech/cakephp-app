<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Thorpe Obazee <?php echo isset($post)? "&dash; {$post['Post']['title']}" : '';?></title>
<?php echo $this->Html->css('bootstrap.min'); ?>
<?php echo $this->Html->css('http://fonts.googleapis.com/css?family=Sanchez:400italic,400'); ?>
<?php echo $this->Html->css('style'); ?>
<meta property="og:site_name" content="Pollable Stats"/>
<?php echo $this->Html->script('jquery.min'); ?>
</head>
<body>
<!-- end .container_12 -->
<?php echo $this->element('top-navigation');?>
<div class="container">
    <div class="row">
        <?php echo $this->element('navigation', array());?>
        <div class="clearfix">&nbsp;</div>
        <?php echo $this->fetch('content'); ?>
        <div class="clearfix">&nbsp;</div>       
        <?php echo $this->element('footer', array());?>
    </div>
</div>
<?php echo $this->element('sql_dump'); ?>
<!-- end .container_16 -->
<script>
$(function(){
    $('a').tooltip();
});
</script>
<?php echo $this->Html->script('bootstrap.min'); ?>
</body>
</html>