<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use iutbay\yii2kcfinder\KCFinderInputWidget;
use dosamigos\datetimepicker\DateTimePicker;

/* @var $this yii\web\View */
/* @var $model common\models\Article */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="article-form">
    
    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_id')->dropDownList(common\models\Category::find()->select(['name', 'id'])->indexBy('id')->column(), ['promt'=>'']) ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>
    
     <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updated_at')->widget(DateTimePicker::className(), [
            'language' => 'ru',
            'size' => 'md',
            'template' => '{input}',
            'pickButtonIcon' => 'glyphicon glyphicon-calendar',
            'pickButtonIcon' => '',
            'inline' => false,
            'clientOptions' => [
                'viewSelect' => 'decade',
                'startDate' => "2000-02-14 10:00",
                'startView' => 1,
                'minView' => 0,
                'maxView' => 4,
                'autoclose' => true,
                
                //'linkFormat' => 'dd MM yyyy - HH:ii P', // if inline = true
                'format' => 'yyyy-mm-dd hh:ii:ss', // if inline = false
                'todayBtn' => true
            ]
        ]);?>

    <?= $form->field($model, 'created_at')->widget(DateTimePicker::className(), [
            'language' => 'ru',
            'size' => 'md',
            'template' => '{input}{addon}',
            'pickButtonIcon' => 'glyphicon glyphicon-calendar',
            'pickButtonIcon' => '',
            'inline' => false,
            'clientOptions' => [
                'viewSelect' => 'decade',
                'startDate' => "2000-02-14 10:00",
                'startView' => 1,
                'minView' => 0,
                'maxView' => 4,
                'autoclose' => true,
                
                //'linkFormat' => 'dd MM yyyy - HH:ii P', // if inline = true
                'format' => 'yyyy-mm-dd hh:ii:ss', // if inline = false
                'todayBtn' => true
            ]
        ]);?>

    <?= $form->field($model, 'visible')->checkbox() ?>

    <?= $form->field($model, 'description_ru')->textarea(['rows' => 6]) ?>
    
    <?= $form->field($model, 'description_en')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'author')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'hits')->textInput() ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>
    
    <?= $form->field($model, 'image')->widget(KCFinderInputWidget::className()) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
