<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "docente".
 *
 * @property integer $idDocente
 * @property string $nombre
 * @property string $apellidos
 * @property string $correo
 *
 * @property Asignacion[] $asignacions
 */
class Docente extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'docente';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'apellidos'], 'required'],
            [['nombre', 'apellidos', 'correo'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idDocente' => 'Id Docente',
            'nombre' => 'Nombre',
            'apellidos' => 'Apellidos',
            'correo' => 'Correo',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsignacions()
    {
        return $this->hasMany(Asignacion::className(), ['idDocente' => 'idDocente']);
    }
}
