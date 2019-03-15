<?php
    include "include/db_connection.php";
    include "model/model.php";
    include "ControllerFeatures/getPost.php";
    include "ControllerFeatures/Login.php";
    include "ControllerFeatures/newPost.php";
    include "ControllerFeatures/newComment.php";

    if(!isset($_SESSION)) session_start();

    if(isset($_POST['login'])){
        echo login($_POST['login']['username'],$_POST['login']['password']);
    }

    if(isset($_POST['getPost'])){
        echo getPost();
    }

    if(isset($_POST['NewPost'])){
        echo newPost($_POST['NewPost']);
    }

    if(isset($_POST['addComment'])){
       echo newComment($_POST['addComment']);
    }

?>