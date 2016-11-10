<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

use kartik\file\FileInput;


$this->title = 'Contact';
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .wrap{
        background-color: #F9F7D5;
    }
</style>
<div class="site-contact in-center">
    <div class="head-contact">
        <h1><?= Html::encode($this->title) ?></h1>
        <p>
            If you have business inquiries or other questions, please fill out the following form to contact us. Thank you.
        </p>
    </div>
    
        <div class="form-custom">
            <?php $form = ActiveForm::begin([
                'id' => 'contact-form',
                'options'=>['enctype'=>'multipart/form-data',],
                'fieldConfig' => [
                    'options' => [
                        'class' => 'custom-input',
                        ],
                    ]
                ]); ?>

                <?= $form->field($model, 'first_name')->textInput(); ?>

                <?= $form->field($model, 'last_name') ?>

                <?= $form->field($model, 'email') ?>
            
                <?= $form->field($model, 'phone')->widget(\yii\widgets\MaskedInput::className(), [
                    'mask' => '+7(999)-999-99-99',
                    'clientOptions' => [
                        'showMaskOnHover' => false,
                    ],
                    
                ]) ?>

                <?= $form->field($model, 'text')->textarea() ?>
            
                <?= $form->field($model, 'file')->widget(FileInput::className(),[
                    'pluginOptions' => [
                        
                        'showUpload' => false,
                        'browseLabel' => '',
                        'removeLabel' => '',
                        'mainClass' => 'input-group-md',
                       ] 
                ])?>

                <?php /*$form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ])*/ ?>

                <div class="form-group">
                    <?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
   

</div>
