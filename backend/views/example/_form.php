<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\Example */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="example-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'category_id')->dropDownList(common\models\Category::find()->select(['name', 'id'])->indexBy('id')->column(), ['promt'=>'']) ?>

    <?= $form->field($model, 'title_ru')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'title_en')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'updated_at')->textInput() ?>

    <?= $form->field($model, 'created_at')->textInput() ?>

    <?= $form->field($model, 'visible')->checkbox() ?>

    <?= $form->field($model, 'description_ru')->widget(CKEditor::className(), ['preset' => 'standart']) ?>

    <?= $form->field($model, 'description_en')->widget(CKEditor::className(), ['preset' => 'standart']) ?>

    <?= $form->field($model, 'hits')->textInput() ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
