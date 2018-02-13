<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tbl_servicio".
 *
 * @property integer $id
 * @property string $glosa
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
            [['glosa'], 'required'],
            [['glosa'], 'string', 'max' => 20],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'glosa' => 'Glosa',
        ];
    }
}
