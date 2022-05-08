<?php
    include("connection.php");
      if(isset($_POST['submit']))
      {
          $pname=$_POST['projname'];
          $tc=$_POST['tcost'];
          $compyear=$_POST['compyear'];
          $descr=$_POST['descr'];
          $aid=$_POST['aid'];
          
          $sql= "INSERT INTO smartcity (ProjName,TotalCost,CompYear,Description,AdminId) VALUES ('$pname','$tc','$compyear','$descr','$aid')";
          $result= mysqli_query($conn,$sql);
          if($result){
              header("Location:smartcitydisplay.php");
          }
          else{
              die(mysqli_error($conn));
          }
      }
?>