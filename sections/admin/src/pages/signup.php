<?php

session_start();

//signin validation
if($_POST){
    $user=$_POST['user'];
    $password=$_POST['password'];

    //Checking the admin data in the DB
    include("../functions/db-admin-CRUD.php");
    createAdmin($user,$password);
    $admin = getAdminIdByLogin($user, $password);

    if(isset($admin["id"])){
        $_SESSION['adminVerification']="ok";
        $_SESSION['user']=$user;
        $_SESSION['userId']=$admin["id"];
        header('Location:home.php');
    }else{
        $messageError="Error: Admin has not been created";
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
    <?php include("../forms/signup-form.php"); ?>
    <script src="https://unpkg.com/boxicons@2.1.1/dist/boxicons.js"></script>
    <script src="src/scripts/form-scripts.js"></script>
  </body>
</html>