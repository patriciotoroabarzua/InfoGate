<?php 


/*if (!is_admin()) {
        wp_deregister_script('jquery');
        wp_register_script('jquery', ("https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"), false, '1.11.3');
        wp_enqueue_script('jquery');
}*/





register_nav_menu('primary' , 'Menú Principal');
add_image_size('circle-size',100,100,true);
if(!function_exists("rename_url")){
	function rename_url($url){
		/* COMENTAR ESTO EN PRODUCCION - INICIO */
		$parse=parse_url($url);
		$url = "http://infogate.cl".$parse["path"];
		/* COMENTAR ESTO EN PRODUCCION - FIN */
		echo $url;
	}
}






function post_type_opinion() {
		
	register_post_type('opinion',
	    array(
	    'labels' => array(
	        'name'               => _x( 'Opinión', 'post type general name' ),
			'singular_name'      => _x( 'Opinión', 'post type singular name' ),
			'menu_name'          => _x( 'Opinión', 'admin menu' ),
			'name_admin_bar'     => _x( 'Opinión', 'add new on admin bar' ),
			'add_new'            => _x( 'Agregar Nueva', 'Opinión' ),
			'add_new_item'       => __( 'Agregar Nueva Opinión' ),
			'new_item'           => __( 'Nueva Opinión' ),
			'edit_item'          => __( 'Editar Opinión' ),
			'view_item'          => __( 'Ver Opinión' ),
			'all_items'          => __( 'Todas las opiniones' ),
			'search_items'       => __( 'Buscar Opinión' ),
			'parent_item_colon'  => __( 'Opinión:' ),
			'not_found'          => __( 'No se han encontrado opiniones.' ),
			'not_found_in_trash' => __( 'No hay opiniones en la Papelera.' )
	        ),
	  'public' => true,
	  'has_archive' => true,
	  'rewrite' => array( 'slug' => 'opinion' ),
	        'exclude_from_search' => true,
	        'hierarchical' => true,
	        'supports' => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
	        'query_var' => true
	        )
	  );
	}
	add_action('init', 'post_type_opinion');
?>