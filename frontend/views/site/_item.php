<?php
/**
 * Created by PhpStorm.
 * User: Guga-PC
 * Date: 1/28/2017
 * Time: 1:59 AM
 */
?>


<a href="<?php /** @var \centigen\i18ncontent\models\Article $model */
echo \yii\helpers\Url::to(['/site/view', 'id' => $model->id]) ?>">
    <img src="<?php echo $model->getThumbnailUrl(); ?>"
         class="img-responsive" alt="">
    </span>
</a>
