<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;
use app\models\RegisteredUsers;
use app\models\SignupForm;
use app\models\Signin;
use app\models\Banks;
use app\models\Companies;
use app\models\Softwarehouses;
use app\models\UserInterest;
use yii\data\Pagination;

Class EpagesController extends Controller{

	public $info;
		

	public function actionIndex(){
		$this->layout= 'emain'; // we are making emain as our layout to be used here
		return $this->render('index');
	}

	public function actionCheck(){
		 $users= RegisteredUsers::find()->all();

		return $this->render('check',['users'=>$users]);
	}


	public function actionLogin(){
		
		$this->layout= 'emain';
		$check=true;

		$model = new Signin;
		
		if($model->load(Yii::$app->request->post()) && $model->validate()){
			
			$users= RegisteredUsers::find()->where(['name'=>$model->name,'password'=>$model->password])->all();
			if($users!=null)
			{

				$session=yii::$app->session;
				$session->open();
				$session['name']=$model->name;
				$session['password']=$model->password;
				
				foreach($users as $user){
				$session['userid']=$user['id'];
				}

			return $this->render('main',['username'=>$model->name]);
			}
			
			else
		{
			yii::$app->session->setFlash('invalid', 'The username or password is in correct');
			return $this->refresh();
		}
		
		}
		

		return $this->render('login',['model'=>$model]);
	}


	public function actionSignup(){

		$this->layout= 'emain';
		$model = new SignupForm;
		$session=yii::$app->session;

		if($model->load (Yii::$app->request->post()) && $model->validate()){

			$findusers=RegisteredUsers::find()->where(['name'=>$model->name,'password'=>$model->password,'email'=>$model->email])->all();
			if($findusers==null) {
			
			$users=new RegisteredUsers();
			$users->name= $model->name;
			$users->password= $model->password;
			$users->email= $model->email;
			$users->save();
				
			
			$session->open();
			$session['name']=$model->name;
			$session['password']=$model->password;
			$session['userid']=$users->id;

		return $this->render('main',['username'=>$model->name]);
		
		}
			
		else 
		{
				yii::$app->session->setFlash('exist', 'The user already exists!');
				return $this->refresh();
		}
 		
 		}

		return $this->render('signup',['model'=>$model]);
}

		public function actionSignout(){

			$session=Yii::$app->session;
			$session->open();
			if($session->isActive){
				echo $session['name'];
				echo $session['userid'];
				$session->destroy();
				$this->layout='emain';			
				return $this->render('index');
		}
		
		}

	public function actionDisplay($name){
	

		if($name=="bank"){
		$this->layout='emain';
		$session=yii::$app->session;
		unset($session['com']);
		$session['com']=$name;
		$banks=Banks::find();
		//////////////////////
		//$query = Country::find();

        $pagination = new Pagination([
            'defaultPageSize' => 4,
            'totalCount' => $banks->count(),
        ]);

        $banks = $banks->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('display', [
        	'data'=>$banks,
        	'username'=>$session['name'],
            'banks' => $banks,
            'pagination' => $pagination,
        ]);

		//////////////////////
		//return $this->render('display',['data'=>$banks]);
	}
	if($name=="company"){
		$this->layout='emain';
		$session=yii::$app->session;
		unset($session['com']);
		$session['com']=$name;
		$company=Companies::find();
		//////////////////////

        $pagination = new Pagination([
            'defaultPageSize' => 4,
            'totalCount' => $company->count(),
        ]);

        $company = $company->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('display', [
        	'data'=>$company,
        	'username'=>$session['name'],
            'company' => $company,
            'pagination' => $pagination,
        ]);

		/////
	}

	if($name=="software"){
		$this->layout='emain';
		$session=yii::$app->session;
		unset($session['com']);
		$session['com']=$name;
		$banks=Softwarehouses::find();
		//////////////////////
		//$query = Country::find();

        $pagination = new Pagination([
            'defaultPageSize' => 4,
            'totalCount' => $sw->count(),
        ]);

        $sw = $sw->orderBy('name')
            ->offset($pagination->offset)
            ->limit($pagination->limit)
            ->all();

        return $this->render('display', [
        	'data'=>$sw,
        	'username'=>$session['name'],
            'sw' => $sw,
            'pagination' => $pagination,
        ]);

		//////////////////////
	}


}
	public function actionSearch($text){

			$session=yii::$app->session;
			$this->layout='emain';
			if($session['com']=='bank')
				{
				$users=Banks::find()->andFilterWhere(['or',['like', 'name', $text],['like','phone',$text]])->all();
				if($users!=null){
				return $this->render('search',['data'=>$users,'username'=>$session['name']]);
				}
			}	
			if($session['com']=='company')
				{
				$users=Companies::find()->andFilterWhere(['or',['like', 'name', $text],['like','phone',$text]])->all();
				if($users!=null){
				return $this->render('search',['data'=>$users,'username'=>$session['name']]);
				}	
			}
			
			if($session['com']=='software')
				{
				$users=Softwarehouses::find()->andFilterWhere(['or',['like', 'name', $text],['like','phone',$text]])->all();
				if($users!=null){
				return $this->render('search',['data'=>$users,'username'=>$session['name']]);
				}

			}
		}

	public function actionSave($id){
		
		$session=Yii::$app->session;
		$userid=$session['userid'];
		echo $session['userid']."makz";
		
		$record = UserInterest::find()->where(['interest'=>$id,'users'=>$session['userid']])->all();

		if($record==null)
		 {

		 		$users= new UserInterest();
				$users->users= $session['user'];
				$users->tag= $session['com'];
				$users->interest= $id;
				$users->save();

		}	
		
		else
			{
				yii::$app->session->setFlash('saved', 'The item is already present in your bookmarks!');
			}

		return $this->redirect(['display', 'name' => $session['com']]);

	}
	
	public function actionBookmark(){
		
		$this->layout='emain';
		$session=yii::$app->session;
		$info;

		$users=UserInterest::find()->where(['users'=>$session['user']])->all();
		foreach($users as $user)
		{
			
			

				if($user->tag=='software')
				{
				$info=Softwarehouses::find()->where(['id'=>$user->interest])->all();		
				}

				if($user->tag=='company')
				{
				
				$info=Companies::find()->where(['id'=>$user->interest])->all();
				
				}

			// foreach ($info as $in){
			// echo $in->name;
			// }
			//echo $this->info;	
			return $this->render('bookmarks',['data'=>$info]);

		}

		

}

}




// 				$company=Companies::find()->where(['id'=>$user->interest])->all();
// 				return $this->render('bookmarks',['data'=>$company]);
		
			
// 				$banks=Banks::find()->where(['id'=>$user->interest])->all();
// 				return $this->render('bookmarks',['data'=>$banks]);
					
// 				$sw=Softwarehouses::find()->where(['id'=>$user->interest])->all();
// 				return $this->render('bookmarks',['data'=>$sw]);
