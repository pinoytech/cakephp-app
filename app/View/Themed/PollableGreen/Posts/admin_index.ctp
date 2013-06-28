<div class="offset2 span8 margin-bottom">
  <table class="table">
    <tr><td>Title</td></tr>
    <?php foreach ($posts as $post):?>
      <tr>
        <td>
          <?php
            echo $this->Html->link($post['Post']['title'], array(
              'controller' => 'posts',
              'action' => 'edit',
              $post['Post']['id'],
              'admin' => true
            ));
          ?>
        </td>
      </tr>
    <?php endforeach; ?>
  </table>
  <?php echo $this->element('blog/pagination');?>
</div>