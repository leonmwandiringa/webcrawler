<?php

$container = $app->getContainer();

    //dependency injection for views rendering
    $container['view'] = function($container){
        
        $view = new \Slim\Views\Twig(['resources/views']);


          // Instantiate and add Slim specific extension
        $basePath = rtrim(str_ireplace('index.php', '', $container['request']->getUri()->getBasePath()), '/');
        $view->addExtension(new Slim\Views\TwigExtension($container['router'], $basePath));

        return $view;
        
    };

    $capsule = new \Illuminate\Database\Capsule\Manager;
    $capsule->addConnection($container['settings']['db']);
    $capsule->setAsGlobal();
    $capsule->bootEloquent();
    
    $container['db'] = function ($container) {
        return $capsule;
    };
    
    //dependncy injection for stripper controller
    $container['HomeController'] = function($container){

        return new UrlCrawler\Controllers\HomeController($container);

    };

    ?>