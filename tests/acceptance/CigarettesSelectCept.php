<?php
$I = new WebGuy($scenario);
$I->am('Frequent Smoker');
$I->wantTo('update the number of cigareet I smoked in QuitSmoking');
$I->lookforwardTo('I could know how many cigareets I smoked every time');
$I->amOnPage('/welcome.php'); 
$I->see('Quit Smoking');
$I->see('Member Since');
$I->see('Hi, Xike');
$I->see('Your Plan: Healthy Counter');
$I->see('Enter the number of cigarettes');
$I->see('Selct Cigarettes');
$I->see('Number Seven');
$I->see('Belmont');
$I->seeInDatabase('SmokingInfo', array('User_Name' => 'xike', 'First_Name' => 'Xike' 'Last_Name' => 'Wang', 'Number' => '1', 'Date' => '2014-03-08 14:23:10'));
$I->seeInDatabase('Cigarettes', array('Name' => 'Number Seven', 'Box' => 'King' 'Price' => '1.5');
?>