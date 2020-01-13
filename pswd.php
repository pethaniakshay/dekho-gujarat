<?php
	include("config.php");
	
	$new=$_POST['newpassword'];
	$cnew=$_POST['confirmpassword'];
	
	
	if($new==$cnew)
	{
			$a="update user_master set password=$new where id=$id";	
			$b=mysql_query($a);
			header("location:changemypassword.php");
	}
?>