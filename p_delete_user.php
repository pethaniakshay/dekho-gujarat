
<?php
session_start();
include("mydatabaseinfo.php");
if(isset($_SESSION['p']['type'])){
    if($_SESSION['p']['type']=="admin"){
        if(isset($_REQUEST['user_name']))
        {
            $user_name=$_REQUEST['user_name'];
             $con=mysqli_connect($dbs,$dbu,$dbp,$dbn);
            if (!mysqli_connect_errno()){
                if(mysqli_query($con,"delete from user_master where user_name='$user_name'"))
                {
                    echo "Record Deleted<br>";
					header("location:manageusers.php");
                }
                else{
                    echo "MySqli Error:".mysqli_error($con)."<br>";
                }
            }
            else{
                echo "Failed to connect to MySQL: " . mysqli_connect_error()." <br> ";
            }

        }
        else{
            echo "request request not found<br>";
        }
    }
    else{
        echo "You are not Admin";
    }
}
?>