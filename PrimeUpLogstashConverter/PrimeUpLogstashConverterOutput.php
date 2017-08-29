<?php

include('./PrimeUpLogstashConverterOutputBuilder.php');
include ('../DataBaseUtils/dataManipulation.php');
include ('../DataBaseUtils/ConnectionBD.php');

$params = array(
    "elasticbutton" => $_REQUEST['elasticbutton'],
    "localhostButton" => $_REQUEST['localhostButton'],
    "hostsElastic" => $_REQUEST['hostsElastic'], 
    "portElastic" => $_REQUEST['portElastic'], 
    "indexElastic" => $_REQUEST['indexElastic'], 
    "stdout" => $_REQUEST['stdout'], 
 );

    $oBuilder = new PrimeUpLogstashConverterOutputBuilder();

    $res_output = $oBuilder::buildOutputHeader($params);
    
    $outputFinalString = str_replace("<br>", "\n", $res_output);
    $retorno = saveOutputConfContent($outputFinalString, $params["confName"]);
    
    echo $retorno; 
    
    header('Location: /index.php');
