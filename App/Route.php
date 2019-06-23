<?php



// Route default;

$app->get('/', function(){
    echo 'GET:://  http://192.168.1.12:3003  Default!';
});


$app->group('/api', function() use($app) {

    $app->group('/usuarios', function() use($app) {
        
        $app->get('/', function(){
            echo 'GET:://  http://192.168.1.14:3003/api/usuarios/';
        });

    });
    
    $app->group('/veiculos', function() use($app) {
    

    });

    $app->group('/tipos', function() use($app) {
    

    });

    $app->group('/controles', function() use($app) {
    

    });  

});