<?php

/**
 * Recorre un array recursivamente y aplica a cada item la función utf8_encode
 * @param array $array
 * @return array
 */
function utf8_converter($array)
{ 
	
    array_walk_recursive($array, function(&$item, $key){
        $order = array("\\");
        $item = utf8_encode($item);
        $item = str_replace($order, '', $item);

    });
    
    return $array;
}

function encode_json($array){
	$array = utf8_converter($array);
	return stripslashes(json_encode($array));
}