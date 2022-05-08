<?php
  include("connection.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>manage property</title>
  </head>
  <body>
  
    <div class="container my-3">
    <h1 style="text-align: center;">PROJECT DETAILS</h1>
    <button class="btn btn-primary" style="float:right;"><a href="user.php" class="text-light"> Back</a>
            </button>
      <table class="table" style="font-style: oblique;">
        <thead>
            <tr>
            <th scope="col">Project Id</th>
            <th scope="col">Project Name</th>
            <th scope="col">Total cost(Cr.)</th>
            <th scope="col">Completion year</th>
            <th scope="col">Details</th>

            </tr>
        </thead>
        <tbody>
        <?php
                include("connection.php");
                $prid=$_GET['projid'];
                $sql="SELECT * FROM `smartcity` where ProjectId='$prid'";
                $result=mysqli_query($conn,$sql);
                    while( $row=mysqli_fetch_array($result))
                    {
                      $pid=$row["ProjectId"];
                      echo '<tr>';
                      echo  '<td>'.$row["ProjectId"].'</th>';
                      echo  '<td>'.$row["ProjName"].'</td>';
                      echo  '<td>'.$row["TotalCost"].'</td>';
                      echo  '<td>'.$row["CompYear"].'</td>';
                      echo  '<td> Area:'.$row["Description"].'</td>';
                      echo '</tr>';
                    
                    } 
                
            ?>
          </tbody>
          </table>
    </div>
  </body>
</html>