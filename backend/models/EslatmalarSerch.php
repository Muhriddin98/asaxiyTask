<?php

namespace backend\models;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Eslatmalar;

/**
 * EslatmalarSerch represents the model behind the search form of `backend\models\Eslatmalar`.
 */
class EslatmalarSerch extends Eslatmalar
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nomzod_id'], 'integer'],
            [['intervyu_vaqti', 'eslatma'], 'safe'],
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
        $query = Eslatmalar::find();

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
            'nomzod_id' => $this->nomzod_id,
            'intervyu_vaqti' => $this->intervyu_vaqti,
        ]);

        $query->andFilterWhere(['like', 'eslatma', $this->eslatma]);

        return $dataProvider;
    }
}
