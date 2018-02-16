<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_contrato".
 *
 * @property integer $id
 * @property integer $id_user
 * @property integer $id_servicio
 * @property string $id_plan
 * @property string $fecha_ingreso
 * @property string $estado
 * @property string $fecha_fin
 */
class TblContrato extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_contrato';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id_user', 'id_servicio', 'id_plan', 'fecha_ingreso', 'estado', 'fecha_fin'], 'required'],
            [['id_user', 'id_servicio'], 'integer'],
            [['id_plan'], 'number'],
            [['fecha_ingreso', 'fecha_fin'], 'safe'],
            [['estado'], 'string', 'max' => 1],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'id_user' => 'Id User',
            'id_servicio' => 'Id Servicio',
            'id_plan' => 'Id Plan',
            'fecha_ingreso' => 'Fecha Ingreso',
            'estado' => 'Estado',
            'fecha_fin' => 'Fecha Fin',
        ];
    }
}
