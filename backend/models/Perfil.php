<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "perfil".
 *
 * @property int $id
 * @property string $nombre
 * @property string $apellidos
 * @property string $telefono
 * @property string $correo
 *
 * @property User $id0
 */
class Perfil extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'perfil';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'nombre', 'apellidos', 'telefono', 'correo'], 'required'],
            [['id'], 'integer'],
            [['nombre', 'apellidos'], 'string', 'max' => 100],
            [['telefono'], 'string', 'max' => 15],
            [['correo'], 'string', 'max' => 80],
            [['id'], 'unique'],
            [['id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['id' => 'id_perfil']],
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
            'apellidos' => 'Apellidos',
            'telefono' => 'Telefono',
            'correo' => 'Correo',
        ];
    }

    /**
     * Gets query for [[Id0]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getId0()
    {
        return $this->hasOne(User::className(), ['id_perfil' => 'id']);
    }
}
