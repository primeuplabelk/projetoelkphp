<?php
include('./ConnectionBD.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function saveInputConfContent($inputContent, $confName){
    
   $result = "";
   $inpt =  pg_escape_string($inputContent);   
   $cnf =  pg_escape_string($confName);  
   
   try {
       $select = pg_query("select * from elk.conf where conf_name = '{$cnf}' ");

       while ($row = pg_fetch_array($select)) {
            $selectArray[] = $row;
       }
       
       if(empty($selectArray)){
           
        $insert = pg_query("insert into elk.conf (input_content, conf_name)
                            values ('{$inpt}','{$cnf}')");
        
        
        $result = "Inserido";
    
       } else{
           
            $result = "O nome do conf já existe";
            
       }
    } catch (Exception $e) {
        echo "Erro";
    }
    
    return $result;
}

function retrieveConfList(){
   
    $selectArray = ""; 
    
     try {
       $select = pg_query("select * from elk.conf ");

       while ($row = pg_fetch_array($select)) {
            $selectArray[] = $row;
       }
       
       $jsonLista = json_encode($selectArray);
       
    } catch (Exception $e) {
        echo "Erro";
    }
    
    return $jsonLista;
    
}

function getConfContent($id){
    $selectArray = ""; 
    
     try {
       $select = pg_query("select * from elk.conf where id_conf = {$id} ");

       while ($row = pg_fetch_array($select)) {
            $selectArray[] = $row;
       }
       
       $jsonContent = json_encode($selectArray);
       
    } catch (Exception $e) {
        echo "Erro";
    }
    
    return $jsonContent;
}