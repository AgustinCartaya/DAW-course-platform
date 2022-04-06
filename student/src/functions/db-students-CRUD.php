<?php
function getStudentIdByLogin($studentName, $studentPassword){
    include("../config/db.php");
    $query=$conection->prepare("SELECT id FROM students WHERE user=:user AND password=:password");
    $query->bindParam(':user', $studentName);
    $query->bindParam(':password', $studentPassword);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_LAZY);
}




?>
