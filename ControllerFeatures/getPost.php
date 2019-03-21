<?php
    function getPost(){
        $query= "SELECT a.PostID, a.CreatorID, a.DateCreated, a.content, CONCAT(b.NamaDepan,' ',b.NamaBelakang) 'Name' FROM post a, user b WHERE a.CreatorID = '".$_SESSION['Visiting']."' AND a.CreatorID = b.UserID ORDER BY DateCreated DESC;";
        $result = db_connect()->prepare($query);
        $result->execute();
        $temp= array();
        foreach($result as $detail){
            $key=(string) $detail[0]; //the post id

            //create and link array of comments of this post
            $detail["comments"]=getComment($key);
            unset($detail[4]);
            array_push($temp,$detail);
        }

        //get comments and who comments
        return json_encode($temp);
    }


    function getComment($PostID){
        $query = "SELECT CONCAT(b.NamaDepan,' ',b.NamaBelakang) 'NamaLengkap', a.CommentID, a.PostID, a.CreatorID, a.DateCreated, a.Content FROM comment a, user b
        WHERE a.PostID='".$PostID."' AND a.CreatorID = b.UserID ORDER BY DateCreated ASC ;";

        $result = db_connect()->prepare($query);
        $result->execute();

        $data=[];

        foreach($result as $detail){
            //buang entry json yang tidak diperlukan
            unset($detail[0]);
            unset($detail[1]);
            unset($detail[2]);
            unset($detail[3]);
            unset($detail[4]);
            unset($detail[5]);
            array_push($data,$detail);
        }

        return $data;
    }
?>