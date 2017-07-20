<?php
namespace app\controllers;

use Yii;
use yii\web\Controller;

Class BookReviewController extends Controller{

public function actionIndex(){
	echo "Hello from the book world";
}

public function actionHello(){
	$data['name']="Everything";
	$data['author']="Jacob Marks";

     return $this->render('hello', $data);
 }

public function actionEnter(){
	 $username= $_POST['user1'];

	if(isset($_POST['enter'])){
	echo $username."Hello you have just entered book heaven";
}

}

}
