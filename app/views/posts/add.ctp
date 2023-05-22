<h2>Add a post</h2>
<?php 
echo $form->create('Post', array('action' => 'add'));
echo $form->input('title');
echo $form->input('body');
echo $form->end('Create a Post');
?>