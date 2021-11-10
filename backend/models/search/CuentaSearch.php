<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Cuenta;

/**
 * CuentaSearch represents the model behind the search form of `backend\models\Cuenta`.
 */
class CuentaSearch extends Cuenta
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'creado_por', 'actualizado_por'], 'integer'],
            [['concepto', 'creado_el', 'actualizado_el'], 'safe'],
            [['monto'], 'number'],
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
        $query = Cuenta::find();

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
            'monto' => $this->monto,
            'creado_el' => $this->creado_el,
            'actualizado_el' => $this->actualizado_el,
            'creado_por' => $this->creado_por,
            'actualizado_por' => $this->actualizado_por,
        ]);

        $query->andFilterWhere(['like', 'concepto', $this->concepto]);

        return $dataProvider;
    }
}
