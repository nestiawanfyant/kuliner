

    <section class="content-user">
      <div class="container">
        <div class="row">
          <div class="margin-50">
            <div class="col s12 m4 l3">
              <div class="menu-user">
                <ul>
                  <a href="<?php echo base_url('account/infodata') ?>"><li style="<?php if($this->uri->segment(2) == 'infodata'){echo "background-color:#0dbb6d;color:#fff;";}else{echo "";} ?>" class="montserrat">Info data</li></a>
                  <a href="<?php echo base_url('account/images') ?>"><li style="<?php if($this->uri->segment(2) == 'images'){echo "background-color:#0dbb6d;color:#fff;";}else{echo "";} ?>" class="montserrat">Images</li></a>
                  <a href="<?php echo base_url('account/password') ?>"><li style="<?php if($this->uri->segment(2) == 'password'){echo "background-color:#0dbb6d;color:#fff;";}else{echo "";} ?>" class="montserrat">password</li></a>
                </ul>
              </div>
            </div>

            <div class="col s12 m8 l9">
              <?php
                if ($this->uri->segment(2) == 'images') {
                  $this->load->view('pekula/user/content/C_users-images.php');
                } else if ($this->uri->segment(2) == 'password') {
                  $this->load->view('pekula/user/content/C_users-password.php');
                } else if ($this->uri->segment(2) == 'infodata') {
                  $this->load->view('pekula/user/content/C_users-infodata.php');
                } else if ($this->uri->segment(1) == 'account') {
                  redirect('account/infodata');
                }
              ?>
            </div>
          </div>
        </div>
      </div>
    </section>
