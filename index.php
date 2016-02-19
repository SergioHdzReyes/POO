<?php
require_once __DIR__.'/vendor/autoload.php';
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

$request = Request::createFromGlobals();

$input = $request->get('name', 'World');

$response = new Response(sprintf('Hello %s', htmlspecialchars($input, ENT_QUOTES, 'UTF-8')));
/*$response = new Response();
$response->setContent('Esta es una prueba');
$response->setStatusCode(200);
$response->headers->set('Content-Type', 'text/html');

$response->setMaxAge(10);*/

$response->send();

?>