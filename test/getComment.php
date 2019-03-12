<?php
    function getComment($PostID){
        $query = "SELECT CONCAT(b.NamaDepan,' ',b.NamaBelakang) 'NamaLengkap', a.CommentID, a.PostID, a.CreatorID, a.DateCreated, a.Content FROM comment a, user b
        WHERE a.PostID='".$PostID."' AND a.CreatorID = b.UserID;";

        $result = db_connect()->query($query);

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