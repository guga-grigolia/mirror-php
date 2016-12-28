<?php

/* @var $this yii\web\View */
/* @var $dataProvider \yii\data\ActiveDataProvider */

$this->title = Yii::t('frontend', 'Articles')
?>
<div id="article-index">
    <h1><?php echo Yii::t('frontend', 'Articles') ?></h1>
    <?php echo \yii\widgets\ListView::widget([
        'dataProvider' => $dataProvider,
        'pager' => [
            'hideOnSinglePage' => true,
        ],
        'itemView' => '_item'
    ]) ?>
</div>