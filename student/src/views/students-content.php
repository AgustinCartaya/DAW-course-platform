<div class="students__container__divided">
    <div class="container__up">
        <?php include("../forms/create-student-form.php"); ?>
    </div>

    <div class="container__bottom">
        <div class="cards__container student__card__list">
            <?php foreach($students as $student){ ?>
                <?php include("../templates/student-preview-card.php"); ?>
            <?php } ?>
        </div>
    </div>
</div>