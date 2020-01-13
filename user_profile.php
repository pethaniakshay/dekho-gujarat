<?php
	session_start();
	include("header.php");
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
	
<center>
<div id="centercontent">

    <form action="#" method="post">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<img src="extraimages/pro11.jpg " height="300px" width="480px"/>
        <h3>Personal Profile.</h3>
        <table>
            <tr>
                <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Name :
                </td>
                <td>
                    <input type="text" name="user_name" required="true" style="border-radius: 5px;" required="true">
                </td>
            </tr>
            <tr>
                <td>
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; E-Mail :
                </td>
                <td>
                    <input type="email" name="email" required="true" style="border-radius: 5px;" required="true">
                </td>
            </tr>
            
		
			<tr>
			
                <td>
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
            </tr>
            <tr>
                <td></td>
                <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </a>   <input type="submit" class="button" value="Change Profile" style="border-radius: 5px;" >
                </td>
            </tr>
        </table>
    </form>
	
	
   <!-- jQuery (Necessary For JavaScript Plugins) -->
</div> 
</center>
 <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/waypoints-min.js"></script>
    <script src="js/functions.js"></script>
  
  
  </body>
</html>

<?php
	include("footer.php");
?>
