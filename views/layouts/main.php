<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    $guest_menuo =  ['label' => 'Login', 'url' => ['/site/login']];

    $item_one=[];
    $item_two=[];
    $item_three=[];
    $item_four=[];
    $item_five=[];
    $item_six=[];
    for($i=1; $i <= 20 ;$i++){
        $item_one []= ['label' => Yii::t('app', "Phone Package $i"), 'url' => ['/phones/index' ,"model"=>$i]];
    }
    for($i=21; $i <= 40 ;$i++){
        $item_two[]= ['label' => Yii::t('app', "Phone Package $i"), 'url' => ['/phones/index' ,"model"=>$i]];
    }
    for($i=41; $i <= 60 ;$i++){
        $item_three[]= ['label' => Yii::t('app', "Phone Package $i"), 'url' => ['/phones/index' ,"model"=>$i]];
    }
    for($i=61; $i <= 80 ;$i++){
        $item_four[] = ['label' => Yii::t('app', "Phone Package $i"), 'url' => ['/phones/index' ,"model"=>$i]];
    }
    for($i=81; $i <= 100 ;$i++){
        $item_five[]= ['label' => Yii::t('app', "Phone Package $i"), 'url' => ['/phones/index' ,"model"=>$i]];
    }
    for($i=101; $i <= 120 ;$i++){
        $item_six[]= ['label' => Yii::t('app', "Phone Package $i"), 'url' => ['/phones/index' ,"model"=>$i]];
    }

    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'list 1', 'items' =>$item_one],
            ['label' => 'list 2', 'items' =>$item_two],
            ['label' => 'list 3', 'items' =>$item_three],
            ['label' => 'list 4', 'items' =>$item_four],
            ['label' => 'list 5', 'items' =>$item_five],
            ['label' => 'list 6', 'items' =>$item_six],
            ['label' => 'Actions', 'items' =>[
                ['label' => 'Users', 'url' => ['/user-createor/index']],
                ['label' => 'Central', 'url' => ['/central/index']],
                ['label' => 'Message', 'url' => ['/user-message/index']],
            ]],

            Yii::$app->user->isGuest ? (
                $guest_menuo
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
