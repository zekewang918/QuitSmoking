<?php
	#
	# @author Group 2
	#
    SESSION_START();
    
	#
	# We use this page solely to display the variable $output which is generated and stored
	# in the SESSION array created in the welcome.php page. If the user access this page by
	# just typing the url, they will get a white page rather than the information.
	# 
	# @param String $output
	# 
	
	if (!$_SESSION['status'])
	{
		exit;
	}
    $output = $_SESSION['output'];

?>
<!DOCTYPE html>
<html>
    <head>
    
    	<!-- Header tags consists of all the links and libaries that is used in this website -->
    	
        <meta content="width=device-width, initial-scale=1" name="viewport">
        <link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.css">
        <script src="http://code.jquery.com/jquery-1.8.3.min.js"></script>
        <script src="http://code.jquery.com/mobile/1.3.2/jquery.mobile-1.3.2.min.js"></script>
        
        <style>
        .ui-body-i
{
font-weight:bold;
color:white;
background-color: #66CCFF;
}
        </style>
    </head>
    
    <body>
    	<!-- This is the main page that is displayed on the browser, which contains a header,
    	     a content section, and a footer. -->
        <div data-role="page" id="countSmoking" data-theme="i">
            <div data-role="header">
                <a href="welcome.php" data-transition = "slide" data-icon = "back" data-iconpos="notext">Back</a>
      			<h1>Quit Smoking</h1>
 		    </div>
 		    
 		   <!-- The content division displays the smoking statistic of a specific user. -->
 		   
            <div data-role="content">
                <?php echo $output;?>
            </div> 
            
            <!-- The footer division displays the options that users can select, which includes a back button. -->
            
            <div data-role="footer" data-position="fixed">
                <div data-role="navbar" align="center">
                    <ul>
                    <li><a href="history.php" data-transition = "slide"  data-icon="info">History</a></li>
                    <li><a href= "http://bbs.blackroom.me" data-transition = "slide" data-icon="grid" value = "Forum">Forum</a></li>
          			<li><a href="info.html" data-transition = "slide" data-icon="star">Information</a></li>
					<li><a href="http://www.healthycanadians.gc.ca/health-sante/tobacco-tabac/quit-arretez-eng.php" data-transition = "slide" data-icon="heart">Get Help</a></li>
                    </ul>
                 </div>
            </div>
        </div>
    </body>
</html>