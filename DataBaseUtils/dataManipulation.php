<?php
include('./ConnectionBD.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function saveInputConfContent($inputContent, $confName){
   
   include('./ConnectionBD.php');
    
   $result = "";
   
   try {
       $select = pg_query("select * from elk.conf");
       
       print_r($select);
       
       while ($row = pg_fetch_array($select)) {
            $selectArray[] = $row;
       }
       
       if(empty($selectArray)){
           
           $str1 = "teste";
           $str2 = "teste2";
                   
         
        $teste = pg_escape_string("insert into elk.conf (input_content, conf_name)
                            values ('$str1','$str2')");  
        
                
        $insert = pg_query($teste);
        
        
        $result = "Inserido";
    
       } else{
           
            $result = "O nome do conf já existe";
            //update
       }
    } catch (Exception $e) {
        echo "Erro";
    }
    
    return $select;
}
