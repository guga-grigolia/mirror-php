<?php

namespace frontend\models\search;

use centigen\base\helpers\DateHelper;
use centigen\i18ncontent\models\Article;
use yii\base\Model;
use yii\data\ActiveDataProvider;

/**
 * ArticleSearch represents the model behind the search form about `centigen\i18ncontent\models\Article`.
 */
class ImageSearch extends Article
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'published_at'], 'integer']
        ];
    }

    /**
     * @inheritdoc
     */
    public function scenarios()
    {
        // bypass scenarios() implementation in the parent class
        return Model::scenarios();
    }

    /**
     * Creates data provider instance with search query applied
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = Article::find()->published();

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        if (!($this->load($params) && $this->validate())) {
            return $dataProvider;
        }

        $query->andFilterWhere([
            'id' => $this->id
        ])->andFilterWhere(['DATE_FORMAT(FROM_UNIXTIME(published_at),\'%Y-%m-%d\')' => $this->published_at]);
        $query->orderBy(['published_at DESC']);
        return $dataProvider;
    }
}
