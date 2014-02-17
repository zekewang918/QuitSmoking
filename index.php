<?php

	SESSION_START();
		
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
        $con = mysqli_connect('68.178.143.9', 'QSDatabase', 'Group2!!!', 'QSDatabase');
		if (isset($_POST['register']))
		{
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$username = $_POST['username'];
			$password = $_POST['password'];
			$email = $_POST['email'];
            $plan = $_POST['plan'];
		
			$result = mysqli_query("SELECT User_Name FROM UserInfo WHERE User_Name='$username'");
		
			if (!$result)
			{
				mysqli_query($con, "INSERT INTO UserInfo (First_Name, Last_Name, User_Name, Password, Email, Plan) VALUES ('$fname', '$lname', '$username', '$password', '$email', '$plan')");

			} else {
    		 //user name exists   
			}
		}
		
		if (isset($_POST['login']))
		{ 
            $username_login = $_POST['username_login'];
    		$password_login = $_POST['password_login'];
    		$check_user = mysqli_query($con, "SELECT * FROM UserInfo WHERE User_Name='$username_login' AND Password='$password_login'");
            $first_name = '';
            $plan = '';

            while ($row = mysqli_fetch_array($check_user))
			{
				$first_name = $row['First_Name'];
			}
    		$_SESSION['username'] = $first_name;
            $check_plan = mysqli_query($con, "SELECT * From UserInfo WHERE User_Name='$username_login' AND Password='$password_login'");
            while ($row = mysqli_fetch_array($check_plan))
            {
                $plan = $row['Plan'];
            }

            $_SESSION['plan'] = $plan;
			$count = mysqli_num_rows($check_user);
			if ($count == 1)
			{
				header("Location: welcome.php");
			} else {
				echo "Wrong username or password!";
			}
			
		}  

        mysqli_close($con);
		
	}	

?>

<!DOCTYPE html>
<html>
    <head>
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
        <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
        <script type="text/javascript" src="javascript/javascript.js"></script>

    </head>
    <body>

        <div data-role="page" id="login">
            <div data-role="header">
                <a href="#" data-role="button" data-icon="home" data-iconpos="notext"></a>
  				<h1>Welcome</h1>
 				<a href="#" data-role="button" data-icon="search" data-iconpos="notext"></a>
            </div>
            
            <div data-role="content">
                <form method="POST" action="#">
                    <div data-role="fieldcontain">
                        <label for="username">Username:</label>
                        <input type="text" name="username_login" id="username">
                        <label for="password">Password:</label>
                        <input type="password" name="password_login" id="password">
                    </div>
                
                <input type="submit" data-inline="true" name="login" value="Login">
                <a href="#register" data-inline="true" data-role="button">Register</a>
                </form>
            </div>
            
            <div data-role="footer">
                <div data-role="content">
  					<a href="#" data-role="button" data-inline = "true" data-icon="star">Plan</a>
  					<a href="#" data-role="button" data-inline = "true" data-icon="grid">List</a>
  					<a href="#" data-role="button" data-inline = "true" data-icon="gear">Setting</a>
  				</div>
            </div>
        </div>

        <div data-role="page" id="List">
            <div data-role="header">
                <h1>Quit Smoking!</h1>
            </div>
            
            <div data-role="content">
                <a href="register">Register</a>
            </div>
            

            <div data-role="footer">
                <h1>Insert Footer Text Here</h1>
            </div>
        </div> 

        <div data-role="page" id="register">
            <div data-role="header">
                <h1>Register</h1>
            </div>
            
            <div data-role="content">
                <form method="POST" action="#register">
                    <div data-role="fieldcontain">
						<label for="fname">First Name:</label>
                        <input type="text" name="fname" id="fname" value=""><p style="color: red" id="display_fname"></p>
						<label for="lname">Last Name:</label>
                        <input type="text" name="lname" id="lname"><p style="color: red" id="display_lname"></p>
                        <label for="username">Username:</label>
                        <input type="text" name="username" id="username"><p style="color: red" id="display_userName"></p>
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password"><p style="color: red" id="display_password"></p>
                        <label for="password">Repeat-Password:</label>
                        <input type="password" name="re_password" id="re_password" placeholder="Please retype password"><p style="color: red" id="display_re_password"></p>
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email" placeholder="Your email address"><p style="color: red" id="display_email"></p>
            			<label for="day">Plan:</label>
                        <select name="plan" id="plan">
                            <option value="Healthy Counter">Healthy Counter</option>
                            <option value="Money Saver">Money Saver</option>
                        </select>
                    </div>
                <input type="submit" data-inline="true" data-ajax="false" name="register" value="Register" onclick=" return test()">
                <input type="button" data-inline="true" data-ajax="false" name="back" value="Back" onclick="history.go(-1); return true;">
                </form>
            </div>
            
            <div data-role="footer">
                
            </div>
        </div>

      
    </body>
</html>