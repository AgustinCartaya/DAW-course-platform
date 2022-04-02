<div class="alert"></div>
<div class="body__container__form">
  <div class="container__form">
    <form class="form__data" action="" method="POST">
        <fieldset>
            <legend>Edit course # <?php echo $course['id']; ?></legend>
            <div class="data__fields">
                <div class="form__divided">
                    <div class="data__left__side">
                        <div class="container__form__image"> 
                            <img
                                src="<?php echo W_IMAGES;?>/<?php echo $course['thumbnail']; ?>"
                                class="image__avatar image__square"
                            />
                            <input type="file" class="image__input" id="image__input" name="resourceUrl" accept="image/*" />
                            <label for="image__input" class="image__label image__square">
                                Choose Photo
                            </label>
                        </div>        
                    </div>
                    <div class="data__right__side"> 
                        <div class="fields">
                            <label for="courseTitle">Title</label>
                            <input type="text" required name="courseTitle" id="courseTitle" placeholder="Title" value="<?php echo $course['title']; ?>">
                        </div>

                        <div class="fields__divided">

                            <div class="fields">
                                <label for="courseType">Type</label>
                                <input type="text" required name="courseType" id="courseType" placeholder="Type" value="<?php echo $course['type']; ?>">
                            </div>

                            <div class="fields">
                                <label for="courseLevel">Level</label>
                                <select id="courseLevel" name="courseLevel">
                                    <?php for ($i=1; $i<=10; $i++){ ?>
                                        <option <?php  echo ($course['level']==$i)?"selected ":""; ?> value="<?php echo $i; ?>">Level <?php echo $i; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>

                    </div>
                </div>
                <textarea
                    placeholder="Description..."
                    name="courseDescription"
                    required
                    id="courseDescription"
                    cols="30"
                    rows="9"
                ><?php echo $course['description'];?></textarea>
            </div>

            <div class="btn__container" >
                <button type="submit" name="action" value="save"  class="btn__submit btn__save">SAVE</button>
                <button type="submit" name="action" value="cancel"  class="btn__submit btn__cancel">CANCEL</button>
                <button type="submit" name="action" value="delete"  class="btn__submit btn__delete">DELETE</button>
            </div>
            <input type="hidden" value="<?php echo $course['id']; ?>" name="courseId">
        </fieldset>
        </form>
    </div>
</div>
