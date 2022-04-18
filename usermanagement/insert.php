<?php

    require "connect.php";
    $username = $_POST['username'];
    $password = $_POST['password'];
    $imagepath = $_POST['imagepath'];
    
    if(strlen($username)>0 &&strlen($password)>0 &&strlen($imagepath)>0){
        $query="INSERT INTO client VALUES (null,'$username','$password','$imagepath')";
        $data= mysqli_query($con,$query);
        if($data){
            echo "SUCCESSFUL";
        }else{
            echo "FAILED!!! PLEASE TRY AGAIN";

        }

    }else{       
        echo "NULL!!";
    }

?>