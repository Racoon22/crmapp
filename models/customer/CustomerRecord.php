<?php
/**
 * Created by PhpStorm.
 * User: A
 * Date: 26.02.18
 * Time: 20:55
 */

namespace app\models\customer;

use yii\behaviors\BlameableBehavior;
use yii\behaviors\TimestampBehavior;
use yii\db\ActiveRecord;

class CustomerRecord extends  ActiveRecord
{
    public function behaviors()
    {
        return
        [
          'timestamp' => TimestampBehavior::class,
          'blame' => BlameableBehavior::class
        ];
    }

    public static function tableName()
    {
        return 'customer';
    }

    public function rules()
    {
        return [
            ['id', 'number'],
            ['name', 'required'],
            ['name', 'string', 'max' => 256],
            ['birth_date', 'date', 'format' => 'Y-m-d'],
            ['notes', 'safe']
        ];
    }

    public function getAddresses()
    {
        return $this->hasMany(AddressRecord::class, ['customer_id' => 'id']);
    }

    public function getEmails()
    {
        return $this->hasMany(EmailRecord::class, ['customer_id' => 'id']);
    }

    public function getPhones()
    {
        return $this->hasMany(PhoneRecord::class, ['customer_id' => 'id']);
    }
}