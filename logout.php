<?php
session_start();
if(isset($_SESSION['users']))
{
echo "hii";
echo "<br/><br/>";
echo "<a href='logout.php'>Logout</a>";
}
else
{
	header("location:index.php");
	}
?>

