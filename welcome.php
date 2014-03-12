<?php

	#
	# Session_start() enables the webpage to have session data that can be used/accessed from
	# page to page.  
	#
	
    SESSION_START();

	$user = $_SESSION['username'];
    $plan = $_SESSION['plan'];
    
    #
    # $con variable is to set up the connection between the php sever and the database server
    #
    
    $con = mysqli_connect('68.178.143.9', 'QSDatabase', 'Group2!!!', 'QSDatabase');
    $result = mysqli_query($con, "SELECT User_Name FROM UserInfo WHERE User_Name='$user'");
    $count = mysqli_num_rows($result);
    
	#
	# if the user stored in the session data is in the database, then update their money status,
	# and print out a blank page if user tries to access to this page by simply typing the url.
	#
	
	if ($count == 1)
	{            
		mysqli_query($con, "UPDATE countMoney SET number= '$money' WHERE User_name = '$user'");
	} else {
		exit;
	}
	
    #
    # $memberSince pulls the date from the database and converts into an associative array.
    #
    
    $warning = '';
    $memberSince = mysqli_query($con, "SELECT Member_Since FROM UserInfo WHERE User_Name='$user'");
    while ($row = mysqli_fetch_array($memberSince))
    {
        $printableDate = $row['Member_Since'];
    }
    
    #
    # $myRandom generates a random number from 1 to the numebr of rows returned from the query search
    # and then pulls out the fact that coresponds to the random number. 
    #
          
    $numQuery = mysqli_query($con, "SELECT * FROM SmokingFacts");
    $numFacts = mysqli_num_rows($numQuery);
    $myRandom = rand(1, $numFacts);
    $query = "SELECT Fact FROM SmokingFacts WHERE id = $myRandom";
    $fact = mysqli_query($con, $query);
    $printableFact = '';
    while ($row = mysqli_fetch_array($fact))
    {
        $printableFact = $row['Fact'];
    }
    
    #
    # $result perfoms a query search on the user's smoking information and then forms a html
    # table that has user's first name, last name, number of cigaretts, and the date.
    #
       
    $result = mysqli_query($con, "SELECT * FROM SmokingInfo WHERE User_Name = '$user'");
    
    $output = "<table border='1'>
	<tr>
	<th>Firstname</th>
	<th>Lastname</th>
	<th>Number</th>
	<th>Date</th>
	</tr>";
    $limit = '';
    while($row = mysqli_fetch_assoc($result))
  	{ 
  		$output.= "<tr>".
  		"<td>" . $row['First_Name'] . "</td>".
  		"<td>" . $row['Last_Name'] . "</td>".
  		"<td>" . $row['Number'] . "</td>".
  		"<td>" . $row['Date'] . "</td>".
  		"</tr>";
        $limit = $row['Number'];
  	}
	$output.="</table>";
    $_SESSION['output'] = $output;
    
    #
    # if the limit is smaller than 1, then an encouraging statement is sent. If not, displays
    # the user's smoking status/process, and limit the number of cigarettes they can smoke this
    # time.
    #
    
    $msg = "";
    if ($limit <= 1)
    {
        $msg = "You had $limit cigarette yesterday! You are very close to success!";
    } else {
        $msg = "You had $limit cigaretts yesterday!";
        $limit--;
        $msg .= " Today you can only have $limit cigarettes!";
    }
    $firstname = $_SESSION['firstname'];
    
    #
    # the if statement is triggerd when the user clicks a submmit button.
    #
    
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		
		#
		# if the save button was clicked, the following code will run
		#
		
		if (isset($_POST['save']))
		{
		
			#
			# The following variables are created to store the amount of money and the number of cigarettes that
			# the user consumes and store them in the database.
			#
			
			$money = $_POST['number'] * 2;
			$number = $_POST['number'];
			$date = date("Y-m-d H:i:s");
			$result = mysqli_query($con, "SELECT User_name FROM countMoney WHERE User_name='$user'");
			$count = mysqli_num_rows($result);
			
			#
			# If the user exists, then update their information in the database, or insert their information
			# into the database if they do not.
			#
			
			if ($count == 1)
			{
				mysqli_query($con, "UPDATE countMoney SET number= '$money' WHERE User_name = '$user'");
                mysqli_query($con, "UPDATE SmokingInfo SET Number = '$number' WHERE User_Name = '$user'");
                $msg = ""; 
			} else {
				mysqli_query($con, "INSERT INTO countMoney (User_name, number) VALUES ('$user', '$money')");
                mysqli_query($con, "INSERT INTO SmokingInfo (User_Name, First_Name, Last_Name, Number, Date) VALUES ('$user', '$firstname', '$lastname', '$number', '$date')");
			}
			
			#
			# The following section perfoms a database search on the user in the SmokingInfo table and insert them into
			# the SmokingInfo table.
			#
			
			$result = mysqli_query($con, "SELECT User_Name FROM SmokingInfo WHERE User_Name='$user'");
			$count = mysqli_num_rows($result);
            $firstname = $_SESSION['firstname'];
            $lastname = $_SESSION['lastname'];
			mysqli_query($con, "INSERT INTO SmokingInfo (User_Name, First_Name, Last_Name, Number, Date) VALUES ('$user', '$firstname', '$lastname', '$number', '$date')");
        
		}
		
		        
        #
        # when the plus button is clicked, the page will get the number in the textbox and checks if it is larger
        # than the value in the database. If not, it performs addition. Otherwise, it displays the warning message.
        #
        
        if (isset($_POST['plus']))
        {
            $display_num = $_POST['number'];
            if ($display_num < $limit)
            {
                $display_num++;
            } else {
                $display_num = '';
                $warning = "You cannot have more!";
            }
            
        }
        
        #
        # when the minus button is clicked, the page will get the number in the textbox and checks if it is greater
        # than zero. If yes, it performs substraction.
        #
        
        if (isset($_POST['minus']))
        {
            $display_num = $_POST['number'];
            if ($display_num > 0)
            {
                $display_num--;
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
    </head>
    
    <body>
    
    	<!-- This is the main page that is displayed on the browser, which contains a header,
    	     a content section, and a footer. -->
    	     
        <div data-role="page" id="countSmoking">
            <div data-role="header">
                <a href= "index.php" data-icon="home" data-iconpos="notext"></a>
                <a href= "http://www.healthycanadians.gc.ca/health-sante/tobacco-tabac/quit-arretez-eng.php" value = "Search">Get Help</a>
  				<h1>Quit Smoking</h1>
 		    </div>
 		    
 		    <!-- The content page displays the date that the user registered, user's first name,
 		         plan, a system quiting smoking fact, and a textbox that he/she can enter the number
 		         of cigarettes they want to smoke daily. -->
    	     
            <div data-role="content">
                <p>Member Since: <?php echo $printableDate;?></p>
        		<p>Hi, <?php echo $firstname;?></p>
        		<p>Your Plan: <?php echo $plan; ?></p>
                <p>Your Fact: <?php echo $printableFact; ?></p>
            	<form method="POST" action="welcome.php">
   					<label for="number">Enter the number of cigarettes: </label><input type="text" id="number" name="number" value="<?php echo $display_num; ?>" placeholder="<?php echo $warning; ?>" />
                	<p style="color: red"><?php echo $msg;?></p>
                	<input type="submit" name = "plus" value="Plus" data-inline="true">
                	<input type="submit" name="minus" value="Subtract" data-inline="true">
                	<p id="display_money" style="color: red"></p>
                	<p style="color:red"><?php echo $date;?></p>
                	<input type="submit" data-inline="true" name="save" value="Save">
            	</form> 
            </div>
            
        	<!-- The footer division displays the options that users can select, which includes history, information, and setting. -->
            
            <div data-role="footer">
                <div data-role="content" align="center">
                    <a href="history.php" data-transition = "slide" data-role="button" data-inline = "true" data-icon="info">History</a>
  					<a href="#" data-transition = "slide" data-role="button" data-inline = "true" data-icon="star">Information</a>
  					<a href="#" data-transition = "slide" data-role="button" data-inline = "true" data-icon="gear">Setting</a>
  				</div>
            </div>
        </div>
    </body>
</html>	