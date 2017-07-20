<?php

namespace app\models;

use Yii;

/**
 * This is the model class for table "softwarehouses".
 *
 * @property integer $id
 * @property string $name
 * @property string $head
 * @property string $prod
 * @property string $web
 * @property integer $phone
 * @property string $email
 */
class Softwarehouses extends \yii\db\ActiveRecord
{
    /**
     * @inheritdoc
     */
    public static function tableName()
    {
        return 'softwarehouses';
    }

    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['name', 'head', 'prod', 'phone'], 'required'],
            [['name', 'head', 'prod', 'web', 'email'], 'string'],
            [['phone'], 'integer'],
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
