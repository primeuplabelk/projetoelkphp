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
    $retorno = saveInputConfContent($inputFinalString, $params["confName"]);
    
    ?>


<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Projeto ELK - Converter</title>
    
    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>
        <?php 
            echo $retorno;
        ?>
        <script src="js/jquery.js"></script>

        <!-- Bootstrap Core JavaScript -->
        <script src="js/bootstrap.min.js"></script>

        <!-- Morris Charts JavaScript -->
        <script src="js/plugins/morris/raphael.min.js"></script>
        <script src="js/plugins/morris/morris.min.js"></script>
        <script src="js/plugins/morris/morris-data.js"></script>
</body>
</html>


