<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "sensor".
 *
 * @property int $id_sensor
 * @property int $id_monitoreo
 * @property string $tipo_sensor
 * @property float $valor_detectado
 * @property string $unidad_medida
 * @property string $fecha_lectura
 *
 * @property MonitoreoConductor $monitoreo
 */
class Sensor extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'sensor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_monitoreo', 'tipo_sensor', 'valor_detectado', 'unidad_medida'], 'required'],
            [['id_monitoreo'], 'integer'],
            [['valor_detectado'], 'number'],
            [['fecha_lectura'], 'safe'],
            [['tipo_sensor'], 'string', 'max' => 100],
            [['unidad_medida'], 'string', 'max' => 20],
            [['id_monitoreo'], 'exist', 'skipOnError' => true, 'targetClass' => MonitoreoConductor::className(), 'targetAttribute' => ['id_monitoreo' => 'id_monitoreo']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
{
    return [

        'id_sensor' => 'ID del Sensor',

        'id_monitoreo' => 'Monitoreo Relacionado',

        'tipo_sensor' => 'Tipo de Sensor',

        'valor_detectado' => 'Valor Detectado',

        'unidad_medida' => 'Unidad de Medida',

        'fecha_lectura' => 'Fecha de Lectura',
    ];
}

    /**
     * Gets query for [[Monitoreo]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMonitoreo()
    {
        return $this->hasOne(MonitoreoConductor::className(), ['id_monitoreo' => 'id_monitoreo']);
    }

}
