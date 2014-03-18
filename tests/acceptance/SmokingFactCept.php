<?php
$I = new WebGuy($scenario);
$I->am('Frequent Smoker');
$I->wantTo('know some facts about smoking');
$I->lookforwardTo('how bad smoking is');
$I->amOnPage('/welcome.php'); 
$I->see('Quit Smoking');
$I->see('Member Since');
$I->see('Fact:');
$I->see('Smoking cigarettes is willingly ingesting common pure poisons such as lead, rat poison and window cleaner.');
//$I->see('By quitting smoking you are preventing over 4,000 dangerous chemicals from entering your system.');
//$I->see('Smoking damages the tiny hairs in your lungs that are responsible for cleaning and protection from diseases.');
//$I->see('A typical pack of cigarettes a day adds up to more than $3000 a year!');
//$I->see('Did you know: You''ll pay lower life insurance premiums if you''re not a smoker. You save more than just not buying packs.');
$I->see('Hi, cc');
$I->see('Your Plan: Healthy Counter');
$I->see('Enter the number of cigarettes');
$I->see('Plus');
$I->see('1');
$I->see('Save');
?>