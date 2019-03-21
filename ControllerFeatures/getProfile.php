<?php
    function getProfile(){
        $query = "SELECT * FROM user WHERE UserID ='".$_SESSION['Visiting']."' ";
        $result = db_connect()->prepare($query);
        $result->execute();

        foreach($result as $detail){
            if(!empty($detail)){
                return json_encode($detail);
                /*$userData = new userProfile($detail[0],$detail[1],$detail[2],$detail[3],$detail[4],$detail[5],
                $detail[6],$detail[7],$detail[8],$detail[9],$detail[10],$detail[11]); 
                return $userData;*/
            } 
            else return null;
        }
        $result=null;
    }
?>