<?php

/*
*INICIO
*/

/*------------------------------------------------------------------
SOPORTE PARA Featured image
-----------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );
/*------------------------------------------------------------------
adminstrador del tema
-----------------------------------------------------------------*/

/**
 * Required: set 'ot_theme_mode' filter to true.
 */
add_filter( 'ot_theme_mode', '__return_true' );

/**
 * Required: include OptionTree.
 */
require( trailingslashit( get_template_directory() ) . 'option-tree/ot-loader.php' );



/*
*FIN
*/



function css_resources(){	
	wp_register_style( 'bootstrap', get_stylesheet_directory_uri().'/css/bootstrap.min.css' );
	wp_enqueue_style('bootstrap');
	wp_register_style( 'bussines', get_stylesheet_directory_uri().'/css/modern-business.css' );
	wp_enqueue_style('bussines');
	wp_register_style( 'style', get_stylesheet_uri());
	wp_enqueue_style('style');
	wp_register_style( 'fonts', get_stylesheet_directory_uri().'/css/font.css');
	wp_enqueue_style('fonts');
	wp_register_style( 'nuevo', get_stylesheet_directory_uri().'/css/nuevo.css');
	wp_enqueue_style('nuevo');
	
	wp_register_style( 'tiny', get_stylesheet_directory_uri().'/css/tinycarousel.css');
	wp_enqueue_style('tiny');
	wp_register_style( 'gall', get_template_directory_uri().'/css/gall.css');
	wp_enqueue_style('gall');
	
	wp_enqueue_script( 'jquerys', get_template_directory_uri() . '/js/jquery.js',array(),'',true );
	wp_enqueue_script( 'bootstrapmin', get_template_directory_uri() . '/js/bootstrap.min.js.', array( 'jquerys' ),'',true );
	wp_enqueue_script( 'nuvos', get_template_directory_uri() . '/js/jquery.tinycarousel.js', array( 'jquerys' ),'',true  );


}

add_action('wp_enqueue_scripts','css_resources');
 

//navegacion menu

register_nav_menus(array(
	'primary'=> __('Menu Principal')
));

/**
 * para ir agregando lo de los telefonos 
 */
function telefono_red(){
	add_menu_page('Distincomer', 'Distincomer', 'manage_options', 'tema_distincomer','menu_telefonos',
		get_template_directory_uri().'/img/telefono1.png',110);
	add_submenu_page('tema_distincomer', 'Telefonos y Redes', 'Telefonos y Redes Sociales','manage_options',
	 'telefono_red','redes_sociales');
	add_action('admin_init','distincomer_custom_settings');
}
add_action('admin_menu','telefono_red');
/**
 * para las opciones personalizadas
 */
function distincomer_custom_settings(){
	register_setting('telefono_red', 'telefono1');	
	register_setting('telefono_red', 'telefono2');
	register_setting('telefono_red', 'facebook');
	register_setting('telefono_red', 'flink');
	register_setting('telefono_red', 'instagram');
	register_setting('telefono_red', 'ilink');
	register_setting('telefono_red', 'google');
	register_setting('telefono_red', 'glink');
	register_setting('telefono_red', 'youtube');
	register_setting('telefono_red', 'ylink');
	register_setting('telefono_red', 'pinterest');
	register_setting('telefono_red', 'plink');
	add_settings_section('distincomer-sidebar-options', 'Telefonos y Redes Sociales', 'distincomer_sidebar_options', 'telefono_red');
	add_settings_field('sidebar-telefono1', 'Telefono #1', 'telefono_1', 'telefono_red','distincomer-sidebar-options');
	add_settings_field('sidebar-telefono2', 'Telefono #2', 'telefono_2', 'telefono_red','distincomer-sidebar-options');
	add_settings_field('sidebar-facebook', 'Facebook', 'facebook', 'telefono_red','distincomer-sidebar-options');
	add_settings_field('sidebar-instagram', 'Instagram', 'instagram', 'telefono_red','distincomer-sidebar-options');
	add_settings_field('sidebar-google', 'Google', 'google', 'telefono_red','distincomer-sidebar-options');
	add_settings_field('sidebar-pinterest', 'Pinterest', 'pinterest', 'telefono_red','distincomer-sidebar-options');
	add_settings_field('sidebar-youtube', 'youtube', 'youtube', 'telefono_red','distincomer-sidebar-options');
	
	/*
	 * para la informaciondel footer
	 */
	register_setting('footer', 'direccion_dir');
	register_setting('footer', 'direccion_tel');
	register_setting('footer', 'sala_dir');
	register_setting('footer', 'sala_tel');
	register_setting('footer', 'comer_dir');
	register_setting('footer', 'comer_tel');
	add_settings_section('distincomer-footer-options', 'Datos Pie de Página', 'distincomer_footer_opctions', 'tema_distincomer');
	add_settings_field('footer-direccion_dir', 'DIRECCIÓN', 'direccion_dir', 'tema_distincomer','distincomer-footer-options');
	add_settings_field('footer-sala_dir', 'SÁLA DE VENTAS', 'sala_dir', 'tema_distincomer','distincomer-footer-options');
	add_settings_field('footer-comer_dir', 'COMERCIALIZACIÓN:', 'comer_dir', 'tema_distincomer','distincomer-footer-options');
	
}
function menu_telefonos(){
	require_once  get_template_directory().'/plantillas/footer.php';
}

function redes_sociales(){
 
	require_once get_template_directory().'/plantillas/telefonos.php';
}

function distincomer_sidebar_options(){
	echo '<h3>Datos de Telefonos encabezado y Redes Sociales</h3>';
}

function telefono_1(){
	$telefono1=esc_attr( get_option( 'telefono1' ) );
	echo  '<input name="telefono1" placeholder="0000-0000" value="'.$telefono1.'"/>';
}
function telefono_2(){
	$telefono2=esc_attr( get_option( 'telefono2' ) );
	echo  '<input name="telefono2" placeholder="0000-0000" value="'.$telefono2.'"/>';
}
function facebook(){
	$facebook=esc_attr( get_option( 'facebook' ) );
	$flink=esc_attr( get_option( 'flink' ) );
	echo  '<input name="facebook" placeholder="Texto" value="'.$facebook.'"/>'.
	'<label> Link: </label><input name="flink" placeholder="Dirección de Facebook" value="'.$flink.'"/>';
}
function instagram(){
	$instagram=esc_attr( get_option( 'instagram' ) );
	$ilink=esc_attr( get_option( 'ilink' ) );
	echo  '<input name="instagram" placeholder="Texto" value="'.$instagram.'"/>'.
			'<label> Link: </label><input name="ilink" placeholder="Dirección de instagram" value="'.$ilink.'"/>';
}
function google(){
	$google=esc_attr( get_option( 'google' ) );
	$glink=esc_attr( get_option( 'glink' ) );
	echo  '<input name="google" placeholder="Texto" value="'.$google.'"/>'.
			'<label> Link: </label><input name="glink" placeholder="Dirección de google+" value="'.$glink.'"/>';
}
function pinterest(){
	$pinterest=esc_attr( get_option( 'pinterest' ) );
	$plink=esc_attr( get_option( 'plink' ) );
	echo  '<input name="pinterest" placeholder="Texto" value="'.$pinterest.'"/>'.
			'<label> Link: </label><input name="plink" placeholder="Dirección de pinterest" value="'.$plink.'"/>';
}
function youtube(){
	$youtube=esc_attr( get_option( 'youtube' ) );
	$ylink=esc_attr( get_option( 'ylink' ) );
	echo  '<input name="youtube" placeholder="Texto" value="'.$youtube.'"/>'.
			'<label> Link: </label><input name="ylink" placeholder="Dirección de youtube" value="'.$ylink.'"/>';
}
/**
 * para el footer
 */
function distincomer_footer_opctions(){
	echo '<h3>Direcciones y números de teléfonos</h3>';
}
/**
 * funciones para las opciones del pie de pagina
 */
function direccion_dir(){
	$direccion_dir=esc_attr( get_option( 'direccion_dir' ) );
	$direccion_tel=esc_attr( get_option( 'direccion_tel' ) );
	echo  '<input name="direccion_dir" size="50" placeholder="Direccion" value="'.$direccion_dir.'"/>'.
			'<label> Telefono </label><input name="direccion_tel" placeholder="Telefono" value="'.$direccion_tel.'"/>';
}
function sala_dir(){
	$sala_dir=esc_attr( get_option( 'sala_dir' ) );
	$sala_tel=esc_attr( get_option( 'sala_tel' ) );
	echo  '<input name="sala_dir"  size="50" placeholder="Direccion" value="'.$sala_dir.'"/>'.
			'<label> Telefono </label><input name="sala_tel" placeholder="Telefono" value="'.$sala_tel.'"/>';
}
function comer_dir(){
	$comer_dir=esc_attr( get_option( 'comer_dir' ) );
	$comer_tel=esc_attr( get_option( 'comer_tel' ) );
	echo  '<input name="comer_dir" size="50" placeholder="Direccion" value="'.$comer_dir.'"/>'.
			'<label> Telefono </label><input name="comer_tel" placeholder="Telefono" value="'.$comer_tel.'"/>';
}



/*custom walker for replace custom wordpress clases in a categories list*/

	class CustomWalker extends Walker_Category {


		function start_lvl(&$output, $depth=1, $args=array()) {  
			$output .= "\n<ul class=\"list-group\">\n";  
		}  

		function end_lvl(&$output, $depth=0, $args=array()) {  
			$output .= "</ul>\n";  
		}  

	
		function start_el(&$output, $item, $depth=0, $args=array()) {  
			$aImages = array(
'Cristalería'=>"/img/icon-cristaleria.png",
'Cristaleria'=>"/img/icon-cristaleria.png",
'Sin categoría'=>"/img/icon-cristaleria.png",
'Sin categoria'=>"/img/icon-cristaleria.png",
'Vasos'=>"/img/Vasos.png",
'Juegos'=>"/img/juegos.png",
'Bar'=>"/img/bar.png",
'Tequileros'=>"/img/tequileros.png",
'Floreros'=>"/img/floreros.png",
'Envases'=>"/img/envases.png",
'Envase'=>"/img/envases.png",
'Tapaderas'=>"/img/tapaderas.png",
'Tapas'=>"/img/tapaderas.png",
	 );

			$output .= "\n<li class='list-group-item'>"
			."<a href='"
			.get_site_url()
			."/"
			.$item->slug
			."'>"
			."<img width='32' alt='' src='"
			.get_stylesheet_directory_uri().$aImages [esc_attr($item->name)]
			."'>"
			.esc_attr($item->name)
			."</a>";
		}  

		function end_el(&$output, $item, $depth=0, $args=array()) {  
			$output .= "<span class='glyphicon glyphicon-triangle-right pull-right'></span> </li>\n";  
		}  
	}  
add_theme_support( 'post-thumbnails' );

add_action('init', 'post_type_producto');

	function post_type_producto() {
	$labels = array(
		'name' => __( 'Productos' ),
		'singular_name' => __( 'Productos' ),
		'add_new' => __( 'Añadir nuevo' ),
		'add_new_item' => __( 'Añadir nuevo producto' ),
		'edit' => __( 'Editar' ),
		'edit_item' => __( 'Editar producto' ),
		'new_item' => __( 'Nuevo producto' ),
		'view' => __( 'Ver producto' ),
		'view_item' => __( 'Ver producto' ),
		'search_items' => __( 'Buscar producto' ),
		'not_found' => __( 'No se han encontrado productos' ),
		'not_found_in_trash' => __( 'No se han encontrado productos en la papelera' ),
		'parent' => __( 'Producto predecesor' )
	);
 
	$supports =  array( 
		'title', 
		'editor', 
		'thumbnail', 
		'custom-fields', 
		'revisions' 
	);
 
	$args =  array( 
		'labels' => $labels,
		'public' => true, 
		'show_ui' => true,
		'exclude_from_search' => false,
		'menu_position' => 5,
		'menu_icon' => get_bloginfo('template_url').'/images/icon-press.png',
		'show_in_admin_bar' => true,
		'supports' => $supports,
		'has_archive' => true
	);
 
	register_post_type( 'producto', $args );
	flush_rewrite_rules();
}


function my_taxonomies_product() {
  $labels = array(
    'name'              => _x( 'Categoría Producto', 'taxonomy general name' ),
    'singular_name'     => _x( 'Categoría Producto', 'taxonomy singular name' ),
    'search_items'      => __( 'Buscar Categoría' ),
    'all_items'         => __( 'Todas las Categorías' ),
    'parent_item'       => __( 'Parent Product Category' ),
    'parent_item_colon' => __( 'Parent Product Category:' ),
    'edit_item'         => __( 'Editar Categoría' ), 
    'update_item'       => __( 'Actualizar Categoría' ),
    'add_new_item'      => __( 'Agregar nueva Categoría' ),
    'new_item_name'     => __( 'Nueva Categoría' ),
    'menu_name'         => __( 'Categoría Productos' ),
  );
  $args = array(
    'labels' => $labels,
    'hierarchical' => true,
  );
  register_taxonomy( 'product_category', 'producto', $args );
}
add_action( 'init', 'my_taxonomies_product', 0 );



add_action('init', 'post_type_quienessomos');

	function post_type_quienessomos() {
	$labels = array(
		'name' => __( 'Quienes Somos' ),
		'singular_name' => __( 'Quienes-somos' ),
		'add_new' => __( 'Añadir nuevo' ),
		'add_new_item' => __( 'Añadir nuevo Quienes Somos' ),
		'edit' => __( 'Editar' ),
		'edit_item' => __( 'Editar Quienes Somos' ),
		'new_item' => __( 'Nuevo Quienes Somos' ),
		'view' => __( 'Ver Quienes Somos' ),
		'view_item' => __( 'Ver Quienes Somos' ),
		'search_items' => __( 'Buscar Quienes Somos' ),
		'not_found' => __( 'No se han encontrado productos' ),
		'not_found_in_trash' => __( 'No se han encontrado información en la papelera' ),
		'parent' => __( 'Quienes Somos predecesor' )
	);
 
	$supports =  array( 
		'title', 
		'editor', 
		'thumbnail', 
		'custom-fields', 
		'revisions' 
	);
 
	$args =  array( 
		'labels' => $labels,
		'public' => true, 
		'show_ui' => true,
		'exclude_from_search' => false,
		'menu_position' => 5,
		'menu_icon' => get_bloginfo('template_url').'/images/icon-press.png',
		'show_in_admin_bar' => true,
		'supports' => $supports,
		'has_archive' => true
	);
 
	register_post_type( 'quienessomos', $args );
	flush_rewrite_rules();
}

?>