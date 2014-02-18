<?php
$I = new WebGuy($scenario);
$I->wantTo('add a presentation');
$I->amOnPage('/');

$I->amGoingTo('create a new presentation');
$I->click('Add Presentation');
$I->fillField('name', 'Random Test Presentation');
$I->fillField('slug', 'random-test-presentation');
$I->fillField('additional_info', 'Random presentation thing.');
$I->click('Create Presentation');

$I->amGoingTo('give my new presentation a rating of 50.00');
$I->see('All Presentations', 'h1');
$I->see('Random Test Presentation');
$I->click('Random Test Presentation');
$I->see('Add Rating');
$I->fillField('score', 50);
$I->click('Score Presentation');
$I->see('Current rating: 50.00');