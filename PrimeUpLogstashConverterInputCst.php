<?php



class PrimeUpLogstashConverterInputCst {
    
    const COMMENT_TAG = "#";
    const LINE_BREAK = "\n";
    const INPUT_TAG_OPENING = "input {";
    const FILE_TAG_OPENING = "file {";
    const PATH_TAG = "path =>"; //follows "%CONTENT%"
    const TYPE_TAG = "type =>"; //follows "%CONTENT%"
    const STARTING_POSITION_TAG = "starting_position =>"; //follows "%CONTENT%"
    const IGNORE_OLDER_TAG = "ignore_older =>"; //follows "%0%"
    const SINCEDB_PATH_TAG = "sincedb_path =>"; //follows "%/dev/null%"
    const CODEC_TAG = "codec =>"; //follows plain { charset => "UTF-8" }
    const CODEC_TAG_PLAIN = "plain {"; //charset => "UTF-8" }
    const CHARSET_TAG = "charset =>"; //follows "UTF-8" }
    const CLOSING_BRACKETS = " }";
    const SPACE = " ";
   
}
