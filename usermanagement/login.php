<?php
    require "connect.php";
    $username=$_POST['username']; 
    $password=$_POST['password']; 
    class Customer{
        function Customer($id,$user,$password,$imagepath){
            $this->id=$id;
            $this->username=$user;
            $this->password=$password;
            $this->imagepath=$imagepath;

        }
    }
    if(strlen($username)>0 &&strlen($password)>0){
        $clientarr= array();
        $query="SELECT * FROM client WHERE FIND_IN_SET('$username', username) AND FIND_IN_SET('$password',password)";
        $data=mysqli_query($con,$query);
        if($data){
            while($row = mysqli_fetch_assoc($data)){
                array_push($clientarr, new Customer($row['id']
                                                    ,$row['username']
                                                    ,$row['password']
                                                    ,$row['imagepath']));
            }
            if(count($clientarr)>0){
                echo json_encode($clientarr);

            }else{
                echo "Fail";
            }
        }

    }else{
        echo "Empty";
    }
?>

