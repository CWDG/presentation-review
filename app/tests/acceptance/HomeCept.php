<?php
$I = new WebGuy($scenario);
$I->wantTo('view the homepage');
$I->amOnPage('/');
$I->see('Presentation Reviews');
$I->see('Add Presentation', 'a');
$I->see('Presentation', 'a');