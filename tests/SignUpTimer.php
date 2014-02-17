<?php
$I = new WebGuy($scenario);
$I->am('Frequent Smoker');
$I->wantTo('update the number of cigareet I smoked in QuitSmoking');
$I->lookforwardTo('I could know how many cigareets I smoked every day');
$I->amOnPage('/welcome.php'); 
$I->see('Quit Smoking');
?>