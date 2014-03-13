<?php
$I = new WebGuy($scenario);
$I->am('Frequent Smoker');
$I->wantTo('login my account in QuitSmoking');
$I->lookforwardTo('use application to count hom many cigareetes I smoke');
$I->amOnPage('/index.php'); 
$I->see('Welcome');
$I->see('Register');
$I->fillField('username_login', 'xike');
$I->fillField('password_login', '123');
$I->click('Login')
?>