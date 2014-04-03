<?php
$I = new WebGuy($scenario);
$I->am('Frequent Smoker');
$I->wantTo('this program could limit my daily smoking');
$I->lookforwardTo('am limited by this program');
$I->amOnPage('/welcome.php'); 
$I->see('Quit Smoking');
$I->see('Hi, jj');
$I->see('Your Plan: Healthy Counter');
$I->see('Enter the number of cigarettes');
$I->see('Cigarettes left:');
//$I->seeInDatabase('SmokingInfo', array('User_Name' => 'jj', 'First_Name' => 'jj', 'Last_Name' => 'jj', 'Number' => '12', 'Date' => *));
$I->see('You had 11 cigaretts yesterday! Today you can only have 10 cigarettes!');
$I->see('Plus');
$I->see('Subtract');
$I->see('Save');
$I->click('Save');
//$I->seeInDatabase('SmokingInfo', array('User_Name' => 'xike', 'First_Name' => 'Xike' 'Last_Name' => 'Wang', 'Number' => '11', 'Date' => *));
?>