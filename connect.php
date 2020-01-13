<?php
	$con=mysqli_connect("www.dekhogujarat.in","wwwdekhogujarat","6a_?vn.VrlEu","wwwdekho_db");	
	if(!$con)
	{
		die("Error".mysql_error());
	}
	else
	{
		mysql_select_db("wwwdekho_db",$con);
	}

?>