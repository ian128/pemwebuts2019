<?php
    function login($UserID,$password){
        $UserID = mysqli_real_escape_string(db_connect(), $UserID);
        $password = mysqli_real_escape_string(db_connect(), $password);
        $md5function="MD5(CONCAT('".$password."',salt))";

      
        $query = "SELECT * FROM user WHERE UserID='".$UserID."' AND HashPass=$md5function;";

        $result = db_connect()->prepare($query);
        $result->execute();

        foreach($result as $detail){
            if(!empty($detail)){
                $_SESSION['UserID']=$detail[0];
                $_SESSION['Visiting']=$_SESSION['UserID'];
                $_SESSION['FullName']=$detail[3].' '.$detail[4];
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