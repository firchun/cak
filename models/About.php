<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "about".
 *
 * @property int $id
 * @property string $isi
 * @property string $update_date
 */
class About extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'about';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['isi', 'update_date'], 'required'],
            [['isi'], 'string'],
            [['update_date'], 'safe'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'isi' => 'Isi',
            'update_date' => 'Update Date',
        ];
    }
}
