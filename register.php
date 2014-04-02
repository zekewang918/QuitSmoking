<?php
	#
	# @author Group 2
	#
	# In order to have the register page display errors when users do not enter information
	# or entered information wrong, we created these variables and set them empty string. They
	# will be assigned to a specific error message when that filed was misconfigured.
	#
	# @param String $fname_error
	# @param String $lname_error
	# @param String $username_error
	# @param String $password_error
	# @param String $repeatpass_error
	# @param String $email_error
	
    $fname_error = '';
    $lname_error ='';
    $username_error = '';
    $password_error = '';
    $repeatpass_error = '';
    $email_error = '';
    
    #
    # the variable $validate is used to check if user entered every form element correctly
    #
    # @param boolean $validate
    
    $validate = true;
    
    #
    # $con variable is to set up the connection between the php sever and the database server
    #
    
    $con = mysqli_connect('68.178.143.9', 'QSDatabase', 'Newgroup2!', 'QSDatabase');
    
    #
    # the if statement is triggerd when the user clicks a submmit button.
    #
    # @global array $_SERVER[]
    
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
	
		#
		# if the register button was clicked, the following code will run
		#
		# @global array $_POST[]
		
		if (isset($_POST['register']))
		{
		
			#
			# the following variables are created to get the information that users entered 
			# in the form by using the $_POST superglobal and stored those information.
			#
			# @param String $fname
			# @param String $lname
			# @param String $username
			# @param String $password
			# @param String $re_password
			# @param String $email
			# @param String $plan
		
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$username = $_POST['username'];
			$password = $_POST['password'];
        	$re_password = $_POST['re_password'];
			$email = $_POST['email'];
            $plan = $_POST['plan'];
            
            #
            # if statement checks if the first name field in the form is emtpy
            #
            
            if (empty($fname))
            {
                $fname_error = "Please enter your first name!";
                $validate = false;
            }
            
            #
            # if statement checks if the last name field in the form is emtpy
            #
            
            if (empty($lname))
            {
                $lname_error = "Please enter your last name!";
                $validate = false;       
            }
            
            #
            # if statement checks if the username field in the form is emtpy
            #
            
            if (empty($username))
            {
                $username_error = "Please enter your username!";
                $validate = false;
            }
            
            #
            # if statement checks if the password field in the form is emtpy
            #
            
            if (empty($password))
            {
                $password_error = "Please enter your password!";
                $validate = false;
            }
            
            #
            # if statement checks if the retype password field in the form is emtpy or is
            # different from the password
            #
            
            if (empty($re_password))
            {
                $repeatpass_error = "Please repeat your password!";
                $validate = false;
            } else if (strcmp($password, $re_password) != 0)
            {
                $repeatpass_error = "Two passwords do not match!";
                $validate = false;
            }
            
            #
            # if statement checks if the email field in the form is emtpy
            #
            
            if (empty($email))
            {
                $email_error = "Please enter your email!";
                $validate = false;
            }
            
            #
            # We perform a database query search on the username that the user entered to check if the
            # current database coexists the same username. If no, write the information into the UserIno
            # table in the database.
            #
            # @param String $memberSince
            
            $memberSince = date("Y-m-d H:i:s");
			$result = mysqli_query("SELECT User_Name FROM UserInfo WHERE User_Name='$username'");
			if ($validate)
			{
				if (!$result)
				{
					mysqli_query($con, "INSERT INTO UserInfo (First_Name, Last_Name, User_Name, Password, Email, Plan, Member_Since) VALUES ('$fname', '$lname', '$username', '$password', '$email', '$plan', '$memberSince')");
                    header('Location: index.php');
				}
			} else {
			}
		}
	}
	
	#
	# close the datbase connection at the end of the script
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
    </head>
    
    <body>
    
    	<!-- This is the main page that is displayed on the browser, which contains a header,
    	     a content section, and a footer. -->
    	     
        <div data-role="page" id="register">
            <div data-role="header">
                <h1>Register</h1>
            </div>
            
            <!-- The content page mainly consists several input fields that users can enter. A submit
                 button is to submit the whole form to the server. Each element is appened with a php tag,
                 which echos the error message when necessary. -->
    	     
            <div data-role="content">
                <form method="POST" action="#" data-ajax="false">
                    <div data-role="fieldcontain">
						<label for="fname">First Name:</label>
                        <input type="text" name="fname" id="fname" value=""><p style="color: red"><?php echo $fname_error; ?></p>
						<label for="lname">Last Name:</label>
                        <input type="text" name="lname" id="lname"><p style="color: red"><?php echo $lname_error; ?></p>
                        <label for="username">Username:</label>
                        <input type="text" name="username" id="username"><p style="color: red"><?php echo $username_error; ?></p>
                        <label for="password">Password:</label>
                        <input type="password" name="password" id="password"><p style="color: red"><?php echo $password_error; ?></p>
                        <label for="password">Repeat-Password:</label>
                        <input type="password" name="re_password" id="re_password"><p style="color: red"><?php echo $repeatpass_error; ?></p>
                        <label for="email">Email:</label>
                        <input type="email" name="email" id="email"><p style="color: red"><?php echo $email_error; ?></p>
            			<label for="day">Plan:</label>
                        <select name="plan" id="plan">
                            <option value="Health Focused">Health Focused</option>
                            <option value="Money Focused">Money Focused</option>
                        </select>
                    </div>
                <input type="submit" data-inline="true" data-ajax="false" name="register" value="Register">
                <a href="index.php" data-transition = "slide" data-inline="true" data-role="button">Back</a>
                </form>
            </div>
            
           <div data-role="footer">
                <div data-role="content">    
      			</div>
            </div>
      </div>  
    </body>
</html>