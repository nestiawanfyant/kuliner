

    <section class="content_view_resto">
      <div class="container">

        <?php
          if ($this->uri->segment(3) != "view_menu") {
            ?>
            <div class="deskripsi-menu">
                <div class="deskrip-menu">
                  <p class="menu montserrat">Deskripsi Rumah Begadang</p>
                  <div class="border-bottom"></div><br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <?php
          } else {
            ?>
            <div class="deskripsi-menu">
                <div class="deskrip-menu">
                  <p class="menu montserrat">Detail Menu</p>
                  <div class="border-bottom"></div><br>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                </div>
            </div>
            <?php
          }
          ?>

        <div class="row">

          <div class="col s12 m8 l9">
            <div class="margin-50">
              <p class="menu montserrat">Menu makanan....</p>
            </div>

            <div class="card-menu">
              <div class="card horizontal">
                <div class="card-image">
                  <img src="<?php echo base_url('assets\img\Kuliner-Terlezat-di-Indonesia.png'); ?>" style="width:100%; height:250px;">
                </div>
                <div class="card-stacked">
                  <div class="card-content">
                    <h5>Coffie Capucino</h5>
                    <p>I am a very simple card. I am good at containing small bits of information.</p>
                  </div>
                  <div class="card-action">
                    <a href="<?php echo base_url('restaurant/view/view_menu'); ?>" onclick="menuview('view_menu')" class="right t-0dbb6d montserrat">Read More</a>
                  </div>
                </div>
              </div>
            </div>

            <div class="card-menu">
              <div class="card horizontal">
                <div class="card-image">
                  <img src="<?php echo base_url('assets/img/cofe-3.jpg'); ?>" style="width:100%; height:250px;">
                </div>
                <div class="card-stacked">
                  <div class="card-content">
                    <h5>Coffie Capucino</h5>
                    <p>I am a very simple card. I am good at containing small bits of information.</p>
                  </div>
                  <div class="card-action">
                    <a href="#" class="right t-0dbb6d montserrat">Read More</a>
                  </div>
                </div>
              </div>
            </div>

            <br>
            <div class="center-pgn margin-50">
              <ul class="pagination">
                <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
                <li class="active"><a href="#!">1</a></li>
                <li class="waves-effect"><a href="#!">2</a></li>
                <li class="waves-effect"><a href="#!">3</a></li>
                <li class="waves-effect"><a href="#!">4</a></li>
                <li class="waves-effect"><a href="#!">5</a></li>
                <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
              </ul>
            </div>

          </div>

          <div class="col s12 m4 l3">
            <div class="margin-50">
              <p class="menu montserrat">Top Menu....</p>
              <div class="border-bottom"></div>
            </div>

            <div class="card">
             <div class="card-image">
               <img src="<?php echo base_url('assets\img\kenapa-kuliner-nusantara-disukai-hingga-luar-negeri-ini-rahasianya-170621q.jpg'); ?>">
               <span class="card-title">Card Title</span>
             </div>
            </div>

            <div class="card">
             <div class="card-image">
               <img src="<?php echo base_url('assets\img\Kuliner-Terlezat-di-Indonesia.png'); ?>">
               <span class="card-title">Card Title</span>
             </div>
            </div>

            <div class="card">
             <div class="card-image">
               <img src="<?php echo base_url('assets\img\cafe-1.jpg'); ?>">
               <span class="card-title">Card Title</span>
             </div>
            </div>

            <div class="margin-50">
              <p class="menu montserrat">Cabang toko....</p>
              <div class="border-bottom"></div>
            </div>

            <div class="card">
             <div class="card-image">
               <img src="<?php echo base_url('assets\img\cafe-2.jpg'); ?>">
               <span class="card-title">Card Title</span>
             </div>
            </div>

            <div class="card">
             <div class="card-image">
               <img src="<?php echo base_url('assets\img\cafe-4.jpg'); ?>">
               <span class="card-title">Card Title</span>
             </div>
            </div>

            <div class="card">
             <div class="card-image">
               <img src="<?php echo base_url('assets\img\cafe-1.jpg'); ?>">
               <span class="card-title">Card Title</span>
             </div>
            </div>

          </div>
        </div>
      </div>
    </section>
