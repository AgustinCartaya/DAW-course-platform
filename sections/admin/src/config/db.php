<?php
try{
    echo APP_IMAGES;
    $conection=new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME, DB_USER, DB_PASSWORD);
}catch(Exception $ex){
    echo $ex->getMessage();
}

