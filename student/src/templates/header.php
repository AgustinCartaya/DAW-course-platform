<?php
if ( ! defined( 'APP_ROOT' ) ) {
    include_once(  $_SERVER["DOCUMENT_ROOT"] . '/DAW-project/config.php' );
}
include_once(APP_STUDENT."/student-config.php");
include_once(APP_FUNCTIONS."/util.php");

session_start();
    if(!isset($_SESSION['studentVerification'])){
        header("Location:../../index.php");
    }else{
        if($_SESSION['studentVerification']=="ok"){
            $user=$_SESSION["user"];
            $userId=$_SESSION["userId"];
            $interest="MATHEMATICS";
            //echo "<script>alert('$interest');</script>";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo W_STYLES;?>/index-styles.css">
    <link rel="stylesheet" href="<?php echo W_STYLES;?>/global.css">
    <link rel="stylesheet" href="<?php echo W_STYLES;?>/form-styles.css" />
    <link rel="stylesheet" href="../styles/global.css">
    <link rel="stylesheet" href="../styles/home-content.css">

    <title>Web site student</title>
</head>

<body>
    <header class="container__header">
        <nav class="nav__list">
            <li class="nav__item"><a class="nav__link" href="#"><strong>Student settings</strong></a></li>
            <li class="nav__item"><a class="nav__link" href="<?php echo W_STUDENT;?>/src/controllers/home.php">Home</a>
            </li>
            <li class="nav__item"><a class="nav__link"
                    href="<?php echo W_STUDENT;?>/src/controllers/courses.php">Courses</a></li>
            <li class="nav__item"><a class="nav__link" href="<?php echo W_STUDENT;?>/src/controllers/signout.php">Sign
                    out</a></li>
        </nav>
    </header>

    <div class="container">
        <div class="row">