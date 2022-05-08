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
        <form action="addsmartsql.php" method="post">
         <div class="form-group">
            <label>Project name</label>
            <input type="txt" name="projname" class="form-control" placeholder="Enter Project Nmae">
         </div>
         <div class="form-group">
            <label>Total cost</label>
            <input type="txt" name="tcost" class="form-control" placeholder="Enter Total cost">
         </div>
         <div class="form-group">
            <label>Completion year</label>
            <input type="number" name="compyear" class="form-control" placeholder="Year of COMPLETION year">
         </div>
         <div class="form-group">
            <label>Details</label>
            <input type="txt" name="descr" class="form-control" placeholder="Smart City details">
         </div>
         <div class="form-group">
            <label>Admin ID</label>
            <input type="txt" name="aid" class="form-control" placeholder="Enter Admin Id" value="<?php echo $aid;?>" readonly >
         </div>
         <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    
  </body>
</html>