<?php

namespace Step\Acceptance;

class CRMUserSteps extends \AcceptanceTester
{
    function amInQueryCustomerUi()
    {
    $I = $this;
    $I->amOnPage('/customers/query');
    }
    function fillInPhoneFieldWithDataFrom($customer_data)
    {
        $I = $this;
        $I->fillField('phone_number', $customer_data['PhoneRecord[number]']);
    }

    function clickSearchButton()
    {
        $I = $this;
        $I->click('Search');
    }

    public function seeIAmInListCustomersUI()
    {
        $I = $this;
        $I->seeCurrentUrlMatches('/customers/');
    }

    public function seeCustomerInList($customer_data)
    {
        $I = $this;
        $I->see($customer_data['CustomerRecord[name]'], '#search_results');
    }

    public function dontSeeCustomerInList($customer_data)
    {
        $I = $this;
        $I->dontSee($customer_data['CustomerRecord[name]'], '#serch_results');
    }

    public function seeLargeBodyOfText()
    {
        $I = $this;
        $text = $I->grabTextFrom('p');
        $I->seeContentIsLong($text);
    }
}