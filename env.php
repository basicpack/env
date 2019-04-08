<?php
require 'vendor/autoload.php';

$filename=ROOT.'.env';

if(file_exists($filename)){
    $dotenv = Dotenv\Dotenv::create(ROOT);
    $dotenv->load();
}else{
    die('nano .env'.PHP_EOL);
}
