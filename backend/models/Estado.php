<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "Estado".
 *
 * @property int $id
 * @property int $id_limpieza
 * @property int $id_ocupacion
 * @property string $creado_el
 * @property string $actualizado_el
 * @property int $creado_por
 * @property int $actualizado_por
 */
class Estado extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'Estado';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_limpieza', 'id_ocupacion', 'creado_el', 'actualizado_el', 'creado_por', 'actualizado_por'], 'required'],
            [['id_limpieza', 'id_ocupacion', 'creado_por', 'actualizado_por'], 'integer'],
            [['creado_el', 'actualizado_el'], 'safe'],
            [['id_limpieza'], 'exist', 'skipOnError' => true, 'targetClass' => Limpieza::className(), 'targetAttribute' => ['id_limpieza' => 'id']],
            [['id_ocupacion'], 'exist', 'skipOnError' => true, 'targetClass' => Ocupacion::className(), 'targetAttribute' => ['id_ocupacion' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_limpieza' => 'Id Limpieza',
            'id_ocupacion' => 'Id Ocupacion',
            'creado_el' => 'Creado El',
            'actualizado_el' => 'Actualizado El',
            'creado_por' => 'Creado Por',
            'actualizado_por' => 'Actualizado Por',
        ];
    }
}
