<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior; 
use yii\behaviors\BlameableBehavior; 
use yii\db\Expression;

/**
 * This is the model class for table "huesped".
 *
 * @property int $id
 * @property string $nombre
 * @property int $telefono
 * @property int $correo
 * @property int $id_cuenta
 * @property int $id_habitacion
 * @property int $id_estancia
 * @property int $creado_el
 * @property int $actualizado_el
 * @property string $creado_por
 * @property string $actualizado_por
 *
 * @property Cuenta $cuenta
 * @property Cuenta $cuenta0
 * @property Estancia $estancia
 * @property Habitacion $habitacion
 */
class Huesped extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'huesped';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nombre', 'telefono', 'correo', 'id_cuenta', 'id_habitacion', 'id_estancia'], 'required'],
            [['creado_por', 'actualizado_por'], 'safe'],
            [['nombre'], 'string', 'max' => 255],
            [['id_cuenta'], 'exist', 'skipOnError' => true, 'targetClass' => Cuenta::className(), 'targetAttribute' => ['id_cuenta' => 'id']],
            [['id_cuenta'], 'exist', 'skipOnError' => true, 'targetClass' => Cuenta::className(), 'targetAttribute' => ['id_cuenta' => 'id']],
            [['id_estancia'], 'exist', 'skipOnError' => true, 'targetClass' => Estancia::className(), 'targetAttribute' => ['id_estancia' => 'id']],
            [['id_habitacion'], 'exist', 'skipOnError' => true, 'targetClass' => Habitacion::className(), 'targetAttribute' => ['id_habitacion' => 'id']],
        ];
    }

    public function behaviors()
    {
        return [
            [
                'class' => TimestampBehavior::className(),
                'createdAtAttribute' => 'created_at',
                'updatedAtAttribute' => 'updated_at',
                'value' => new Expression('NOW()'),
            ],
            [
                'class' => BlameableBehavior::className(),
                'createdByAttribute' => 'created_by',
                'updatedByAttribute' => 'updated_by',
            ],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'telefono' => 'Telefono',
            'correo' => 'Correo',
            'id_cuenta' => 'Id Cuenta',
            'id_habitacion' => 'Id Habitacion',
            'id_estancia' => 'Id Estancia',
            'creado_el' => 'Creado El',
            'actualizado_el' => 'Actualizado El',
            'creado_por' => 'Creado Por',
            'actualizado_por' => 'Actualizado Por',
        ];
    }

    /**
     * Gets query for [[Cuenta]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCuenta()
    {
        return $this->hasOne(Cuenta::className(), ['id' => 'id_cuenta']);
    }

    /**
     * Gets query for [[Cuenta0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getCuenta0()
    {
        return $this->hasOne(Cuenta::className(), ['id' => 'id_cuenta']);
    }

    /**
     * Gets query for [[Estancia]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getEstancia()
    {
        return $this->hasOne(Estancia::className(), ['id' => 'id_estancia']);
    }

    /**
     * Gets query for [[Habitacion]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getHabitacion()
    {
        return $this->hasOne(Habitacion::className(), ['id' => 'id_habitacion']);
    }
}
