

    <!-- Modal Structure / LOGIN -->
    <div id="login" class="modal">
      <?php
        validation_errors();
        form_open_multipart('aksi/login');
      ?>
        <div class="modal-content">
          <div class="left">
            <h4 class="patua-one">Login User</h4>
            <div class="border-bottom"></div>
          </div>

          <?php echo br(4) ?>

          <div class="width-100"><br>
            <label for="username" class="montserrat label" style="font-size:14px;"> Username </label><br>
            <input type="text" class="input-22" name="username" placeholder="">
          </div>
          <div class="width-100"><br>
            <label for="password" class="montserrat label" style="font-size:14px;"> Password </label><br>
            <input type="text" class="input-22" name="password" placeholder="">
          </div>

        </div>
        <div class="modal-footer">
          <input type="submit" class="modal-action modal-close waves-effect waves-green btn-1" style="margin-right:13px;margin-bottom:20px;" name="" value="Login">
        </div>
      </form>
    </div>
