<?php
use yii\helpers\Html;
?>

<div class="container" id="page-content">
	
	<!-- bookmark heading-->
	<div >
	Bookmarks!
		</div>

<div class="list">

<?php
foreach($data as $link)
{

echo 	
		'<h2 class="name">'.$link['name'].'</h2>'.
		'<span class="details glyphicon glyphicon-envelope">'.'</span>'.'<span class="data">'.$link['email'].'</span>'."<br>".
		'<span class="details glyphicon glyphicon-map-marker">'.'</span>'.'<span class="data">'.$link['head'].'</span>'."<br>".
		'<span class="details glyphicon glyphicon-briefcase">'.'</span>'.'<span class="data">'.$link['prod'].'</span>'."<br>".
		'<span class="details glyphicon glyphicon-globe">'.'</span>'.'<span class="data">'.$link['web'].'</span>'."<br>".
		'<span class="details glyphicon glyphicon-phone">'.'</span>'.'<span class="data">'.$link['phone'].'</span>'."<br>".	
		'<hr class="stylehr">';	
		

}

?>

</div>