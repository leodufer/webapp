<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silex\Application;



$app->get('/cotizaciones', function(){
    $cotizaciones = R::findAll('cotizaciones');
    
    $res = array();
    foreach ($cotizaciones as $c) {
        $r = array(
               'id'=>$c->id,
               'moneda'=>$c->moneda,
               'compra'=>$c->compra,
               'venta'=>$c->venta
            );
        $res[] = $r;
    }

    return new Response(json_encode($res), 200); 
});

$app->post('/cotizaciones', function(Request $request){
    
    $c = R::dispense('cotizaciones');
    $c->moneda = $request->get('moneda');
    $c->compra = $request->get('compra');
    $c->venta = $request->get('venta');
    $id = R::store($c);
    $r = array(
            'id'=>$c->id,
            'moneda'=>$c->moneda,
            'compra'=>$c->compra,
            'venta'=>$c->venta
        );
    return new Response(json_encode(array($r)), 201);
    
});

return $app;