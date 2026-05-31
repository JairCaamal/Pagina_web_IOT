<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "monitoreo_conductor".
 *
 * @property int $id_monitoreo
 * @property int $id_conductor
 * @property string $nivel_riesgo
 * @property string $estado_alerta
 * @property float $pulso_cardiaco
 * @property float $nivel_alcohol
 * @property int $fatiga_detectada
 * @property string $fecha_registro
 *
 * @property Alerta[] $alertas
 * @property Conductor $conductor
 * @property Sensor[] $sensors
 */
class MonitoreoConductor extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'monitoreo_conductor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['fatiga_detectada'], 'default', 'value' => 0],
            [['id_conductor', 'nivel_riesgo', 'estado_alerta', 'pulso_cardiaco', 'nivel_alcohol'], 'required'],
            [['id_conductor', 'fatiga_detectada'], 'integer'],
            [['pulso_cardiaco', 'nivel_alcohol'], 'number'],
            [['fecha_registro'], 'safe'],
            [['nivel_riesgo', 'estado_alerta'], 'string', 'max' => 50],
            [['id_conductor'], 'exist', 'skipOnError' => true, 'targetClass' => Conductor::className(), 'targetAttribute' => ['id_conductor' => 'id_conductor']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
{
    return [

        'id_monitoreo' => 'ID del Monitoreo',

        'id_conductor' => 'Conductor Asociado',

        'nivel_riesgo' => 'Nivel de Riesgo Detectado',

        'estado_alerta' => 'Estado de la Alerta',

        'pulso_cardiaco' => 'Pulso Cardíaco',

        'nivel_alcohol' => 'Nivel de Alcohol Detectado',

        'fatiga_detectada' => 'Fatiga Detectada',

        'fecha_registro' => 'Fecha de Registro',
    ];
}

    /**
     * Gets query for [[Alertas]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getAlertas()
    {
        return $this->hasMany(Alerta::className(), ['id_monitoreo' => 'id_monitoreo']);
    }

    /**
     * Gets query for [[Conductor]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getConductor()
    {
        return $this->hasOne(Conductor::className(), ['id_conductor' => 'id_conductor']);
    }

    /**
     * Gets query for [[Sensors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getSensors()
    {
        return $this->hasMany(Sensor::className(), ['id_monitoreo' => 'id_monitoreo']);
    }

}
