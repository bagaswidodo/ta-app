<?php

namespace backend\models;

use Yii;

/**
 * This is the model class for table "tb_progdi".
 *
 * @property integer $kd_progdi
 * @property string $nama_progdi
 *
 * @property TbMhs[] $tbMhs
 */
class Progdi extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_progdi';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['kd_progdi', 'nama_progdi'], 'required'],
            [['kd_progdi'], 'integer'],
            [['nama_progdi'], 'string', 'max' => 100],
            [['kd_progdi'], 'unique']
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'kd_progdi' => 'Kode Progdi',
            'nama_progdi' => 'Nama Progdi',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getTbMhs()
    {
        return $this->hasMany(TbMhs::className(), ['progdi' => 'kd_progdi']);
    }
}
