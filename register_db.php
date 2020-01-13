<?php

	include("connect.php");
	/*
	$host="localhost";
	$user="root";
	$pass="";
	$con=mysql_connect($host,$user,$pass);
	
	if(!$con)
	{
		die('not connect'.mysql_error());
		echo "<br/>";
	}
	
	if($con)
	{
			$db=mysql_select_db("pro",$con);
			//echo"yes";
	}
*/

session_start();

	$_SESSION['fnm']=$_POST['fname'];
	$_SESSION['lnm']=$_POST['lname'];
	$gender=$_REQUEST['gender'];
	$_SESSION['gen']=$gender;
	//$gender=$_REQUEST['gender'];
	

	$mm=$_POST['mm'];
	$dd=$_POST['dd'];
	$yy=$_POST['yy'];
	$_SESSION['b_date']="$yy/$mm/$dd";
	//$_SESSION['b_date']=$_POST['yy'."-".'mm'."-".'dd'];
	
	//$mm=$_REQUEST[mm];
	//$dd=$_REQUEST[dd];
	//$yy=$_REQUEST[yy];
	$_SESSION['ag']=$_POST['age'];
	$_SESSION['addr']=$_POST['add'];
	$_SESSION['cty']=$_POST['city'];
	$_SESSION['pcode']=$_POST['pincode'];
	$_SESSION['stat']=$_POST['state'];
	$_SESSION['cntry']=$_POST['country'];
	$_SESSION['contno']=$_POST['contact'];
	$_SESSION['eadd']=$_POST['emid'];
	$_SESSION['uadd']=$_POST['usid'];
	$_SESSION['passw']=$_POST['psw'];
	
	$cnt=mysql_query("select rr from registration");
	$cnt1=mysql_num_rows($cnt);
	$n=$cnt1+1;
	
	$ok=mysql_query("select usid from registration");
	$nn="";
	while($row=mysql_fetch_array($ok))
	{
		if($row['usid']==$_SESSION['uadd'])
		{
		//echo $row['no']."     ".$row[	
		//echo"no";
		
		$nn="5";
		break;	
		}
		else
		{
		
		}
	}
	
	if($nn!=5)
	{
	
	$res=mysql_query("insert into registration values('".$n."','".$_SESSION['fnm']."','".$_SESSION['lnm']."','".$_SESSION['gen']."','".$_SESSION['b_date']."','".$_SESSION['ag']."','".$_SESSION['addr']."','".$_SESSION['cty']."','".$_SESSION['pcode']."','".$_SESSION['stat']."','".$_SESSION['cntry']."','".$_SESSION['contno']."','".$_SESSION['eadd']."','".$_SESSION['uadd']."','".$_SESSION['passw']."','".$_SESSION['ques']."','".$_SESSION['answ']."','".$n."')");
	if($res)
	{
		//header("location:create.php");
		$msg="yes...........";
		header("location:setmsg.php?mm=$msg");
	}
	}
	else
	{	
		//include("register.php");
		//echo "Duplicate Entry";
		/*echo "<script language='javascript'> window.location='register.php'; 
		</script>";*/
		echo "<script language='javascript'> alert('Duplicate Entry'); </script>";
		$msg="User ID is Currently exiest try diffrent user ID ";
		header("location:setmsg.php?mm=$msg");
	}
	
	
	mysql_close($con);
	
	
?>