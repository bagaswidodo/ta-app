<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tb_bimbingan".
 *
 * @property integer $id
 * @property integer $nim
 * @property integer $kd_dosen
 *
 * @property TbMhs $nim0
 * @property TbDosen $kdDosen
 */
class Bimbingan extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_bimbingan';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'nim', 'kd_dosen'], 'required'],
            [['id', 'nim', 'kd_dosen'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nim' => 'Nim',
            'kd_dosen' => 'Nama Dosen',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getNim0()
    {
        return $this->hasOne(TbMhs::className(), ['nim' => 'nim']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKdDosen()
    {
        return $this->hasOne(TbDosen::className(), ['kd_dosen' => 'kd_dosen']);
    }
}
