<?php
    SESSION_START();

	$user = $_SESSION['username'];
    $plan = $_SESSION['plan'];
    $con = mysqli_connect('68.178.143.9', 'QSDatabase', 'Group2!!!', 'QSDatabase');
    $result = mysqli_query($con, "SELECT User_Name FROM UserInfo WHERE User_Name='$user'");
    $count = mysqli_num_rows($result);
    
    //Member since:
    $display_num = 0;
    $warning = '';
    $memberSince = mysqli_query($con, "SELECT Member_Since FROM UserInfo WHERE User_Name='$user'");
    while ($row = mysqli_fetch_array($memberSince))
            {
                $printableDate = $row['Member_Since'];
            }
            
    $numQuery = mysqli_query($con, "SELECT * FROM SmokingFacts");
    $numFacts = mysqli_num_rows($numQuery);
    $myRandom = rand(0, $numFacts);
    $fact = mysqli_query($con, "SELECT Facts FROM SmokingFacts WHERE 'index' ='0'");
    $hehe = mysqli_num_rows($fact);
    $printableFact = '';
    while ($row = mysqli_fetch_array($fact))
    {
        $printableFact = $row['Facts'];
    }
    
    //echo $memberSince;
   
			//if the user exists, update their data, and create a new data row if the user does not exist
			if ($count == 1)
			{
                
				mysqli_query($con, "UPDATE countMoney SET number= '$money' WHERE User_name = '$user'");
			} else {
				exit;
			}
            
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
    $msg = "";
    if ($limit <= 1)
    {
        $msg = "You had $limit cigarette yesterday! You are very close to success!";
    } else {
        $msg = "You had $limit cigaretts yesterday!";
        $limit--;
        $msg .= " Today you can only have $limit cigarettes!";
    }
    
	if ($_SERVER['REQUEST_METHOD'] == 'POST')
	{
		if (isset($_POST['save']))
		{
			$con = mysqli_connect('68.178.143.9', 'QSDatabase', 'Group2!!!', 'QSDatabase');
			$money = $_POST['number'] * 2;
			$number = $_POST['number'];
			$date = date("Y-m-d H:i:s");
			$result = mysqli_query($con, "SELECT User_name FROM countMoney WHERE User_name='$user'");
			$count = mysqli_num_rows($result);
			if ($count == 1)
			{
				//mysqli_query($con, "UPDATE countMoney SET number= '".$money."' WHERE User_name = '".$user."'");
				mysqli_query($con, "UPDATE countMoney SET number= '$money' WHERE User_name = '$user'");
                    	mysqli_query($con, "UPDATE SmokingInfo SET Number = '$number' WHERE User_Name = '$user'");
                        $msg = "";
                
			} else {
				mysqli_query($con, "INSERT INTO countMoney (User_name, number) VALUES ('$user', '$money')");
                    	mysqli_query($con, "INSERT INTO SmokingInfo (User_Name, First_Name, Last_Name, Number, Date) VALUES ('$user', '$firstname', '$lastname', '$number', '$date')");
			}

			$result = mysqli_query($con, "SELECT User_Name FROM SmokingInfo WHERE User_Name='$user'");
			$count = mysqli_num_rows($result);
            $firstname = $_SESSION['firstname'];
            $lastname = $_SESSION['lastname'];
			mysqli_query($con, "INSERT INTO SmokingInfo (User_Name, First_Name, Last_Name, Number, Date) VALUES ('$user', '$firstname', '$lastname', '$number', '$date')");
        
		}
        if (isset($_POST['plus']))
        {
            $display_num = $_POST['number'];
            if ($display_num < $limit)
            {
                $display_num++;
            }else {
                $display_num = '';
                $warning = "You cannot have more!";
            }
            
        }
        if (isset($_POST['minus']))
        {
            $display_num = $_POST['number'];
            if ($display_num > 0)
            {
                $display_num--;
            }
        }
	}
 //   $con = mysql_connect('68.178.143.9', 'QSDatabase', 'Group2!!!', 'QSDatabase');

	mysqli_close($con);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
        <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
<!--        <script type="text/javascript" src= "javascript/javascript.js"></script>-->

    </head>
    <body>

        <div data-role="page" id="countSmoking">
            <div data-role="header">
                <a href= "index.php" data-icon="home" data-iconpos="notext"></a>
                
                <a href= "http://www.healthycanadians.gc.ca/health-sante/tobacco-tabac/quit-arretez-eng.php" value = "Search">Get Help</a>

  				<h1>Quit Smoking</h1>
 		    </div>
            <div data-role="content">
               
               <!--Member since info -->
                <p>Member Since: <?php echo $printableDate;?></p>
                
        		<p>Hi, <?php echo $user;?></p>
        		<p>Your Plan: <?php echo $plan; ?></p>
                <p>Your Fact: <?php echo $printableFact; echo $hehe;?></p>
            <!--<form action="demo_form.asp" method="POST">-->
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
            <div data-role="footer">
                <div data-role="content" align="center">
                    <a href="history.php" data-transition = "slide" data-role="button" data-inline = "true" data-icon="info">History</a>
  					<a href="info.html" data-transition = "slide" data-role="button" data-inline = "true" data-icon="star">Information</a>
  					<a href="#" data-transition = "slide" data-role="button" data-inline = "true" data-icon="gear">Setting</a>
  				</div>
            </div>
        </div>

    </body>
</html>