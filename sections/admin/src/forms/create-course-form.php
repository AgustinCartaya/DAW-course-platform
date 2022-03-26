<div class="alert"></div>
<div class="body__container__form">
  <div class="container__form">
    <form class="form__data" action="" method="POST">
        <fieldset>
            <legend>Create new course</legend>
            <div class="data__fields">
                <div class="form__divided">
                    <div class="data__left__side">
                        <div class="container__form__image"> 
                            <img
                                src="https://images.unsplash.com/profile-fb-1642446137-6bae7cc893b9.jpg?dpr=2&auto=format&fit=crop&w=60&h=60&q=60&crop=faces&bg=fff"
                                class="image__avatar"
                            />
                            <input type="file" id="image__input" name="courseThumbail" accept="image/*" />
                            <label for="image__input" id="image__label">
                                Choose Photo
                            </label>
                        </div>
                    </div>
                    <div class="data__right__side"> 
                        <div class="fields">
                            <label for="courseTitle">Title:</label>
                            <input type="text" required name="courseTitle" id="courseTitle" placeholder="Title">
                        </div>

                        <div class="fields">
                            <label for="courseType">Type:</label>
                            <input type="text" required name="courseType" id="courseType" placeholder="Type">
                        </div>
                
                    </div>
                </div>

                <div class="fields">
                    <label for="courseDescription">Description:</label>
                    <input type="text" required name="courseDescription" id="courseDescription" placeholder="courseDescription">
                </div>
                <!-- <div class="fields">
                    <label for="courseThumbail">Image:</label>
                    <input type="file" name="courseThumbail" id="courseThumbail" placeholder="Image">
                </div> -->
            </div>
            <button class="btn__submit" id="submit" type="submit">SEND</button>
        </fieldset>
        </form>
    </div>
</div>


<!-- -->
