<?php

if ( ! defined( 'APP_ROOT' ) ) {
    include_once(  $_SERVER["DOCUMENT_ROOT"] . '/DAW-project/config.php' );
}
include_once(APP_ADMIN."/admin-config.php");
include_once(APP_FUNCTIONS."/db-admin-CRUD.php");

session_start();

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo W_STYLES;?>/global.css">
    <link rel="stylesheet" href="<?php echo W_STYLES;?>/form-styles.css" />
    <link rel="stylesheet" href="../styles/sign-form.css" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>