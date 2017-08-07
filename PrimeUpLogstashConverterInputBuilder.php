<?php

include("./PrimeUpLogstashConverterInput.php");

class PrimeUpLogstashConverterInputBuilder {
   
    public static function buildInputHeader($params){
        $inputFinalString = PrimeUpLogstashConverterInput::INPUT_TAG_OPENING;
        $inputFinalString . "teste";
        return $inputFinalString;
    }
   
}
