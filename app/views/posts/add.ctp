<h2 class="blog-post-title">Add a post</h2>
<?php
echo $form->create('Post', array('action' => 'add'));
echo $form->input('title', array('class' => 'form-control'));
echo $form->input('body', array('class' => 'form-control'));
echo $form->end(array('label' => 'Create a Post', 'class' => 'btn btn-md btn-success'));
?>