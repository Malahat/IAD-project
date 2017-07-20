<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="container">
	<div class="picture img-responsive jumbotron">
				<div class="intro">
				Search for your Desired job
				</div>


<div class="container" id="login-popup">
		<form action="" method="post" id="form">

		<?php
		if(Yii::$app->session->hasFlash('invalid'))
		{
			echo '<div class="alert alert-danger">'.yii::$app->session->getFlash('invalid').'</div>';
		}

		?>
	    	<?php $form=Activeform::begin(); ?>

	    	<div class="inner-addon left-addon">
	    		<span class="glyphicon glyphicon-user"></span>
	    		<?= $form->field($model,'name')->textInput(['autofocus'=> true,'placeholder'=>'Username', 'class'=>'field'])->label(false)?>
			</div>
			
			<div class="inner-addon left-addon">
				<span class="glyphicon glyphicon-lock"></span>
				<?= $form->field($model,'password')->passwordInput(['class'=>'field', 'placeholder'=>'Password'])->label(false) ?>
			</div>

			<div class="loginbuttons">
			 <?= Html::submitButton('Login', ['class' => 'button1', 'name' => 'contact-button']) ?>
			<?= Html::a('Cancel', ['/epages/index'], ['class'=>'button']) ?>
			</div>
			<!-- <input type="submit" name="signin" Value="Log in" class="button" onclick="changename()">
			<input type="submit" name="cancel" Value="Cancel" class="button" onclick="popup_hide()"> -->
		<?php Activeform::end(); ?>
		</form>
</div>