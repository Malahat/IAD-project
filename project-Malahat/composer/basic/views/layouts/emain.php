<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\EpagesAsset;

EpagesAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<header>
    <nav class="header-nav navbar navbar-default">
    <div class="container">
        <div class="navbar-header">
            <a href="main.html" class="pull-left hidden-xs">
                <div id="logo" alt="Logo"></div>
            </a>
            <div class="navbar-brand">
                <h1>E pages!</h1>
            </div> <!-- header div ends here-->
        </div>
    </div>
    </nav>
</header>

<?php $this->beginBody() ?>
    
    <?= $content ?>

<footer class="text-center">
<div>
<p>The E pages! Website &copy; 2017</p>
</div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
