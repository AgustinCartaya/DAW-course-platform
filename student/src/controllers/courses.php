
<?php include("../templates/header.php"); ?>
<?php
    //getting all student courses from db

    include_once(APP_FUNCTIONS."/db-student-course-CRUD.php");
    echo "<h1 style='color:white;'> Recommended Courses </h1>";
    $courses=getRecommendedCourses($interest);

    $Fcourses=getFollowedCourses($userId);





?>

<?php include("../views/courses-content.php"); ?>
<?php include("../templates/footer.php"); ?>
