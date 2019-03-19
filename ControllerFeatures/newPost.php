<?php
    function newPost($content){
            $query = "SELECT MAX(PostID) '' FROM POST;";
            $result = db_connect()->prepare($query);
            $result->execute();
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
?>
