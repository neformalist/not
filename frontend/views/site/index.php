<?php

/* @var $this yii\web\View */
/* @var $posts common\models\Article */
/* @var $examples common\models\Example */

use yii\helpers\Html;
use yii\helpers\Url;
$this->title = 'My Yii Application';
?>



<!--Video Section-->
<section class="content-section video-section">
  <div class="pattern-overlay">
      <div class="top-phone"><i class="fa fa-phone fa-fw"></i> (123) 456-7890</div>
  <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=lNYvl1lMsFo',  containment:'.video-section', quality:'hd720', ratio:'16/9', autoPlay:true, mute:true, opacity:1}">bg</a>
    <div id="top" class="text-vertical-center">
            <h1><?=Yii::t('landing', 'header')?></h1>
            <br>
            <h3><?=Yii::t('landing', 'header_capition')?></h3>
            <br><br><br><br><br><br><br><br><br><br><br><br><br>
    </div>
   <a href="#about" class="header-buttom"><i class="fa fa-angle-down"></i></a>
  </div>
</section>
<!--Video Section Ends Here-->


    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2><?=Yii::t('landing', 'header_2')?></h2>
                    <p class="lead"><?=Yii::t('landing', 'header_2_capition')?></p>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    <!-- Services -->
    <!-- The circle icons use Font Awesome's stacked icon classes. For more information, visit http://fontawesome.io/examples/ -->
    <section id="services" class="services bg-primary">
        <div class="container">
            <div class="row text-center">
                <div class="col-lg-10 col-lg-offset-1">
                    <h2><?=Yii::t('landing', 'service')?></h2>
                    <hr class="small" style="max-width: 30vw">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-5x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="material-icons fa-stack-1x icon-orange">library_music</i>
                                
                                </span>
                                <h4>
                                    <strong><?=Yii::t('service', 'score')?></strong>
                                </h4>
                                <ul>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> <?=Yii::t('service', 'scoreItem1')?></li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> <?=Yii::t('service', 'scoreItem2')?></li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> <?=Yii::t('service', 'scoreItem3')?></li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> <?=Yii::t('service', 'scoreItem4')?></li>
                                </ul>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-5x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="material-icons fa-stack-1x icon-orange">border_color</i>
                                </span>
                                <h4>
                                    <strong><?=Yii::t('service', 'edit')?></strong>
                                </h4>
                                <ul>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> <?=Yii::t('service', 'editItem1')?></li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> <?=Yii::t('service', 'editItem2')?></li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> <?=Yii::t('service', 'editItem3')?></li>
                                </ul>
                                
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-5x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="material-icons fa-stack-1x icon-orange">volume_down</i>
                                </span>
                                <h4>
                                    <strong><?=Yii::t('service', 'synthesis')?></strong>
                                </h4>
                                <ul>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> <?=Yii::t('service', 'synthesisItem1')?></li>
                                    
                                </ul>
                               
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-5x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="material-icons fa-stack-1x icon-orange">print</i>
                                </span>
                                <h4>
                                    <strong><?=Yii::t('service', 'printing')?></strong>
                                </h4>
                                <ul>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> <?=Yii::t('service', 'printingItem1')?></li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> <?=Yii::t('service', 'printingItem2')?></li>
                                    <li><i class="fa fa-check" aria-hidden="true"></i> <?=Yii::t('service', 'printingItem3')?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    
     <!-- Callout -->
    <aside class="callout ">
        <div class="text-vertical-callout" >
            
            <div class="overflow-scroll scrollflow -slide-top" data-scrollflow-start="0" data-scrollflow-distance="100" data-scrollflow-amount="200"></div>
            <div class="overflow-bg"></div>
            <h2 class="scrollflow -slide-bottom -opacity" data-scrollflow-start="0" data-scrollflow-distance="50" data-scrollflow-amount="100" >Команда профессиональных нотных наборщиков и редакторов</h2>
        </div>
    </aside>
     
     <section>
        <div class="container">
               <div class="row">
                   <div class="col-lg-12 text-right main-capition-text">
                       <p> Мы осуществляем полный спектр нотоиздательского процесса.</p>
                       <p>Если Вам нужны нотные примеры в сборник или книгу, подготовить оркестровые голоса для оркестра или ансамбля,
                       транспонировать вокальные или инструментальные произведения в другую тональность</p>
                        <p>Обращайтесь к нам! Наша команда выполнит работу БЫСТРО, КАЧЕСТВЕННО и ПО ПРИЕМЛЕМОЙ ЦЕНЕ</p>
                   </div>
               </div>
           </div>    
     </section>
    
     <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2><?=Yii::t('landing', 'work')?></h2>
                    <hr class="small">
                    <div class="row">
                        <?php foreach ($examples as $example):?>
                        <div class="col-md-6 animation-element slide-left">
                            <?php $content = ''
                                    . '<div class="portfolio-item subject">'
                                    . '<div class="caption">'
                                    . '<h4>'.$example->title_ru.'</h4>'
                                    . '<p>'.\yii\helpers\BaseStringHelper::truncate($example->description_ru, 200).'</p>'
                                    . '</div>'
                                    . Html::img($example->images[0]->image, ['class'=> 'img-portfolio img-responsive'])
                                    . '</div>'; ?>
                            <?=Html::a($content, Url::to(['/example/'.$example->url]))?>    
                           
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- /.row (nested) -->
                    <?=Html::a(Yii::t('landing', 'allButtom'), Url::to(['/examples']), ['class' => 'btn btn-dark'])?>
                   
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>
    
   
    <!-- Call to Action -->
    <aside class="call-to-action bg-primary">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h3>При заказе на сумму от 15000 рублей — СКИДКА 20% </h3>
                    <?=Html::a('Наши цены', Url::to(['/site/price']), ['class' => 'btn btn-lg btn-dark'])?>  
                    
                </div>
            </div>
        </div>
    </aside>

    
   
  
    <!-- Portfolio -->
    <section id="article" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2><?=Yii::t('landing', 'articles')?></h2>
                    <hr class="small">
                    <div class="row">
                        <?php foreach ($posts as $post):?>
                        <div class="col-md-6 animation-element bounce-up">
                            <?php $content = ''
                                    . '<div class="portfolio-item subject">'
                                    . '<div class="caption">'
                                    . '<h4>'.$post->title_ru.'</h4>'
                                    . '<p>'.\yii\helpers\BaseStringHelper::truncate($post->description_ru, 200).'</p>'
                                    . '</div>'
                                    . Html::img($post->image, ['class'=> 'img-portfolio img-responsive'])
                                    . '</div>'; ?>
                            <?=Html::a($content, Url::to(['/articles/'.$post->url]))?>    
                            
                        </div>
                        <?php endforeach; ?>
                    </div>
                    <!-- /.row (nested) -->
                    <?=Html::a(Yii::t('landing', 'allButtom'), Url::to(['/articles']), ['class' => 'btn btn-dark'])?>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

    
    
    
   
    
    
     
    
     <!-- Technology -->
    <section id="technology" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2><?=Yii::t('landing', 'technology')?></h2>
                    <hr class="small">
                     <div class="slideControls">
                            <a class="slidePrev">
                              <i class="fa fa-angle-left"></i>
                             </a>
                            <a class="slideNext">
                              <i class="fa fa-angle-right"></i>
                            </a>
                      </div> 
                    <ul id="lightSlider" class="cs-hidden">
                         <li>
                             <?=Html::img('@web/img/icons/finale-icons.png', ['height' => '150', 'alt' => 'Finale 2014'])?>
                             <h3>Finale 2014</h3>
                             
                         </li>
                         <li>
                            <?=Html::img('@web/img/icons/sibicon.png', ['height' => '150', 'alt' => 'Sibelius 8'])?>
                             <h3>Sibelius 8</h3>
                             
                         </li>
                         <li>
                             <?=Html::img('@web/img/icons/musescore-icon-round-2048.png', ['height' => '150', 'alt' => 'MuseScore 2'])?>
                             <h3>MuseScore 2</h3>
                             
                         </li>
                         <li>
                            <?=Html::img('@web/img/icons/photoshop.png', ['height' => '150', 'alt' => 'Adobe PhotoShop'])?>
                             <h3>Adobe PhotoShop</h3>
                             
                         </li>
                         <li>
                             <?=Html::img('@web/img/icons/Adobe_InDesign_icon.png', ['height' => '150', 'alt' => 'Adobe InDesign'])?>
                             <h3>Adobe InDesign</h3>
                             
                         </li>
                         <li>
                             <?=Html::img('@web/img/icons/illustrator.png', ['height' => '150', 'alt' => 'Adobe Illustrator'])?>
                             <h3>Adobe Illustrator</h3>
                             
                         </li>
                         <li>
                             <?=Html::img('@web/img/icons/pdf-icon.png', ['height' => '150', 'alt' => 'Adobe PDF'])?>
                             <h3>Adobe PDF</h3>
                            
                         </li>

                       </ul>
                </div>
                <!-- /.col-lg-10 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container -->
    </section>

   

   

   

    

