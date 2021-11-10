<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use backend\models\Huesped;

/**
 * HuespedSearch represents the model behind the search form of `backend\models\Huesped`.
 */
class HuespedSearch extends Huesped
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'telefono', 'correo', 'id_cuenta', 'id_habitacion', 'id_estancia', 'creado_el', 'actualizado_el'], 'integer'],
            [['nombre', 'creado_por', 'actualizado_por'], 'safe'],
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
        $query = Huesped::find();

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
            'telefono' => $this->telefono,
            'correo' => $this->correo,
            'id_cuenta' => $this->id_cuenta,
            'id_habitacion' => $this->id_habitacion,
            'id_estancia' => $this->id_estancia,
            'creado_el' => $this->creado_el,
            'actualizado_el' => $this->actualizado_el,
            'creado_por' => $this->creado_por,
            'actualizado_por' => $this->actualizado_por,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre]);

        return $dataProvider;
    }
}
