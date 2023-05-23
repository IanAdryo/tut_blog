<?php
	
	echo $rss->header(); //rss is a helper 

	$channel = $rss->channel(array(), $channelData, $content_for_layout);// prams = setting, data variable, our content

	echo $rss->document(array(), $channel);

?>











<?php
// echo $rss->header();

// if (!isset($channel)) {
// 	$channel = array();
// }
// if (!isset($channel['title'])) {
// 	$channel['title'] = $title_for_layout;
// }

// echo $rss->document(
// 	$rss->channel(
// 		array(), $channel, $content_for_layout
// 	)
// );

?>
