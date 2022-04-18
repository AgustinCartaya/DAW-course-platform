<?php include("../templates/header.php"); ?>

<?php
include_once(APP_FUNCTIONS."/db-student-course-CRUD.php");
    $courses=getUnFollowedCourses($userId);

    if($_POST && $_POST['courseId']){
        createInscription($userId, $_POST['courseId']);
        header("Location:my-courses.php"); 
    }
?>

<?php include("../views/search-courses-content.php"); ?>
<script src="<?php echo STUDENT_SCRIPTS.'/search-courses.js'?>"></script>

<?php include("../templates/footer.php"); ?>