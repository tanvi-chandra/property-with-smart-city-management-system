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
    <h1 style="text-align: center;">SMART CITY PROPERTY DETAILS</h1>
      <div class="container">
        <button class="btn btn-primary my-5"><a href="admin.php" class="text-light"> Add</a> </button>
        <button class="btn btn-primary my-5" style="float:right;"><a href="adminpage.php" class="text-light"> Back</a>
            </button>
        <table class="table" style="font-style: oblique;">
        <thead>
            <tr>
            <th scope="col">Property Id</th>
            <th scope="col">Property type</th>
            <th scope="col">Water Source</th>
            <th scope="col">Prize(Cr.)</th>
            <th scope="col">Size(Acers)</th>
            <th scope="col">Admin ID</th>
            <th scope="col">Project Id</th>
            <th scope="col">Operations</th>

            </tr>
        </thead>
        <tbody>
        <?php
                include("connection.php");
                $sql="SELECT * FROM `property`";
                $result=mysqli_query($conn,$sql);
                    while( $row=mysqli_fetch_array($result))
                    {
                      $id=$row["PropId"];
                      echo '<tr>';
                      echo  '<td>'.$row["PropId"].'</th>';
                      echo  '<td>'.$row["PropType"].'</td>';
                      echo  '<td>'.$row["WaterSorce"].'</td>';
                      echo  '<td>'.$row["Prize"].'</td>';
                      echo  '<td>'.$row["Size"].'</td>';
                      echo  '<td>'.$row["AdminId"].'</td>';
                      echo  '<td>'.$row["ProjectId"].'</td>';
                      echo '<td>';
                            echo '<button class="btn btn-primary"><a href="updateprop.php?updateid='.$id.'" class="text-light">Update</a></button>
                            <button class="btn btn-primary" style="background-color:red;"><a href="deleteprop.php?delid='.$id.'" onclick="return myFunction()" class="text-light">Delete</a></button>';
                      echo '</td>';
                      echo '</tr>';
                    
                    } 
                
            ?>
            
        </tbody>
        </table>
  </body>
</html>