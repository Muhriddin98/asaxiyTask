<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Nomzodlar;

/**
 * NomzodlarSerch represents the model behind the search form of `backend\models\Nomzodlar`.
 */
class NomzodlarSerch extends Nomzodlar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'Age'], 'integer'],
            [['Name', 'FamilyName', 'Address', 'CountryOfOrigin', 'Education', 'EmailAddress', 'PhoneNumber', 'Status'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
        $query = Nomzodlar::find();

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
            'Age' => $this->Age,
        ]);

        $query->andFilterWhere(['like', 'Name', $this->Name])
            ->andFilterWhere(['like', 'FamilyName', $this->FamilyName])
            ->andFilterWhere(['like', 'Address', $this->Address])
            ->andFilterWhere(['like', 'CountryOfOrigin', $this->CountryOfOrigin])
            ->andFilterWhere(['like', 'Education', $this->Education])
            ->andFilterWhere(['like', 'EmailAddress', $this->EmailAddress])
            ->andFilterWhere(['like', 'PhoneNumber', $this->PhoneNumber])
            ->andFilterWhere(['like', 'Status', $this->Status]);

        return $dataProvider;
    }
}
