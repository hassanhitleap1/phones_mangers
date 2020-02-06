<?php

/* @var $this yii\web\View */

$this->title = 'phone manger';
$i=1;
use yii\helpers\Html;?>
<div class="container">
    <div class="row">
        <dic class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"  type="button"  data-toggle="collapse" data-target="#footwear_<?=$i?>" aria-expanded="true" aria-controls="footwear_<?=$i?>">phone list one  <span class="glyphicon glyphicon-arrow-down"></span></div>
                <div class="panel-body collapse" id="footwear_<?=$i?>">
                    <?php for($i=1; $i <= 10 ;$i++):?>
                        <p>
                            <?= Html::a(Yii::t('app', "Phone Package $i"), ['phones/index', 'model' => $i], ['class' => 'btn btn-primary btn-block']) ?>
                        </p>

                    <?php endfor;?>
                </div>
            </div>
        </dic>
        <dic class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"  type="button"  data-toggle="collapse" data-target="#footwear_<?=$i?>" aria-expanded="false" aria-controls="footwear_<?=$i?>">phone list one  <span class="glyphicon glyphicon-arrow-down"></span></div>
                <div class="panel-body collapse" id="footwear_<?=$i?>">
                    <?php for($i=11; $i <= 20 ;$i++):?>
                        <p>
                            <?= Html::a(Yii::t('app', "Phone Package $i"), ['phones/index', 'model' => $i], ['class' => 'btn btn-primary btn-block']) ?>
                        </p>

                    <?php endfor;?>
                </div>
            </div>
        </dic>
    </div>
    <div class="row">
        <dic class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"  type="button"  data-toggle="collapse" data-target="#footwear_<?=$i?>" aria-expanded="false" aria-controls="footwear_<?=$i?>">phone list one  <span class="glyphicon glyphicon-arrow-down"></span></div>
                <div class="panel-body collapse" id="footwear_<?=$i?>">
                    <?php for($i=21; $i <= 30 ;$i++):?>
                        <p>
                            <?= Html::a(Yii::t('app', "Phone Package $i"), ['phones/index', 'model' => $i], ['class' => 'btn btn-primary btn-block']) ?>
                        </p>

                    <?php endfor;?>
                </div>
            </div>
        </dic>
        <dic class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"  type="button"  data-toggle="collapse" data-target="#footwear_<?=$i?>" aria-expanded="false" aria-controls="footwear_<?=$i?>">phone list one  <span class="glyphicon glyphicon-arrow-down"></span></div>
                <div class="panel-body collapse" id="footwear_<?=$i?>">
                    <?php for($i=31; $i <= 40 ;$i++):?>
                        <p>
                            <?= Html::a(Yii::t('app', "Phone Package $i"), ['phones/index', 'model' => $i], ['class' => 'btn btn-primary btn-block']) ?>
                        </p>

                    <?php endfor;?>
                </div>
            </div>
        </dic>
    </div>
    <div class="row">
        <dic class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"  type="button"  data-toggle="collapse" data-target="#footwear_<?=$i?>" aria-expanded="false" aria-controls="footwear_<?=$i?>">phone list one  <span class="glyphicon glyphicon-arrow-down"></span></div>
                <div class="panel-body collapse" id="footwear_<?=$i?>">
                    <?php for($i=41; $i <= 50 ;$i++):?>
                        <p>
                            <?= Html::a(Yii::t('app', "Phone Package $i"), ['phones/index', 'model' => $i], ['class' => 'btn btn-primary btn-block']) ?>
                        </p>

                    <?php endfor;?>
                </div>
            </div>
        </dic>
        <dic class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"  type="button"  data-toggle="collapse" data-target="#footwear_<?=$i?>" aria-expanded="false" aria-controls="footwear_<?=$i?>">phone list one  <span class="glyphicon glyphicon-arrow-down"></span></div>
                <div class="panel-body collapse" id="footwear_<?=$i?>">
                    <?php for($i=51; $i <= 60 ;$i++):?>
                        <p>
                            <?= Html::a(Yii::t('app', "Phone Package $i"), ['phones/index', 'model' => $i], ['class' => 'btn btn-primary btn-block']) ?>
                        </p>

                    <?php endfor;?>
                </div>
            </div>
        </dic>
    </div>
    <div class="row">
        <dic class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"  type="button"  data-toggle="collapse" data-target="#footwear_<?=$i?>" aria-expanded="false" aria-controls="footwear_<?=$i?>">phone list one  <span class="glyphicon glyphicon-arrow-down"></span></div>
                <div class="panel-body collapse" id="footwear_<?=$i?>">
                    <?php for($i=61; $i <= 70 ;$i++):?>
                        <p>
                            <?= Html::a(Yii::t('app', "Phone Package $i"), ['phones/index', 'model' => $i], ['class' => 'btn btn-primary btn-block']) ?>
                        </p>

                    <?php endfor;?>
                </div>
            </div>
        </dic>
        <dic class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"  type="button"  data-toggle="collapse" data-target="#footwear_<?=$i?>" aria-expanded="false" aria-controls="footwear_<?=$i?>">phone list one  <span class="glyphicon glyphicon-arrow-down"></span></div>
                <div class="panel-body collapse" id="footwear_<?=$i?>">
                    <?php for($i=71; $i <= 80 ;$i++):?>
                        <p>
                            <?= Html::a(Yii::t('app', "Phone Package $i"), ['phones/index', 'model' => $i], ['class' => 'btn btn-primary btn-block']) ?>
                        </p>

                    <?php endfor;?>
                </div>
            </div>
        </dic>
    </div>
    <div class="row">
        <dic class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"  type="button"  data-toggle="collapse" data-target="#footwear_<?=$i?>" aria-expanded="false" aria-controls="footwear_<?=$i?>">phone list one  <span class="glyphicon glyphicon-arrow-down"></span></div>
                <div class="panel-body collapse" id="footwear_<?=$i?>">
                    <?php for($i=81; $i <= 90 ;$i++):?>
                        <p>
                            <?= Html::a(Yii::t('app', "Phone Package $i"), ['phones/index', 'model' => $i], ['class' => 'btn btn-primary btn-block']) ?>
                        </p>

                    <?php endfor;?>
                </div>
            </div>
        </dic>
        <dic class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"  type="button"  data-toggle="collapse" data-target="#footwear_<?=$i?>" aria-expanded="false" aria-controls="footwear_<?=$i?>">phone list one  <span class="glyphicon glyphicon-arrow-down"></span></div>
                <div class="panel-body collapse" id="footwear_<?=$i?>">
                    <?php for($i=91; $i <= 100 ;$i++):?>
                        <p>
                            <?= Html::a(Yii::t('app', "Phone Package $i"), ['phones/index', 'model' => $i], ['class' => 'btn btn-primary btn-block']) ?>
                        </p>

                    <?php endfor;?>
                </div>
            </div>
        </dic>
    </div>
    <div class="row">
        <dic class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"  type="button"  data-toggle="collapse" data-target="#footwear_<?=$i?>" aria-expanded="false" aria-controls="footwear_<?=$i?>">phone list one  <span class="glyphicon glyphicon-arrow-down"></span></div>
                <div class="panel-body collapse" id="footwear_<?=$i?>">
                    <?php for($i=101; $i <= 110 ;$i++):?>
                        <p>
                            <?= Html::a(Yii::t('app', "Phone Package $i"), ['phones/index', 'model' => $i], ['class' => 'btn btn-primary btn-block']) ?>
                        </p>

                    <?php endfor;?>
                </div>
            </div>
        </dic>
        <dic class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading"  type="button"  data-toggle="collapse" data-target="#footwear_<?=$i?>" aria-expanded="false" aria-controls="footwear_<?=$i?>">phone list one  <span class="glyphicon glyphicon-arrow-down"></span></div>
                <div class="panel-body collapse" id="footwear_<?=$i?>">
                    <?php for($i=111; $i <= 120 ;$i++):?>
                        <p>
                            <?= Html::a(Yii::t('app', "Phone Package $i"), ['phones/index', 'model' => $i], ['class' => 'btn btn-primary btn-block']) ?>
                        </p>

                    <?php endfor;?>
                </div>
            </div>
        </dic>
    </div>


</div>
