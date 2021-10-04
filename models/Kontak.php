<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "kontak".
 *
 * @property int $id
 * @property string $nama
 * @property string $no_hp
 * @property string $instansi
 * @property string $isi
 */
class Kontak extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'kontak';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'no_hp', 'instansi', 'isi'], 'required'],
            [['isi'], 'string'],
            [['nama', 'no_hp'], 'string', 'max' => 20],
            [['instansi'], 'string', 'max' => 50],
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
            'no_hp' => 'No Hp',
            'instansi' => 'Instansi',
            'isi' => 'Isi',
        ];
    }
}
