<div class="container-fluid azul">

 <!-- Footer -->
        <footer class="oxigen">
            <div class="row">
                <div class="col-lg-1"></div>
                 <div class="col-lg-2">
                <div class="row">
                <div class="col-sm-12 img-centro"> 
                    <img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/logofooter.png">
                </div>
                <div class="col-sm-12 img-centro">
                <br>
                 <h4><b class="montserrat">SUSCRÍBETE</b></h4>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/suscribetelinea.png" width="100%">
                </div>
                <div class="col-sm-12">
                <div class="row"> 
  <div class="col-md-12">
  <br>
    <div class="input-group">
      <input id="buttondropdown" name="buttondropdown" class="form-control" type="text">
      <div class="input-group-btn">
        <button type="button" class="btn btn-danger rojo" data-toggle="dropdown">
         <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/buscarfooter.png" width="20">         
        </button>
       
      </div>
    </div>
  </div>
 
</div>
                </div>
                </div>
                </div>
                 <div class="col-lg-5">
                  <div class="row">
                  <div class="col-sm-12">
                  <div class="contacto_footer"><h4 class="montserrat">CONTÁCTANOS</h4>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/suscribetelinea.png" width="100%">
					<br>
				

					<div class="direcciones_footer footer-borde">
					<div class="titulo_direcciones"><h4 class="montserrat">DIRECCIÓN:</h4></div>
						<div class="direccionf"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iconolocalizacion.png" width="13"><span><?php echo esc_attr( get_option( 'direccion_dir' ) );?></span></div>
	<div class="telefonof"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iconotelefono.png" width="18"><span><?php echo esc_attr( get_option( 'direccion_tel' ) );?></span></div>				
					</div>

					<div class="direcciones_footer footer-borde">
					<div class="titulo_direcciones"><h4 class="montserrat">SÁLA DE VENTAS:</h4></div>
						<div class="direccionf"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iconolocalizacion.png" width="13"><span><?php echo esc_attr( get_option( 'sala_dir' ) );?></span></div>
	<div class="telefonof"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iconotelefono.png" width="18"><span><?php echo esc_attr( get_option( 'sala_tel' ) );?> </span></div>
				
					</div>

					<div class="direcciones_footer">
					<div class="titulo_direcciones"><h4 class="montserrat">COMERCIALIZACIÓN:</h4></div>
						<div class="direccionf"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iconolocalizacion.png" width="13"><span><?php echo esc_attr( get_option( 'comer_dir' ) );?></span></div>
	<div class="telefonof"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/iconotelefono.png" width="18"><span><?php echo esc_attr( get_option( 'comer_tel' ) );?></span></div>				
					</div>
					</div>
                  </div>

                  </div>
                </div>
                 <div class="col-lg-3">
                   <div class="row">
                   <div class="col-sm-12">
                   <div class="redes_footer">
				<div class="contacto_footer"><h4 class="montserrat">HAZTE FAN EN:</h4>
					<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/linearedes.png" width="100%">
					<br></div>
				<?php ?>	
				 <?php $glink= esc_attr( get_option( 'glink' ) ); if(!empty($glink)){?>            
                
                        <a href="<?php echo $glink;?>" class="gplus block"><?php echo esc_attr( get_option( 'google' ) );?></a>
                
                
                   <?php }$ilink= esc_attr( get_option( 'ilink' ) ); if(!empty($ilink)){?>  
                   
                        <a href="<?php echo $ilink;?>" class="face block"><?php echo esc_attr( get_option( 'facebook' ) );?> </a>
                    
                     <?php }$plink= esc_attr( get_option( 'plink' ) ); if(!empty($plink)){?>  
                    
                        <a href="" class="block pint"><?php echo esc_attr( get_option( 'pinterest' ) );?></a>
                   
                     <?php }$ylink= esc_attr( get_option( 'ylink' ) ); if(!empty($ylink)){?>  
                    
                        <a href="<?php echo $ylink;?>" class="you block" ><?php echo esc_attr( get_option( 'youtube' ) );?></a>
                  
                      <?php }$flink= esc_attr( get_option( 'flink' ) ); if(!empty($flink)){?>  
                   
                        <a href="<?php echo $flink;?>" class="insta block"><?php echo esc_attr( get_option( 'instagram' ) );?></a>
                 
                      <?php }?>
		</div>
                   </div>
                   </div> 
                </div>
 <div class="col-lg-1"></div>
            </div>
        </footer>
 
</div>
 <div class="creditos_footer">Copyright © 2015 - Distincomer - Todos los derechos reservados. Hecho por  Ziogama.com</div>
    <!-- jQuery -->
  <?php wp_footer(); ?>

   
    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    });
    $('#slider1').tinycarousel();
    </script>

</body>

</html>
