<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
?>
<div class="container">
	<div class="picture img-responsive jumbotron">
				<div class="intro">
				Search for your Desired job
				</div>


<div class="container" id="signup-popup">
		<form action="" method="post" id="form">

		<?php
		if(Yii::$app->session->hasFlash('exist'))
		{
			echo '<div class="alert alert-info">'.yii::$app->session->getFlash('exist').'</div>';
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

			<div class="inner-addon left-addon">
				<span class="glyphicon glyphicon-briefcase"></span>
				<?= $form->field($model,'email')->textInput(['class'=>'field', 'placeholder'=>'Email'])->label(false) ?>
			</div>

			<div class="loginbuttons">
			 <?= Html::submitButton('Sign up', ['class' => 'button1', 'name' => 'contact-button']) ?>
			<?= Html::a('Cancel', ['/epages/index'], ['class'=>'button']) ?>
			</div>
					<?php Activeform::end(); ?>
		</form>
</div>