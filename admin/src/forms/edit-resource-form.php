
<div class="alert"></div>
<div class="body__container__form">
  <div class="container__form">
    <form class="form__data" action="" method="POST">
        <fieldset>
            <legend>Add resource</legend>
            <div class="data__fields">
                <div class="container__form__image"> 
                    <img
                        src="<?php echo defaultImage('resource');?>"
                        class="image__avatar image__square"
                    />
                    <input type="file" class="image__input" id="image__input" name="resourceUrl" accept="image/*" />
                    <label for="image__input" class="image__label image__square">
                        Choose Resource
                    </label>
                </div>
                <div class="fields">
                    <label for="resourceName">Name:</label>
                    <input type="text" required name="resourceName" id="resourceName" placeholder="Title" value="<?php echo (isset($course['resourceName']))?$course['resourceName']:""; ?>">
                </div>
                
                <div class="fields">
                    <label for="resourceType">Type:</label>
                    <select id="resourceType" name="resourceType">
                        <option value="PDF">PDF</option>
                        <option value="IMAGE">IMAGE</option>
                        <option value="VIDEO">VIDEO</option>
                    </select>
                </div>
            </div>
            <div class="btn__container" >
                <button type="submit" name="action" value="addResource"  class="btn__submit btn__save btn__small">ADD</button>
                <button type="submit" name="action" value="cancelResource"  class="btn__submit btn__cancel btn__small">CANCEL</button>
                <button type="submit" name="action" value="deleteResource"  class="btn__submit btn__delete btn__small">DELETE</button>
            </div>
            <input type="hidden" value="<?php echo $course['id']; ?>" name="courseId">
            </fieldset>
        </form>
    </div>
</div>