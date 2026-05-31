<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\MonitoreoConductor;

/**
 * MonitoreoConductorSearch represents the model behind the search form of `common\models\MonitoreoConductor`.
 */
class MonitoreoConductorSearch extends MonitoreoConductor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_monitoreo', 'id_conductor', 'fatiga_detectada'], 'integer'],
            [['nivel_riesgo', 'estado_alerta', 'fecha_registro'], 'safe'],
            [['pulso_cardiaco', 'nivel_alcohol'], 'number'],
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
        $query = MonitoreoConductor::find();

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
            'id_monitoreo' => $this->id_monitoreo,
            'id_conductor' => $this->id_conductor,
            'pulso_cardiaco' => $this->pulso_cardiaco,
            'nivel_alcohol' => $this->nivel_alcohol,
            'fatiga_detectada' => $this->fatiga_detectada,
            'fecha_registro' => $this->fecha_registro,
        ]);

        $query->andFilterWhere(['like', 'nivel_riesgo', $this->nivel_riesgo])
            ->andFilterWhere(['like', 'estado_alerta', $this->estado_alerta]);

        return $dataProvider;
    }
}
