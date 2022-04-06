<?php

session_start();

//signin validation
if($_POST){
    $user=$_POST['user'];
    $password=$_POST['password'];

    //Checking the admin in the DB
    include("../function/db-students-CRUD.php");
    $student = getStudentIdByLogin($user, $password);

    //if admin exist in the db
    if(isset($student["id"])){
        $_SESSION['studentVerification']="ok";
        $_SESSION['user']=$user;
        $_SESSION['userId']=$student["id"];
        $_SESSION['choix']=$student["interest"];
        header('Location:home.php');
    }else{
        $messageError="Error: user name or password are incorrects";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../../../src/styles/global.css">
    <link rel="stylesheet" href="../../../../src/styles/form-styles.css" />
    <link rel="stylesheet" href="../styles/sign-form.css" />

</head>
    <body>
        <?php include("../forms/signin-form.php"); ?>
        <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
        <script src="src/scripts/form-scripts.js"></script>
    </body>
</html>
