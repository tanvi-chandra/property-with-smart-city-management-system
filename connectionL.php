    <?php
        
        
        include("connection.php");
        session_start();
        if(isset($_SESSION['CustId']))
        {
            header("Location:user.php");
        }
        else
        {
            if(isset($_POST['submit']))
            {

                    $cid=$_POST['CustomerId'];
                    $passw=$_POST['pass'];

                    $sql="SELECT * FROM customer WHERE CustId='$cid' and Passw='$passw'";
                    $res=mysqli_query($conn,$sql);
                    if(mysqli_num_rows($res)==1)
                    {
                        echo '<script type="text/javascript">alert("Logged in successfully!");</script>';
                        $_SESSION['CustId']=$cid;
                        
                        header("Location:user.php");
                    }
                    else{
                        echo "enter valid user name and paasword";
                    }
            }
        }

    ?>