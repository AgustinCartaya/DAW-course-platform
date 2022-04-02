<div class="alert"></div>
<div class="body__container__form">
  <div class="container__form">
    <form class="form__data" method="POST">
      <fieldset>
        <legend>Create new student</legend>
        <div class="data__fields form__divided">
        <!-- parent container created (some css of app__image put on paretnt container) -->
          <div class="data__left__side"> 
            <div class="container__form__image"> 
              <img
                src="<?php echo W_IMAGES;?>/student.png"
                class="image__avatar image__circle"
              />
              <input type="file" class="image__input" id="image__input" name="courseThumbail" accept="image/*" />
              <label for="image__input" class="image__label image__circle">
                  Choose Photo
              </label>
            </div>

            <!-- fill with the DB or with a JSON file -->
            <div class="fields__end">
              <div class="fields">
                  <label for="studentLevel">Level</label>
                  <select id="studentLevel" name="studentLevel">
                      <?php for ($i=1; $i<=10; $i++){ ?>
                          <option value="<?php echo $i ?>">Level <?php echo $i ?></option>
                      <?php } ?>
                  </select>
              </div>

              <div class="fields">
                <label for="studentInterest">Interest:</label>
                <input type="text" name="studentInterest" id="studentInterest" placeholder="Ex: Physics">
              </div>
            </div>
          </div>
        <!-- changed class name: app__right-side -->
          <div class="data__right__side">
            <div class="fields__divided">
              <div class="fields">
                <label for="studentName">Name</label>
                <input type="text" name="studentName" id="studentName"  />
              </div>

              <div class="fields">
                <label for="studentLastName">Last Name</label>
                <input type="text" name="studentLastName" id="studentLastName"  />
              </div>
            </div>

            <div class="fields__divided">
              <div class="fields">
                <label for="studentGender">Gender</label>
                <select  name="studentGender" id="studentGender">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="Other">Other</option>
                </select>
              </div>

              <div class="fields">
                <label for="studentDateOfBirth">Date of birth</label>
                <input  type="date" name="studentDateOfBirth" id="studentDateOfBirth"/>
              </div>
            </div>

            
            <div class="fields">
              <label for="studentEmail">Email</label>
              <input type="email" name="studentEmail" id="studentEmail"  />
            </div>

            <div class="fields">
              <label for="studentPassword">Password</label>
              <input type="password" name="studentPassword" id="studentPassword"/>
            </div>

            <div class="fields">
              <label for="studentRepeatPassword">Repeat password</label>
              <input type="password" name="studentRepeatPassword" id="studentRepeatPassword"/>
            </div>
          </div>
        </div>
        <button class="btn__submit btn__unique" id="submit" type="submit">CREATE</button>
      </fieldset>
    </form>
  </div>
</div>