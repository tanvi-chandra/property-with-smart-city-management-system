<?php
 include("connection.php");
 session_start();
 $aid=$_SESSION['AdminId'];
 ?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Admin</title>
  </head>
  <body>
    <div class="container">
        <form action="Property.php" method="post">
         <div class="form-group">
            <label>Property Type</label>
            <input type="txt" name="proptype" class="form-control" placeholder="Enter property type">
         </div>
         <div class="form-group">
            <label>Water Source</label>
            <input type="txt" name="wsource" class="form-control" placeholder="Enter property type">
         </div>
         <div class="form-group">
            <label>Prize</label>
            <input type="number" name="prize" class="form-control" placeholder="Property Prize">
         </div>
         <div class="form-group">
            <label>Size</label>
            <input type="number" name="size" class="form-control" placeholder="Size in Acers">
         </div>
         <div class="form-group">
            <label>Admin ID</label>
            <input type="txt" name="aid" class="form-control" placeholder="Enter property type" value="<?php echo $aid;?>" readonly >
         </div>
         <div class="form-group">
            <label>Project ID</label>
            <input type="txt" name="pid" class="form-control" placeholder="Enter property type">
         </div>
         <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
  </body>
</html>