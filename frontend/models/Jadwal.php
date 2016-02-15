<?php

namespace frontend\models;

use Yii;

/**
 * This is the model class for table "tb_jadwal".
 *
 * @property integer $id
 * @property integer $kd_dosen
 * @property integer $hari
 * @property string $jam_mulai
 * @property string $jam_selesai
 *
 * @property TbDosen $kdDosen
 */
class Jadwal extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_jadwal';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kd_dosen', 'hari', 'jam_mulai', 'jam_selesai'], 'required'],
            [['kd_dosen', 'hari'], 'integer'],
            [['jam_mulai', 'jam_selesai'], 'safe']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'kd_dosen' => 'Kode Dosen',
            'hari' => 'Hari',
            'jam_mulai' => 'Jam Mulai',
            'jam_selesai' => 'Jam Selesai',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKdDosen()
    {
        return $this->hasOne(TbDosen::className(), ['kd_dosen' => 'kd_dosen']);
    }
}
