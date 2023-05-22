<h2><?php echo $post['Post']['title']; ?></h2>
<p> <?php echo $post['Post']['body']; ?></p>

<p><small>
        Create on: <?php echo $post['Post']['created'] ?>
        Last modified on: <?php echo $post['Post']['modified'] ?>
    </small></p>

<br>
<p>
    <?php echo $html->link('Back', array('action' => 'index')) ?>
    <?php echo $html->link('Edit', array('action' => 'edit', $post['Post']['id'])) ?>
    <?php echo $html->link('Delete', array('action' => 'delete', $post['Post']['id']), null, 'Are your sure you want delete this post?') ?>
</p>