<?php

include("./PrimeUpLogstashConverterInputCst.php");

class PrimeUpLogstashConverterInputBuilder {
   
    public static function buildInputHeader($params){
        $inputCst = new PrimeUpLogstashConverterInputCst;
        
        $inputFinalString = $inputCst::INPUT_TAG_OPENING;
        $inputFinalString .= $inputCst::SPACE;
        $inputFinalString .= $inputCst::FILE_TAG_OPENING;
        return $inputFinalString;
    }
   
}
