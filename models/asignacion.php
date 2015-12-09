<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "asignacion".
 *
 * @property integer $idAsignacion
 * @property integer $idTarea
 * @property integer $idDocente
 *
 * @property Docente $idDocente0
 * @property Tareas $idTarea0
 */
class asignacion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'asignacion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idTarea', 'idDocente'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idAsignacion' => 'Id Asignacion',
            'idTarea' => 'Id Tarea',
            'idDocente' => 'Id Docente',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdDocente0()
    {
        return $this->hasOne(Docente::className(), ['idDocente' => 'idDocente']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTarea0()
    {
        return $this->hasOne(Tareas::className(), ['idTarea' => 'idTarea']);
    }
}
