<?php
   include("connection.php");
    //connection
    if(isset($_POST['submit']))
    {
        $ac=$_POST['acno'];
        $Email=$_POST['email'];
        $tdate=$_POST['tdate'];
        $amount=$_POST['amount'];
        $tmode=$_POST['tmode'];
        $bid=$_POST['bid'];
            
        $sql = "INSERT into payment (Email,AccountNo,Amount,PayDate,tranMode,BookId) VALUES ('$Email', '$ac','$amount', '$tdate', '$tmode', '$bid')";
        $result = mysqli_query($conn,$sql);
        if($result){
            $sq="SELECT tranId from payment where tranId=(select max(tranId) from payment)";
            $re=mysqli_query($conn,$sq);
                $row=mysqli_fetch_array($re);
                $tid=$row['tranId'];
                $to=$Email;
                $subject="CoMpAsS";
                $message="Payment is Successfull.\nYour Transaction Id is :$tid \n";
                $from="FROM:Smart City Mission";
                if(mail($to,$subject,$message,$from))
                {
                    header("Location:user.php");
                    echo "success";
                }
                else{
                    echo "Error in sending mail.";
                }
        } 
        else{
            echo "unssuccessfull".mysqli_error($conn);
        }
        
    }
?>