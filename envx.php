<?php
function envx(){
    require 'vendor/autoload.php';
    $filename=ROOT.'.env';
    if(file_exists($filename)){
        $dotenv = Dotenv\Dotenv::create(ROOT);
        $dotenv->load();
        print $filename;
    }else{
        die('nano .env'.PHP_EOL);
    }
}
