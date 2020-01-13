<?php
session_start();
    if(isset($_SESSION['p'])){
        unset($_SESSION['p']);
        echo "Logout Successes";
		header("location:index.php");
    }
    else{
        echo "Login First";
    }
?>