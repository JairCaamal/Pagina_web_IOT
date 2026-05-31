<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "alerta".
 *
 * @property int $id_alerta
 * @property int $id_monitoreo
 * @property string $tipo_alerta
 * @property string $descripcion
 * @property string $nivel_criticidad
 * @property string $fecha_alerta
 *
 * @property MonitoreoConductor $monitoreo
 */
class Alerta extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'alerta';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id_monitoreo', 'tipo_alerta', 'descripcion', 'nivel_criticidad'], 'required'],
            [['id_monitoreo'], 'integer'],
            [['descripcion'], 'string'],
            [['fecha_alerta'], 'safe'],
            [['tipo_alerta'], 'string', 'max' => 100],
            [['nivel_criticidad'], 'string', 'max' => 50],
            [['id_monitoreo'], 'exist', 'skipOnError' => true, 'targetClass' => MonitoreoConductor::className(), 'targetAttribute' => ['id_monitoreo' => 'id_monitoreo']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
{
    return [

        'id_alerta' => 'ID de la Alerta',

        'id_monitoreo' => 'Monitoreo Relacionado',

        'tipo_alerta' => 'Tipo de Alerta',

        'descripcion' => 'Descripción de la Alerta',

        'nivel_criticidad' => 'Nivel de Criticidad',

        'fecha_alerta' => 'Fecha de la Alerta',
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
