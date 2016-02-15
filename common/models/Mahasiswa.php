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
 * @property string $judul
 * @property integer $status
 * @property string $deskripsi
 * @property integer $foto
 * @property integer $proposal
 * @property integer $kst
 * @property integer $transkrip
 * @property integer $usulan_pembimbing_1
 * @property integer $usulan_pembimbing_2
 *
 * @property TbBimbingan[] $tbBimbingans
 * @property TbProgdi $progdi0
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
            [['nim', 'nama', 'no_telpon', 'progdi', 'judul', 'status', 'deskripsi', 'foto', 'proposal', 'kst', 'transkrip', 'usulan_pembimbing_1', 'usulan_pembimbing_2'], 'required'],
            [['nim', 'progdi', 'status', 'foto', 'proposal', 'kst', 'transkrip', 'usulan_pembimbing_1', 'usulan_pembimbing_2'], 'integer'],
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
            'judul' => 'Judul',
            'status' => 'Status',
            'deskripsi' => 'Deskripsi',
            'foto' => 'Foto',
            'proposal' => 'Proposal',
            'kst' => 'Kst',
            'transkrip' => 'Transkrip',
            'usulan_pembimbing_1' => 'Usulan Pembimbing 1',
            'usulan_pembimbing_2' => 'Usulan Pembimbing 2',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbBimbingans()
    {
        return $this->hasMany(TbBimbingan::className(), ['nim' => 'nim']);
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getProgdi0()
    {
        return $this->hasOne(TbProgdi::className(), ['kd_progdi' => 'progdi']);
    }
}
