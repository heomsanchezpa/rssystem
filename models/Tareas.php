<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tareas".
 *
 * @property integer $idTipoTarea
 * @property integer $idTarea
 * @property string $Nombre
 * @property string $Descripcion
 * @property string $FInicio
 * @property string $FFin
 *
 * @property Asignacion[] $asignacions
 * @property Tipotarea $idTipoTarea0
 */
class Tareas extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tareas';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idTipoTarea'], 'integer'],
            [['FInicio', 'FFin'], 'safe'],
            [['Nombre'], 'string', 'max' => 45],
            [['Descripcion'], 'string', 'max' => 100]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'idTipoTarea' => 'Id Tipo Tarea',
            'idTarea' => 'Id Tarea',
            'Nombre' => 'Nombre',
            'Descripcion' => 'Descripcion',
            'FInicio' => 'Finicio',
            'FFin' => 'Ffin',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getAsignacions()
    {
        return $this->hasMany(Asignacion::className(), ['idTarea' => 'idTarea']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdTipoTarea0()
    {
        return $this->hasOne(Tipotarea::className(), ['idTipoTarea' => 'idTipoTarea']);
    }
}
