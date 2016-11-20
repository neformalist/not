<?php 
return  [
                [
                   'pattern' => '',
                   'route' => 'site/index',
                ],
                [
                   'pattern' => '/examples',
                   'route' => 'example/index',  
                ],
                [
                   'pattern' => 'example/<url:[\w\-]+>',
                   'route' => 'example/view',  
                ],
                [
                   'pattern' => 'articles',
                   'route' => 'articles/index',   
                ],
                [
                   'pattern' => 'articles/<url:[\w\-]+>',
                   'route' => 'articles/view',   
                ],
                
                
            ];
