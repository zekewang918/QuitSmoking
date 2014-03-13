<?php
$I = new WebGuy($scenario);
$I->am('Frequent Smoker');
$I->wantTo('register a account in QuitSmoking');
$I->lookforwardTo('check smoking history with that software');
$I->amOnPage('/index.php'); 
$I->see('Welcome');
$I->see('Register');
$I->click('Register');
$I->see('Register');
$I->fillField('fname', 'aa');
$I->fillField('lname', 'aa');
$I->fillField('username', 'aa');
$I->fillField('password', 'aa');
$I->fillField('re_password', 'aa');
$I->fillField('email', 'aa@aa.com');
$I->selectOption('plan', 'Healthy Counter');
$I->click('Register')
?>