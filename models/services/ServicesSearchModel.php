<?php

namespace app\models\services;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\services\ServicesRecord;

/**
 * ServicesSearchModel represents the model behind the search form of `app\models\services\ServicesRecord`.
 */
class ServicesSearchModel extends ServicesRecord
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'hourly_rate'], 'integer'],
            [['name'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = ServicesRecord::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'hourly_rate' => $this->hourly_rate,
        ]);

        $query->andFilterWhere(['like', 'name', $this->name]);

        return $dataProvider;
    }
}
