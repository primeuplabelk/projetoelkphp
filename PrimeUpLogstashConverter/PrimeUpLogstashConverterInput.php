<?php
include('./PrimeUpLogstashConverterInputBuilder.php');
include ('../DataBaseUtils/dataManipulation.php');
include ('../DataBaseUtils/ConnectionBD.php');

$params = array(
    "numeroFiles" => $_REQUEST['numeroFiles'],
    "confName" => $_REQUEST['confName'],
    "path" => $_REQUEST['path'], 
    "start_position" => $_REQUEST['start_position'], 
    "ignore_older" => $_REQUEST['ignore_older'], 
    "sincedb_path" => $_REQUEST['sincedb_path'], 
    "charset" => $_REQUEST['charset']	
 );

$builder = new PrimeUpLogstashConverterInputBuilder();

    if ($params["numeroFiles"] == 1){
        
        $res_input = $builder::buildInputHeader($params);
        
    } else if ($params["numeroFiles"] == 2){
        
        $res_input = $builder::buildInputHeader($params);
        //$res_input .= $builder::buildInputHeader($params2); 
        
    } else if ($params["numeroFiles"] == 3){ 
        
        $res_input = $builder::buildInputHeader($params);
        //$res_input .= $builder::buildInputHeader($params2);
        //$res_input .= $builder::buildInputHeader($params3);  
        
    }
    
    $inputFinalString = str_replace("<br>", "\n", $res_input);
    $retorno = saveInputConfContent($inputFinalString, $params['confName']);
    
    //echo $params["confName"];
    while ($row = pg_fetch_array($retorno)) {
            print_r ($row);
       }
    //echo "/n";