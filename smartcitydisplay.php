<?php
  include("connection.php");
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script>
      function myFunction(){
        var result=confirm("Are you sure you want to Delete?");
        if(result==true){
          return true;

        }else{
          return false;
        }
      }
    </script>

    <title>manage property</title>
  </head>
  <body>
    <h1 style="text-align: center;">SMART CITY PROJECT DETAILS</h1>
    <div class="container">
      <button class="btn btn-primary my-4"><a href="addsmartc.php" class="text-light"> Add</a> </button>
      <button class="btn btn-primary my-4" style="float:right;"><a href="adminpage.php" class="text-light"> Back</a>
            </button>
      <table class="table" style="font-style: oblique;">
        <thead>
            <tr>
            <th scope="col">Project Id</th>
            <th scope="col">Project name</th>
            <th scope="col">Total cost(Cr.)</th>
            <th scope="col">Completion year</th>
            <th scope="col">Details</th>
            <th scope="col">Operations</th>

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
                      echo  '<td> Area:'.$row["Description"].'</td>';
                      echo '<td>';
                            echo '<button class="btn btn-primary"><a href="updatecity.php?updateid='.$pid.'" class="text-light">Update</a></button>
                            <button class="btn btn-primary" style="background-color:red;"><a href="deletesmart.php?delid='.$pid.'" onclick="return myFunction()" class="text-light">Delete</a></button>';
                      echo '</td>';
                      echo '</tr>';
                    
                    } 
                
            ?>
          </tbody>
          </table>
    </div>
  </body>
</html>