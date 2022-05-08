<?php
    include("connection.php");
    if(isset($_GET['delid']))
    {
        $id=$_GET['delid'];
        $sql="DELETE FROM property where PropId=$id";
        $res=mysqli_query($conn,$sql);
        if($res){
            header("Location:Propdisplay.php");
        }
        else{
            die(mysqli_error($conn));
        }
    }




?>