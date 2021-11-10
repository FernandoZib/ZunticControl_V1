<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "cuenta".
 *
 * @property int $id
 * @property string $concepto
 * @property float $monto
 * @property string $creado_el
 * @property string $actualizado_el
 * @property int $creado_por
 * @property int $actualizado_por
 *
 * @property Huesped[] $huespeds
 * @property Huesped[] $huespeds0
 */
class Cuenta extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'cuenta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['concepto', 'monto', 'creado_el', 'actualizado_el', 'creado_por', 'actualizado_por'], 'required'],
            [['monto'], 'number'],
            [['creado_el', 'actualizado_el'], 'safe'],
            [['creado_por', 'actualizado_por'], 'integer'],
            [['concepto'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'concepto' => 'Concepto',
            'monto' => 'Monto',
            'creado_el' => 'Creado El',
            'actualizado_el' => 'Actualizado El',
            'creado_por' => 'Creado Por',
            'actualizado_por' => 'Actualizado Por',
        ];
    }

    /**
     * Gets query for [[Huespeds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHuespeds()
    {
        return $this->hasMany(Huesped::className(), ['id_cuenta' => 'id']);
    }

    /**
     * Gets query for [[Huespeds0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHuespeds0()
    {
        return $this->hasMany(Huesped::className(), ['id_cuenta' => 'id']);
    }
}
