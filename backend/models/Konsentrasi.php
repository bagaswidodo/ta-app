<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tb_konsentrasi".
 *
 * @property integer $kd_konsentrasi
 * @property string $nama_konsentrasi
 *
 * @property TbMhs[] $tbMhs
 */
class Konsentrasi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_konsentrasi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kd_konsentrasi', 'nama_konsentrasi'], 'required'],
            [['kd_konsentrasi'], 'integer'],
            [['nama_konsentrasi'], 'string', 'max' => 100],
            [['kd_konsentrasi'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kd_konsentrasi' => 'Kode Konsentrasi',
            'nama_konsentrasi' => 'Nama Konsentrasi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbMhs()
    {
        return $this->hasMany(TbMhs::className(), ['konsentrasi' => 'kd_konsentrasi']);
    }
}
