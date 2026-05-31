<?php

namespace backend\models\search;

use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Sensor;

/**
 * SensorSearch represents the model behind the search form of `common\models\Sensor`.
 */
class SensorSearch extends Sensor
{
    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_sensor', 'id_monitoreo'], 'integer'],
            [['tipo_sensor', 'unidad_medida', 'fecha_lectura'], 'safe'],
            [['valor_detectado'], 'number'],
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
        $query = Sensor::find();

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
            'id_sensor' => $this->id_sensor,
            'id_monitoreo' => $this->id_monitoreo,
            'valor_detectado' => $this->valor_detectado,
            'fecha_lectura' => $this->fecha_lectura,
        ]);

        $query->andFilterWhere(['like', 'tipo_sensor', $this->tipo_sensor])
            ->andFilterWhere(['like', 'unidad_medida', $this->unidad_medida]);

        return $dataProvider;
    }
}
