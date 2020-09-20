<?php
error_reporting(0);
$data = file_get_contents('database/comments.json');
$data = json_decode($data,true);

echo '<h3 style="margin-left: 128px; margin-top:20px;">Message Posting View</h3>';
echo '<form method="GET"><div class="container">
<input style="display: inline-block;" name="phrase" id="searchcomments" class="form-control col-3" placeholder="Search" type="text"/>
<input style="display: inline-block;" name="date" class="form-control col-3" type="date"/>
<input type="submit" class="btn btn-dark" value="Search">
</div></form>';


if(isset($_GET["phrase"]) || isset($_GET["date"])){

    foreach ($data as $comment) {
        if((strpos($comment["comment"],$_GET["phrase"])!== false) || $comment["date"]==$_GET["date"]){
            echo '<div  style="margin-top:20px;"   class="container">';
            echo '<ul  style="margin-top:5px;  padding: 5px" class="list-group">';
            echo '<li class="list-group-item disabled">';
            echo '<strong> <a style="text-decoration: none; color:black;" href="#">'.$comment['date'].'</a></strong>';
            echo '<br><br>';
            echo '<a style="text-decoration: none; color:black;" href="#">'.$comment['comment'].'</a>';
            echo '<br><br>';
            echo '<a style="text-decoration: none; color:black;" href="#">By: <strong>'.$comment['username'].'</strong></a>';
            echo '</li>';
            echo '</ul>';
            echo '</div>';
        }

    }



}else{
    foreach ($data as $comment) {
        echo '<div  style="margin-top:20px;"   class="container">';
        echo '<ul  style="margin-top:5px;  padding: 5px" class="list-group">';
        echo '<li class="list-group-item disabled">';
        echo '<strong> <a style="text-decoration: none; color:black;" href="#">'.$comment['date'].'</a></strong>';
        echo '<br><br>';
        echo '<a style="text-decoration: none; color:black;" href="#">'.$comment['comment'].'</a>';
        echo '<br><br>';
        echo '<a style="text-decoration: none; color:black;" href="#">By: <strong>'.$comment['username'].'</strong></a>';
        echo '</li>';
        echo '</ul>';
        echo '</div>';
    }

}





?>



<div style="margin-top: 20px" class="container comment">
    <textarea placeholder="write a comment" class="form-control" id="writeacomment" rows="3"></textarea>
    <button id="btnWriteAComment" style="margin-top: 20px; margin-left: 90%; margin-bottom: 20px;" type="button" class="btn btn-dark btn-lg">Submit</button>
</div>















