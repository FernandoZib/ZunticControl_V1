<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "habitacion".
 *
 * @property int $id
 * @property int $id_tipo_habitacion
 * @property int $id_planta
 * @property int $id_estado
 *
 * @property Estado $estado
 * @property Huesped[] $huespeds
 * @property TipoHabitacion $tipoHabitacion
 */
class Habitacion extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'habitacion';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_tipo_habitacion', 'id_planta', 'id_estado'], 'required'],
            [['id_tipo_habitacion', 'id_planta', 'id_estado'], 'integer'],
            [['id_tipo_habitacion'], 'exist', 'skipOnError' => true, 'targetClass' => TipoHabitacion::className(), 'targetAttribute' => ['id_tipo_habitacion' => 'id']],
            [['id_estado'], 'exist', 'skipOnError' => true, 'targetClass' => Estado::className(), 'targetAttribute' => ['id_estado' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_tipo_habitacion' => 'Id Tipo Habitacion',
            'id_planta' => 'Id Planta',
            'id_estado' => 'Id Estado',
        ];
    }

    /**
     * Gets query for [[Estado]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEstado()
    {
        return $this->hasOne(Estado::className(), ['id' => 'id_estado']);
    }

    /**
     * Gets query for [[Huespeds]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHuespeds()
    {
        return $this->hasMany(Huesped::className(), ['id_habitacion' => 'id']);
    }

    /**
     * Gets query for [[TipoHabitacion]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getTipoHabitacion()
    {
        return $this->hasOne(TipoHabitacion::className(), ['id' => 'id_tipo_habitacion']);
    }
}
