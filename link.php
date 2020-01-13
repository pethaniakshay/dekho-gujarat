<?php
session_start();
include("header.php");
	include("config.php");
	$a = $_GET['id'];
	
	$sql = mysql_query("select * from places where id='$a'");
	
	while($r=mysql_fetch_array($sql))
	{
		$i=$r['image'];
		$c=$r['city'];
		$d=$r['desc'];
		
		echo "<img src='extraimages/$i'>";
		echo "$c";
		echo "$d";
	}
	
include("footer.php");
?>

