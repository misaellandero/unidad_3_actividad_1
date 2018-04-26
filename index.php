<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$clima= new \Slim\App;
$clima->get('/clima/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $cuentaUnam = '415026442';
    $response->getBody()->write("Hola mi nombre es, $name y mi numero de cuenta de la unam es: $cuentaUnam");

    return $response;
});
$clima->run();
