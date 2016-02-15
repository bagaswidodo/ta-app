<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tb_bimbingan".
 *
 * @property integer $id
 * @property integer $nim
 * @property integer $kd_dosen
 * @property integer $dosen_dua
 *
 * @property TbMhs $nim0
 * @property TbDosen $kdDosen
 * @property TbDosen $dosenDua
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
            [['nim', 'kd_dosen'], 'required'],
            [['nim', 'kd_dosen', 'dosen_dua'], 'integer'],
            [['kd_dosen'], 'unique']
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
            'kd_dosen' => 'Pembimbing 1',
            'dosen_dua' => 'Pembimbing 2',
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

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getDosenDua()
    {
        return $this->hasOne(TbDosen::className(), ['kd_dosen' => 'dosen_dua']);
    }
}
