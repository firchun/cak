<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "support".
 *
 * @property int $id
 * @property string $nama
 * @property string $kontak
 * @property string $foto
 */
class Support extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'support';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama', 'kontak', 'foto'], 'required'],
            [['nama', 'kontak'], 'string', 'max' => 20],
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
            'kontak' => 'Kontak',
            'foto' => 'Foto',
        ];
    }
}
