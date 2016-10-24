<?php

namespace backend\controllers;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\MetaExample;

/**
 * ArticleSearchMetaExample represents the model behind the search form about `common\models\MetaExample`.
 */
class ArticleSearchMetaExample extends MetaExample
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'example_id'], 'integer'],
            [['description_ru', 'keywords_ru', 'description_en', 'keywords_en'], 'safe'],
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
     *
     * @param array $params
     *
     * @return ActiveDataProvider
     */
    public function search($params)
    {
        $query = MetaExample::find();

        // add conditions that should always apply here

        $dataProvider = new ActiveDataProvider([
            'query' => $query,
        ]);

        $this->load($params);

        if (!$this->validate()) {
            // uncomment the following line if you do not want to return any records when validation fails
            // $query->where('0=1');
            return $dataProvider;
        }

        // grid filtering conditions
        $query->andFilterWhere([
            'id' => $this->id,
            'example_id' => $this->example_id,
        ]);

        $query->andFilterWhere(['like', 'description_ru', $this->description_ru])
            ->andFilterWhere(['like', 'keywords_ru', $this->keywords_ru])
            ->andFilterWhere(['like', 'description_en', $this->description_en])
            ->andFilterWhere(['like', 'keywords_en', $this->keywords_en]);

        return $dataProvider;
    }
}
