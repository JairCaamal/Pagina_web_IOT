<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Alerta;

/**
 * AlertaSearch represents the model behind the search form of `common\models\Alerta`.
 */
class AlertaSearch extends Alerta
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_alerta', 'id_monitoreo'], 'integer'],
            [['tipo_alerta', 'descripcion', 'nivel_criticidad', 'fecha_alerta'], 'safe'],
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
        $query = Alerta::find();

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
            'id_alerta' => $this->id_alerta,
            'id_monitoreo' => $this->id_monitoreo,
            'fecha_alerta' => $this->fecha_alerta,
        ]);

        $query->andFilterWhere(['like', 'tipo_alerta', $this->tipo_alerta])
            ->andFilterWhere(['like', 'descripcion', $this->descripcion])
            ->andFilterWhere(['like', 'nivel_criticidad', $this->nivel_criticidad]);

        return $dataProvider;
    }
}
