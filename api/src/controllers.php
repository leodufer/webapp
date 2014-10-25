<?php

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Silex\Application;



$app->get('/tareas', function(){
    $tareas = R::findAll('tareas');
    
    $res = array();
    foreach ($tareas as $t) {
        $r = array(
               'id'=>$t->id,
               'descripcion'=>$t->descripcion,
               'estado'=>$t->estado
            );
        $res[] = $r;
    }

    return new Response(json_encode($res), 200); 
});

$app->post('/tareas', function(Request $request){
    
    $t = R::dispense('tareas');
    $t->descripcion = $request->get('descripcion');
    $t->estado = 'Pendiente';
    $id = R::store($t);
    $r = array(
            'id'=>$id,
            'descripcion'=>$t->descripcion,
            'estado'=>$t->estado
        );
    return new Response(json_encode(array($r)), 201);
    
});

$app->put('notas/{id}', function($id){
        
    //-- En caso de exito retornamos el código HTTP 200 - OK
    return new Response("Comentario con ID: {$id} actualizado", 200);
    
});

$app->delete('tareas/{id}', function($id){
    $t = R::load('tareas',$id);
    R::trash($t);

    return new Response("Comentario con ID: {$id} eliminado", 204);
    
}); 

return $app;