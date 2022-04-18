<?php include("../templates/header.php"); ?>

<?php
include_once(APP_FUNCTIONS."/db-course-CRUD.php");
    $courses=getAllCourses();

?>
<?php include("../views/my-courses-content.php"); ?>
<?php include("../templates/footer.php"); ?>