<?php

function getRecommendedCourses($type,$id){
    include("../config/db.php");
    $query=$conection->prepare("SELECT * FROM COURSES WHERE type=:type");
    $query->bindParam(':type', $type);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}


function getFollowedCourses($id){
  include("../config/db.php");
  $query=$conection->prepare("SELECT * from INSCRIPTIONS WHERE idStudent=:id");
  $query->bindParam(':id', $id);
  $query->execute();
  return $query->fetchAll(PDO::FETCH_ASSOC);

}









?>
