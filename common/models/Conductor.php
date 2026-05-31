<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "conductor".
 *
 * @property int $id_conductor
 * @property string $nombre
 * @property string $apellido_paterno
 * @property string $apellido_materno
 * @property string $numero_licencia
 * @property int $telefono
 * @property string $estado
 *
 * @property MonitoreoConductor[] $monitoreoConductors
 */
class Conductor extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'conductor';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['estado'], 'default', 'value' => 'Activo'],
            [['nombre', 'apellido_paterno', 'apellido_materno', 'numero_licencia', 'telefono'], 'required'],
            [['telefono'], 'integer'],
            [['nombre', 'apellido_paterno', 'apellido_materno'], 'string', 'max' => 100],
            [['numero_licencia'], 'string', 'max' => 50],
            [['estado'], 'string', 'max' => 20],
            [['numero_licencia'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [

    'id_conductor' => 'ID del Conductor',

    'nombre' => 'Nombre(s)',

    'apellido_paterno' => 'Apellido Paterno',

    'apellido_materno' => 'Apellido Materno',

    'numero_licencia' => 'Número de Licencia',

    'telefono' => 'Número Telefónico',

    'estado' => 'Estado del Conductor',
];
    }

    /**
     * Gets query for [[MonitoreoConductors]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getMonitoreoConductors()
    {
        return $this->hasMany(MonitoreoConductor::className(), ['id_conductor' => 'id_conductor']);
    }

}
