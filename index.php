<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

use GuzzleHttp\Client;


require 'vendor/autoload.php';

$clima= new \Slim\App;
$clima->get('/clima/{id_ciudad}', function (Request $request, Response $response, array $args) {

    $cliente = new Client();
    $id_ciudad = $args['id_ciudad'];
    $appiKey = '27e64a82f4947a495eef42e955f4c651';

    $url = "api.openweathermap.org/data/2.5/weather?id=$id_ciudad&appid=$appiKey&units=metric";
    $respuesta = $cliente->get($url);
    $body =  $respuesta->getBody();

    return $respuesta;

});
$clima->run();
