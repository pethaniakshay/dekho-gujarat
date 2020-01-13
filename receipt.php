

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
	
	<html>
	
	<head>
	<script>
			function calc()
			{
	
				$member=document.getElementById('member').value;
				$city=document.getElementById('city2').value;

				
				if($city=="Vadodara"){
					document.getElementById('price').value="3900";
					document.getElementById('tp').value=(3900*$member);
				}
				else if($city=="Junagadh"){
					document.getElementById('price').value="3399";
					document.getElementById('tp').value=(3399*$member);
				}
				else if($city=="Ahmedabad"){
					document.getElementById('price').value="5500";
					document.getElementById('tp').value=(5500*$member);
				}
				else if($city=="Jamnagar"){
					document.getElementById('price').value="6500";
					document.getElementById('tp').value=(6500*$member);
				}
				else if($city=="Kutch"){
					document.getElementById('price').value="4200";
					document.getElementById('tp').value=(4200*$member);
				}
				else if($city=="Porbandar"){
					document.getElementById('price').value="4000";
					document.getElementById('tp').value=(4000*$member);
				}
					}
					</script>
					<script type="text/JavaScript">
				
	
	</script>
	
	</head>
	
	</html>
<center>
<div id="centercontent">

    <form action="ok.php" method="post">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;	
        <h3>Receipt</h3>
        <table>
            <tr>
                <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;   Name :
                </td>
                <td>
                    <input type="text" name="user_name2" value="<?php echo $_GET['user_name1']; ?>" required="true" style="border-radius: 5px;" required="true">
                </td>
            </tr>
            <tr>
                <td>
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; E-Mail :
                </td>
                <td>
                    <input type="email" name="email2" required="true" value="<?php echo $_GET['email1'];?>" style="border-radius: 5px;" required="true">
                </td>
            </tr>
            
			<tr>
                <td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Member :
                </td>
                <td>
                    <select "-1" style="width:58%" name="member" id="member" onChange="calc()">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
					<option>6</option>
					<option>7</option>
					<option>8</option>
					<option>9</option>
					<option>10</option>
					
					
                </td>
				</tr>
				<tr>
                <td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Package :
                </td>
                <td>
                    <select "-1" style="width:58%" onChange="calc()" id="city2" name="city2">
					<option>Select City</option>
					<option>Vadodara</option>
					<option>Junagadh</option>
					<option>Ahmedabad</option>
					<option>Jamnagar</option>
					<option>Kutch</option>
					<option>Porbandar</option>
					
					
                </td>
				</tr>
				<tr>
                <td>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Worth :
                </td>
                <td>
                    <input type="text" style="width:58%" id="price" name="price" disabled/>
					
					
                </td>
				</tr>
		
			<tr>
			
                <td>
                   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Total Payment :
                </td>
                <td>
                    <input disable="true" type="number" name="member" required="true" name="tp" id="tp" style="border-radius: 5px;" disabled><br><br>
					
					<input type="submit" class="button" value="OK" style="border-radius: 5px;">
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
	<center><h4> Thank You For Visiting Our Website. !! Happy journey !!</h4></center>
  
  </body>
</html>

<?php
	include("footer.php");
?>
