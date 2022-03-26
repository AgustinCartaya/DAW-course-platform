<?php
$dbHost="localhost";
$db="daw_project";
$dbUser="root";
$dbPassword="";

try{
    $conection=new PDO("mysql:host=$dbHost;dbname=$db",$dbUser,$dbPassword);
}catch(Exception $ex){
    echo $ex->getMessage();
}

