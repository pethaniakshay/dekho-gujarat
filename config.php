

<?php
	
    $dbhost="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="display_images";
    
    $connect = mysql_connect($dbhost,$dbusername,$dbpassword);
    $db = mysql_select_db($dbname,$connect) or die ("Could Not Select Database");

   
?>