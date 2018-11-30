<?php

/* @var $this \yii\web\View */

/* @var $content string */

use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use frontend\assets\AppAsset;
use common\widgets\Alert;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="inner-page">
<?php $this->beginBody() ?>

<div class="top-navigation">
    <div class="container flex">
        <a href="feedback.html">
            <picture>
                <source media="(max-width: 1080px)" srcset="/main/assets/images/logo-short2.png">
                <img src="/main/assets/images/logo-short.png" alt="" class="logo"/>
            </picture>
        </a>
        <label>
            <input type="checkbox">
            <span class="burger-icon"></span>
            <ul class="nav-menu flex">
                <li><a href="/goals" class="transition relative active"><i class="fas fa-expand"></i>goals</a></li>
                <li><a href="/feedback" class="transition relative"><i class="far fa-check-circle"></i>feedback
                        requests<span class="has-notification">2</span></a></li>
                <li><a href="javascript:void(0);" class="transition relative"><i class="far fa-comment-dots"></i>conversation
                        requests<span class="has-notification">1</span></a></li>
            </ul>
        </label>
        <div class="user-options">
            <a href="javascript:void(0);" class="flex">
                <img src="/main/assets/images/members/member-1.png" alt="">
                <span class="inline-block">Ani Hakobyan</span>
                <i class="fas fa-angle-down"></i>
            </a>
        </div>
    </div>
</div>
<?= $content ?>
<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
