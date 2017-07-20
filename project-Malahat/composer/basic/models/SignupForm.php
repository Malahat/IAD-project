<?php

namespace app\models;

use yii\base\Model;

class SignupForm extends Model{

	public $name;
	public $password;
	public $email;

	public function rules(){
		return [
				[['name','password','email'],'required'],
				['email','email'],
				];
	}

	}


?>