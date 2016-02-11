<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tb_mhs".
 *
 * @property integer $nim
 * @property string $nama
 * @property string $no_telpon
 * @property integer $progdi
 * @property integer $konsentrasi
 * @property string $judul
 * @property integer $status
 * @property string $deskripsi
 *
 * @property TbBimbingan[] $tbBimbingans
 * @property TbProgdi $progdi0
 * @property TbKonsentrasi $konsentrasi0
 */
class Mahasiswa extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_mhs';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nim', 'nama', 'no_telpon', 'progdi', 'konsentrasi', 'judul', 'status', 'deskripsi'], 'required'],
            [['nim', 'progdi', 'konsentrasi', 'status'], 'integer'],
            [['deskripsi'], 'string'],
            [['nama'], 'string', 'max' => 100],
            [['no_telpon'], 'string', 'max' => 20],
            [['judul'], 'string', 'max' => 255]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'nim' => 'Nim',
            'nama' => 'Nama',
            'no_telpon' => 'No Telpon',
            'progdi' => 'Progdi',
            'konsentrasi' => 'Konsentrasi',
            'judul' => 'Judul',
            'status' => 'Status',
            'deskripsi' => 'Deskripsi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbBimbingans()
    {
        return $this->hasMany(Bimbingan::className(), ['nim' => 'nim']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgdi()
    {
        return $this->hasOne(Progdi::className(), ['kd_progdi' => 'progdi']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getKonsentrasi()
    {
        return $this->hasOne(Konsentrasi::className(), ['kd_konsentrasi' => 'konsentrasi']);
    }
}
