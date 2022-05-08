<?php
    include("connection.php");
    if(isset($_GET['delid']))
    {
        $id=$_GET['delid'];
        $sql="DELETE FROM smartcity where ProjectId=$id";
        $res=mysqli_query($conn,$sql);
        if($res){
            header("Location:smartcitydisplay.php");
        }
        else{
            die(mysqli_error($conn));
        }
    }




?>