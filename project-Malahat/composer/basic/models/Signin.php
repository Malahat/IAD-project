<?php

namespace app\models;

use yii\base\Model;

class Signin extends Model
{

public $name;
public $password;

public function rules(){
	return  [
			
			[['name','password'],'required'],
			
			];
}

}

?>