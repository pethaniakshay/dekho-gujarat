
<?php
session_start();
include("mydatabaseinfo.php");
if(isset($_SESSION['p']['type'])){
    if($_SESSION['p']['type']=="admin"){
        if(isset($_REQUEST['user_name']))
        {
            $user_name=$_REQUEST['user_name'];
            $type=$_REQUEST['type'];
			$con=mysqli_connect($dbs,$dbu,$dbp,$dbn);
            if (!mysqli_connect_errno()){
                if(mysqli_query($con,"UPDATE user_master SET type='$type' WHERE user_name='$user_name' "))
                {
                    echo "Record Updated<br>";
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