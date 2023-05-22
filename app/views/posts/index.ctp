<h2>View all post's</h2>
<table>
    <tr>
        <th>Title</th>
        <th>Body</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($posts as $post) : ?>

        <tr>
            <td><?php echo $html->link($post['Post']['title'], array('action' => 'view', $post['Post']['id'])); ?></td>
            <td><?php echo $post['Post']['body']; ?></td>
            <td>
                <?php echo $html->link('Edit', array('action' => 'edit', $post['Post']['id'])) ?>
                <?php echo $html->link('Delete', array('action' => 'delete', $post['Post']['id']), null, 'Are your sure you want delete this post?') ?>
            </td>
        </tr>

    <?php endforeach; ?>
</table>

<?php echo $html->link('Add a Post', array('action' => 'add')) ?>