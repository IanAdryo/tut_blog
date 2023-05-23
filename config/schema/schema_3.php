<?php 
/* TutBlog2 schema generated on: 2023-05-23 20:32:39 : 1684866759*/
class TutBlog2Schema extends CakeSchema {
	var $name = 'TutBlog2';

	var $file = 'schema_3.php';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $users = array(
		'name' => array('type' => 'string', 'null' => false, 'default' => NULL, 'length' => 50)
	);
}
?>