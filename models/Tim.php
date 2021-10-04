<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "tim".
 *
 * @property int $id
 * @property string $nama
 * @property string $jabatan
 * @property string $foto
 */
class Tim extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'tim';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'jabatan', 'foto'], 'required'],
            [['nama', 'jabatan'], 'string', 'max' => 20],
            [['foto'], 'string', 'max' => 255],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'nama' => 'Nama',
            'jabatan' => 'Jabatan',
            'foto' => 'Foto',
        ];
    }
}
