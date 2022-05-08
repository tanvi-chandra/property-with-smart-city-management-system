<?php
    session_start();
   include("connection.php");
    //connection
    if(isset($_POST['submit']))
    {
        $propid=$_POST['propid'];
        $custid=$_POST['custid'];
        $name=$_POST['Name'];
        $Email=$_POST['email'];
        $bdate=$_POST['bdate'];
        $Mobile=$_POST['number'];
        $Addres=$_POST['address'];
            
        $sql = "INSERT into propbooking (PropId,CustId,Name,Email,Bdate,MobileNo,Address) VALUES ('$propid', '$custid','$name', '$Email', '$bdate', '$Mobile','$Addres')";
        $result = mysqli_query($conn,$sql);
        if($result){
            $sqla="SELECT * from propbooking where BookId=(select max(BookId) from propbooking)";
            $re=mysqli_query($conn,$sqla);
            if($re){
                $row=mysqli_fetch_array($re);
                $bid=$row['BookId'];
                header("Location:payment.php?bookid=$bid");
            }
        }
        else{
            echo "unssuccess".mysqli_error($conn);
        }
        
        
    }
?>