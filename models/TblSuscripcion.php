<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_suscripcion".
 *
 * @property integer $id
 * @property string $nombre
 * @property string $comision
 * @property string $descripcion
 * @property integer $valor
 * @property string $duracion
 */
class TblSuscripcion extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_suscripcion';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'comision', 'descripcion', 'valor', 'duracion'], 'required'],
            [['comision'], 'number'],
            [['valor'], 'integer'],
            [['nombre'], 'string', 'max' => 30],
            [['descripcion'], 'string', 'max' => 1000],
            [['duracion'], 'string', 'max' => 100],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nombre' => 'Nombre',
            'comision' => 'Comision',
            'descripcion' => 'Descripcion',
            'valor' => 'Valor',
            'duracion' => 'Duracion',
        ];
    }
}
