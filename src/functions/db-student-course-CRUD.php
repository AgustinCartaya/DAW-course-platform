<?php

function getRecommendedCourses($type){
    include("db-connection.php");
    $query=$conection->prepare("SELECT * FROM COURSES INNER JOIN INSCRIPTIONS WHERE COURSES.id!=INSCRIPTIONS.idCourse AND type=:type");
    $query->bindParam(':type', $type);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}


function getFollowedCourses($id){
  include("db-connection.php");
  $query=$conection->prepare("SELECT * from COURSES INNER JOIN INSCRIPTIONS WHERE COURSES.id=INSCRIPTIONS.idCourse AND INSCRIPTIONS.idStudent=:id");
  $query->bindParam(':id', $id);
  $query->execute();
  return $query->fetchAll(PDO::FETCH_ASSOC);

}

function FollowCourses($courseId,$studentid){
  include("db-connection.php");
  $query=$conection->prepare("INSERT INTO INSCRIPTIONS (idStudent,idCourse,date) VALUES (:sid,:cid,0)");
  $query->bindParam(':cid', $courseId);
  $query->bindParam(':sid', $studentid);
  $query->execute();
  return $query->fetch(PDO::FETCH_ASSOC);
}

function UNFollowCourses($courseId,$studentid){
  include("db-connection.php");
  $query=$conection->prepare("DELETE FROM INSCRIPTIONS WHERE idCourse=:cid AND idStudent=:sid");
  $query->bindParam(':cid', $courseId);
  $query->bindParam(':sid', $studentid);
  $query->execute();
  return $query->fetch(PDO::FETCH_ASSOC);
}









?>
