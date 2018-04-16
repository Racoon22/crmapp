<?php

namespace Step\Acceptance;

use Faker\Factory;

class CRMOperatorSteps extends \AcceptanceTester
{
    function amInAddCustomerUi()
    {
        $I = $this;
        $I->amOnPage('/customers/add');
    }

    function seeFieldName()
    {
        $I = $this;
        $I->see('name');
    }

    public function imagineCustomer()
    {
        $faker = Factory::create();
        return [
            'CustomerRecord[name]' => $faker->name,
            'CustomerRecord[birth_date]' => $faker->date('Y-m-d'),
            'CustomerRecord[notes]' => $faker->sentence(8),
            'PhoneRecord[number]' => $faker->phoneNumber,
        ];
    }

    function fillCustomerDataForm($fieldsData)
    {
        $I = $this;
        foreach ($fieldsData as $key => $value) {
            $I->fillField($key, $value);
        }
    }
    function submitCustomerDataForm()
    {
        $I = $this;
        $I->click('Submit');
    }

    public function seeIAmInListCustomersUI()
    {
        $I = $this;
        $I->seeCurrentUrlMatches('/customers/');
    }

    public function amInListCustomerUI()
    {
        $I = $this;
        $I->amOnPage('/customers');
    }
}