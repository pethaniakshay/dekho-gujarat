<?php
	session_start();
	include("header.php");
	
?>   
<link href="css/button.css" rel="stylesheet">
   <?php

        //admin privilage setting here
        $con=mysqli_connect("localhost","root","","display_images");
        if (!mysqli_connect_errno()){
            if($result = mysqli_query($con,"select user_name,email,type from user_master"))
            {
                echo "<h1>Manage User</h1>";
                echo "<table border=1 >";
                echo "<tr><th>User Name</th><th>Email</th><th>Type</th><th colspan='3'>Action</th></tr>";

                while($row = mysqli_fetch_array($result)) {
                    $user_name = $row['user_name'];
                    $email = $row['email'];
                    $type = $row['type'];
                    echo "<tr><td style='width: 200px;'>".$user_name."</td><td style='width: 600px;'>".$email."</td><td>".$type."</td>" .
                        "<td><a href=\"p_delete_user.php?user_name=$user_name\" >Delete</a></td> " .
                        "<td><a href=\"p_modify_user_type.php?user_name=$user_name&type=";
                    if($type=="user"){
                        echo "admin";
                    }
                    else{
                        echo "user";
                    }
                    echo "\" >";
                    if($type=="user"){
                        echo "Make Admin";
                    }
                    else{
                        echo "Make User";
                    }
                    echo "</a> </td>" .
                        "<td><a href=\"p_reset_user_password.php\?user_name=$user_name\">Reset Password</a></td></tr>";
                }
                echo "</table>";
            }
            else{
                echo "MySqli Error:".mysqli_error($con);
            }

        }
        else{
            echo "Failed to connect to MySQL: " . mysqli_connect_error()." <br> ";
        }

    ?>
    <form action="p_register.php" method="get">
        <h3>New User</h3>
        <table>
            <tr>
                <td>
                    User Name :
                </td>
                <td>
                    <input type="text" name="user_name" required="true">
                </td>
            </tr>
            <tr>
                <td>
                    E-Mail :
                </td>
                <td>
                    <input type="email" name="email" required="true">
                </td>
            </tr>
            <tr>
                <td>
                    Password :
                </td>
                <td>
                    <input type="password" name="password" required="true">
                </td>
            </tr>
            <tr>
                <td>
                    Type :
                </td>
                <td>
                    <select name="type" style="width:17.3%">
						
                        <option value="admin">Admin</option>
                        <option value="user">User</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td></td>
                <td><br>
                    <input type="submit" value="Register" class="button" style="border-radius:5px">
                </td>
            </tr>
        </table>
    </form>
<?php
include("footer.php");
?>