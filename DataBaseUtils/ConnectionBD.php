<?php

/* Author: Gabriel Guzzo
 * This class opens a PostGreSQL connection to data persistency on ProjetoELK.
 */


$dbname ='d281o009df5upg';
$host = 'ec2-54-163-236-33.compute-1.amazonaws.com';
$user = 'xscauwlallnaut';
$password = '7a74fd9982a731707837f87b3ac121af11920d23fb0338a865a8b4a94011171e';


$con = pg_connect("dbname='$dbname' host='$host' user='$user' password='$password'");

$test = pg_query($con,"select * from elk.conf");

  if  (!$test) {
   echo "query did not execute";
  }
  if (pg_num_rows($test) == 0) {
   echo "0 records";
  }
  else {
   while ($row = pg_fetch_array($test)) {
       echo $row;
   }
  }
