<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Php Search</title>
</head>

<body>
	<form name="form1" action="" method="post">
	&nbsp;&nbsp;&nbsp;<input type="text" name="t1" placeholder="Search Any Places" size="50" height="50px" 
    onKeyUp="aa();"><br>
    
    <div id="d1"></div>
    </form>
    <script type="text/javascript">
			function aa()
			{
				xmlhttp = new XMLHttpRequest();
				xmlhttp.open("GET","sea.php?nm="+document.form1.t1.value,false);
				xmlhttp.send(null);
				document.getElementById("d1").innerHTML=xmlhttp.responseText;
			}	
    </script>
</body>
</html>