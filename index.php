<?php
	#
	# @author Group 2
	# Session_start() enables the webpage to have session data that can be used/accessed from
	# page to page.  
	#
	# @param boolean SESSION_START()
	
	SESSION_START();
	
	#
    # $con variable is to set up the connection between the php sever and the database server
    #
    # @param boolean $_SESSION['status']
    #

    $_SESSION['status'] = false;
	$con = mysqli_connect('68.178.143.9', 'QSDatabase', 'Newgroup2!', 'QSDatabase');
	
	#
    # the if statement is triggerd when the user clicks the submmit button.
    #
    # @global array $_SERVER[]
    
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
	
		#
		# if the login button was clicked, the following code will run
		#
		# @global array $_POST[]
		
		if (isset($_POST['login']))
		{ 
		
			#
			# $username_login and $password_login are created to get the username and password that users entered 
			# in the form by using the $_POST superglobal and stored those information. Then $check_user performs a 
			# query search with the combination of the username and password to see if the user is registered.
			#
			# @param String $username_login
			# @param String $password_login
			
            $username_login = $_POST['username_login'];
    		$password_login = $_POST['password_login'];
    		$check_user = mysqli_query($con, "SELECT * FROM UserInfo WHERE User_Name='$username_login' AND Password='$password_login'");
            
            #
            # The following code section creates 3 different variables that store a user's first name, last name, and plan.
            # These information is retrieved by fetching a query result into an associative array and then store these data 
            # into the variables created before.
            #
            # @param String $first_name
            # @param String $last_name
            # @param String $plan
            
            $first_name = '';
            $last_name = '';
            $plan = '';
            while ($row = mysqli_fetch_array($check_user))
			{
                $user_name = $row['User_Name'];
				$first_name = $row['First_Name'];
                $last_name = $row['Last_Name'];
			}
			
			#
			# these data are also stored in sessions for the purpose of accessing them in welcome.php page.
			#
			
            $_SESSION['username'] = $user_name;
    		$_SESSION['firstname'] = $first_name;
            $_SESSION['lastname'] = $last_name;
            
            $check_plan = mysqli_query($con, "SELECT * From UserInfo WHERE User_Name='$username_login' AND Password='$password_login'");
            while ($row = mysqli_fetch_array($check_plan))
            {
                $plan = $row['Plan'];
            }
            $_SESSION['plan'] = $plan;
            
            #
            # The $count variable counts the number of rows that the query search returned. If the user is registered,
            # the query search should yeild one row. The page will be redirected to welcome.php if user successfully logged
            # in.
            #
            # @param int $count
            #
            
			$count = mysqli_num_rows($check_user);
			if ($count == 1)
			{
				header("Location: welcome.php");
                $_SESSION['status'] = true;
			} else {
				echo "Wrong username or password!";
			}
		}  
	}
	
	#
	# mysqli_close() closes the databse connection
	#
	
	mysqli_close($con);
?>

<!DOCTYPE html>
<html>

	<!-- Header tags consists of all the links and libaries that is used in this website -->
	
    <head>
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
        <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
        
        <!-- CSS styling -->
        <style>

        .smoke {
       
         height = "10%";
         width = "10%";
         margin-left = "30%";
        }
        .ui-body-i
{
font-weight:bold;
color:white;
background-color: #66CCFF;
}

        </style>
    </head>
    
    
    <body class = "body">
    
    	<!-- This is the main page that is displayed on the browser, which contains a header,
    	     a content section, and a footer. -->
    	     
        <div data-role="page" id="login" data-theme="i">
            <div data-role="header">
  				<h1>Quit Smoking</h1>
            </div>
            
            <!-- The content section contains a small form that has only a username field, a password
                 field, a submit button, and a register button. 
    	      
            <div data-role="content">
            
            <!-- quit smoking image -->
           <img src = "/img/smoking.jpg" class = "smoke"/>
           
                <form method="POST" action="#" data-ajax="false">
                    <div data-role="fieldcontain">
                        <label for="username">Username:</label>
                        <input type="text" name="username_login" id="username">
                        <label for="password">Password:</label>
                        <input type="password" name="password_login" id="password">
                    </div>  
                <input type="submit" data-inline="true" name="login" value="Login" data-theme = "b">
                <a href="register.php" data-transition = "slide" data-inline="true" data-role="button" data-theme = "b">Register</a>
                </form>
            </div>
            
            <div data-role="footer" data-position = "fixed">
                <div data-role="content">
  				</div>
            </div>
        </div>
    </body>
</html>