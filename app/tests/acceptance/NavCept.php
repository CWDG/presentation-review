<?php
$I = new WebGuy($scenario);
$I->wantTo('use the nav bar');
$I->amOnPage('/');
$I->click('Add Presentation');
$I->see('Add Presentation', 'h1');

$I->amOnPage('/');
$I->click('Presentations');
$I->see('All Presentations', 'h1');