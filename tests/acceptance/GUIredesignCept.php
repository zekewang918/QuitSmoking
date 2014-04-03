<?php
$I = new WebGuy($scenario);
$I->am('Frequent Smoker');
$I->wantTo('use a well-designed application');
$I->lookforwardTo('a good-looking application to help me quit smoking');
$I->amOnPage('/welcome.php'); 
$I->see('Quit Smoking');
$I->see('Member Since');
$I->see('Hi, Xike');
$I->see('Your Plan: Healthy Counter');
$I->see('Enter the number of cigarettes');
$I->see('Forum');
$I->see('Select Cigarettes');
?>