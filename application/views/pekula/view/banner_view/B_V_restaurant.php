

    <section class="banner-view-reso">
      <div class="banner-name-restro" style="background-image:url('<?php echo base_url('assets/img/pattren.jpg'); ?>');">
        <div class="center-banner-name gradient-0dbb6d">
          <h3 class="center patua-one" style="padding:0;margin:0;">Rumah Begadang</h3>
          <p class="center montserrat">Open : 08:00 AM  - 09:33 PM</p><br>
          <?php
            if ($this->uri->segment(3) == 'view_menu') {
              ?>
              <p class="center montserrat" style="font-size:20px;">Menu Makanan : Nasi Goreng</p>
              <?php
            }
          ?>
        </div>
      </div>
      <div class="container">
       <div class="row margin-50">
         <div class="col s12 m8 l8">
           <div class="slider" id="slide-resto">
             <?php
              if ($this->uri->segment(3) == "view_menu") {
                ?>
                <ul class="slides">
                  <li>
                    <img src="<?php echo base_url('assets/img/cafe-1.jpg'); ?>"> <!-- random image -->
                  </li>
                </ul>
                <?php
              } else {
                ?>
                <ul class="slides">
                  <li>
                    <img src="<?php echo base_url('assets/img/cafe-1.jpg'); ?>"> <!-- random image -->
                    <div class="caption center-align">
                      <!-- <h3>This is our big Tagline!</h3> -->
                      <!-- <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5> -->
                    </div>
                  </li>
                  <li>
                    <img src="<?php echo base_url('assets/img/cafe-2.jpg'); ?>"> <!-- random image -->
                    <div class="caption left-align">
                      <!-- <h3>Left Aligned Caption</h3> -->
                      <!-- <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5> -->
                    </div>
                  </li>
                  <li>
                    <img src="<?php echo base_url('assets/img/cofe-3.jpg'); ?>"> <!-- random image -->
                    <div class="caption right-align">
                      <!-- <h3>Right Aligned Caption</h3> -->
                      <!-- <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5> -->
                    </div>
                  </li>
                  <li>
                    <img src="<?php echo base_url('assets/img/cafe-4.jpg'); ?>"> <!-- random image -->
                    <div class="caption center-align">
                      <!-- <h3>This is our big Tagline!</h3> -->
                      <!-- <h5 class="light grey-text text-lighten-3">Here's our small slogan.</h5> -->
                    </div>
                  </li>
                </ul>
                <?php
              }
             ?>
          </div>
       </div>

         <div class="col s12 m4 l4">
           <?php
            if ($this->uri->segment(3) != 'view_menu') {
              ?>
              <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63552.20088972329!2d105.26538572710423!3d-5.415056994541803!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e40db900ef53577%3A0x19615d5c30f6a9c3!2sTj.+Karang+Tim.%2C+Kota+Bandar+Lampung%2C+Lampung!5e0!3m2!1sid!2sid!4v1519909193459" width="100%" height="590px" frameborder="0" style="border:0" allowfullscreen></iframe>
              <?php
            } else {
              ?>
              <h4 class="patua-one" style="margin:0;">Nasi Goreng</h4>
              <div class="border-bottom" style="margin-bottom:30px;"></div>
              <table>
                <tr>
                  <th width="160px">Nama Makanan</th>
                  <th>:</th>
                  <td>Nasi Gorang</td>
                </tr>
                <tr>
                  <th>Harga Makanan</th>
                  <th>:</th>
                  <td>Rp. 200.000.00</td>
                </tr>
                <tr>
                  <th>Status</th>
                  <th>:</th>
                  <td>Avalible</td>
                </tr>
                <tr>
                  <th>Tags</th>
                  <th>:</th>
                  <td>Makanan, Nasi, Daging</td>
                </tr>
              </table>
              <?php
            }
           ?>
         </div>

       </div>
      </div>
    </section>
