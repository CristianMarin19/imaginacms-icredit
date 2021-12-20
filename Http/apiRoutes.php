<?php
use Illuminate\Routing\Router;

$router->group(['prefix' => '/icredit/v1'], function (Router $router) {

    $router->apiCrud([
        'module' => 'icredit',
        'prefix' => 'credits',
        'controller' => 'CreditApiController',
        //'middleware' =>  ['create' => [],'update' => [],'delete' => [],'restore' => []]
    ]);

    
    //======  PaymentMethod
    require('ApiRoutes/paymentRoutes.php');


});