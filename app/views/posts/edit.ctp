<h2 class="blog-post-title">Edit Post</h2>

<?php
echo $form->create('Post', array('action' => 'edit'));
echo $form->input('title', array('class' => 'form-control'));
echo $form->input('body', array('class' => 'form-control'));
echo $form->input('id', array('type' => 'hidden'));
echo "<br />";
echo $form->end(array('label' => 'Edit post', 'class' => 'btn btn-md btn-success'));

?>