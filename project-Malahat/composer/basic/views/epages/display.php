<?php
use yii\helpers\Html;
use yii\widgets\LinkPager;
?>

<div class="bar-buttons">
<?= Html::a($username, ['/epages/bookmark'], ['class'=>'user-btn']) ?>
<?= Html::a('Signout',['/epages/signout'],['class'=>'user-btn sign-out']); ?>
</div>

<div class="container" id="page-content">
	
	<!-- search bar-->
	<div class="inner-addon left-glyph">
	<span class="glyphicon glyphicon-search"></span>
	<input type="text" class="searchbar" placeholder="Search" name="search-bar" id="search1">
	<br>
	</div>

<div class="list">

<?php
if(Yii::$app->session->hasFlash('saved'))
		{
			echo '<div class="alert alert-info">'.yii::$app->session->getFlash('saved').'</div>';
		}
?>

<?php
foreach($data as $link)
{

$id = $link['id'];

echo 	Html::a('Save', ['/epages/save','id'=>$id], ['class'=>'save-btn']).
		'<h2 class="name">'.$link['name'].'</h2>'.
		'<span class="details glyphicon glyphicon-envelope">'.'</span>'.'<span class="data">'.$link['email'].'</span>'."<br>".
		'<span class="details glyphicon glyphicon-map-marker">'.'</span>'.'<span class="data">'.$link['head'].'</span>'."<br>".
		'<span class="details glyphicon glyphicon-briefcase">'.'</span>'.'<span class="data">'.$link['prod'].'</span>'."<br>".
		// '<span class="details glyphicon glyphicon-globe">'.'</span>'.'<span class="data">'.'<a href='.$link['web']. 'target="_blank"'.'>'.$link['web'].'</a>'.'</span>'."<br>"
		Html::a($link['web'], [$link['web']],['target'=>'_blank'],['class'=>'data'])."<br>".
		'<span class="details glyphicon glyphicon-phone">'.'</span>'.'<span class="data">'.$link['phone'].'</span>'."<br>".	
		'<hr class="stylehr">';	
		

}

?>

<?= LinkPager::widget(['pagination' => $pagination],['class'=>'paging']) ?>

</div>