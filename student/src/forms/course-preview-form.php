<div class="alert"></div>
<div class="body__container__form">
    <div class="container__form">
        <form class="form__data" action="" method="POST" id="form">
            <fieldset>
                <legend>Course Preview</legend>
                <div class="data__fields">
                    <?php if(isset($messageError)){?>
                    <p class="php__form__error"> <?php echo $messageError; ?></p>
                    <?php } ?>

                    <div class="container__form__image">
                        <img id="coursePreviewThumbnail" src="<?php echo defaultImage('course');?>" class="image__avatar image__square" />
                    </div>

                    <p id="coursePreviewTitle">Title (centered)</p>
                    <div class="fields__divided">
                        <p id="coursePreviewType">Type</p>
                        <p id="coursePreviewLevel">Level</p>
                    </div>
                    <p id="coursePreviewDescription">Description</p>
                    
                </div>
                <div class="btn__container">
                    <!-- <button class="btn__submit btn__disabled btn__unique" type="submit" value="register" disabled>REGISTER</button> -->
                    <button type="submit" name="register" value="register" id="btnRegister"
                        class="btn__submit btn__disabled btn__unique" disabled>REGISTER</button>
                </div>
                <input type="hidden" name="courseId" id="coursePreviewId">
            </fieldset>
        </form>
    </div>
</div>