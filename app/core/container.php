<?php

use Psr\Http\Message\ServerRequestInterface as Request;
use Psr\Http\Message\ResponseInterface as Response;

$app = new \Slim\App(['settings' => [
    'displayErrorDetails' => true,
    'responseChunkSize' => 8096]
    ]
);
//
$container=$app->getContainer();
//
$container['config']=function($container){

    return new App\Config\Config('../app/src/Config/Config.json');

};
//uncoment to add optional dependencies
$container['bigquery']=function($container){

    return function($config){

        return App\Tools\BigQueryParser::instanciate($config);

    };

};
$container['trx-code']=function($container){

    return function($config){

        return new App\Modules\TrxCode($config);

    };

};
$container['tc-group']=function($container){

    return function($config){

        return new App\Modules\TcGroup($config);

    };

};
$container['tc-subgroup']=function($container){

    return function($config){

        return new App\Modules\TcSubgroup($config);

    };

};

?>