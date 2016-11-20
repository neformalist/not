<?php

namespace frontend\controllers;

use common\models\Article;
use yii\web\HttpException;
use yii\data\Pagination;

class ArticlesController extends \yii\web\Controller
{
    
    public function actionView($url)
    {
        
        $post = Article::findOne(['url'=>$url, 'visible' => 1]);
        if(!$post) throw new HttpException(404 ,'Not found');
        
        $lang =\frontend\models\Lang::$current->url;
        
        $texts = $post->getTexts();
        
        $this->view->registerCssFile('/css/article.css',['depends' =>'frontend\assets\AppAsset']);
        
        $this->registerTag($post->getMetas()->all());
       
        $textsCount = clone $texts;
        $pages = new Pagination(['totalCount' => $textsCount->count(), 'pageSize' => 1]);
        $pages->pageSizeParam = false;
        $texts = $texts->offset($pages->offset)
        ->limit($pages->limit)
        ->all();
        
        $post->updateCounters(['hits' => 1]);
        
           return $this->render('view',[
               'post' => $post,
               'texts' => $texts,
               'pages' => $pages,
               'lang' => $lang,
           ]); 
        
 
    }
    
    
    public function actionIndex() {
        
        $post = Article::findAll(['visible' => 1]);
        
        return $this->render('index',[
            'post' => $post,
        ]);
    }
    
    private function registerTag($tags){
       foreach ($tags as $tag){
            \Yii::$app->view->registerMetaTag([
                'name' =>  'description',
                'content' => $tag->description_ru,
            ]);
            \Yii::$app->view->registerMetaTag([
                'name' =>  'keywords',
                'content' => $tag->keywords_ru,
            ]);
        } 
    }
    
   

}
