<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "companies".
 *
 * @property integer $id
 * @property string $name
 * @property string $head
 * @property string $prod
 * @property string $web
 * @property integer $phone
 * @property string $email
 */
class Companies extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'companies';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'prod', 'phone'], 'required'],
            [['name', 'head', 'prod'], 'string'],
            [['phone'], 'integer'],
            [['web', 'email'], 'string', 'max' => 50],
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
            'head' => 'Head',
            'prod' => 'Prod',
            'web' => 'Web',
            'phone' => 'Phone',
            'email' => 'Email',
        ];
    }
}
