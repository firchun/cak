<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "produk".
 *
 * @property int $id
 * @property string $nama_produk
 * @property string $keterangan
 * @property string $foto
 */
class Produk extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'produk';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['nama_produk', 'keterangan', 'foto'], 'required'],
            [['keterangan'], 'string'],
            [['nama_produk'], 'string', 'max' => 20],
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
            'nama_produk' => 'Nama Produk',
            'keterangan' => 'Keterangan',
            'foto' => 'Foto',
        ];
    }
}
