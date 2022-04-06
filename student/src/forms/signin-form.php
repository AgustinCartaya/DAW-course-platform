<div class="alert"></div>
<div class="body__container__form">
  <div class="container__form">
    <form class="form__data" method="POST">
      <fieldset>
        <legend>Login for Student</legend>
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

          
        </div>
        <button type="submit" class="btn__submit" id="submit" >Sign In</button>
      </fieldset>
    </form>
  </div>
</div>

