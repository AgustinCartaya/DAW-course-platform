<div class="alert"></div>
<div class="body__container__form">
  <div class="container__form">
    <form class="form__data" method="POST">
      <fieldset>
        <legend>Sign up for admin</legend>
        <div class="data__fields">
          <?php if(isset($messageError)){?>
            <p> <?php echo $messageError; ?></p>
          <?php } ?>
          <div class="fields">
              <label for="user">User</label>
              <input type="text" name="user" id="user" placeholder="Enter user name">     
          </div>

          <div class="fields">
            <label for="password">Password</label>
            <input type="password" name="password" id="password" placeholder="Enter Password" />
          </div>

          <div class="fields">
            <label for="repPassword">Repeat password</label>
            <input type="password" name="repPassword" id="repPassword" placeholder="Repeat password" />
          </div>

          <a class="btn__link" href="signin.php">Sign in</a>
        </div>
        <button type="submit" class="btn__submit btn__unique" id="submit" >Sign up</button>
      </fieldset>
    </form>
  </div>
</div>