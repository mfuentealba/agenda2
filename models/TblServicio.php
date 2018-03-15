<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_servicio".
 *
 * @property integer $id
 * @property string $nombre
 * @property integer $id_rubro
 * @property integer $id_suscripcion
 * @property string $detalles
 *
 * @property TblRubro $idRubro
 * @property TblSuscripcion $idSuscripcion
 */
class TblServicio extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_servicio';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre', 'id_rubro', 'id_suscripcion', 'detalles'], 'required'],
            [['id_rubro', 'id_suscripcion'], 'integer'],
            [['nombre'], 'string', 'max' => 30],
            [['detalles'], 'string', 'max' => 1000],
            [['id_rubro'], 'exist', 'skipOnError' => true, 'targetClass' => TblRubro::className(), 'targetAttribute' => ['id_rubro' => 'id']],
            [['id_suscripcion'], 'exist', 'skipOnError' => true, 'targetClass' => TblSuscripcion::className(), 'targetAttribute' => ['id_suscripcion' => 'id']],
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
            'id_rubro' => 'Id Rubro',
            'id_suscripcion' => 'Id Suscripcion',
            'detalles' => 'Detalles',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdRubro()
    {
        return $this->hasOne(TblRubro::className(), ['id' => 'id_rubro']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getIdSuscripcion()
    {
        return $this->hasOne(TblSuscripcion::className(), ['id' => 'id_suscripcion']);
    }
}
