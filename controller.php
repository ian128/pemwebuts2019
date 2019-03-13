<?php
    include "include/db_connection.php";
    include "model/model.php";
    include "test/getComment.php";

    if(!isset($_SESSION)) session_start();

    if(isset($_POST['login'])){
        $userData=login($_POST['login']['username'],$_POST['login']['password']);
        echo $userData;
    }

	function login($email,$password){
        $query = "SELECT * FROM user WHERE email='".$email."' AND MD5(CONCAT('".$password."',salt))=HashPass;";
        $result = db_connect()->query($query);
        foreach($result as $detail){
            if(!empty($detail)){
                $_SESSION['UserID']=$detail[0];
                return json_encode($detail);
                /*$userData = new userProfile($detail[0],$detail[1],$detail[2],$detail[3],$detail[4],$detail[5],
                $detail[6],$detail[7],$detail[8],$detail[9],$detail[10],$detail[11]); 
                return $userData;*/
            } 
            else return null;
        }
    }

    if(isset($_POST['getPost'])){
        echo getPost();
    }

    function getPost(){
        $query= "SELECT * FROM post WHERE CreatorID = '".$_SESSION['UserID']."' ORDER BY DateCreated DESC;";
        $result = db_connect()->query($query);
        $temp= array();
        foreach($result as $detail){
            $key=(string) $detail[0]; //the post id
            $detail["comments"]=getComment($key);
            array_push($temp,$detail);
        }

        //get comments and who comments
        return json_encode($temp);
    }

    if(isset($_POST['NewPost'])){
        echo newPost($_POST['NewPost']);
    }

    function newPost($content){
        $query = "SELECT MAX(PostID) '' FROM POST;";
        $result = db_connect()->query($query);
        $newKey;
        foreach($result as $detail){
            $newKey=(string) $detail[""]+1;
        }
        $newKey = (string) $newKey;

        $query="INSERT INTO post VALUES($newKey,'".$_SESSION['UserID']."',CURRENT_TIMESTAMP,'".$content."');";

        try{   
            $result = db_connect()->query($query);
            echo '1';
        } catch(Exception $e) {
            echo '0';
        }

    }

    if(isset($_POST['addComment'])){
       echo newComment($_POST['addComment']);
    }

    function newComment($content){
        $query = "SELECT MAX(CommentID) '' FROM comment;";
        $result = db_connect()->query($query);
        $newKey;
        foreach($result as $detail){
            $newKey=(string) $detail[""]+1;
        }
        $newKey = (string) $newKey;

        $query="INSERT INTO comment VALUES($newKey,'".$content['PostID']."','".$_SESSION['UserID']."',CURRENT_TIMESTAMP,'".$content['content']."');";
    
        try{   
            $result = db_connect()->query($query);
            echo '1';
        } catch(Exception $e) {
            echo '0';
        }

    }


?>