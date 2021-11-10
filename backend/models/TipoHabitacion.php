<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tipo_habitacion".
 *
 * @property int $id
 * @property string $tipo
 * @property float $precio
 * @property int $numero
 * @property int $planta
 *
 * @property Habitacion[] $habitacions
 */
class TipoHabitacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tipo_habitacion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['tipo', 'precio', 'numero', 'planta'], 'required'],
            [['precio'], 'number'],
            [['numero', 'planta'], 'integer'],
            [['tipo'], 'string', 'max' => 100],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'tipo' => 'Tipo',
            'precio' => 'Precio',
            'numero' => 'Numero',
            'planta' => 'Planta',
        ];
    }

    /**
     * Gets query for [[Habitacions]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHabitacions()
    {
        return $this->hasMany(Habitacion::className(), ['id_tipo_habitacion' => 'id']);
    }
}
