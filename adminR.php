<?php

   include("connection.php");
    session_start();
    if(isset($_POST['submit']))
    {
        $Firstname=$_POST['firstname'];
        $Lastname=$_POST['lastname'];
        $Email=$_POST['email'];
        $DOB=$_POST['dob'];
        $Mobile=$_POST['number'];
        $Addres=$_POST['address'];
        $Gender=$_POST['gender'];
        $Passw=$_POST['psw'];
        $Anum=$_POST['anum'];
            
        $sql = "INSERT into admin1 (FirstName,LastName,Email,DOB,Mobile,Addres,Gender,Passw,Adhaar) VALUES ('$Firstname', '$Lastname', '$Email', '$DOB', '$Mobile','$Addres','$Gender','$Passw','$Anum')";
        $result = mysqli_query($conn,$sql);
        if($result){

            $sqla="SELECT * from admin1 where AdminId=(select max(AdminId) from admin1)";
            $re=mysqli_query($conn,$sqla);
            if($re){
                $row=mysqli_fetch_array($re);
                $cid=$row['AdminId'];
                $to=$Email;
                $subject="SMART CITY MISSION";
                $message="Successfully registerd on SMART CITY MISSION.\nYour Admin Id is : $cid\nPlease DO NOT SHARE WITH ANYONE\n";
                $from="FROM:Smart City Mission";
                if(mail($to,$subject,$message,$from))
                {
                    header("Location:adminlogin.php");
                    echo "success";
                }
                else{
                    echo "Error in sending mail.";
                }
            
            }
        }
        else{
            echo "unssuccess".mysqli_error($conn);
        }
       
        
    }
?>