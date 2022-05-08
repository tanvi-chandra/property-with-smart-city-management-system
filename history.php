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
      <div class="container my-5">
      <button class="btn btn-primary my-3" style="float:right;"><a href="user.php" class="text-light"> Back</a>
            </button>
        <h1 style="text-align:center;"><strong>Booked Properties</strong></h1>
        <table class="table">
        <thead>
            <tr>
            <th scope="col">Booking Id</th>
            <th scope="col">Property Id</th>
            <th scope="col">Booking date</th>
            </tr>
        </thead>
        <tbody>
        <?php

                include("connection.php");
                session_start();
                $ccid=$_SESSION['CustId'];
                $sql="SELECT * FROM `propbooking` where CustId=$ccid";
                $result=mysqli_query($conn,$sql);
                    while($row =mysqli_fetch_array($result))
                    {
                      $id=$row["PropId"];
                      echo '<tr>';
                      echo  '<td>'.$row["BookId"].'</th>';
                      echo  '<td>'.$row["PropId"].'</td>';
                      echo  '<td>'.$row["Bdate"].'</td>';
                    
                    } 
                
            ?>
            
        </tbody>
        </table>
  </body>
</html>