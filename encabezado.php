    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <?php $telefono1= esc_attr( get_option( 'telefono1' ) ); if(!empty($telefono1)){?>
                <a class="navbar-brand"><img class="telefono" src="<?php echo get_stylesheet_directory_uri(); ?>/img/telefono.png"  >   <?php echo  $telefono1;?></a>
                <?php }$telefono2= esc_attr( get_option( 'telefono2' ) ); if(!empty($telefono2)){?>
                <a class="navbar-brand"><img class="telefono" src="<?php echo get_stylesheet_directory_uri(); ?>/img/telefono.png"  >   <?php echo  $telefono2;?></a>
                <?php }?>            
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
               <ul class="nav navbar-nav navbar-right">  
               <li>
                        <a href="#" class="navbar-brand">Siguenos</a>
                 </li>
               <?php $glink= esc_attr( get_option( 'glink' ) ); if(!empty($glink)){?>            
                 <li>
                        <a href="<?php echo $glink;?>" class="navbar-brand gplus"></a>
                 </li>
                
                   <?php }$ilink= esc_attr( get_option( 'ilink' ) ); if(!empty($ilink)){?>  
                    <li>
                        <a href="<?php echo $ilink;?>" class="navbar-brand face"> </a>
                    </li>
                     <?php }$plink= esc_attr( get_option( 'plink' ) ); if(!empty($plink)){?>  
                    <li>
                        <a href="" class="navbar-brand pint"></a>
                    </li>
                     <?php }$ylink= esc_attr( get_option( 'ylink' ) ); if(!empty($ylink)){?>  
                    <li>
                        <a href="<?php echo $ylink;?>" class="navbar-brand you" ></a>
                    </li>
                      <?php }$flink= esc_attr( get_option( 'flink' ) ); if(!empty($flink)){?>  
                    <li>
                        <a href="<?php echo $flink;?>" class="navbar-brand insta"></a>
                    </li>
                      <?php }?>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
<?php require_once 'logo-menu.php';?>