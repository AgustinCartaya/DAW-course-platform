
<?php include("../templates/header.php"); ?>
<?php
    //getting all student courses from db

    include_once("../functions/db-student-course-CRUD.php");
    echo "<h1 style='color:white;'> Recommended Courses </h1>";
    $courses=getRecommendedCourses($interest,$userId);

    $Fcourses=getFollowedCourses($userId);





?>

<?php include("../views/courses-content.php"); ?>
<?php include("../templates/footer.php"); ?>
