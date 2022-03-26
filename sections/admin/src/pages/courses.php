<?php include("../templates/header.php"); ?>
<?php 
    //getting all Admin courses from db
    include("../functions/db-course-CRUD.php");
    $courses=getAdminCourses($userId);

    if($_POST){
        createCourse($userId, $_POST['courseTitle'], $_POST['courseType'], $_POST['courseDescription'], "image.jpg");
        header("Location:courses.php");
    }
?>

    <div class="body__container__divided">
        <div class="container__left">
            <?php include("../forms/create-course-form.php"); ?>
        </div>

        <div class="container__right">
            <?php
                //loop each corse
                foreach($courses as $course){
            ?>
                    <form method="GET" action="course.php">
                        <input type="submit" id="courseTitle" value="<?php echo $course['title']?>">
                        <input type="hidden" name="courseId" id="courseId" value="<?php echo $course['id']?>"/>
                    </form>
                    <?php } ?>
        </div>
    </div>


<?php include("../templates/footer.php"); ?>