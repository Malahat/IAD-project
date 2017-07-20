<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="container">
	<div class="picture img-responsive jumbotron">
				<div class="intro">
				Search for your Desired job
				</div>
						<div class= "atags">
					
					<?= Html::a('Sign in', ['/epages/login'], ['class'=>'login-btn']) ?>
					<?= Html::a('Sign up', ['/epages/signup'], ['class'=>'login-btn']) ?>
				</div>
	</div>	
	</div>