<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model backend\controllers\ArticleSearchMetaExample */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="meta-example-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <?= $form->field($model, 'id') ?>

    <?= $form->field($model, 'example_id') ?>

    <?= $form->field($model, 'description_ru') ?>

    <?= $form->field($model, 'keywords_ru') ?>

    <?= $form->field($model, 'description_en') ?>

    <?php // echo $form->field($model, 'keywords_en') ?>

    <div class="form-group">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
