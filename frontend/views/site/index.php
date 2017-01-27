<?php
/* @var $this yii\web\View */
$this->title = Yii::$app->name;
?>
<style>
    .hide-bullet{
        list-style: none;
    }
</style>
<div class="site-index">

    <div class="body-content">
        <div class="row">
            <?php /** @var \yii\data\DataProviderInterface $dataProvider */
            echo \yii\widgets\ListView::widget([
                'dataProvider' => $dataProvider,
                'itemView' => '_item',
                'emptyTextOptions' => [
                    'class' => 'col-xs-12'
                ],
                'pager' => [
                    'class' => \yii\widgets\LinkPager::className(),
                ],
                'summary' => false,
                'options' => [
                    'tag' => 'ul',
                    'class' => ''
                ],
                'itemOptions' => [
                    'tag' => 'li',
                    'class' => 'hide-bullet col-md-3'
                ]
            ]); ?>
        </div>

    </div>
</div>
