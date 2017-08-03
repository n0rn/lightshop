<?php

return array(
    
    'product/([0-9]+)' => 'product/view/$1', // actionView в ProductController

    'user/login' => 'user/login',    /// UserController
    'user/register' => 'user/register',   /// UserController


    'cabinet' => 'cabinet/index',  // index CabinetController


    'catalog' => 'catalog/index', // actionIndex в CatalogController
    'category/([0-9]+)' => 'catalog/category/$1',  // actionCategory в CatalogController

    'cart/checkout' => 'cart/checkout', // actionAdd в CartController
    'cart/delete/([0-9]+)' => 'cart/delete/$1', // actionDelete в CartController
    'cart/add/([0-9]+)' => 'cart/add/$1', // actionAdd в CartController
    'cart/addAjax/([0-9]+)' => 'cart/addAjax/$1', // actionAddAjax в CartController
    'cart' => 'cart/index', // actionIndex в CartController

    '' => 'site/index', // actionIndex в SiteController
    
);
