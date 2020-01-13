<?php
session_start();

	include("header.php");
	include("mydatabaseinfo.php");
?>

<?php
if(isset($_REQUEST['user_name']))
{
    $user_name=$_REQUEST['user_name'];
    $password=$_REQUEST['password'];
    //admin privilage setting here for admin or staff user creation
    $con=mysqli_connect($dbs,$dbu,$dbp,$dbn);
	
    if (!mysqli_connect_errno()){
        if($result = mysqli_query($con,"select user_name,email,password,type from user_master where user_name='$user_name'")){
            if(mysqli_num_rows($result)>0)
            {
                while($row = mysqli_fetch_array($result)) {
                    if($row['user_name']==$user_name or $row['email']==$user_name){
                        if($row['password']==$password){
                            $_SESSION['p']['user']=$user_name;
                            $_SESSION['p']['type']=$row['type'];
							$_SESSION['login']='Yes';
							
                            echo "Login Successes";
							header("location:afterlogin.php");
                        }
						else{
							$_SESSION['msg']='Check Your Password';
							header("location:login.php");
						}
                    }
                }
            }
            else{
                echo "Wrong User Name";
				$_SESSION['msg']='Wrong User Name';
				header("location:login.php");
            }
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
    echo " Request not found<br>";
}
?>