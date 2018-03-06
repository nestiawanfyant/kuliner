

      <section class="section_navbar">
        <nav class=" white z-depth-2 padding-40px heigth-nav">
         <div class="nav-wrapper">
           <a href="<?php echo base_url('home') ?>" class="brand-logo patua-one">PEKULA</a>
           <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons" style="color:#616161;">menu</i></a>
           <ul class="right hide-on-med-and-down">
             <li><a href="<?php echo base_url(''); ?>">Home</a></li>
             <li><a href="<?php echo base_url(''); ?>">Restaurant</a></li>
             <li><a href="<?php echo base_url(''); ?>">Contact-Us</a></li>
             <li><a class="waves-effect waves-light btn modal-trigger" href="#login">Login</a></li>
             <li><a href="<?php echo base_url('home/register') ?>" class="waves-effect waves-light btn-1">Sign Up</a></li>
           </ul>
         </div>
       </nav>

       <ul class="sidenav" id="mobile-demo">
         <li><a href="<?php echo base_url(''); ?>">Home</a></li>
         <li><a href="<?php echo base_url(''); ?>">Restaurant</a></li>
         <li><a href="<?php echo base_url(''); ?>">Contact-Us</a></li>
         <li class="divider"></li>
         <li><a href="#login">Login</a></li>
         <li><a href="<?php echo base_url('home/register'); ?>">Register</a></li>
       </ul>
      </section>
