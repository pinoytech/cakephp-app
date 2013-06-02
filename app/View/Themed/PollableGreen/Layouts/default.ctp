<!DOCTYPE html>
<html lang="en">
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>Thorpe Obazee <?php echo isset($post)? "&dash; {$post['Post']['title']}" : '';?></title>
<?php $this->start('header');?>
<meta property="og:site_name" content="Thorpe Obazee"/>
<meta property="og:type" content="blog"/>
<?php $this->end();?>
<?php echo $this->fetch('header');?>
<?php echo $this->Html->css('bootstrap.min'); ?>
<?php echo $this->Html->css('font-awesome.min'); ?>
<?php echo $this->Html->css('font-awesome-ie7.min'); ?>
<?php echo $this->Html->css('prism'); ?>
<?php echo $this->Html->css('http://fonts.googleapis.com/css?family=Alef:400,700'); ?>
<?php echo $this->Html->css('style'); ?>
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
<!-- end .container_16 -->
<script>
$(function(){
    $('a').tooltip();
});
</script>
<?php echo $this->Html->script('bootstrap.min'); ?>
<?php echo $this->Html->script('prism'); ?>
</body>
</html>