<?php
print_r($_REQUEST);
if($_POST){
    header("Location:admin/index.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./src/styles/index-styles.css" />
    <link rel="stylesheet" href="./src/styles/global.css" />


    <title>DAW-Projet</title>
</head>

<body>
    <div class="container__app">
        <div class="app">
            <a class="app__btn left" href="student">Student</a>
            <a class="app__btn right" href="admin">Admin</a>
            <form>
                <input type="button" id="bt" value="Nada">
            </form>
        </div>
    </div>
    <script src="./src/scripts/form-scripts.js"></script>


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="./test.js"></script>

</body>

</html>