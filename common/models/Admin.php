<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "tb_admin".
 *
 * @property integer $id
 * @property string $nama
 * @property string $username
 * @property string $password
 */
class Admin extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'tb_admin';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['nama', 'username', 'password'], 'required'],
            [['nama', 'username', 'password'], 'string', 'max' => 50]
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'username' => 'Username',
            'password' => 'Password',
        ];
    }
}
