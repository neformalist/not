<?php

namespace frontend\controllers;

use common\models\Example;

class ExampleController extends \yii\web\Controller
{
    public function actionView($url)
    {
        
        $example = Example::findOne(['url'=>$url]);
        if(!$example) throw new HttpException(404 ,'Not found');
        
        $lang =\frontend\models\Lang::$current->url;
        
        $this->registerTag($example->getMetaExamples()->all());
        
        $example->updateCounters(['hits' => 1]);
        
        return $this->render('view',[
            'example' => $example,
            'lang' => $lang,
        ]);
    }
    
    public function actionIndex() {
        
        $example = Example::findAll(['visible' => 1]);
        
        return $this->render('index',[
            'example' => $example,
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
