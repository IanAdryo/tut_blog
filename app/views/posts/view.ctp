<h2 class="blog-post-title"><?php echo $post['Post']['title']; ?></h2>
<p> <?php echo $post['Post']['body']; ?></p>

<p><small>
        Create on: <?php echo $post['Post']['created'] ?>
        Last modified on: <?php echo $post['Post']['modified'] ?>
    </small></p>

<br>
<p>
    <?php echo $html->link('Back', array('action' => 'index'), array('class' => 'btn btn-sm btn-default')) ?>
    <?php echo $html->link('Edit', array('action' => 'edit', $post['Post']['id']), array('class' => 'btn btn-sm btn-default')) ?>
    <?php echo $html->link('Delete', array('action' => 'delete', $post['Post']['id']), array('class' => 'btn btn-sm btn-default'), 'Are your sure you want delete this post?') ?>
</p>