<?php include("../templates/header.php"); ?>
<?php 
    //getting all Admin courses from db
    include("../functions/db-course-CRUD.php");
    $courses=getAdminCourses($userId);

    if($_POST){
        include("../functions/util.php");
        $courseImageName=(isset($_FILES['courseThumbnail']['name']))?$_FILES['courseThumbnail']['name']:"";
        $courseImageTemp=(isset($_FILES['courseThumbnail']['tmp_name']))?$_FILES['courseThumbnail']['tmp_name']:"";
        $courseImage = makeImageCopy($courseImageName, $courseImageTemp, "course.jpg");

        createCourse($userId,
                    $_POST['courseTitle'], 
                    $_POST['courseType'], 
                    $_POST['courseLevel'], 
                    $_POST['courseDescription'], 
                    $courseImage);
        header("Location:courses.php");
    }
?>

    <div class="courses__container__divided">
        <div class="container__left">
            <?php include("../forms/create-course-form.php"); ?>
        </div>

        <div class="container__right">
            <div class="cards__container course__card__list">

            <?php foreach($courses as $course){ ?>
                <form method="GET" action="course.php" class="card__item">
                    <button type="submit" class>
                        <img
                        src="https://danieljml.github.io/App-Movies/static/media/placeholder.2a99ab22.jpg"
                        alt=""
                        />
                        <span><?php echo $course['type'];?></span>
                        <p><?php echo $course['title'];?></p>
                    </button>
                    <input type="hidden" name="courseId" id="courseId" value="<?php echo $course['id'];?>"/>
                </form>
            <?php } ?>
            </div>
        </div>
    </div>
<?php include("../templates/footer.php"); ?>