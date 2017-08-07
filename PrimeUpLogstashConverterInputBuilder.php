<?php

include("./PrimeUpLogstashConverterInputCst.php");

class PrimeUpLogstashConverterInputBuilder {
   
    public static function buildInputHeader(array $params){
        $inputCst = new PrimeUpLogstashConverterInputCst;
        
            $inputFinalString = $inputCst::INPUT_TAG_OPENING;
            $inputFinalString .= $inputCst::LINE_BREAK;
            $inputFinalString .= $inputCst::FILE_TAG_OPENING;
            $inputFinalString .= $inputCst::LINE_BREAK;
            $inputFinalString .= $inputCst::PATH_TAG;
            $inputFinalString .= "só teste";//$params("path");
            $inputFinalString .= $inputCst::LINE_BREAK;
            $inputFinalString .= $inputCst::TYPE_TAG;
            $inputFinalString .= "só teste";//$params("type");
            $inputFinalString .= $inputCst::LINE_BREAK;
            $inputFinalString .= $inputCst::CLOSING_BRACKETS;
            $inputFinalString .= $inputCst::LINE_BREAK;        
            $inputFinalString .= $inputCst::CLOSING_BRACKETS;
            
            $inputFinalString2 = str_replace("\n", "<br>",$inputFinalString);
            
       return $inputFinalString2;
    }
   
}
