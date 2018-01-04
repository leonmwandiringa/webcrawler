<?php

    namespace UrlCrawler\Controllers;
    use Slim\Views\Twig;
    use PHPOffice\PHPExcel\IOFactory;

    class HomeController extends Controller{


        public function index($request, $response){

            return $this->view->render($response, "home.twig");

        }

        public function checkStatus($request, $response){

            $checkurl = $request->getParsedBodyParam("url");

            if(!empty($checkurl)){

                if(file_get_contents($checkurl)){
                    
                        return $http_response_header[0];
                    
                    }else{
                    
                        return $http_response_header[0];
                }
            }

        }

    }


?>