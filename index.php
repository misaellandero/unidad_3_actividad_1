<?php
use \Psr\Http\Message\ServerRequestInterface as Request;
use \Psr\Http\Message\ResponseInterface as Response;

require 'vendor/autoload.php';

$clima= new \Slim\App;
$clima->get('/clima/{name}', function (Request $request, Response $response, array $args) {
    $name = $args['name'];
    $cuentaUnam = '415026442';

    $datos = array('nombre' => $name, 'cuetaUnam' => $cuentaUnam);

    return $response->withJson($datos);
 
});
$clima->run();
