<?php
include('./ConnectionBD.php');
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function saveInputConfContent($inputContent, $confName){
    
   $result = "";
   
   try {
       $select = pg_query("select * from elk.conf where conf_name like 'qqr'");
       
       while ($row = pg_fetch_array($select)) {
            $selectArray[] = $row;
       }
       
       if(empty($selectArray)){
           
        $insert = pg_query("insert into elk.conf (input_content, conf_name)
                            select 'testao','testasso' 
                                where not exists (select * from elk.conf where conf_name like 'testao')");
        
        
        $result = "Inserido";
    
       } else{
           
            $result = "O nome do conf já existe";
            //update
       }
    } catch (Exception $e) {
        echo "Erro";
    }
    
    return $result;
}
