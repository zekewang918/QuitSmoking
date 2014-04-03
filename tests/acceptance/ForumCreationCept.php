<?php
$I = new WebGuy($scenario);
$I->am('Frequent Smoker');
$I->wantTo('talk with other smokers');
$I->lookforwardTo('have a forum so many smokers could communiate with others about life and experience');
$I->amOnPage('/index.php'); 
$I->see('Quit Smoking');
$I->click('Forum');
$I->amOnPage('bbs/index.php');
$I->see('Life');
$I->see('Experience');
$I->see('Activity');
$I->see('Photo Gallery');
?>