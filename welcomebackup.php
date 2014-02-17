<?php
	SESSION_START();
	
	$user = $_SESSION['username'];
    $plan = $_SESSION['plan'];
    $con = mysqli_connect('68.178.143.9', 'QSDatabase', 'Group2!!!', 'QSDatabase');
    $result = mysqli_query($con, "SELECT User_Name FROM UserInfo WHERE User_Name='$user'");
    $count = mysqli_num_rows($result);
    
    //Member since:
    
    $memberSince = mysqli_query($con, "SELECT Member_Since FROM UserInfo WHERE User_Name='$user'");
    while ($row = mysqli_fetch_array($memberSince))
            {
                $printableDate = $row['Member_Since'];
            }
    
    //echo $memberSince;
   
			//if the user exists, update their data, and create a new data row if the user does not exist
			if ($count == 1)
			{
                
				mysqli_query($con, "UPDATE countMoney SET number= '$money' WHERE User_name = '$user'");
			} else {
				exit;
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
			} else {
				mysqli_query($con, "INSERT INTO countMoney (User_name, number) VALUES ('$user', '$money')");
			}

			$result = mysqli_query($con, "SELECT User_Name FROM SmokingInfo WHERE User_Name='$user'");
			$count = mysqli_num_rows($result);
			mysqli_query($con, "INSERT INTO UserInfo (User_Name, Number, Date) VALUES ('$user', '$number', '$date')");
			mysqli_close($con); 
            
		}
	}

?>
<!DOCTYPE html>
<html>
    <head>
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
        <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
        <script type="text/javascript" src= "javascript/javascript.js"></script>

    </head>
    <body>

        <div data-role="page" id="countSmoking">
            <div data-role="header">
                <a href= "index.php" data-icon="home" data-iconpos="notext"></a>
  				<h1>Quit Smoking</h1>
 				            </div>
            <div data-role="content">
               
               <!--Member since info -->
                <p>Member Since: <?php echo $printableDate; ?></p>
                
        		<p>Hi, <?php echo $user;?></p>
        		<p>Your Plan: <?php echo $plan; ?></p>
            <!--<form action="demo_form.asp" method="POST">-->
            <form method="POST" action="welcome.php">
   				<label for="number">Enter the number of cigarettes: </label><input type="text" id="number" name="number" value="0" onchange="change()">
                <input type="button" id="DIFFERENTplus" value="Plus" data-inline="true" onclick="add()">
                <input type="button" id="DIFFERENTsubstract" value="Subtract" data-inline="true" onclick="minus()">
                <p id="display_money" style="color: red"></p>
                <p><?php echo $date;?></p>
                <input type="submit" data-inline="true" name="save" value="Save">
            </form> 
            </div> 
            <div data-role="footer">
                <div data-role="content" align="center">
  					<a href="#" data-transition = "slide" data-role="button" data-inline = "true" data-icon="star">Information</a>
  					<a href="#" data-transition = "slide" data-role="button" data-inline = "true" data-icon="gear">Setting</a>
  				</div>
            </div>
        </div>
        
		<div data-role="page" id="countMoney">
            <div data-role="header">
  				<h1>Quit Smoking</h1>
 				<a href="#" data-transition = "slide" data-role="button" data-icon="gear" data-iconpos="notext"></a>
            </div>
            <div data-role="content">
        		<h2>Hi, </h2>
        		<h2>Your Plan: </h2>
        		
            </div> 
            <div data-role="footer">
                <div data-role="content" align="center">
  					<a href="#" data-transition = "slide" data-role="button" data-inline = "true" data-icon="star">Plan</a>
  					<a href="#" data-transition = "slide" data-role="button" data-inline = "true" data-icon="grid">List</a>
  					<a href="#" data-transition = "slide" data-role="button" data-inline = "true" data-icon="gear">Setting</a>
  				</div>
            </div>
        </div>
      
    </body>
</html>	