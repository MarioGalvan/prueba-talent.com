<?php
require_once  '../controllers/CommentsController.php';
session_start();
$user = $_SESSION["user"];
$comments = new CommentsController();
$date = date('Y-m-d');
$comment = $_POST["comment"];

return $comments->addComment($comment,$user,$date);
