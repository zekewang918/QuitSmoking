<?php
$I = new WebGuy($scenario);
$I->am('Frequent Smoker');
$I->wantTo('register a account in QuitSmoking');
$I->lookforwardTo('check smoking history with that software');
$I->amOnPage('/welcome.php'); 
$I->see('QuitSmoking');
$I->see('');
?>