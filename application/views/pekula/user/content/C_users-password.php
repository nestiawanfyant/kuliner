

    <div class="infodata">
      <div class="container">
        <br>
        <h4 class="patua-one">Password</h4>
        <div class="border-bottom"></div>
        <br>

        <?php
          validation_errors();
          form_open_multipart('');
         ?>

         <div class="width-100"><br>
           <label for="password_old" class="montserrat label" style="font-size:14px;"> Password Old </label><br>
           <input type="text" class="input-22" name="password_old" placeholder="">
         </div>

         <div class="width-100"><br>
           <label for="password_new" class="montserrat label" style="font-size:14px;"> New Password </label><br>
           <input type="text" class="input-22" name="password_new" placeholder="">
         </div>

         <div class="width-100"><br>
           <label for="passwrod_confrim" class="montserrat label" style="font-size:14px;"> Confrim Password </label><br>
           <input type="text" class="input-22" name="passwrod_confrim" placeholder="">
         </div>

         <div class="width-100 btn-white"><br>
           <input type="submit" class="waves-effect waves-light btn-1 width-100" name="register" value="Perbarui Password">
         </div>

        </form>
        <br><br><br>
      </div>
    </div>
