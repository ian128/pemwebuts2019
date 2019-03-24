<?php
    function createUser($firstname,$lastname,$jeniskelamin,$tanggalLahir,$tempatLahir,$kota,$phone,$email,$salt,$password,$username){
            //increment one key
            $hashpass="MD5(CONCAT('".$password."','".$salt."'))";
            //inserting
            $query="INSERT INTO user
            VALUES('$username','','','$firstname','$lastname','$jeniskelamin','$tanggalLahir','$tempatLahir','$kota','$phone','$email',$hashpass,'$salt')";
            $result = db_connect()->prepare($query);
            try{   
                $result = db_connect()->query($query);
                return true;
            } catch(Exception $e) {
                return false;
            }
    }
?>