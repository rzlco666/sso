<?php

namespace common\models;

use Yii;

/**
 * This is the model class for table "wifi".
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string $profile
 * @property int $status
 * @property int $user_id
 * @property int $created_by
 * @property string $created_at
 * @property int $updated_by
 * @property string $updated_at
 *
 * @property User $user
 */
class Wifi extends \yii\db\ActiveRecord
{
    /**
     * {@inheritdoc}
     */
    public static function tableName()
    {
        return 'wifi';
    }

    /**
     * {@inheritdoc}
     */
    public function rules()
    {
        return [
            [['username', 'password', 'profile', 'status', 'user_id'], 'required'],
            [['status', 'user_id'], 'integer'],
            [['username'], 'string', 'max' => 100],
            [['password'], 'string', 'max' => 10],
            [['profile'], 'string', 'max' => 20],
            [['user_id'], 'exist', 'skipOnError' => true, 'targetClass' => User::className(), 'targetAttribute' => ['user_id' => 'id']],
        ];
    }

    /**
     * {@inheritdoc}
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'username' => 'Username',
            'password' => 'Password',
            'profile' => 'Profile',
            'status' => 'Status',
            'user_id' => 'User ID',
        ];
    }

    /**
     * Gets query for [[User]].
     *
     * @return \yii\db\ActiveQuery
     */
    public function getUser()
    {
        return $this->hasOne(User::className(), ['id' => 'user_id']);
    }
}
