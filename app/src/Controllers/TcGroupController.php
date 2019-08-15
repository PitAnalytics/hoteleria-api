<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface as Container;

class TcGroupController extends Controller{
    
    public function __construct(Container $container){

        //container instance by dependency injection
        $this->container=$container;

        //config by default
        $this->config=$this->container['config'];
        $this->bigquery=$this->container['bigquery']($this->config->google('bigquery'));
        //$this->modules['pac']=$this->container['pac']($this->bigquery);

    }

    public function index($request,$response,$args){

        

    }

}

?>
