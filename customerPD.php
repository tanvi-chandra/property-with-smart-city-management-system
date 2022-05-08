<?php
    include("connection.php");
?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Properties</title>
  </head>
  <body>
  <h1 style="text-align: center;"><em>FIND YOUR DREAM LAND</em></h1>
  <div class="container my-5">
  <button class="btn btn-primary" style="float:right;"><a href="user.php" class="text-light"> Back</a>
            </button>
  </div>
      <div class="container my-5">
        
        <table class="table" style="font-style: oblique;">
        <thead>
            <tr>
            <th scope="col">Property Id</th>
            <th scope="col">Property Type</th>
            <th scope="col">Water Source</th>
            <th scope="col">Prize(Cr.)</th>
            <th scope="col">Size(Acers)</th>
            <th scope="col">Project Id</th>
            </tr>
        </thead>
        <tbody>
        <?php
                include("connection.php");
                $sql="SELECT * FROM `property` where PropId not IN (select PropId from `propbooking`)";
                $result=mysqli_query($conn,$sql);
                    while($row =mysqli_fetch_array($result))
                    {
                      $id=$row["PropId"];
                      $proj=$row["ProjectId"];
                      echo '<tr>';
                      echo  '<td>'.$row["PropId"].'</th>';
                      echo  '<td>'.$row["PropType"].'</td>';
                      echo  '<td>'.$row["WaterSorce"].'</td>';
                      echo  '<td>'.$row["Prize"].'</td>';
                      echo  '<td>'.$row["Size"].'</td>';
                      echo  '<td><a href="getproject.php?projid='.$proj.'">'.$row["ProjectId"].'</a></td>';
                      echo '<td>';
                            echo '<button class="btn btn-primary"><a href="pbook.php?propid='.$id.'" class="text-light">Book</a></button>';
                      echo '</td>';
                      echo '</tr>';
                    
                    } 
                
            ?>
            
        </tbody>
        </table>
  </body>
</html>