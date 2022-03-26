<?php

function getAdminIdByLogin($adminName, $adminPassword){
    include("../config/db.php");
    $query=$conection->prepare("SELECT id FROM admins WHERE user=:user AND password=:password");
    $query->bindParam(':user', $adminName);
    $query->bindParam(':password', $adminPassword);
    $query->execute();
    return $query->fetch(PDO::FETCH_LAZY);
}

function createAdmin($adminName, $adminPassword){
    include("../config/db.php");
    $query=$conection->prepare("INSERT INTO admins (user, password) VALUES (:user, :password)");
    $query->bindParam(':user', $adminName);
    $query->bindParam(':password', $adminPassword);
    $query->execute();
}


?>