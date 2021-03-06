<?php
/*
Template Name: Featured distincomer
*/

get_header(); ?>
<!-- contenido -->

<div class="container">
<br><br>
<div class="row">
<div class="col-md-1 col-sm-1"></div>
<div class="col-md-7 col-sm-7 nosotros_info">
<br><br>
 <div class="relative"><h3 class="background-blanco"><?php the_title();?></h3><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/elipse.png">
  <div class="absolute"></div>
</div>
 <?php the_post(); the_content();?>

<div  class="centro"> 
<a  href="#" class="botoninfo rojo">VER VIDEO</a>
 <a  href="#" class="botoninfo azul">CONTÁCTANOS</a>
</div>
 
</div>
<div class="col-md-4 col-sm-4 centrar">
<br><br>
 
 <img class="img-responsive" src="<?php echo get_stylesheet_directory_uri(); ?>/img/casa.png"/>
 
</div>

</div>
<!-- row -->
<br><br><br><br>
</div>
<!-- container-fluid -->
<!-- /.container -->
<div class="container-fluid productos">
<br><br><br>
 <div class="row"> 
<div class="col-md-1"></div>
 <div class="col-md-3">
 <div class="row"><div class="col-md-12 div-menu"> <div class="borde-inferior-rojo"><span class="glyphicon glyphicon-folder-open">&nbsp;CATEGORIAS</span> </div></div></div>



<div class="row">
  <div class="col-md-12 div-menu">
   <ul class="list-group">
<?php
  $args = array(
            "walker"=>new CustomWalker(),
            'hierarchical' => true,
            'depth' => 1,
             'orderby' => 'name',
            'hide_empty'          => 0,
            'hide_title_if_empty' => false,
            'title_li'            => __( '' ),
    );
  wp_list_categories($args); 
?>
</ul>
  </div>
</div>

<br>
<div class="row">
<div class="col-md-12 centrar">
<img  src="<?php echo get_stylesheet_directory_uri(); ?>/img/cristaleria.png">
</div>
</div>
<br><br>
</div>
     
     <div class="col-md-7">
      <div class="row"><div class="col-md-12"><div class="borde-inferior-azul">&nbsp;&nbsp;<img width="14" alt="" src="<?php echo get_stylesheet_directory_uri(); ?>/img/star.png">&nbsp;&nbsp;LO MÁS RECIENTE</div></div></div>
        <!-- Projects Row -->
        <br>
        <div class="row">
            <div class="col-md-4 col-sm-4 productosrecientes">                
            <div class="productoreciente">
                            <div class="imagenproducto"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/p1.png"></div>
                            <div class="tituloproducto">Vajilla Clásica Uva</div>
                            <a href="#" class="botondetalles">VER DETALLES</a>
                   </div>
            </div>
             <div class="col-md-4 col-sm-4 productosrecientes">                
              <div class="productoreciente">
                            <div class="imagenproducto"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/p2.png"></div>
                            <div class="tituloproducto">Juego polka ejecutivo</div>
                            <a href="#" class="botondetalles">VER DETALLES</a>
                   </div>
            </div>
            <div class="col-md-4 col-sm-4 productosrecientes">
             <div class="productoreciente">
                            <div class="imagenproducto"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/p3.png"></div>
                            <div class="tituloproducto">Cacerola ovalada con tapa </div>
                            <a href="#" class="botondetalles">VER DETALLES</a>
                   </div>
               </div>
        </div>
            <div class="row">
            <div class="col-md-4 col-sm-4 productosrecientes">                
                <div class="productoreciente">
                            <div class="imagenproducto"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/p4.png"></div>
                            <div class="tituloproducto">Bandeja rectangular grande </div>
                            <a href="#" class="botondetalles">VER DETALLES</a>
                   </div>
            </div>
               <div class="col-md-4 col-sm-4 productosrecientes">                
                   <div class="productoreciente">
                            <div class="imagenproducto"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/p5.png"></div>
                            <div class="tituloproducto">Saleros Astro</div>
                            <a href="#" class="botondetalles">VER DETALLES</a>
                   </div>
            </div>
               <div class="col-md-4 col-sm-4 productosrecientes">                
                   <div class="productoreciente">
                            <div class="imagenproducto"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/p6.png"></div>
                            <div class="tituloproducto">Charola banana Split</div>
                            <a href="#" class="botondetalles">VER DETALLES</a>
                   </div>
        </div>      
     </div>
 <div class="col-md-1"></div>
 </div>
 <br><br>
</div>
</div>

<?php get_footer(); ?>