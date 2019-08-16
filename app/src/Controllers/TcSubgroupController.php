<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface as Container;

class TcSubgroupController extends Controller{
    
    public function __construct(Container $container){

        //container instance by dependency injection
        $this->container=$container;

        //config by default
        $this->config=$this->container['config'];
        $this->bigquery=$this->container['bigquery']($this->config->google('bigquery'));
        $this->modules['tc-subgroup']=$this->container['tc-subgroup']($this->bigquery);

    }

    public function index($request,$response,$args){

        $get=$this->modules['tc-subgroup']->get($args['key']);

        print_r($get);

    }

}

?>
