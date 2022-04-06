<?php
$dbHost="localhost";
$db="daw_project";
$dbUser="root";
$dbPassword="";

$conection="";
try{
    $conection=new PDO("mysql:host=$dbHost;dbname=$db",$dbUser,$dbPassword);
    $conection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}catch(Exception $ex){
    echo $ex->getMessage();
}

