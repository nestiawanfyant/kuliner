    <section class="content">
        <div class="container-fluid">
            <div class="block-header">
                <h2>Admin X PEKULA</h2>
            </div>
              <?php
                  // widgets
                    $this->load->view('adminxpekula/content/pages/P_widgets.php');

                  // CPU
                    $this->load->view('adminxpekula/content/pages/P_cpu.php');

                  // Visitors
                    $this->load->view('adminxpekula/content/pages/P_visitor.php');

                  // media social
                    $this->load->view('adminxpekula/content/pages/P_media_social.php');

                  // Sold Out TICKETS
                    $this->load->view('adminxpekula/content/pages/P_sold_tickets.php');
               ?>
          </div>

            <div class="row clearfix">
              <?php
                // task Info
                  $this->load->view('adminxpekula/content/pages/P_task_info.php');

                // Use Browser
                  $this->load->view('adminxpekula/content/pages/P_use_browser.php');
              ?>
            </div>
        </div>
    </section>
