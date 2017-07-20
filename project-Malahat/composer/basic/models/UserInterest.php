<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "user_interest".
 *
 * @property integer $ref
 * @property integer $users
 * @property integer $interest
 *
 * @property RegisteredUsers $users0
 */
class UserInterest extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'user_interest';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['users', 'interest'], 'required'],
            [['users', 'interest'], 'integer'],
            [['users'], 'exist', 'skipOnError' => true, 'targetClass' => RegisteredUsers::className(), 'targetAttribute' => ['users' => 'id']],
        ];
    }

    /**
     * @inheritdoc
     */
    public function attributeLabels()
    {
        return [
            'ref' => 'Ref',
            'users' => 'Users',
            'interest' => 'Interest',
        ];
    }

    /**
     * @return \yii\db\ActiveQuery
     */
    public function getUsers0()
    {
        return $this->hasOne(RegisteredUsers::className(), ['id' => 'users']);
    }
}
