<?php
	include("header.php");
	
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Travel</title>

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

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    
    

  <body class="home">
<div class="kd-subheader">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="subheader-info">
              <h1>Tour Packages</h1>
            </div>
            <div class="kd-breadcrumb">
            </div>
          </div>
        </div>
      </div>
    </div>

	  <div class="clearfix"></div>
      <!--// Main Content //-->
	  <div class="col-md-4" style="margin:50px 35% 50px;">
              
              <div class="kd-bookingtab">

                <!-- Nav tabs -->
                <ul class="nav nav-tabs" role="tablist">
                  <li class="active"><a href="#home" aria-controls="home" role="tab" data-toggle="tab"><i class="fa fa-building"></i></a></li>
                  </li>
                </ul>

                <!-- Tab panes -->
                <div class="tab-content">
                  <div role="tabpanel" class="tab-pane active" id="home">
                    <div class="kd-booking-list"><h2>Book Hotel Here.</h2>
                      <ul>
                        <li><i class="fa fa-check-circle"></i> Want To Find Hotels..?</li>
                        <li><i class="fa fa-check-circle"></i> Than You Are On Right Place.</li>
                        <li><i class="fa fa-check-circle"></i>We Provides You Hotels As Your Requirements.</li>
                      </ul>
                    </div>
                    <div class="kd-bookingform">
                      <form class="kd-datepicker">
                        <ul>
                          <li>
                            <label>Destination</label>
                            <input type="text" placeholder="Enter place / regions">
                          </li>
                          <li>
                            <label>Arrival</label>
                            <div class="input-group input-append date" id="datePicker">
                                <input type="text" class="form-control" name="date" />
                                <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>
                            </div>
                          </li>
                          <li>
                            <label>Departure</label>
                            <div class="input-group input-append date" id="datePickerone">
                                <input type="text" class="form-control" name="date" />
                                <span class="input-group-addon add-on"><span class="fa fa-calendar"></span></span>
                            </div>
                          </li>
                        </ul>
                      </form>
                      <form class="kd-tourform">
                        <ul>
                          <li>
                            <span>Rooms</span>
                            <label>
                              <select>
                                <option>General Room</option>
                                <option>Delux Room</option>
                                <option>Semi-Delux Room</option>
                                
                              </select>
                            </label>
                          </li>
                          <li>
                            <span>PER ROOM</span>
                            <label>
                              <select>
                                <option>1 Adult</option>
                                <option>2 Adults</option>
                                <option>3 Adults</option>
                                <option>4 Adults</option>
                              </select>
                            </label>
                          </li>
                          <li>
                            <span></span>
                            <label>
                              <select>
                                <option>1 Children</option>
                                <option>2 Childrens</option>
                                <option>3 Childrens</option>
                                <option>4 Childrens</option>
                              </select>
                            </label>
                          </li>
                          <li>
                            <span>No. Of Rooms </span>
                            <label>
                              <select>
                                <option>1 </option>
                                <option>2 </option>
                                <option>3 </option>
                                <option>4 </option>
                              </select>
                            </label>
                          </li>
                          <li>
                            <input type="submit" value="search now" class="thbg-color">
                          </li>
                        </ul>
                      </form>
                    </div>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="profile">
                    <div class="kd-booking-list"><h2>Book hotel</h2>
                      <ul>
                        <li><i class="fa fa-check-circle"></i> No.1 for booking in our surroundings</li>
                        <li><i class="fa fa-check-circle"></i> No hidden costs</li>
                        <li><i class="fa fa-check-circle"></i> Attractive offers with price advantage</li>
                      </ul>
                    </div>
                    <div class="kd-bookingform">
                      <form class="kd-tourform">
                        <ul>
                          <li>
                            <span>Rooms</span>
                            <label>
                              <select>
                                <option>1 room</option>
                                <option>Your destination</option>
                                <option>Your destination</option>
                                <option>Your destination</option>
                              </select>
                            </label>
                          </li>
                          <li>
                            <span>per room</span>
                            <label>
                              <select>
                                <option>3 adults</option>
                                <option>3 adults</option>
                                <option>Your destination</option>
                                <option>Your destination</option>
                              </select>
                            </label>
                          </li>
                          <li>
                            <span></span>
                            <label>
                              <select>
                                <option>5 childrens</option>
                                <option>5 childrens</option>
                                <option>Your destination</option>
                                <option>Your destination</option>
                              </select>
                            </label>
                          </li>
                          <li>
                            <input type="submit" value="search now" class="thbg-color">
                          </li>
                        </ul>
                      </form>
                    </div>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="messages">
                    <div class="kd-booking-list"><h2>Book hotel</h2>
                      <ul>
                        <li><i class="fa fa-check-circle"></i> No.1 for booking in our surroundings</li>
                        <li><i class="fa fa-check-circle"></i> No hidden costs</li>
                        <li><i class="fa fa-check-circle"></i> Attractive offers with price advantage</li>
                      </ul>
                    </div>
                  </div>
                  <div role="tabpanel" class="tab-pane" id="settings">
                    <div class="kd-booking-list"><h2>Book hotel</h2>
                      <ul>
                        <li><i class="fa fa-check-circle"></i> No.1 for booking in our surroundings</li>
                        <li><i class="fa fa-check-circle"></i> No hidden costs</li>
                        <li><i class="fa fa-check-circle"></i> Attractive offers with price advantage</li>
                      </ul>
                    </div>
                    <div class="kd-bookingform">
                      <form class="kd-tourform">
                        <ul>
                          <li>
                            <span>Rooms</span>
                            <label>
                              <select>
                                <option>1 room</option>
                                <option>Your destination</option>
                                <option>Your destination</option>
                                <option>Your destination</option>
                              </select>
                            </label>
                          </li>
                          <li>
                            <span>per room</span>
                            <label>
                              <select>
                                <option>3 adults</option>
                                <option>3 adults</option>
                                <option>Your destination</option>
                                <option>Your destination</option>
                              </select>
                            </label>
                          </li>
                          <li>
                            <span></span>
                            <label>
                              <select>
                                <option>5 childrens</option>
                                <option>5 childrens</option>
                                <option>Your destination</option>
                                <option>Your destination</option>
                              </select>
                            </label>
                          </li>
                          <li>
                            <input type="submit" value="search now" class="thbg-color">
                          </li>
                        </ul>
                      </form>
                    </div>
                  </div>
                </div>

              </div>

            </div>
	 

    </div>
    <!--// Wrapper //-->

    <!-- jQuery (Necessary For JavaScript Plugins) -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.bxslider.min.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script src="js/waypoints-min.js"></script>
    <script src="js/jquery.countdown.js"></script>
    <script src="js/functions.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        var theDaysBox  = $("#numdays");
        var theHoursBox = $("#numhours");
        var theMinsBox  = $("#nummins");
        var theSecsBox  = $("#numsecs");
        
        var refreshId = setInterval(function() {
          var currentSeconds = theSecsBox.text();
          var currentMins    = theMinsBox.text();
          var currentHours   = theHoursBox.text();
          var currentDays    = theDaysBox.text();
          
          if(currentSeconds == 0 && currentMins == 0 && currentHours == 0 && currentDays == 0) {
            // if everything rusn out our timer is done!!
            // do some exciting code in here when your countdown timer finishes
            
          } else if(currentSeconds == 0 && currentMins == 0 && currentHours == 0) {
            // if the seconds and minutes and hours run out we subtract 1 day
            theDaysBox.html(currentDays-1);
            theHoursBox.html("23");
            theMinsBox.html("59");
            theSecsBox.html("59");
          } else if(currentSeconds == 0 && currentMins == 0) {
            // if the seconds and minutes run out we need to subtract 1 hour
            theHoursBox.html(currentHours-1);
            theMinsBox.html("59");
            theSecsBox.html("59");
          } else if(currentSeconds == 0) {
            // if the seconds run out we need to subtract 1 minute
            theMinsBox.html(currentMins-1);
            theSecsBox.html("59");
          } else {
              theSecsBox.html(currentSeconds-1);
            }
         }, 1000);
      });
      </script>
  </body>
</html>
<?php



	include("footer.php");
?>