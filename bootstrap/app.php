<?php

    require __DIR__."/../vendor/autoload.php";
    use Psr\Http\Message\ServerRequestInterface as Request;
    use Psr\Http\Message\ResponseInterface as Response;

    $app = new \Slim\App(

        [
            "settings"=>[
                "displayErrorDetails"=>true,
                "cache"=>false,
                'db' => [
                    'driver' => 'mysql',
                    'host' => 'localhost',
                    'database' => 'dealswithgold',
                    'username' => 'dealswithgold',
                    'password' => 'Dealswithgold1',
                    'charset'   => 'utf8',
                    'collation' => 'utf8_unicode_ci',
                    'prefix'    => '',
                ]

            ]
        ]

    );

   require __DIR__."/dependency.php";

    require __DIR__."/../routes/web.php";

?>