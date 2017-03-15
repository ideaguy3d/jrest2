<?php
/**
 * Created by PhpStorm.
 * User: Julius Alvarado
 * Date: 3/14/2017
 * Time: 8:31 PM
 */

require 'vendor/autoload.php';

$config = ['settings' => [
    'addContentLengthHeader' => false
]];

$app = new \Slim\App($config);

$app->get('/ello', function($request, $response, $args) {
    return $response->write("Well Ello Good Sir ^_^/");
});


$app->get('/ello/{person}', function($request, $response, $args) {
   return $response->write("Ello ".$args['person']);
});

$app->run();

//