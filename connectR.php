<?php
   include("connection.php");
    //connection
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
            
        $sql = "INSERT into customer (FirstName,LastName,Email,DOB,Mobile,Addres,Gender,Passw,Adhaar) VALUES ('$Firstname', '$Lastname', '$Email', '$DOB', '$Mobile','$Addres','$Gender','$Passw','$Anum')";
        $result = mysqli_query($conn,$sql);
        if($result){
            $sqla="SELECT * from customer where CustId=(select max(CustId) from customer)";
            $re=mysqli_query($conn,$sqla);
            if($re){
                $row=mysqli_fetch_array($re);
                $cid=$row['CustId'];
                $to=$Email;
                $subject="CoMpAsS";
                $message="Successfully registerd on SMART CITY MISSION.\nYour Customer Id is : $cid\nPlease do not share your CUSTOMER ID WITH ANYONE\n";
                $from="FROM:Smart City Mission";
                if(mail($to,$subject,$message,$from))
                {
                    header("Location:login.php");
                    echo "success";
                }
                else{
                    echo "Enter valid EmailId and PASSWORD";
                }
            
            }
        }
        else{
            echo "unssuccess".mysqli_error($conn);
        }
        
    }
?>