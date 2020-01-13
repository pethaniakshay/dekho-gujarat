<?php
session_start();
?>         
<!DOCTYPE html>
<html lang="en">
  <head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gujarat Tourism-after login</title>

    <!-- Css Folder -->
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
  <body>
    <?php
if(!isset($_SESSION['p']['user']))
{
	header("location:login.php");
}
	include('header.php');
	?>
   
    <div class="kd-content" >

      <!--// Page Section //-->
      <section class="kd-pagesection" style=" padding: 0px 0px 10px 0px; ">
        <div class="container">
          <div class="row">
<br><br>
            <div class="col-md-12">
              <div class="kd-package-list">
                <div class="row">
                  <article class="col-md-4">
                    <figure><a href="#"><img src="extraimages/banner2.jpg"  alt=""></a>
                      <figcaption>
                        <span class="package-price thbg-color">₨.3,900</span>
                        <div class="kd-bottomelement">
                          <h5><a href="tour_vadodara.php">Vadodara Tour</a></h5>
                          <div class="days-counter"><span>4</span> <br> days</div>
					
                        </div>
                      </figcaption>
                    </figure>
                  </article>
                  <article class="col-md-4">
                    <figure><a href="#"><img src="extraimages/banner11.jpg" alt=""></a>
                      <figcaption>
                        <span class="package-price thbg-color">₨.3,399</span>
                        <div class="kd-bottomelement">
                          <h5><a href="tour_junagadh.php">Junagadh Tour</a></h5>
                          <div class="days-counter" style="background-color: #00c4d6;"><span>4</span> <br> days</div>
                        </div>
                      </figcaption>
                    </figure>
                  </article>
                  <article class="col-md-4">
                    <figure><a href="#"><img src="extraimages/banner13.jpg" alt=""></a>
                      <figcaption>
                        <span class="package-price thbg-color">₨.5,500</span>
                        <div class="kd-bottomelement">
                          <h5><a href="tour_ahmedabad.php">Ahmedabad Tour</a></h5>
                          <div class="days-counter" style="background-color: #e61010;"><span>4</span> <br> days</div>
                        </div>
                      </figcaption>
                    </figure>
                  </article>
                  <article class="col-md-4">
                    <figure><a href="#"><img src="extraimages/banner14.jpg" alt=""></a>
                      <figcaption>
                        <span class="package-price thbg-color">₨.6,500</span>
                        <div class="kd-bottomelement">
                          <h5><a href="tour_jamnagar.php">Jamnagar Tour</a></h5>
                          <div class="days-counter" style="background-color: #00c4d6;"><span>7</span> <br> days</div>
                        </div>
                      </figcaption>
                    </figure>
                  </article>
                  <article class="col-md-4">
                    <figure><a href="#"><img src="extraimages/banner15.jpg" alt=""></a>
                      <figcaption>
                        <span class="package-price thbg-color">₨.4,200</span>
                        <div class="kd-bottomelement">
                          <h5><a href="tour_kutch.php">Kutch Tour</a></h5>
                          <div class="days-counter" style="background-color: #e61010;"><span>4</span> <br> days</div>
                        </div>
                      </figcaption>
                    </figure>
                  </article>
                  <article class="col-md-4">
                    <figure><a href="#"><img src="extraimages/banner16.jpg" alt=""></a>
                      <figcaption>
                        <span class="package-price thbg-color">₨.4,000</span>
                        <div class="kd-bottomelement">
                          <h5><a href="tour_porbandar.php">Porbandar Tour</a></h5>
                          <div class="days-counter"><span>4</span> <br> days</div>
                        </div>
                      </figcaption>
                    </figure>
                  </article>
                </div>

               
           
      </section>
    

    
    
<?php

include("footer.php")

?>

    <!-- jQuery (Necessary For JavaScript Plugins) -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/waypoints-min.js"></script>
    <script src="js/jquery.accordion.js"></script>
    <script src="js/functions.js"></script>
  </body>
</html>