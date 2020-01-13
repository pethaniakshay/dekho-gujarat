<html><form name="forgot" method="post" action="<?php $_SERVER['PHP_SELF'];?>"> 
<p><label for="email">Email:</label> 
<input name="email" type="text" value="" /> 
</p> 
<input type="submit" name="submit" value="Submit"/> 
<input type="reset" name="reset" value="Reset"/> 
</form> </html>
<?php 
if(isset($_POST['submit'])) 
{ 
$connect=mysql_connect("localhost","root","") or die("Could not connect to database");
mysql_select_db("display_images") or die(mysql_error()); 
$email = $_POST['email']; 
$sql= "SELECT  `password` FROM `user_master` WHERE `email` ='.$email.'"; 
$query = mysql_query($sql); 
if(!$query)  
    { 
    die(mysql_error()); 
    } 
if(mysql_affected_rows() != 0) 
    { 
$row=mysql_fetch_array($query); 
$password=$row["password"]; 
$email=$row["email"]; 
$subject="Verbazon.net - Password Request"; 
$header="From: webmaster@verbazon.net"; 
$content="Your password is ".$password; 
mail($email, $subject, $content, $header);  
print "An email containing the password has been sent to you"; 
    } 
else  
    { 
    echo("no such login in the system. please try again."); 
    } 
} 
?>