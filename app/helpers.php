<?php


function getPrice($prix){
    $prix= sprintf($prix);

    return number_format($prix,0,',',' ').' F CFA';
}

if(! function_exists('set_active_route')){
    function set_active_route($route){
        return Route::is($route) ? 'active':'';
    }
}



?>
