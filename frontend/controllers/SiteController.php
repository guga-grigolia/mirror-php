<?php
namespace frontend\controllers;

use frontend\models\search\ImageSearch;
use frontend\modules\api\v1\resources\Article;
use Yii;
use frontend\models\ContactForm;
use yii\data\DataProviderInterface;
use yii\web\Controller;

/**
 * Site controller
 */
class SiteController extends Controller
{
    /**
     * @inheritdoc
     */
    public function actions()
    {
        return [
            'error' => [
                'class' => 'yii\web\ErrorAction'
            ],
            'captcha' => [
                'class' => 'yii\captcha\CaptchaAction',
                'fixedVerifyCode' => YII_ENV_TEST ? 'testme' : null
            ],
            'set-locale' => [
                'class' => 'common\actions\SetLocaleAction',
                'locales' => array_keys(Yii::$app->params['availableLocales'])
            ]
        ];
    }

    public function actionIndex()
    {
        $searchModel = new ImageSearch();
        $dataProvider = $searchModel->search(\Yii::$app->request->queryParams, true);
        return $this->render('index', ['dataProvider' => $dataProvider]);
    }

    public function actionView($id)
    {
        $image = Article::find()->andWhere(['id'=>$id])->one();
        return $this->render('view',['image'=>$image]);
    }
}
