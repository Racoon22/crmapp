<?php
use Step\Acceptance\CRMUsersManagementSteps as UsersManagement;
use Step\Acceptance\CRMGuestSteps as Guest;
$I = new UsersManagement($scenario);
$I->wantTo('check that login and logout work');

$I->amGoingTo('Register new User');

$I->amInListUsersUi();
$I->clickOnRegisterNewUserButton();
$I->seeIAmInAddUserUi();
$user = $I->imagineUser();
$I->fillUserDataForm($user);
$I->submitUserDataForm();
$I->logout();

$I = new Guest($scenario);
$I->amGoingTo('login');

$I->seeLink('login');
$I->click('login');
$I->seeIAmInLoginFormUi();
$I->fillLoginForm($user);
$I->submitLoginForm();

$I->seeIAmAtHomepage();
$I->dontSeeLink('login');
$I->seeUsername($user);
$I->seeLink('logout');

$I->logout();

$I->seeIAmAtHomepage();
$I->dontSeeUsername($user);
$I->dontSeeLink('logout');
$I->seeLink('login');

