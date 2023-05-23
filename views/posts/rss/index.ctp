<?php
    
    $channelData = array(
        'title' => 'Our Current Post',
        'link' => $html->url(array(
            'controller' => 'post',
            'action' => 'index',
            'ext' => 'rss'
        )),
        'description' => 'View the most recent post from our cakephp blog',
        'language' => 'en-us'
    );
    
    $this->set('channelData', $channelData);

    foreach ($posts as $post) {
        
        echo $rss->item(
            array(),
            array(
                'title' => $post['Post']['title'],
                'link' => array(
                    'controller' => 'posts',
                    'action' => 'view', $post['Post']['id']
                ),
                'guid' => array(
                    'controller' => 'posts',
                    'action' => 'view', $post['Post']['id']
                ),
                'description' => strip_tags($post['Post']['body']),
                'pubDate' => $post['Post']['created']
            )
        );
    }
?>
