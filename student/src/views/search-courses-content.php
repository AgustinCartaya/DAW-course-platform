<div class="container__divided">
    <div class="container__left">
        <?php echo "Course preview"; /*include("../forms/create-course-form.php");*/ ?>
    </div>

    <div class="container__right">
        <div class="cards__container course__card__list">
            <?php foreach($courses as $course){ ?>
            <?php include("../templates/course-preview-card.php"); ?>
            <?php } ?>
        </div>
    </div>
</div>