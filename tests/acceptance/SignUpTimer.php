<?php
$I = new WebGuy($scenario);
$I->am('Frequent Smoker');
$I->wantTo('know how long I use this program');
$I->lookforwardTo('could know how many days I use this program');
$I->amOnPage('/welcome.php'); 
$I->see('Quit Smoking');
$date = $I->grabFromDatabase('UserInfo', 'Member_Since', array('User_Name' => 'aa'));
$I->see('Member Since:');
$I->see($date);
$I->see('Hi, aa');
$I->see('Your Plan');
$I->see('Enter the number of cigarettes:');
$I->click('save');
?>