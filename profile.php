<?php
session_start();
include('header.php');

 if(isset($_SESSION['p']['type'])){
        if($_SESSION['p']['type']=="admin"){
            echo '<div class="box">
			<center>
            <a href="manageusers.php">
            <div class="box_img"><img src="extraimages/manageUser.jpg"/></div>
            <div class="box_text">Manage Users</div>
            </a></center>
        </div>
			
        ';
        }
            echo '<center>
        <div class="box">
        <a href="changemypassword.php">
            <div class="box_img"><img src="extraimages/changePassword.jpg"/></div>
            <div class="box_text">Change My Password</div>

        </a></center>
    </div><center>
    <div class="box">
            <a href="user_profile.php">
            <div class="box_img"><img src="extraimages/profile.jpg"/></div>
            <div class="box_text">Manage Profile</div>
            </a></center>
        </div><center>
    <div class="box">
            <a href="p_logout.php">
            <div class="box_img"><img src="extraimages/logout.jpg"/></div>
            <div class="box_text">Logout</div>
            </a></center>
        </div>';
    }
    else{
        echo '<center><div class="box">
            <a href="login.php">
            <div class="box_img"><img src="extraimages/login.jpg"/></div>
            <div class="box_text">Login</div>
            </a></center>
        </div>';
    }
	?>