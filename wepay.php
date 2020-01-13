<link rel="stylesheet" type="text/css" href="doctors_office.css" media="screen" />

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

    <form action="receipt.php" method="get" name="paypal">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	<img src="extraimages/paypal.jpg " height="300px" width="480px"/>
        
        <table>
            <tr>
                <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Name :
                </td>
                <td>
                    <input type="text" name="user_name1" required="true" style="border-radius: 5px;" required="true">
                </td>
            </tr>
            <tr>
                <td>
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; E-Mail :
                </td>
                <td>
                    <input type="email" name="email1" required="true" style="border-radius: 5px;" required="true">
                </td>
            </tr>
            <tr>
                <td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Phone No :
                </td>
                <td>
                    <input type="text" name="phone1" required="true" pattern="[0-9]{10,10}" style="border-radius: 5px;" maxlength="10" required="true">
                </td>
            </tr>
			<tr>
                <td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;City :
                </td>
                <td>
                    <input type="text" name="city1" style="border-radius:5px">
					
					
                </td>
				</tr>
		
			<tr>
			
                <td>
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;ATM No :
                </td>
				
                <td>
                    <input type="text" name="atm" required="true" placeholder=" 10 Digit Number" style="border-radius: 5px;" pattern="[0-9]{10,10}" maxlength="10">
                </td>
            </tr>
            <tr>
                <td>
				</td>
                
				<td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <input type="submit" class="button" value="Pay Now" style="border-radius: 5px;" >
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
	<script>
		if(document.paypal.atm.value.length>=10)
		{
			alert("Please Enter Only 10 Numbers");
			document.paypal.atm.focus();
			return(false);
}
	</script>
  
  
  </body>
</html>

<?php
	include("footer.php");
?>
