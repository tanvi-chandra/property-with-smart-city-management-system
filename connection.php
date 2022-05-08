<?php
   $servname = 'localhost:3307';
   $username='root';
   $password='';
   $db='management';

   $conn= mysqli_connect($servname , $username , $password , $db);
   if(!$conn){
       echo "please check your database connection";
   }
?>