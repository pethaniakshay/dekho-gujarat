
<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gujarat Tourism</title>
    <!-- Css Folder -->
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/bootstrap-theme.css" rel="stylesheet">
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/color.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">
    <link href="css/themetypo.css" rel="stylesheet">
    <link href="css/bxslider.css" rel="stylesheet">
    <link href="css/datepicker.css" rel="stylesheet">
	<script type="text/javascript">
			function aa()
			{
				xmlhttp = new XMLHttpRequest();
				xmlhttp.open("GET","sea.php?nm="+document.form1.t1.value,false);
				xmlhttp.send(null);
				document.getElementById("d1").innerHTML=xmlhttp.responseText;
			}

			
    </script>

	<script>
	
	/* unvisited link */
a:link {
    color: #FF0000;
}

/* visited link */
a:visited {
    color: #00FF00;
}

/* mouse over link */
a:hover {
    color: #FF00FF;
}

/* selected link */
a:active {
    color: #0000FF;
}
	</script>
  </head>
  <body >
    
    <header id="mainheader">
      <!--// Top Baar //-->
      <div class="kd-topbar">
        <div class="container">
          <div class="row">
            <div class="col-md-7">
              <ul class="kd-topinfo">
                
               
              </ul>
            </div>
            <div class="col-md-5">
              <ul class="kd-userinfo">
                <li>
                  <div class="kd-social-network">
						<a href="https://www.facebook.com/dekhogujarat.in"><img src="extraimages/fb.png" height="41px"></img></a>
                  </div>
                </li>
                <li><form name="form1" action="" method="post">
    <input type="text" name="t1" placeholder="Search Any Places" size="20" height="100px" 
    onKeyUp="aa();" style="border-radius: 5px;"><br>
    
    <div id="d1">
	
	</div>
    </form>
	<?php
	$login='<div class="login">';
if(isset($_SESSION['p']['user'])){
    if($_SERVER['PHP_SELF']=="/dekhogujarat.in/profile.php") {
        $login=$login.'<a class="submit active" href="profile.php"><font color="white"> Welcome </font>'.$_SESSION['p']['user'].'</a>';
    }
    else{
        $login=$login.'<a class="submit" href="profile.php"> Welcome '.$_SESSION['p']['user'].'</a>';
    }
}
else {
        $login=$login.'<a class="submit" href="login.php">&nbsp;&nbsp;Login&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</a>';
    if($_SERVER['PHP_SELF']=="/dekhogujarat.in/register.php") {
        $login=$login.'<a class="submit active" href="register.php">Register</a></div>';
    }
    else{
        $login=$login.'<a class="submit" href="register.php">Register</a>';
    }
}
$login=$login.'</div>';
 
echo $login;
			?>
                  <!-- Modal -->
                  
                        </div>
                      </div>
                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      

      <!--// Header Baar //-->
      <div class="kd-headbar">
        <div class="container">
          <div class="row">
            <div class="col-md-3"><a href="index.php" class="logo"><font size="6"></font>
			<img src="extraimages/logog.gif" alt="" height="60px" width="200x"></a></div>
            <div class="col-md-9">
              <div class="kd-rightside">
                <nav class="navbar navbar-default navigation">
                  <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1">
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                      <span class="icon-bar"></span>
                    </button>
                  </div>

                  <div class="collapse navbar-collapse" id="navbar-collapse-1">
                    <ul class="nav navbar-nav">
                      <li><a href="index.php">Home</a>
					    
                      </li>
                      <li><a  href="#">Places</a>
					   <ul class="sub-dropdown">
                          <li><a href="Ahmedabad.php">AHMEDABAD</a></li>
                          <li><a href="Bhavnagar.php">BHAVNAGAR</a></li>
						  <li><a href="utch.php">KUTCH</a></li>
						  <li><a href="Vadodara.php">VADODARA</a></li>
						  <li><a href="Junagadh.php">JUNAGADH</a></li>
                        </ul>
						
					  </li>
                      <li><a href="gallery.php">Gallery</a></li>
					  <li><a href="afterlogin.php">Tour Packages</a></li>
                        
                      
                      <li><a href="video.php">Media</a>
                        
                        
                      </li>
                       
                      </li>
                     


                      
                          <li><a href="Contact.php">GET IN TOUCH</a></li>
                          <li><a href="About.php">ABOUT US</a></li>
						  <li><a href="help.php">Help</a></li>
                    </ul>
                      </li>
                     
                    </ul>
                  </div>
                    <!-- /.navbar-collapse -->
                </nav>
                
                  
                </div>
            </div>
          </div>
        </div>
      </div>
      <!--// Header Baar //-->

    </header>





</html>
