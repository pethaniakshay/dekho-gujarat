<?php
session_start();
?>
<link rel="stylesheet" type="text/css" href="doctors_office.css" media="screen" />

<?php
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
<script>
	function psww()
		{
		
			if(document.check.psw.value != document.check.cpsw.value || document.check.cpsw.value != document.check.psw.value )
			{
				alert("Password Is Wrong");
				document.check.psw.value="";
				document.check.cpsw.value="";
				document.check.psw.focus();
				return(false);
			}
		}
		
		function psw1()
		{
			if(document.check.psw.value.length <=5)
			{
				alert("Password Length Should Be More Than 5 Characters");
				document.check.psw.focus();
				return(false);
			}
		}
		
		function cpsw1()
		{		
			if(document.check.cpsw.value.length <=5)
			{
				alert("Password Length Should Be More Than 5 Characters");
				document.check.cpsw.focus();
				return(false);
			}
			else
			{
				psww();
			}
		}
	function chkfill()
	{ 
		if(document.check.fname.value=="")
		{
			alert("Please EnterYour First Name");
			document.check.fname.focus();
			return(false);
		}
		
		if(document.check.lname.value=="")
		{
			alert("Please Enter Your Last Name");
			document.check.lname.focus();
			return(false);
		}
		
		var no,tmp=0;
		for(no=0;no<=1;no++)
		{
			if(document.check.gender[no].checked==true)
			{
				tmp=0;
				break;
			}
			tmp=1;
		}
		if(tmp==1)
		{
			alert("Please Select Gender");
			document.check.gender.focus();
			return(false);
		}
		
		if(document.check.dd.value==-1 || document.check.mm.value==-1 || document.check.yy.value==-1)
		{
			alert("Please Enter Birthdate Properly");
			return(false);
			//document.check.lname.focus();
		}
		if(document.check.age.value=="")
		{
			alert("Please Enter Your Age");
			document.check.age.focus();
			return(false);
		}
		
		
		if(document.check.add.value=="")
		{
			alert("Please Enter Your Full Address");
			document.check.add.focus();
			return(false);
		}
		
		
		if(document.check.pincode.value=="")
		{
			alert("Please Enter Pin Code");
			document.check.pincode.focus();
			return(false);
		}
		
		
		if(document.check.contact.value=="")
		{
			alert("Please Enter Your Contact No");
			document.check.contact.focus();
			return(false);
		}
		
		if(document.check.emid.value=="")
		{
			alert("Please Enter Your Email Id");
			document.check.emid.focus();
			return(false);
		}
		
		if(document.check.usid.value=="")
		{
			alert("Please Enter Your User id");
			document.check.usid.focus();
			return(false);
		}
		
		if(document.check.psw.value=="")
		{
			alert("Please Enter Your Password");
			document.check.psw.focus();
			return(false);
		}
		
		
		if(document.check.cpsw.value=="")
		{
			alert("Please Enter Your Confirm Password");
			document.check.cpsw.focus();
			return(false);
		}
	}
	
	
	function validemid()
	{
		var id=document.check.emid.value;
		atpos=id.indexOf("@");
		dotpos=id.lastIndexOf(".");
		
		if(atpos<1 || dotpos-atpos<2)
		{
			alert("Enter correct email id");
			document.check.emid.focus();
			return(false);
		}
		else
		{
			return(true);
		}		
	}
	
	function validusid()
	{
		document.check.psw.value="";
		var id=document.check.usid.value;
		atpos=id.indexOf("@");
		dotpos=id.lastIndexOf(".");
		
		if(atpos<1 || dotpos-atpos<2)
		{
			alert("Enter Correct User id");
			document.check.usid.focus();
			return(false);
		}
		else
		{
			return(true);
		}		
	}
	
</script>

<div id="centercontent">
<?php
if(isset($_SESSION['msg'])){
	echo $_SESSION['msg'];
	unset($_SESSION['msg']);
	
}
?>
    <form action="p_register.php" method="get">&nbsp;&nbsp;&nbsp;&nbsp;	<img src="extraimages/register.jpg" />
        <h3>New User</h3>
        <table>
            <tr>
                <td>
                    User Name :
                </td>
                <td>
                    <input type="text" name="user_name" required="true" style="border-radius: 5px;">
                </td>
            </tr>
            <tr>
                <td>
                    E-Mail :
                </td>
                <td>
                    <input type="email" name="email" required="true" style="border-radius: 5px;">
                </td>
            </tr>
            <tr>
                <td>
                    Password :
                </td>
                <td>
                    <input type="password" name="password" required="true" style="border-radius: 5px;">
                </td>
            </tr>
            <tr>
                <td></td>
                <td>
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;    <input type="submit" class="button" value="Register" style="border-radius: 5px;" >
                </td>
            </tr>
        </table>
    </form>
	


   <!-- jQuery (Necessary For JavaScript Plugins) -->
</div> 
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
