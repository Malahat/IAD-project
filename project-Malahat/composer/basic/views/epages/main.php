<?php
use yii\helpers\Html;

?>


<div class="bar-buttons">
<?= Html::a($username, ['/epages/bookmark'], ['class'=>'user-btn']) ?>
<?= Html::a('Signout',['/epages/signout'],['class'=>'user-btn sign-out']); ?>
</div>

<div class="container" id="main">
	<div>
		<a href="index.php?r=epages/display&name=company"  value="companies"><div class="tabs company jumbotron">
			<div class="intro">Companies</div>
		</div>
		</a>
	</div>	

	<div>
	<a href="index.php?r=epages/display&name=bank"><div class="tabs banks jumbotron">
		<div class="intro">Banks</div>
	</div>
	</a>
	</div>

	<div>
	<a href="index.php?r=epages/display&name=software"><div class="tabs software jumbotron">
		<div class="intro">Software Houses</div>
	</div>
	</a>
	</div>

</div> <!-- main div ends here-->