    <!-- Navigation -->
    <nav  class="navbar-inverse rojo" role="navigation">
        <div class="container">

          <div class="centrar-margen">
           <?php 
			 $args=array(
			 	'theme_location'=>'primary',
				'menu_class'=>'nav navbar-nav',
			 );
			 
			 wp_nav_menu($args);
			 ?>	
          </div>           
            <!-- /.navbar-collapse -->
              </div>
        <!-- /.container -->
    </nav>


<?php require_once 'slider.php';?>