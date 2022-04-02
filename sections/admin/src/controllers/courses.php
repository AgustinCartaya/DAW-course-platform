<?php include("../templates/header.php"); ?>
<?php 
    //getting all Admin courses from db
    include("../functions/db-course-CRUD.php");
    $courses=getAdminCourses($userId);

    if($_POST){
        include("../functions/util.php");
        $courseImageName=(isset($_FILES['courseThumbnail']['name']))?$_FILES['courseThumbnail']['name']:"";
        $courseImageTemp=(isset($_FILES['courseThumbnail']['tmp_name']))?$_FILES['courseThumbnail']['tmp_name']:"";
        $courseImage = makeImageCopy($courseImageName, $courseImageTemp, "course.png");

        createCourse($userId,
                    $_POST['courseTitle'], 
                    $_POST['courseType'], 
                    $_POST['courseLevel'], 
                    $_POST['courseDescription'], 
                    $courseImage);
        header("Location:courses.php");
    }
?>

<?php include("../views/courses-content.php"); ?>
<?php include("../templates/footer.php"); ?>