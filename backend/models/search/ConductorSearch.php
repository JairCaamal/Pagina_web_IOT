<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Conductor;

/**
 * ConductorSearch represents the model behind the search form of `common\models\Conductor`.
 */
class ConductorSearch extends Conductor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_conductor', 'telefono'], 'integer'],
            [['nombre', 'apellido_paterno', 'apellido_materno', 'numero_licencia', 'estado'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
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
     * @param string|null $formName Form name to be used into `->load()` method.
     *
     * @return ActiveDataProvider
     */
    public function search($params, $formName = null)
    {
        $query = Conductor::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params, $formName);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id_conductor' => $this->id_conductor,
            'telefono' => $this->telefono,
        ]);

        $query->andFilterWhere(['like', 'nombre', $this->nombre])
            ->andFilterWhere(['like', 'apellido_paterno', $this->apellido_paterno])
            ->andFilterWhere(['like', 'apellido_materno', $this->apellido_materno])
            ->andFilterWhere(['like', 'numero_licencia', $this->numero_licencia])
            ->andFilterWhere(['like', 'estado', $this->estado]);

        return $dataProvider;
    }
}
