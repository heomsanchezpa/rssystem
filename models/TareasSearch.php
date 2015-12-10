<?php

namespace app\models;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use app\models\Tareas;

/**
 * TareasSearch represents the model behind the search form about `app\models\Tareas`.
 */
class TareasSearch extends Tareas
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['idTipoTarea', 'idTarea'], 'integer'],
            [['Nombre', 'Descripcion', 'FInicio', 'FFin'], 'safe'],
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Tareas::find();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        $query->andFilterWhere([
            'idTipoTarea' => $this->idTipoTarea,
            'idTarea' => $this->idTarea,
            'FInicio' => $this->FInicio,
            'FFin' => $this->FFin,
        ]);

        $query->andFilterWhere(['like', 'Nombre', $this->Nombre])
            ->andFilterWhere(['like', 'Descripcion', $this->Descripcion]);

        return $dataProvider;
    }
}
