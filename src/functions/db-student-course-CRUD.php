<?php

function getRecommendedCourses($type){
    include("db-connection.php");
    $query=$conection->prepare("SELECT * FROM COURSES INNER JOIN INSCRIPTIONS WHERE COURSES.id!=INSCRIPTIONS.idCourse AND type=:type");
    $query->bindParam(':type', $type);
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function getFollowedCourses($idStudent){
  include("db-connection.php");
  $query=$conection->prepare("SELECT * FROM COURSES, INSCRIPTIONS WHERE COURSES.id=INSCRIPTIONS.idCourse AND INSCRIPTIONS.idStudent=:idStudent");
  $query->bindParam(':idStudent', $idStudent);
  $query->execute();
  return $query->fetchAll(PDO::FETCH_ASSOC);
}

function getUnFollowedCourses($idStudent){
  include("db-connection.php");
  $query=$conection->prepare("SELECT * FROM COURSES WHERE id NOT IN (SELECT idCourse FROM INSCRIPTIONS WHERE idStudent = :idStudent)");
  $query->bindParam(':idStudent', $idStudent);
  $query->execute();
  return $query->fetchAll(PDO::FETCH_ASSOC);
}

function createInscription($idStudent, $idCourse){
  include("db-connection.php");
  $query=$conection->prepare("INSERT INTO INSCRIPTIONS (idStudent, idCourse) VALUES (:idStudent, :idCourse)");
  $query->bindParam(':idStudent', $idStudent);
  $query->bindParam(':idCourse', $idCourse);
  $query->execute();
}

