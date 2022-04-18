<?php
    require "connect.php";
    $id=$_GET['id'];
    $imagepath=$_GET['imagepath'];

    //echo $id.$imagepath;
    //unlink("image/Untitled.png")
   if(strlen($id)>0&&strlen($imagepath)>0){
        $query="DELETE FROM client WHERE id=$id";
        $data=mysqli_query($con,$query);
        if($data){
            unlink("image".$imagepath);
            echo "deleted";
        }else{
            echo "failed! try again";
        }
    }
   

?>