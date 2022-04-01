<?php

function getStudentById($id){
    include("../config/db.php");
    $query=$conection->prepare("SELECT * FROM STUDENTS WHERE id=:id");
    $query->bindParam(':id', $id);
    $query->execute();
    return $query->fetch(PDO::FETCH_LAZY);
}

function getStudents(){
    include("../config/db.php");
    $query=$conection->prepare("SELECT * FROM STUDENTS");
    $query->execute();
    return $query->fetchAll(PDO::FETCH_ASSOC);
}

function createStudent($user, $password, $name, $lastName, $gender, $dateOfBirth, $email, $level, $interest, $image){
    include("../config/db.php");
    $query=$conection->prepare("INSERT INTO STUDENTS (user, password, name, lastName, gender, dateOfBirth, email, level, interest, image) VALUES (:user, :password, :name, :lastName, :gender, :dateOfBirth, :email, :level, :interest, :image)");
    $query->bindParam(':user', $user);
    $query->bindParam(':password', $password);
    $query->bindParam(':name', $name);
    $query->bindParam(':lastName', $lastName);
    $query->bindParam(':gender', $gender);
    $query->bindParam(':dateOfBirth', $dateOfBirth);
    $query->bindParam(':email', $email);
    $query->bindParam(':level', $level);
    $query->bindParam(':interest', $interest);
    $query->bindParam(':image', $image);
    $query->execute();
}

function updateStudent($id, $user, $password, $name, $lastName, $gender, $dateOfBirth, $email, $level, $interest, $image){
    include("../config/db.php");
    $query=$conection->prepare("UPDATE STUDENTS SET user=:user, password=:password, name=:name, lastName=:lastName, gender=:gender, dateOfBirth=:dateOfBirth, email=:email, level=:level, interest=:interest, image=:image WHERE id=:id");
    $query->bindParam(':user', $user);
    $query->bindParam(':password', $password);
    $query->bindParam(':name', $name);
    $query->bindParam(':lastName', $lastName);
    $query->bindParam(':gender', $gender);
    $query->bindParam(':dateOfBirth', $dateOfBirth);
    $query->bindParam(':email', $email);
    $query->bindParam(':level', $level);
    $query->bindParam(':interest', $interest);
    $query->bindParam(':image', $image);
    $query->bindParam(':id', $id);
    $query->execute();
}

function deleteStudent($id){
    include("../config/db.php");
    $query=$conection->prepare("DELETE FROM STUDENTS WHERE id=:id");
    $query->bindParam(':id', $id);
    $query->execute();
}

