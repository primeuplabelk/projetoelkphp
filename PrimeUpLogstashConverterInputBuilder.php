<?php

include("./PrimeUpLogstashConverterInputCst.php");

class PrimeUpLogstashConverterInputBuilder {
   
    public static function buildInputHeader($params){
        $inputCst = new PrimeUpLogstashConverterInputCst;
        
            $inputFinalString = $inputCst::INPUT_TAG_OPENING;
            $inputFinalString .= $inputCst::LINE_BREAK;
            $inputFinalString .= $inputCst::FILE_TAG_OPENING;
            $inputFinalString .= $inputCst::LINE_BREAK;
            
            
                
            $inputFinalString .= $inputCst::PATH_TAG;
            $inputFinalString .= $params["path"];
            $inputFinalString .= $inputCst::LINE_BREAK;
                
            
            if(!is_null($params["start_position"])){
                
                $inputFinalString .= $inputCst::STARTING_POSITION_TAG;
                $inputFinalString .= $params["start_position"];
                $inputFinalString .= $inputCst::LINE_BREAK;
            
            }
            
            if(!is_null($params["ignore_older"])){
                
                $inputFinalString .= $inputCst::IGNORE_OLDER_TAG;
                $inputFinalString .= $params["ignore_older"];
                $inputFinalString .= $inputCst::LINE_BREAK;
            
            }
            
            if(strcmp($params["sincedb_path"], "") != 0){
                
                $inputFinalString .= $inputCst::SINCEDB_PATH_TAG;
                $inputFinalString .= $params["sincedb_path"];
                $inputFinalString .= $inputCst::LINE_BREAK;
                
            }
            
            if(!is_null($params["charset"])){
                $inputFinalString .= $inputCst::CODEC_TAG;
                $inputFinalString .= $inputCst::CODEC_TAG_PLAIN;
                $inputFinalString .= $inputCst::LINE_BREAK;
                $inputFinalString .= $inputCst::CHARSET_TAG;
                $inputFinalString .= $params["charset"];
                $inputFinalString .= $inputCst::LINE_BREAK;
                $inputFinalString .= $inputCst::CLOSING_BRACKETS;
            }
            
            $inputFinalString .= $inputCst::LINE_BREAK;        
            $inputFinalString .= $inputCst::CLOSING_BRACKETS;
            $inputFinalString .= $inputCst::LINE_BREAK;
            $inputFinalString .= $inputCst::CLOSING_BRACKETS;
            
            $inputFinalString2 = str_replace("\n", "<br>",$inputFinalString);
            
             file_put_contents("/confExp/test.conf", $inputFinalString);
            
       return $inputFinalString2;
    }
   
}
