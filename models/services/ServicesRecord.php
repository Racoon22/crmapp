<?php

namespace app\models\services;

use Yii;

/**
 * This is the model class for table "services".
 *
 * @property int $id
 * @property string $name
 * @property int $hourly_rate
 */
class ServicesRecord extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'services';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['hourly_rate'], 'integer'],
            [['name'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'hourly_rate' => 'Hourly Rate',
        ];
    }
}
