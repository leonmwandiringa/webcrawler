<?php

    $app->get("/", "HomeController:index");

    //$app->post("/checkfile", "HomeController:excelUpload");

    $app->post("/checkfile", function($request,$response){

        $files = $request->getUploadedFiles();
        
                    $file = $files['myfile'];
        
                    $inputFileType = PHPExcel_IOFactory::load($file->file);
                    $objReader = $inputFileType->getActiveSheet()->toArray(null);
                    // $objPHPExcel = $objReader->load($inputFileName);
                    
                    // $data = array(1,$objPHPExcel->getActiveSheet()->toArray(null,true,true,true));
                    return json_encode($objReader);
        
    });

    $app->post("/checkstatus", "HomeController:checkStatus");

?>