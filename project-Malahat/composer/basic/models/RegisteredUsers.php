<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "registered_users".
 *
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $password
 *
 * @property UserInterest[] $userInterests
 */
class RegisteredUsers extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'registered_users';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'email', 'password'], 'required'],
            [['name'], 'string'],
            [['email'], 'string', 'max' => 50],
            [['password'], 'string', 'max' => 64],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'id' => 'ID',
            'name' => 'Name',
            'email' => 'Email',
            'password' => 'Password',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUserInterests()
    {
        return $this->hasMany(UserInterest::className(), ['users' => 'id']);
    }
}
