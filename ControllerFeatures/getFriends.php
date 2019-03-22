<?php
    function getFriends(){
        $key= $_SESSION['UserID'];
        $query = "SELECT UserID, CONCAT(NamaDepan,' ',NamaBelakang) 'NamaLengkap' FROM user WHERE UserID NOT LIKE '$key' 
        AND UserID NOT LIKE '0999999999' ORDER BY 2 ASC";
        $result = db_connect()->prepare($query);
        $result->execute();
        $temp= array();
        foreach($result as $detail){
            array_push($temp,$detail);
        }
        return json_encode($temp);
    }
?>