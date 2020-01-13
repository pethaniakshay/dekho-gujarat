
<?php
session_start();
include("mydatabaseinfo.php");
    if(isset($_REQUEST['user_name']))
    {
        $user_name=$_REQUEST['user_name'];
        $email=$_REQUEST['email'];
        $password=$_REQUEST['password'];
        $type="user";
        if(isset($_SESSION['p']['type'])){
            if($_SESSION['p']['type']=="admin"){
                $type=$_REQUEST['type'];
            }
        }
        //admin privilage setting here for admin or staff user creation
         $con=mysqli_connect($dbs,$dbu,$dbp,$dbn);
        if (!mysqli_connect_errno()){
            if(mysqli_query($con,"INSERT INTO user_master (user_name,email,password,type) VALUES ('$user_name','$email','$password','$type')")){
                echo "Record Inserted Succsses.<br>";
				$_SESSION['msg']="Now You Are Registered";
				header("location:register.php");
            }
            else{
                echo "MySqli Error:".mysqli_error($con);
            }

        }
        else{
            echo "Failed to connect to MySQL: " . mysqli_connect_error()." <br> ";
        }

    }
    else{
        echo "request request not found<br>";
    }
?>