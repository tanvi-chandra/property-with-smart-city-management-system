<?php
    include("connection.php");
    if(isset($_POST['submit']))
    {
        $ptype=$_POST['proptype'];
        $ws=$_POST['wsource'];
        $prize=$_POST['prize'];
        $size=$_POST['size'];
        $aid=$_POST['aid'];
        $pid=$_POST['pid'];
        
        $sql= "INSERT INTO `property` (PropType,WaterSorce,Prize,Size,AdminId,ProjectId) VALUES ('$ptype','$ws','$prize','$size','$aid','$pid')";
        $result= mysqli_query($conn,$sql);
        if($result){
            header("Location:Propdisplay.php");
        }
        else{
            die(mysqli_error($conn));
        }
    }
?>