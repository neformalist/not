<?php

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model \frontend\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;

use kartik\file\FileInput;


$this->title = Yii::t('contact', 'contact');
$this->params['breadcrumbs'][] = $this->title;
?>
<style>
    .breadcrumb{
        display: inline-block;
       margin: 2%;
       background-color: rgba(245,245,245,.8); 
    }
    .breadcrumb a{
        color: #C74C27;
    }
</style>

<div class="site-contact in-center">
    <div class="head-contact">
        <h1><?= Html::encode($this->title) ?></h1>
        <p>
           <?=Yii::t('contact', 'contact_capition');?> 
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
                        'browseClass' => 'btn btn-orange',
                        'mainClass' => 'input-group-md',
                       ] 
                ])?>

                <?php /*$form->field($model, 'verifyCode')->widget(Captcha::className(), [
                    'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                ])*/ ?>

                <div class="form-group">
                    <?= Html::submitButton(Yii::t('contact', 'submit'), ['class' => 'btn btn-orange btn-large', 'name' => 'contact-button']) ?>
                </div>

            <?php ActiveForm::end(); ?>
        </div>
   

</div>
