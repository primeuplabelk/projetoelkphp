<?php
include('./PrimeUpLogstashConverterInputBuilder.php');

$params = array(
    "numeroFiles" => $_REQUEST['numeroFiles'],
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




