<?php
session_start();
    if(!isset($_SESSION['adminVerification'])){
        header("Location:../../index.php");
    }else{
        if($_SESSION['adminVerification']=="ok"){
            $user=$_SESSION["user"];
            $userId=$_SESSION["userId"];
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../../../../src/styles/index-styles.css">
    <link rel="stylesheet" href="../../../../src/styles/global.css">
    <link rel="stylesheet" href="../../../../src/styles/form-styles.css" />
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/home-content.css">


    <title>Web site admin</title>
</head>

<body>

    <?php 
        include("../../../../src/functions/util.php");
        $url=getWebPath();
    ?>


    <header class="container__header">
        <nav class="nav__list">
            <li class="nav__item"><a class="nav__link" href="#"><strong>Admin settings</strong></a></li>
            <li class="nav__item"><a class="nav__link"
                    href="<?php echo $url;?>/sections/admin/src/controllers/home.php">Home</a></li>
            <li class="nav__item"><a class="nav__link"
                    href="<?php echo $url;?>/sections/admin/src/controllers/courses.php">Courses</a></li>
            <li class="nav__item"><a class="nav__link"
                    href="<?php echo $url;?>/sections/admin/src/controllers/students.php">Students</a></li>
            <li class="nav__item"><a class="nav__link"
                    href="<?php echo $url;?>/sections/admin/src/controllers/signout.php">Sign out</a></li>
        </nav>
    </header>

    <div class="container">
        <div class="row">