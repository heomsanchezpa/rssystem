<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tipotarea".
 *
 * @property integer $idTipoTarea
 * @property string $Nombre
 *
 * @property Tareas[] $tareas
 */
class Tipotarea extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tipotarea';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['Nombre'], 'required'],
            [['Nombre'], 'string', 'max' => 45]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idTipoTarea' => 'Id Tipo Tarea',
            'Nombre' => 'Nombre',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTareas()
    {
        return $this->hasMany(Tareas::className(), ['idTipoTarea' => 'idTipoTarea']);
    }
}
