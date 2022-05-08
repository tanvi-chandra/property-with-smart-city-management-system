<?php
  include("connection.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>SMART CITY</title>
  </head>
  <body>
    <h1 style="text-align: center;color:gray;">SMART CITY PROJECTS</h1>
    <div class="container">
      <button class="btn btn-primary my-3" style="float:right;"><a href="user.php" class="text-light"> Back</a>
            </button>
      <table class="table">
        <thead>
            <tr>
            <th scope="col">Project Id</th>
            <th scope="col">Project name</th>
            <th scope="col">Total cost(Cr.)</th>
            <th scope="col">Completion year</th>
            <th scope="col">Details</th>

            </tr>
        </thead>
        <tbody>
        <?php
                include("connection.php");
                $sql="SELECT * FROM `smartcity`";
                $result=mysqli_query($conn,$sql);
                    while( $row=mysqli_fetch_array($result))
                    {
                      $pid=$row["ProjectId"];
                      echo '<tr>';
                      echo  '<td>'.$row["ProjectId"].'</th>';
                      echo  '<td>'.$row["ProjName"].'</td>';
                      echo  '<td>'.$row["TotalCost"].'</td>';
                      echo  '<td>'.$row["CompYear"].'</td>';
                      echo  '<td>'.$row["Description"].'</td>';
                      echo '</tr>';
                    
                    } 
                
            ?>
          </tbody>
          </table>
    </div>
  </body>
</html>