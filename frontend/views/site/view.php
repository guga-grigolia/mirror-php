<?php
/**
 * Created by PhpStorm.
 * User: Guga-PC
 * Date: 1/28/2017
 * Time: 2:05 AM
 */
?>

<div class="row">
    <div class="col-md-12">
        <img src="<?php /** @var \centigen\i18ncontent\models\Article $image */
        echo $image->getThumbnailUrl();?>" class="img-responsive">
    </div>
</div>

<div class="row" style="margin-top: 12px;">
    <div class="col-md-2">
        <iframe
            src="https://www.facebook.com/plugins/share_button.php?href=<?php echo urlencode(\yii\helpers\Url::to(['site/view', 'id' => $image->id],true)); ?>&layout=button_count&size=small&mobile_iframe=true&width=77&height=20&appId"
            width="77" height="20" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true">

        </iframe>
    </div>

</div>
