<?php

/* @var $this yii\web\View */
use yii\helpers\Html;
$this->title = 'My Yii Application';
?>



<!--Video Section-->
<section class="content-section video-section">
  <div class="pattern-overlay">
  <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=BfdDdtQ2pJo',  containment:'.video-section', quality:'hd720', ratio:'16/9', autoPlay:true, mute:true, opacity:1}">bg</a>
    <div id="top" class="text-vertical-center">
      
        
            <h1>Notes On Music</h1>
            <h3>Classical Music Publishing &amp; Engraving</h3>
            <br><br><br><br><br><br>
            <a href="#about" class="header-buttom">Find Out More <i class="fa fa-angle-down"></i></a>
	
    </div>
  </div>
</section>
<!--Video Section Ends Here-->


    <!-- About -->
    <section id="about" class="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Stylish Portfolio is the perfect theme for your next project!</h2>
                    <p class="lead">This theme features some wonderful photography courtesy of <a target="_blank" href="http://join.deathtothestockphoto.com/">Death to the Stock Photo</a>.</p>
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
                    <h2>Our Services</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-cloud fa-stack-1x icon-orange"></i>
                            </span>
                                <h4>
                                    <strong>Service Name</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-compass fa-stack-1x icon-orange"></i>
                            </span>
                                <h4>
                                    <strong>Service Name</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-flask fa-stack-1x icon-orange"></i>
                            </span>
                                <h4>
                                    <strong>Service Name</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="service-item">
                                <span class="fa-stack fa-4x">
                                <i class="fa fa-circle fa-stack-2x"></i>
                                <i class="fa fa-shield fa-stack-1x icon-orange"></i>
                            </span>
                                <h4>
                                    <strong>Service Name</strong>
                                </h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
                                <a href="#" class="btn btn-light">Learn More</a>
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
    <aside class="callout">
        <div class="text-vertical-center">
            <h2>Vertically Centered Text</h2>
        </div>
    </aside>

    
   
  
    <!-- Portfolio -->
    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Our Work</h2>
                    <hr class="small">
                    <div class="row">
                        <div class="col-md-6 animation-element bounce-up">
                            <div class="portfolio-item subject">
                                    <div class="caption">
                                        <h4>Thumbnail Headline</h4>
                                        <p>short thumbnail description</p>
                                        <p>
                                        <a href="" class="label label-danger">Далее</a></p>
                                    </div>
                                    <?=Html::img('@web/img/portfolio-1.jpg', ['class'=> 'img-portfolio img-responsive'])?>
                                
                            </div>
                        </div>
                        <div class="col-md-6 animation-element bounce-up">
                            <div class="portfolio-item subject">
                                    <div class="caption">
                                        <h4>Thumbnail Headline</h4>
                                        <p>short thumbnail description</p>
                                        <p>
                                        <a href="" class="label label-danger">Далее</a></p>
                                    </div>
                                    <?=Html::img('@web/img/portfolio-2.jpg', ['class'=> 'img-portfolio img-responsive'])?>                                  
                            </div>
                        </div>
                        <div class="col-md-6 animation-element  bounce-up">
                            <div class="portfolio-item subject">
                                    <div class="caption">
                                        <h4>Thumbnail Headline</h4>
                                        <p>short thumbnail description</p>
                                        <p>
                                        <a href="" class="label label-danger">Далее</a></p>
                                    </div>
                                    <?=Html::img('@web/img/portfolio-3.jpg', ['class'=> 'img-portfolio img-responsive'])?>
                            </div>
                        </div>
                        <div class="col-md-6 animation-element bounce-up">
                            <div class="portfolio-item subject">
                                    <div class="caption">
                                        <h4>Thumbnail Headline</h4>
                                        <p>short thumbnail description</p>
                                        <p>
                                        <a href="" class="label label-danger">Далее</a></p>
                                    </div>
                                    <?=Html::img('@web/img/portfolio-4.jpg', ['class'=> 'img-portfolio img-responsive'])?>
                            </div>
                        </div>
                    </div>
                    <!-- /.row (nested) -->
                    <a href="#" class="btn btn-dark">View More Items</a>
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
                    <h3>The buttons below are impossible to resist.</h3>
                    <a href="#" class="btn btn-lg btn-light">Click Me!</a>
                    <a href="#" class="btn btn-lg btn-dark">Look at Me!</a>
                </div>
            </div>
        </div>
    </aside>
    
     <!-- Technology -->
    <section id="technology" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h2>Our Technology</h2>
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
                             <?=Html::img('@web/img/icons/finale-icons.png', ['height' => '150'])?>
                             <h3>Finale 2014</h3>
                             
                         </li>
                         <li>
                            <?=Html::img('@web/img/icons/sibicon.png', ['height' => '150'])?>
                             <h3>Sibelius 8</h3>
                             
                         </li>
                         <li>
                             <?=Html::img('@web/img/icons/musescore-icon-round-2048.png', ['height' => '150'])?>
                             <h3>MuseScore 2</h3>
                             
                         </li>
                         <li>
                            <?=Html::img('@web/img/icons/photoshop.png', ['height' => '150'])?>
                             <h3>Adobe PhotoShop</h3>
                             
                         </li>
                         <li>
                             <?=Html::img('@web/img/icons/Adobe_InDesign_icon.png', ['height' => '150'])?>
                             <h3>Adobe InDesign</h3>
                             
                         </li>
                         <li>
                             <?=Html::img('@web/img/icons/illustrator.png', ['height' => '150'])?>
                             <h3>Adobe Illustrator</h3>
                             
                         </li>
                         <li>
                             <?=Html::img('@web/img/icons/pdf-icon.png', ['height' => '150'])?>
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

    <!-- Map -->
    <section id="contact" class="map">
        <iframe width="100%" height="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?f=q&amp;source=s_q&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A&amp;output=embed"></iframe>
        <br />
        <small>
            <a href="https://maps.google.com/maps?f=q&amp;source=embed&amp;hl=en&amp;geocode=&amp;q=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;aq=0&amp;oq=twitter&amp;sll=28.659344,-81.187888&amp;sspn=0.128789,0.264187&amp;ie=UTF8&amp;hq=Twitter,+Inc.,+Market+Street,+San+Francisco,+CA&amp;t=m&amp;z=15&amp;iwloc=A"></a>
        </small>
        </iframe>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-lg-offset-1 text-center">
                    <h4><strong>Start Bootstrap</strong>
                    </h4>
                    <p>3481 Melrose Place
                        <br>Beverly Hills, CA 90210</p>
                    <ul class="list-unstyled">
                        <li><i class="fa fa-phone fa-fw"></i> (123) 456-7890</li>
                        <li><i class="fa fa-envelope-o fa-fw"></i> <a href="mailto:name@example.com">name@example.com</a>
                        </li>
                    </ul>
                    <br>
                    <ul class="list-inline">
                        <li>
                            <a href="#"><i class="fa fa-facebook fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-twitter fa-fw fa-3x"></i></a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-dribbble fa-fw fa-3x"></i></a>
                        </li>
                    </ul>
                    <hr class="small">
                    <p class="text-muted">Copyright &copy; Your Website 2014</p>
                </div>
            </div>
        </div>
        <a id="to-top" href="#top" class="btn btn-dark btn-lg"><i class="fa fa-chevron-up fa-fw fa-1x"></i></a>
    </footer>

   

    

