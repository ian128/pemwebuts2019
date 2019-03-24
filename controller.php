<?php
    include "include/db_connection.php";
    include "ControllerFeatures/getPost.php";
    include "ControllerFeatures/Login.php";
    include "ControllerFeatures/newPost.php";
    include "ControllerFeatures/newComment.php";
    include "ControllerFeatures/getFriends.php";
    include "ControllerFeatures/getProfile.php";
    include "ControllerFeatures/createUser.php";

    if(!isset($_SESSION)) session_start();

    if(isset($_POST["signUp"])){
        if($_POST["sex"] == "male") $_POST["sex"]="L";
        else $_POST["sex"] = "P";
        $result=createUser($_POST['firstName'],$_POST['lastName'],
        $_POST["sex"],$_POST['birthDate'],$_POST['birthPlace'],
        $_POST['city'],$_POST['phone'],$_POST['email'],$_POST['firstName'],$_POST['pass'],
        $_POST['userName']);
        if($result == true){
            header("location:view/login");
        }else{
            header("location:view/signup");
        }

    }
    
    if(isset($_POST['login'])){
        $data=login($_POST['login']['username'],$_POST['login']['password']);
        if($data != null){
            echo true;
        }else{
            echo false;
        }
    }

    if(isset($_POST['logout'])){
        session_destroy();
        return "1";
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