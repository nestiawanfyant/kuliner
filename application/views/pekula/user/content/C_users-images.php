

    <div class="infodata">
      <div class="container">
        <br>
        <h4 class="patua-one">Images</h4>
        <div class="border-bottom"></div>
        <br>

        <?php
          validation_errors();
          form_open_multipart('');
         ?>

         <div class="file-field input-field">

           <img src="<?php echo base_url('assets/img/cafe-1.jpg') ?>" alt="" style="width:100%;height:400px;margin-bottom:20px;">

          <div class="btn">
            <span>File</span>
            <input type="file">
          </div>
          <div class="file-path-wrapper">
            <input class="file-path validate width-80" type="text">
          </div>
        </div>

         <div class="width-100 btn-white"><br>
           <input type="submit" class="waves-effect waves-light btn-1 width-100" name="register" value="Perbarui Gambar">
         </div>

        </form>
        <br><br><br>
      </div>
    </div>
