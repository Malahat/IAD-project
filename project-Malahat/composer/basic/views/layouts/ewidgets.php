<?php
use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\model\Signin;
?>

<div class="bar-buttons">
<?php Html::submitButton('username',['class'=>'user-btn']); ?>
<?php Html::submitButton('Signout',['class'=>'user-btn sign-out']); ?>
</div>