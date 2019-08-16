<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface as Container;

class TrxCodeController extends Controller{
    
    public function __construct(Container $container){

        //container instance by dependency injection
        $this->container=$container;

        //config by default
        $this->config=$this->container['config'];
        $this->bigquery=$this->container['bigquery']($this->config->google('bigquery'));
        $this->modules['trx-code']=$this->container['trx-code']($this->bigquery);

    }

    public function get($request,$response,$args){

        $get=$this->modules['trx-code']->get($args['key']);

        print_r($get);

    }

}

?>
