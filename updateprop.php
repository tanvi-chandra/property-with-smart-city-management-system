<?php
    include("connection.php");
    $id=$_GET['updateid'];
    $sql="SELECT *FROM property where PropId=$id";
    $result=mysqli_query($conn,$sql);
    $row=mysqli_fetch_assoc($result);
    $pid=$row['PropId'];
    $ptype=$row['PropType'];
    $ws=$row['WaterSorce'];
    $prize=$row['Prize'];
    $size=$row['Size'];
    $aid=$row['AdminId'];
    $pid=$row['ProjectId'];
    if(isset($_POST['submit']))
    {
        $ppid=$_POST['propid'];
        $ptype=$_POST['proptype'];
        $ws=$_POST['wsource'];
        $prize=$_POST['prize'];
        $size=$_POST['size'];
        $aid=$_POST['aid'];
        $pid=$_POST['pid'];
        
        $sql= "UPDATE `property` SET PropId='$ppid',PropType='$ptype',WaterSorce='$ws',Prize='$prize',Size='$size',AdminId='$aid',ProjectId='$pid' where PropId='$id'";
        $result= mysqli_query($conn,$sql);
        if($result){
            header("Location:Propdisplay.php");
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

    <title>Update property</title>
  </head>
  <body>
    <div class="container">
        <form action="Property.php" method="post">
        <div class="form-group">
            <label>Property Id</label>
            <input type="txt" name="propid" class="form-control" placeholder="Enter property type" autocomplete="off" value=<?php echo $id;?>>
         </div>
         <div class="form-group">
            <label>Property Type</label>
            <input type="txt" name="proptype" class="form-control" placeholder="Enter property type" autocomplete="off" value=<?php echo $ptype;?>>
         </div>
         <div class="form-group">
            <label>Water Source</label>
            <input type="txt" name="wsource" class="form-control" placeholder="Enter property type" autocomplete="off" value=<?php echo $ws;?>>
         </div>
         <div class="form-group">
            <label>Prize</label>
            <input type="number" name="prize" class="form-control" placeholder="Property Prize" autocomplete="off" value=<?php echo $prize;?>>
         </div>
         <div class="form-group">
            <label>Size</label>
            <input type="number" name="size" class="form-control" placeholder="Size in Acers" autocomplete="off" value=<?php echo $size;?>>
         </div>
         <div class="form-group">
            <label>Admin ID</label>
            <input type="txt" name="aid" class="form-control" placeholder="Enter property type" autocomplete="off" value=<?php echo $aid;?>>
         </div>
         <div class="form-group">
            <label>Project ID</label>
            <input type="txt" name="pid" class="form-control" placeholder="Enter property type" autocomplete="off" value=<?php echo $pid;?>>
         </div>
         <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
  </body>
</html>