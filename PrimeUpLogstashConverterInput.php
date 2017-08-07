<?php

$params = array(
    "path" => $_REQUEST['path'], 
    "start_position" => $_REQUEST['start_position'], 
    "ignore_older" => $_REQUEST['ignore_older'], 
    "sincedb_path" => $_REQUEST['sincedb_path'], 
    "charset" => $_REQUEST['charset']	
 );

echo $params("path");
