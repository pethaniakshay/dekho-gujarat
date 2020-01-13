

<?php
    if(isset($_SESSION['s']['type'])){
        if($_SESSION['s']['type']=="admin"){
            echo '<div class="box">
            <a href="manageusers.php">
            <div class="box_img"><img src="img/manageUser.png"/></div>
            <div class="box_text">Manage Users</div>
            </a>
        </div>
        <div class="box">
            <a href="create_event.php">
            <div class="box_img"><img src="img/event.png"/> </div>
            <div class="box_text">Create Event</div>
            </a>
        </div>
        ';
        }
            echo '
        <div class="box">
        <a href="changemypassword.php">
            <div class="box_img"><img src="img/changePassword.png"/></div>
            <div class="box_text">Change My Password</div>

        </a>
    </div>
    <div class="box">
            <a href="managemyprofile.php">
            <div class="box_img"><img src="img/profile.png"/></div>
            <div class="box_text">Manage Profile</div>
            </a>
        </div>
    <div class="box">
            <a href="p_logout.php">
            <div class="box_img"><img src="img/logout.png"/></div>
            <div class="box_text">Logout</div>
            </a>
        </div>';

    }
    else{
        echo '<div class="box">
            <a href="login.php">
            <div class="box_img"><img src="img/login.png"/></div>
            <div class="box_text">Login</div>
            </a>
        </div>';
    }
	?>