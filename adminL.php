
<?php
        include("connection.php");
        session_start();
        if(isset($_SESSION['AdminId']))
        {
           
            header("Location:adminpage.php");
        }
        else
        {
            if(isset($_POST['submit']))
            {

                    $aid=$_POST['adminid'];
                    $passw=$_POST['pass'];
                    $_SESSION['AdminId']=$aid;
                    $sql="SELECT * FROM admin1 WHERE AdminId='$aid' and Passw='$passw'";
                    $res=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($res)==1)
                    {
                        header("Location:adminpage.php");
                    }
                    else{
                        echo "enter valid Id and paasword";
                    }
            }
        }
?>