<?php
	SESSION_START();
	$con = mysqli_connect('68.178.143.9', 'QSDatabase', 'Group2!!!', 'QSDatabase');
	$user = $_SESSION['username'];
	$data = mysqli_query($con, "SELECT * From SmokingInfo WHERE User_Name='$user'");
    
	$numbers= array();
	while ($row = mysqli_fetch_array($data))
    {
        $numbers[] = $row['Number'];
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
		<script type="text/javascript" src="https://www.google.com/jsapi"></script>
		<script type="text/javascript">
		  google.load("visualization", "1", {packages:["corechart"]});
		  google.setOnLoadCallback(drawChart);
		  
		  var day1= parseInt("<?php echo $numbers[0]; ?>");
		  var day2= parseInt("<?php echo $numbers[1]; ?>");
		  var day3= parseInt("<?php echo $numbers[2]; ?>");
		  var day4= parseInt("<?php echo $numbers[3]; ?>");
		  
		  console.log(day1, day2, day3, day4);
		  function drawChart() {
			var data = google.visualization.arrayToDataTable([
			  ['Date', 'Consumption', 'Limit'],
			  ['March 1st',  day1,      11],
			  ['March 2nd',  day2,      11],
			  ['March 3rd',  day3,      10],
			  ['March 4th',  day4,      10]
			]);

			var options = {
			  title: 'Daily consumption four last days',
			  hAxis: {title: 'Date', titleTextStyle: {color: 'Black'}}
			};

			var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
			chart.draw(data, options);
		  }
		</script>

    </head>
    <body>

        <div data-role="page" id="login">
            <div data-role="header">
                <a href="#" data-role="button" data-icon="home" data-iconpos="notext"></a>
  				<h1>Statistics</h1>
 				<a href="#" data-role="button" data-icon="search" data-iconpos="notext"></a>
            </div>
            
            <div data-role="content">
                <div id="chart_div"></div>
            </div>
            
            <div data-role="footer">
                <div data-role="content">
  					<a href="history.php" data-transition = "slide" data-role="button" data-inline = "true" data-icon="info">History</a>
  					<a href="info.html" data-transition = "slide" data-role="button" data-inline = "true" data-icon="star">Information</a>
  					<a href="#" data-transition = "slide" data-role="button" data-inline = "true" data-icon="gear">Setting</a>
					<a href="Statistics.php" data-transition = "slide" data-role="button" data-inline = "true" data-icon="star">Your Statistics</a>
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
            

            <div data-role="footer" data-position = "fixed">
                <h1>Insert Footer Text Here</h1>
            </div>
        </div> 

      
    </body>
</html>