<div class="alert"></div>
<div class="body__container__form">
    <div class="container__form">
        <form class="form__data" action="" method="POST" id="form">
            <fieldset>
                <legend>Course Preview</legend>
                <div class="data__fields">
                    <p id="minimumLevelError" class="php__form__error" >
                        <?php echo (isset($messageError))?$messageError:""; ?>
                    </p>
                    <div class="container__form__image">
                        <img id="coursePreviewThumbnail"
                         src="<?php echo (isset($course))?verifyImage($course['thumbnail'],'course'):defaultImage('course');?>"
                         class="image__avatar image__square" />
                    </div>

                    <p id="coursePreviewTitle"><?php echo (isset($course))?$course['title']:"Title"; ?></p>
                    <div class="fields__divided">
                        <p id="coursePreviewType"><?php echo (isset($course))?$course['type']:"Type"; ?></p>
                        <p id="coursePreviewLevel"><?php echo (isset($course))?$course['level']:"Level"; ?></p>
                    </div>
                    <p id="coursePreviewDescription"><?php echo (isset($course))?$course['description']:"Description"; ?></p>
                </div>
                <div class="btn__container">
                    <!-- <button class="btn__submit btn__disabled btn__unique" type="submit" value="register" disabled>REGISTER</button> -->
                    <button type="submit" name="register" value="register" id="btnRegister"
                        class="btn__submit <?php echo (isset($course))?"":"btn__disabled"; ?>  btn__unique" <?php echo (isset($course))?"":"disabled"; ?>>REGISTER</button>
                </div>
                <input type="hidden" name="courseId" id="coursePreviewId" value="<?php echo (isset($course))?$course['id']:""; ?> ">
            </fieldset>
        </form>
    </div>
</div>