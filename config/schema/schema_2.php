<?php 
/* TutBlog2 schema generated on: 2023-05-23 20:24:43 : 1684866283*/
class TutBlog2Schema extends CakeSchema {
	var $name = 'TutBlog2';

	var $file = 'schema_2.php';

	function before($event = array()) {
		return true;
	}

	function after($event = array()) {
	}

	var $users = array(
		'id' => array('type' => 'integer', 'null' => false, 'key' => 'primary'),
		'firstname' => array('type' => 'string', 'default' => null, 'null' => false, 'length' => '50'),
		'password' => array('type' => 'string', 'default' => null, 'null' => false, 'length' => '40'),
	);
}
?>