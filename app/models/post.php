<?php
    
    class Post extends AppModel {

        var $name = 'Post';

        var $validate = array(

            'title' => array(
                'title_must_not_be_blank' => array(
                    'rule' => 'notEmpty',
                    'message' => 'This post is missing title'
                ),
                'title_must_be_unique' => array(
                    'rule' => 'isUnique',
                    'message' => 'The post with this title alredy exists!'
                )
            ),

            'body' => array(
                'body_must_not_be_blank' => array(
                    'rule' => 'notEmpty',
                    'message' => 'This post is missing its body'
                )
            )
        );
    }
    

?>
