<?php
/**
 * @uses base controller for dependacny and resource management
 * @return void mixed container usage
 * 
 */

namespace UrlCrawler\Controllers;

class Controller{

    protected $container;

    public function __construct($container){

            $this->container = $container;

    }

    public function __get($property){

        if($this->container->{$property}){

            return $this->container->{$property};
        }

    }


}


?>