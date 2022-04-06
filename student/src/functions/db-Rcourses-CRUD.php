<?php

function getRecommendedCourses($type){
    include("../config/db.php");
    //$query=$conection->prepare("SELECT * FROM COURSES WHERE EXISTS ( SELECT * FROM STUDENTS WHERE interest=:type AND id=:id)");
    $query=$conection->prepare("SELECT * FROM COURSES WHERE type=?");
    $query->execute($type);
    //PDO::FETCH_ASSOC
    return $query->fetch();
}









?>
