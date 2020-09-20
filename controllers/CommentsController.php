<?php

class CommentsController{
    public function  addComment($comment,$user,$date){
        $data = file_get_contents('../database/comments.json');
        $data = json_decode($data,true);
        $msj = "";

        $addComment = array(

            'date' => $date,
            'username' => $user,
            'comment' => $comment,


        );
        $data[] = $addComment;

        if(file_put_contents('../database/comments.json',  json_encode($data, JSON_PRETTY_PRINT))){
            echo "01";
        }else{
            echo "02";
        }

    }
}