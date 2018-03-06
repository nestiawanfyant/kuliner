

    <section class="sectionregister-users">
      <div class="container">
        <div class="reg-center">
          <h1 class="patua-one center">Pekula</h1>
          <p class="center montserrat">account / register</p>

          <?php
            validation_errors();
            form_open_multipart('');
           ?>

           <div class="width-100"><br>
             <label for="username" class="montserrat label" style="font-size:14px;"> Username </label><br>
             <input type="text" class="input-22" name="username" placeholder="">
           </div>

           <div class="width-100"><br>
             <label for="email" class="montserrat label" style="font-size:14px;"> E-mail </label><br>
             <input type="text" class="input-22" name="email" placeholder="">
           </div>

           <div class="width-100"><br>
             <label for="name" class="montserrat label" style="font-size:14px;"> Name </label><br>
             <input type="text" class="input-22" name="name" placeholder="">
           </div>

           <div class="width-100"><br>
             <label for="password" class="montserrat label" style="font-size:14px;"> Password </label><br>
             <input type="text" class="input-22" name="password" placeholder="">
           </div>

           <div class="width-100"><br>
             <label for="confrimpassword" class="montserrat label" style="font-size:14px;"> Confrim Password </label><br>
             <input type="text" class="input-22" name="confrimpassword" placeholder="">
           </div>

           <div class="width-100 btn-white"><br>
             <input type="submit" class="waves-effect waves-light btn-1 width-106" name="register" value="Register">
           </div>
          </form>

          <div class="footer-registers">
            <h6 class="center montserrat">Pesona Kuliner Lampung <?php echo date('Y'); ?></h6>
          </div>

        </div>
      </div>
    </section>
