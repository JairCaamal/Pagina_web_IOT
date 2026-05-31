<?php

namespace backend\models;
use common\models\User;

use Yii;

/**
 * This is the model class for table "rol".
 *
 * @property int $id
 * @property int $rol_nombre
 * @property int $rol_valor
 */
class Rol extends \yii\db\ActiveRecord
{


    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'rol';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['id', 'rol_nombre', 'rol_valor'], 'required'],
            [['id', 'rol_valor'], 'integer'],
            [['rol_nombre'], 'string'],
            [['id'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'rol_nombre' => 'Rol Nombre',
            'rol_valor' => 'Rol Valor',
        ];
    }

    public function getUsers()
    {
        return $this->hasMany(User::className(), ['rol_id' => 'id']);
    }


}
