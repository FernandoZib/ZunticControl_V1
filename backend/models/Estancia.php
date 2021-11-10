<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "estancia".
 *
 * @property int $id
 * @property string $fecha_entrada
 * @property string $fecha_salida
 *
 * @property Huesped[] $huespeds
 */
class Estancia extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'estancia';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fecha_entrada', 'fecha_salida'], 'required'],
            [['fecha_entrada', 'fecha_salida'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'fecha_entrada' => 'Fecha Entrada',
            'fecha_salida' => 'Fecha Salida',
        ];
    }

    /**
     * Gets query for [[Huespeds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHuespeds()
    {
        return $this->hasMany(Huesped::className(), ['id_estancia' => 'id']);
    }
}
