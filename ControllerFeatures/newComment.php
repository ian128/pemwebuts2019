<?php
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