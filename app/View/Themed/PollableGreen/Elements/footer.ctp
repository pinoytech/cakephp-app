<div class="offset1 span10 navbar navbar-inverse footer">
    <div class="navbar-inner">
        <div class="container">
            <ul class='nav'>
                <li><?php echo $this->Html->link('Made with Love', 'http://thorpe-obazee.com/');?></li>
            </ul>
            <ul class='nav pull-right'>
                <li><a href="javascript:void(0)">Memory Usage: <?php echo $this->Number->toReadableSize(memory_get_usage());?></a></li>
                <li><?php // echo $this->Html->link($this->Html->image('cake.power.gif'), 'http://cakephp.org/', array('escape' => false));?></li>
            </ul>
        </div>
    </div>
</div>
<script type="text/javascript">
(function() {
  var dgh = document.createElement("script"); dgh.type = "text/javascript";dgh.async = true;
  dgh.src = ('https:' == document.location.protocol ? 'https://' : 'http://') + 'pollable.org/visitors/tracker.js?tracker=vsHHhIAtSYGxDvS';
  var s = document.getElementsByTagName("script")[0]; s.parentNode.insertBefore(dgh, s);
})();
</script>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-661176-29']);
  _gaq.push(['_setDomainName', 'thorpe-obazee.com']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>