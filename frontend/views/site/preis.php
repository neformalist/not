<?php


use yii\helpers\Url;


$this->title = 'Preis';
$this->params['breadcrumbs'][] = $this->title;
?>





<div class="container">
    <h1>Стоимость услуг по набору нот, корректуре нотного текста</h1>
    <div class="row block-price">
        <div class="col-md-4 price">
            <div class="header-pricing bg-pricing-orange">
                <h3>Одноголосные произведения</h3>
            </div>
            <div class="pricing-wrapper">
             <div class="price-block"> 
                <div class="stacked-icons">
                    <span class="pricing-from pricing-orange">от</span> 
                    <span class="fa-stack fa-4x pricing-orange">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <strong class="fa-stack-1x ">70<i class="fa fa-rub" aria-hidden="true"></i></strong>
                    </span>
               </div>
            </div>
            <div class="capition-pricing">
                <div class="table-responsive">
                    <h4>Однострочная нотная партия</h4>
                    <table class="table">
                      <tr>
                        <td class="rowspan" rowspan=3><span>Сложность</span></td>   
                        <td class="details">
                            <p class="plan-title">легкая</p>  
                        </td>
                        <td>
                            <p>70 руб /стр</p>
                        </td>
                      </tr>
                      <tr>
                        <td class="details">
                            <p class="plan-title">средняя</p>  
                        </td>
                        <td>
                            <p>100 руб /стр</p>
                        </td>
                      </tr>
                      <tr>
                        <td class="details">
                            <p class="plan-title">трудная</p>  
                        </td>
                        <td>
                            <p>130 руб /стр</p>
                        </td>
                      </tr>
                    </table>
                </div>
                
                <div class="table-responsive">
                    <h4>Однострочная вокальная партия</h4>
                    <table class="table">
                      <tr>
                        <td class="rowspan" rowspan=3><span>Сложность</span></td>  
                        <td class="details">
                            <p class="plan-title">легкая</p>  
                        </td>
                        <td>
                            <p>85 руб /стр</p>
                        </td>
                      </tr>
                      <tr>
                        <td class="details">
                            <p class="plan-title">средняя</p>  
                        </td>
                        <td>
                            <p>115 руб /стр</p>
                        </td>
                      </tr>
                      <tr>
                        <td class="details">
                            <p class="plan-title">трудная</p>  
                        </td>
                        <td>
                            <p>145 руб /стр</p>
                        </td>
                      </tr>
                    </table>
                </div>
                <small>* При заказе партитуры скидка на оркестровые партии 50%</small> 
            </div>
        </div>        
        <div class="footer-pricing bg-pricing-orange"></div>
    </div>
        
        
    <div class="col-md-4 price">
            <div class="header-pricing bg-pricing-dark">
                <h3>Камерные произведения</h3>
            </div>
            <div class="pricing-wrapper">
             <div class="price-block"> 
                <div class="stacked-icons">
                    <span class="pricing-from">от</span> 
                    <span class="fa-stack fa-4x pricing-dark">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <strong class="fa-stack-1x ">100<i class="fa fa-rub" aria-hidden="true"></i></strong>
                    </span>
               </div>
            </div>
            <div class="capition-pricing">
                <div class="table-responsive">
                    <h4>Фортепиано, клавир</h4>
                    <table class="table">
                      <tr>
                        <td class="rowspan" rowspan=3><span>Сложность</span></td>   
                        <td class="details">
                            <p class="plan-title">легкая</p>  
                        </td>
                        <td>
                            <p>100 руб /стр</p>
                        </td>
                      </tr>
                      <tr>
                        <td class="details">
                            <p class="plan-title">средняя</p>  
                        </td>
                        <td>
                            <p>130 руб /стр</p>
                        </td>
                      </tr>
                      <tr>
                        <td class="details">
                            <p class="plan-title">трудная</p>  
                        </td>
                        <td>
                            <p>160 руб /стр</p>
                        </td>
                      </tr>
                    </table>
                </div>
                
                <div class="table-responsive">
                    <h4>Камерные ансамбли и хоровые партитуры</h4>
                    <table class="table">
                      <tr>
                        <td class="rowspan" rowspan=3><span>Сложность</span></td>   
                        <td class="details">
                            <p class="plan-title">легкая</p>  
                        </td>
                        <td>
                            <p>120 руб /стр</p>
                        </td>
                      </tr>
                      <tr>
                        <td class="details">
                            <p class="plan-title">средняя</p>  
                        </td>
                        <td>
                            <p>150 руб /стр</p>
                        </td>
                      </tr>
                      <tr>
                        <td class="details">
                            <p class="plan-title">трудная</p>  
                        </td>
                        <td>
                            <p>180 руб /стр</p>
                        </td>
                      </tr>
                    </table>
                </div>
                <small>* При заказе клавира скидка на партии 50%</small>
            </div>    
        </div>
        <div class="footer-pricing bg-pricing-dark"></div>
    </div>    
    
        
      <div class="col-md-4 price">
            <div class="header-pricing bg-pricing-yellow">
                <h3>Оркестровые произведения</h3>
            </div>
            <div class="pricing-wrapper">
             <div class="price-block"> 
                <div class="stacked-icons">
                    <span class="pricing-from pricing-yellow">от</span> 
                    <span class="fa-stack fa-4x pricing-yellow">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <strong class="fa-stack-1x ">150<i class="fa fa-rub" aria-hidden="true"></i></strong>
                    </span>
               </div>
            </div>
            <div class="capition-pricing">
                <div class="table-responsive">
                    <h4>Камерный оркестр</h4>
                    <table class="table">
                      <tr>
                        <td class="rowspan" rowspan=3><span>Сложность</span></td>   
                        <td class="details">
                            <p class="plan-title">легкая</p>  
                        </td>
                        <td>
                            <p>150 руб /стр</p>
                        </td>
                      </tr>
                      <tr>
                        <td class="details">
                            <p class="plan-title">средняя</p>  
                        </td>
                        <td>
                            <p>180 руб /стр</p>
                        </td>
                      </tr>
                      <tr>
                        <td class="details">
                            <p class="plan-title">трудная</p>  
                        </td>
                        <td>
                            <p>200 руб /стр</p>
                        </td>
                      </tr>
                    </table>
                </div>
                
                <div class="table-responsive">
                    <h4>Для большого симфонического оркестра</h4>
                    <table class="table">
                      <tr>
                        <td class="rowspan" rowspan=3><span>Сложность</span></td>   
                        <td class="details">
                            <p class="plan-title">легкая</p>  
                        </td>
                        <td>
                            <p>200 руб /стр</p>
                        </td>
                      </tr>
                      <tr>
                        <td class="details">
                            <p class="plan-title">средняя</p>  
                        </td>
                        <td>
                            <p>230 руб /стр</p>
                        </td>
                      </tr>
                      <tr>
                        <td class="details">
                            <p class="plan-title">трудная</p>  
                        </td>
                        <td>
                            <p>250 руб /стр</p>
                        </td>
                      </tr>
                    </table>
                </div>
                <small>* При заказе произведений крупной формы (симфонии, оперы, оратории и т.п.) скидка до 30% </small> 
        </div>
            </div>        
        <div class="footer-pricing bg-pricing-yellow"></div>
    </div>       
        
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="table-responsive">
                <div class="price-extra"><strong>Дополнительные услуги</strong></div>
                <table class="table">
                    <tr>
                        <td>
                            Распечатка нотного текста
                        </td>
                        <td>
                            от 10 руб/стр
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Переплет
                        </td>
                        <td>
                            от 100 руб
                        </td>
                    </tr>
                     <tr>
                        <td>
                            Аудиосинтез в любой аудио формат
                        </td>
                        <td>
                            от 500 руб
                        </td>
                    </tr>
                    
                </table>
            </div>
        </div>
    </div>
    
    <p>По остальным вопросам свяжить с нами с помощью <a href="<?=  Url::to(['/site/contact'])?>">контактной формы</a> или использую информацию ниже</p>
    
</div>
