<?php
    include "include/db_connection.php";
    include "ControllerFeatures/getPost.php";
    include "ControllerFeatures/Login.php";
    include "ControllerFeatures/newPost.php";
    include "ControllerFeatures/newComment.php";
    include "ControllerFeatures/getFriends.php";
    include "ControllerFeatures/getProfile.php";

    if(!isset($_SESSION)) session_start();

    if(isset($_POST['login'])){
        $data=login($_POST['login']['username'],$_POST['login']['password']);
        if($data != null){
            echo $data;
        }else{
            echo -1;
        }
    }

    if(isset($_POST['getProfile'])){
        echo getProfile();
    }

    if(isset($_POST['MyProfile'])){
        $_SESSION['Visiting']=$_SESSION['UserID'];
    }

    if(isset($_POST['VisitFriend'])){
        $_SESSION['Visiting']=$_POST['VisitFriend'];
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

    if(isset($_POST['getFriends'])){
        echo getFriends();
    }

?>