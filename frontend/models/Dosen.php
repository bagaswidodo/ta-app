<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tb_dosen".
 *
 * @property integer $kd_dosen
 * @property string $nama
 * @property string $username
 * @property string $password
 *
 * @property TbBimbingan[] $tbBimbingans
 * @property TbJadwal[] $tbJadwals
 */
class Dosen extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_dosen';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kd_dosen', 'nama', 'username', 'password'], 'required'],
            [['kd_dosen'], 'integer'],
            [['nama', 'password'], 'string', 'max' => 100],
            [['username'], 'string', 'max' => 50],
            [['kd_dosen'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kd_dosen' => 'Kd Dosen',
            'nama' => 'Nama',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbBimbingans()
    {
        return $this->hasMany(TbBimbingan::className(), ['kd_dosen' => 'kd_dosen']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbJadwals()
    {
        return $this->hasMany(TbJadwal::className(), ['kd_dosen' => 'kd_dosen']);
    }
}
