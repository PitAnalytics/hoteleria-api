<?php

//
namespace App\Controllers;

use Psr\Container\ContainerInterface as Container;

abstract class Controller{

    //container main dependency
    protected $container;
    //app config and order by json
    protected $config;
    //GCP dependencies and tools
    protected $google;
    //authentification user and sessions

    //construction using dependency inyection
    public abstract function __construct(Container $container);

    //probamos argumentos
    public function echo($request,$response,$args){

            //
        echo("wellcome ".$args['name']);
    
    }
    
    //hola mundo
    public function wellcome($request,$response,$args){
    
        //
        echo('wellcome');
    
    }

}



?>