<?php

namespace backend\models;

use Yii;
use yii\behaviors\TimestampBehavior; 
use yii\behaviors\BlameableBehavior; 
use yii\db\Expression;

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
            [['name', 'description'], 'required'], 
            [['description'], 'string'], 
            [['created_at', 'updated_at'], 'safe'], 
            [['created_by', 'updated_by'], 'integer'], 
            [['name'], 'string', 'max' => 255], 
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
