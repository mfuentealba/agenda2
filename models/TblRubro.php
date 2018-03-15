<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_rubro".
 *
 * @property integer $id
 * @property string $nombre
 *
 * @property TblServicio[] $tblServicios
 */
class TblRubro extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tbl_rubro';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nombre'], 'required'],
            [['nombre'], 'string', 'max' => 50],
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
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTblServicios()
    {
        return $this->hasMany(TblServicio::className(), ['id_rubro' => 'id']);
    }
}
