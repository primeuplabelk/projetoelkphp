<?php

include("./PrimeUpLogstashConverterOutputCst.php");

class PrimeUpLogstashConverterOutputBuilder {

    public static function buildOutputHeader($params) {

        $outputCst = new PrimeUpLogstashConverterOutputCst;
        $inputCst = new PrimeUpLogstashConverterInputCst; //using some constants from InputCst as well

        $outputFinalString = $outputCst::OUTPUT_TAG_OPENING;
        $outputFinalString .= $outputCst::LINE_BREAK;

        if (strcmp($params["stdout"], "") != 0) {
            $outputFinalString .= $outputCst::STDOUT_TAG;
            $outputFinalString .= $outputCst::LINE_BREAK;
            $outputFinalString .= $inputCst::CODEC_TAG;
            $outputFinalString .= $outputCst::RUBYDEBUG_TAG;
            $outputFinalString .= $outputCst::LINE_BREAK;
            $outputFinalString .= $inputCst::CLOSING_BRACKETS;
        }


        if (strcmp($params["elasticbutton"], "") != 0) {
            $outputFinalString .= $outputCst::ELASTICSEARCH_TAG;
            $outputFinalString .= $outputCst::LINE_BREAK;


            $outputFinalString .= $outputCst::HOSTS_TAG;
            if (strcmp($params["localhostButton"], "") != 0) {
                $outputFinalString .= $outputCst::LOCALHOST;
            } else {
                $outputFinalString .= $params["hostElastic"];
            }
            $outputFinalString .= $outputCst::SEMICOLON;
            $outputFinalString .= $params["portElastic"];
            $outputFinalString .= $outputCst::LINE_BREAK;
            $outputFinalString .= $outputCst::INDEX_TAG;
            $outputFinalString .= $params["indexElastic"];
            $outputFinalString .= $outputCst::LINE_BREAK;
            $outputFinalString .= $inputCst::CLOSING_BRACKETS;
        }


        $outputFinalString .= $inputCst::CLOSING_BRACKETS;
        $outputFinalString2 = str_replace("\n", "<br>", $outputFinalString);
        return $outputFinalString2;
    }

}
