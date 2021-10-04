<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "users".
 *
 * @property int $id_user
 * @property string $username
 * @property string $password
 * @property string $authKey
 * @property string $accessToken
 */
class Users extends \yii\db\ActiveRecord implements \yii\web\IdentityInterface
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'users';
    }


    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'no_hp','nama_lengkap','no_hp'], 'required'],
            [['username', 'password', 'authKey', 'accessToken','nama_lengkap'], 'string', 'max' => 50],
            [[ 'no_hp'], 'string', 'max' => 20],
            [['username'], 'unique'],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id_user' => 'Id User',
            'username' => 'Username',
            'nama_lengkap' =>'Nama Lengkap',
            'password' => 'Password',
            'no_hp' => 'Nomor Hp',
            'authKey' => 'Auth Key',
            'accessToken' => 'Access Token',
        ];
    }
    

    public static function findIdentity($id_user){
        return self::findOne($id_user);
    }

    public static function findIdentityByAccessToken($token, $type=null){
        return self::findOne(['accessToken'=> $token]);
    }

    public static function findByUsername($username){
        return self::findOne(['username'=> $username]);
    }

    public static function findByNamaLengkap($nama_lengkap){
        return self::findOne(['nama_lengkap'=> $nama_lengkap]);
    }

    public function getId()
    {
        return $this->id_user;
    }

    public function getAuthKey()
    {
        return $this->authKey;
    }

    public function validateAuthKey($authKey)
    {
        return $this->authKey === $authKey;
    }

    public function validatePassword($password)
    {
        return $this->password === md5($password);
    }
    public function beforeSave($insert)
    {
        $old = $this->password;
        if ($old ) {
            $this->password = md5($this->password);
        }
        return parent::beforeSave($insert);
    }

}
