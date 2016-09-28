<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "ims_user".
 *
 * @property integer $id
 * @property string $ims_fname
 * @property string $ims_address
 * @property string $ims_phone
 * @property string $ims_nickname
 * @property string $password_hash
 * @property string $auth_key
 * @property integer $status
 * @property string $email
 * @property integer $role
 */
class ImsUser extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'ims_user';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['status', 'role'], 'integer'],
            [['ims_fname', 'email'], 'string', 'max' => 250],
            [['ims_address'], 'string', 'max' => 300],
            [['ims_phone', 'auth_key'], 'string', 'max' => 50],
            [['ims_nickname'], 'string', 'max' => 100],
            [['password_hash'], 'string', 'max' => 255],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'ims_fname' => 'Ims Fname',
            'ims_address' => 'Ims Address',
            'ims_phone' => 'Ims Phone',
            'ims_nickname' => 'Ims Nickname',
            'password_hash' => 'Password Hash',
            'auth_key' => 'Auth Key',
            'status' => 'Status',
            'email' => 'Email',
            'role' => 'Role',
        ];
    }
}
