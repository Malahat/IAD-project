<?php
use yii\helpers\Html;
?>

<h1>Malahat <?=$figure?></h1>

<?php
foreach($users as $registered){
	echo $registered->name."<br>";
}
?>

