<div class="courses__container__divided">
    <div class="container__left">
        <?php// include("../forms/create-course-form.php"); ?>
    </div>

    <div class="container__right">
        <div class="cards__container course__card__list">
            <?php foreach($courses as $course){ ?>
                <?php include("../templates/course-view-card.php"); ?>
            <?php } ?>
            <?php echo " <br /> <br />  <br /> <br />"; ?>
            <?php echo "<h1 style='color:white;'> Followed Courses </h1>"; ?>
            <?php foreach($Fcourses as $course){ ?>
                <?php include("../templates/course-preview-card.php"); ?>
            <?php } ?>
        </div>
    </div>
</div>
