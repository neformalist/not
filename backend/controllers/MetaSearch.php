<?php

namespace backend\controllers;

use Yii;
use yii\base\Model;
use yii\data\ActiveDataProvider;
use common\models\Meta;

/**
 * MetaSearch represents the model behind the search form about `common\models\Meta`.
 */
class MetaSearch extends Meta
{
    /**
     * @inheritdoc
     */
    public function rules()
    {
        return [
            [['id', 'article_id'], 'integer'],
            [['desription_ru', 'keywords_ru', 'desription_en', 'keywords_en'], 'safe'],
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
        $query = Meta::find();

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
            'article_id' => $this->article_id,
        ]);

        $query->andFilterWhere(['like', 'desription_ru', $this->desription_ru])
            ->andFilterWhere(['like', 'keywords_ru', $this->keywords_ru])
            ->andFilterWhere(['like', 'desription_en', $this->desription_en])
            ->andFilterWhere(['like', 'keywords_en', $this->keywords_en]);

        return $dataProvider;
    }
}
