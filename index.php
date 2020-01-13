
<?php
session_start();
	include("mydatabaseinfo.php");
	include("header.php");
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Gujarat Tourism-HOME</title>

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

   
  </head>
  <body>
    

    <!--// MainBanner //-->
    <div id="mainbanner">
      <ul class="bxslider">
        <li><img src="extraimages/banner21.jpg" height="600" width="1000"  />
          <div class="kd-caption">
            
            <h1>Somnath Temple</h1>
          
        </li>
        <li><img src="extraimages/banner22.jpg" height="600" width="1000" />
          <div class="kd-caption">
           
            <h1>Kankaria Lake</h1>
           
        </li>
        <li><img src="extraimages/banner23.jpg" height="600" width="1000" />
          <div class="kd-caption">
           
            <h1>Gir Forest</h1>
           
        </li>
        <li><img src="extraimages/banner24.jpg" height="600" width="1000" />
          <div class="kd-caption">
           
            <h1>Rann Of Kutch</h1>
           
        </li>
		<li><img src="extraimages/banner25.jpg" height="600" width="1000" />
          <div class="kd-caption">
            
            <h1>Laxmi Vilas Palace</h1>
          
        </li>
		<li><img src="extraimages/banner26.jpg" height="600" width="1000" />
          <div class="kd-caption">
           
            <h1>Mandvi Beach</h1>
           
        </li>
		<li><img src="extraimages/banner27.jpg" height="600" width="1000" />
          <div class="kd-caption">
           
            <h1>Sidi Saiyad Grills</h1>
           
        </li>
		<li><img src="extraimages/banner28.jpg" height="600" width="1000" />
          <div class="kd-caption">
           
            <h1>Sursagar</h1>
           
        </li>
      </ul>

    <div class="kd-content">

      <!--// Page Section //-->
      <section class="kd-pagesection">
      
              <div class="kd-modrentitle thememargin">
                <h3>Today's Thought</h3>
                <div class="kd-divider"><div class="short-seprator"><span><i class="fa fa-home"></i></span></div></div>
                <br />
              <marquee bgcolor="#666666"><b> <font color="white"> <p>Everyday May Not Be Good But There Is Something Good In Everyday.|| Everybody Wants To Go Heaven But Nobody Wants To Die.</p> </font></b></marquee>
              </div>
            </div>

            <div class="col-md-12">
              <div class="kd-services">

        <article class="col-md-6">
                      <figure><a href="#"><img src="extraimages/banner7.jpg"></a></figure>
                    <div class="kd-serviceinfo">
                        <h2><a href="#">Gandhi Aashram</a></h2>
                        <p>Gandhi Aashram is located in the Sabarmati suburb of Ahmedabad,Gujarat,adjoining the Ashram Road,on the banks of the River Sabarmati.</p>

                        <a href="gandhiaashram.php" class="kd-readmore thbg-colorhover">Read more</a>

                        </div>



                  </article>
                  <article class="col-md-6">
                    <figure><a href="#"><img src="extraimages/banner10.jpg" ></a></figure>
                    <div class="kd-serviceinfo">
                      <h2><a href="#">Maharaja SayajiRao University</a></h2>
                      <p>Maharaja Sayajirao University Founded By King Of Vadodara Sir Sayajirao Gayakwad.It Is International University Tie Up With Foreign Colleges Or Universities.</p>
                      <a href="msuniversity.php" class="kd-readmore thbg-colorhover">Read more</a>
                    </div>
                  </article>
                  <article class="col-md-6">
                    <figure><a href="#"><img src="extraimages/banner9.jpg" ></a></figure>
                    <div class="kd-serviceinfo">
                      <h2><a href="#">Science City</a></h2>
                      <p>Science City Is A Well Known Place Situated In Ahmedabad.You Can Feel Like A Technical World.Visit It Atleast Once.</p>
                      <a href="sciencity.php" class="kd-readmore thbg-colorhover">Read more</a>
                    </div>
                  </article>
                  <article class="col-md-6">
                    <figure><a href="#"><img src="extraimages/banner8.jpg" ></a></figure>
                    <div class="kd-serviceinfo">
                      <h2><a href="#">Pavagadh	</a></h2>
                      <p>Pavagadh Is A Very Popular Place 65Km Away From Vadodara. There Is A Temple Of MAA KALI.</p>
                      <a href="pavagadh.php" class="kd-readmore thbg-colorhover">Read more</a>
                    </div>
                  </article>
                </div>
              </div>
            </div>

          </div>
        </div>
      </section>

    <!-- jQuery (Necessary For JavaScript Plugins) -->
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
