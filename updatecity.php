<?php
    include("connection.php");
    $id=$_GET['updateid'];
    $sql="SELECT *FROM smartcity where ProjectId='$id'";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $pid=$row['ProjectId'];
    $pname=$row['ProjName'];
    $tcc=$row['TotalCost'];
    $coye=$row['CompYear'];
    $des=$row['Description'];
    $aaid=$row['AdminId'];
    if(isset($_POST['submit']))
    {
        $ppid=$_POST['projid'];
        $pname=$_POST['projname'];
        $tc=$_POST['tcost'];
        $compyear=$_POST['compyear'];
        $descr=$_POST['descr'];
        $aid=$_POST['aid'];
        
        $sql= "UPDATE `smartcity` SET ProjectId='$ppid',ProjName='$pname',TotalCost='$tc',CompYear='$compyear',Description='$descr',AdminId='$aid' where ProjectId='$pid'";
        $result= mysqli_query($conn,$sql);
        if($result){
            header("Location:smartcitydisplay.php");
        }
        else{
            die(mysqli_error($conn));
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script>
      function myFunction(){
        alert("Property will be updated!");
      }
    </script>

    <title>Smart City Mission</title>
  </head>
  <body>
    <div class="container md-4">
        <form action="addsmartsql.php" method="post">
        <div class="form-group">
            <label>Project Id</label>
            <input type="txt" name="projid" class="form-control" placeholder="Enter Project Id" autocomplete="off" value=<?php echo $pid;?>>
         </div>
         <div class="form-group">
            <label>Project name</label>
            <input type="txt" name="projname" class="form-control" placeholder="Enter Project Nmae" autocomplete="off" value=<?php echo $pname;?>>
         </div>
         <div class="form-group">
            <label>Total cost</label>
            <input type="txt" name="tcost" class="form-control" placeholder="Enter Total cost" autocomplete="off" value=<?php echo $tcc;?>>
         </div>
         <div class="form-group">
            <label>Completion year</label>
            <input type="number" name="compyear" class="form-control" placeholder="Year of COMPLETION year" autocomplete="off" value=<?php echo $coye;?>>
         </div>
         <div class="form-group">
            <label>Details</label>
            <input type="txt" name="descr" class="form-control" placeholder="Smart City details" autocomplete="off" value=<?php echo $des;?>>
         </div>
         <div class="form-group">
            <label>Admin ID</label>
            <input type="txt" name="aid" class="form-control" placeholder="Enter Admin Id" autocomplete="off" value=<?php echo $aaid;?>>
         </div>
         <button type="submit" onclick="myFunction();" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
  </body>
</html>