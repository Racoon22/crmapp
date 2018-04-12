<?php
use Step\Acceptance\CRMUsersManagementSteps as CRMUsers;

$I = new CRMUsers($scenario);

$I->wantTo('register two Users in database.');

$I->amInListUsersUi();
$I->clickOnRegisterNewUserButton();
$I->seeIAmInAddUserUi();
$first_service = $I->imagineUser();
$I->fillUserDataForm($first_service);
$I->submitUserDataForm();
$I->seeIAmInViewUserUi();

$I->amInListUsersUi();
$I->seeUserInList($first_service);

$I->clickOnRegisterNewUserButton();
$I->seeIAmInAddUserUi();
$second_service = $I->imagineUser();
$I->fillUserDataForm($second_service);
$I->submitUserDataForm();
$I->seeIAmInViewUserUi();

$I->amInListUsersUi();
$I->seeServiceInList($first_service);
$I->seeServiceInList($second_service);

