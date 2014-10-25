<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;


require_once (BASE_DIR . '/src/config.php');
require_once (BASE_DIR . '/src/bootstrap.php');
require_once (BASE_DIR . '/src/util.php');
$app = require(BASE_DIR . '/src/controllers.php');

$app->after(function(Request $request, Response $response){
    $response->headers->set('Content-Type', 'application/json');
});

$app->error(function(\Exception $e, $code) use($app){
    
	$mensage = 'Ha ocurrido un error durante la requisicion.';
	if($app['debug'])
		$mensage .= $e;

    $res = '{"status":"'.$code.'"mensage:"'.$mensage.'"}';
     

    return new Response($res, $code);
    
});

return $app;