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
$I->see('Plus');
$I->see('1');
$I->see('Save');
$I->seeInDatabase('SmokingInfo', array('User_Name' => 'xike', 'First_Name' => 'Xike' 'Last_Name' => 'Wang', 'Number' => '1', 'Date' => '2014-03-08 14:23:10'));
$I->click('history');
$I->amOnPage('/history.php');
$I->see('Xike');
$I->see('Wang');
$I->see('2014-03-11 11:30:21');
?>