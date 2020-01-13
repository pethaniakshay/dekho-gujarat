<link rel="stylesheet" type="text/css" href="doctors_office.css" media="screen" />

<?php
session_start();

	include("header.php");
?>
?>

 <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/color.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/themetypo.css" rel="stylesheet">
    <link href="css/bxslider.css" rel="stylesheet">
    <link href="css/datepicker.css" rel="stylesheet">
	<link href="css/reg.css" rel="stylesheet">
	<link href="css/button.css" rel="stylesheet">
	<html>
	<body><center><img src="extraimages/login.jpg"/>
	<form action="p_login.php" method="post">
        User Name :  <input type="text" name="user_name" required="true" style="border-radius: 5px;"><br><br>
        Password  :  &nbsp;<input type="password" name="password" required="true" style="border-radius: 
		5px;"><br>
		
		<?php
		
			if(isset($_SESSION['msg']))
			{
				echo $_SESSION['msg'];
				unset($_SESSION['msg']);
			}

		?>
		
		<br>
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" class="button" value="Login" style="border-radius: 5px;" style="height:45px"></center>
    </form>
	</body>
	</html>
	<br><br><br><br><br><br>
	<?php
	include("footer.php");
	?>
