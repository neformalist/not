<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use dosamigos\ckeditor\CKEditor;

/* @var $this yii\web\View */
/* @var $model common\models\Text */
/* @var $form yii\widgets\ActiveForm */
 ?>

<div class="text-form">

    <?php $form = ActiveForm::begin(); ?>
    <?=  Html::tag('h2', $model->article->title_ru);?>
    

    <?= $form->field($model, 'text_ru')->widget(CKEditor::className(), ['preset' => 'full'])  ?>

    <?= $form->field($model, 'text_en')->widget(CKEditor::className(), ['preset' => 'full']) ?>
    
    <?= $form->field($model, 'number_page')->textInput() ?>
    
    <?= $form->field($model, 'visible')->checkbox() ?>

    <div class="form-group">
        <?= Html::submitButton($model->isNewRecord ? 'Create' : 'Update', ['class' => $model->isNewRecord ? 'btn btn-success' : 'btn btn-primary']) ?>
    </div>

    <?php ActiveForm::end();?>

</div>
