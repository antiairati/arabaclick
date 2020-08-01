<?php


// TALLERES Custom Post Type
add_action( 'init', 'wpn_talleres', 0 );
function wpn_talleres() {

	$labels = array(
		'name'                  => _x( 'Talleres', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Taller', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Talleres', 'text_domain' ),
		'name_admin_bar'        => __( 'Talleres', 'text_domain' ),
		'archives'              => __( 'Archivo de talleres', 'text_domain' ),
		'attributes'            => __( 'Atributo de talleres', 'text_domain' ),
		'parent_item_colon'     => __( 'Taller padre', 'text_domain' ),
		'all_items'             => __( 'Todos los talleres', 'text_domain' ),
		'add_new_item'          => __( 'Añadir nuevo taller', 'text_domain' ),
		'add_new'               => __( 'Añadir Nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo Taller', 'text_domain' ),
		'edit_item'             => __( 'Editar Taller', 'text_domain' ),
		'update_item'           => __( 'Actualizar Taller', 'text_domain' ),
		'view_item'             => __( 'Ver taller', 'text_domain' ),
		'view_items'            => __( 'Ver talleres', 'text_domain' ),
		'search_items'          => __( 'Buscar taller', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Configurar Imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Borrar Imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como Imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el Taller', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizar este taller', 'text_domain' ),
		'items_list'            => __( 'Lista de talleres', 'text_domain' ),
		'items_list_navigation' => __( 'Lista navegable de talleres', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro de lista de talleres', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Taller', 'text_domain' ),
		'description'           => __( 'Talleres de Arabaclick', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-admin-customizer',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'talleres', $args );
}



// EXPOSICIONES Custom Post Type
add_action( 'init', 'wpn_exposiciones', 0 );
function wpn_exposiciones() {

	$labels = array(
		'name'                  => _x( 'Exposiciones', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Exposición', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Exposiciones', 'text_domain' ),
		'name_admin_bar'        => __( 'Exposiciones', 'text_domain' ),
		'archives'              => __( 'Archivo Exposiciones', 'text_domain' ),
		'attributes'            => __( 'Atributo Exposiciones', 'text_domain' ),
		'parent_item_colon'     => __( 'Exposición padre', 'text_domain' ),
		'all_items'             => __( 'Todas las Exposiciones', 'text_domain' ),
		'add_new_item'          => __( 'Añadir Nueva Exposiciones', 'text_domain' ),
		'add_new'               => __( 'Añadir Nuevo', 'text_domain' ),
		'new_item'              => __( 'Nueva Exposición', 'text_domain' ),
		'edit_item'             => __( 'Editar Exposición', 'text_domain' ),
		'update_item'           => __( 'Actualizar Exposición', 'text_domain' ),
		'view_item'             => __( 'Ver Exposición', 'text_domain' ),
		'view_items'            => __( 'Ver Exposiciones', 'text_domain' ),
		'search_items'          => __( 'Buscar Exposición', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Configurar Imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Borrar Imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como Imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en Exposición', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizar en esta Exposición', 'text_domain' ),
		'items_list'            => __( 'Lista de Exposiciones', 'text_domain' ),
		'items_list_navigation' => __( 'Lista navegable de Exposiciones', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro de lista de Exposiciones', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Exposición', 'text_domain' ),
		'description'           => __( 'Exposiciones de Arabaclick', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-tickets-alt',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'exposiciones', $args );
}


// PATROCINADORES Custom Post Type
add_action( 'init', 'wpn_patrocinadores', 0 );
function wpn_patrocinadores() {

	$labels = array(
		'name'                  => _x( 'patrocinadores', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'patrocinador', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Patrocinadores', 'text_domain' ),
		'name_admin_bar'        => __( 'Patrocinadores', 'text_domain' ),
		'archives'              => __( 'Archivo de Patrocinadores', 'text_domain' ),
		'attributes'            => __( 'Atributos de Patrocinadores', 'text_domain' ),
		'parent_item_colon'     => __( 'Patrocinador padre', 'text_domain' ),
		'all_items'             => __( 'Todos los Patrocinadores', 'text_domain' ),
		'add_new_item'          => __( 'Añade Nuevo Patrocinador', 'text_domain' ),
		'add_new'               => __( 'Añade nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo Patrocinador', 'text_domain' ),
		'edit_item'             => __( 'Editar Patrocinador', 'text_domain' ),
		'update_item'           => __( 'Actualizar Patrocinador', 'text_domain' ),
		'view_item'             => __( 'Ver Patrocinador', 'text_domain' ),
		'view_items'            => __( 'Ver Patrocinadores', 'text_domain' ),
		'search_items'          => __( 'Buscar Patrocinador', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Configurar Imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Borrar Imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como Imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el Patrocinador', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizar en este Patrocinador', 'text_domain' ),
		'items_list'            => __( 'Lista de Patrocinadores', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de navegación de Patrocinadores', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro de lista de Patrocinadores', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'patrocinador', 'text_domain' ),
		'description'           => __( 'Entradas de patrocinadores', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-awards',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'patrocinadores', $args );
}

// COLABORADORES Custom Post Type
add_action( 'init', 'wpn_colaboradores', 0 );
function wpn_colaboradores() {

	$labels = array(
		'name'                  => _x( 'Colaboradores', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'Colaborador', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Colaboradores', 'text_domain' ),
		'name_admin_bar'        => __( 'Colaboradores', 'text_domain' ),
		'archives'              => __( 'Archivo de Colaboradores', 'text_domain' ),
		'attributes'            => __( 'Atributo de Colaborador', 'text_domain' ),
		'parent_item_colon'     => __( 'Colaborador padre', 'text_domain' ),
		'all_items'             => __( 'Todos los Colaboradores', 'text_domain' ),
		'add_new_item'          => __( 'Añadir nuevo Colaborador', 'text_domain' ),
		'add_new'               => __( 'Añadir Nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo Colaborador', 'text_domain' ),
		'edit_item'             => __( 'Editar Colaborador', 'text_domain' ),
		'update_item'           => __( 'Actualizar Colaborador', 'text_domain' ),
		'view_item'             => __( 'Ver Colaborador', 'text_domain' ),
		'view_items'            => __( 'Ver Colaboradores', 'text_domain' ),
		'search_items'          => __( 'Buscar Colaboradores', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Configurar Imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Borrar Imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como Imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Insertar en el Colaborador', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizar en este Colaborador', 'text_domain' ),
		'items_list'            => __( 'Listado de Colaboradores', 'text_domain' ),
		'items_list_navigation' => __( 'Lista navegable de Colaboradores', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro de lista de Colaboradores', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'Colaborador', 'text_domain' ),
		'description'           => __( 'Colaboradores de Arabaclick', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail', 'custom-fields' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-rest-api',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'colaboradores', $args );
}

// SOCIOS Custom Post Type
add_action( 'init', 'wpn_socios', 0 );
function wpn_socios() {

	$labels = array(
		'name'                  => _x( 'socios', 'Post Type General Name', 'text_domain' ),
		'singular_name'         => _x( 'socio', 'Post Type Singular Name', 'text_domain' ),
		'menu_name'             => __( 'Socios', 'text_domain' ),
		'name_admin_bar'        => __( 'Socios', 'text_domain' ),
		'archives'              => __( 'Archivos de Socios', 'text_domain' ),
		'attributes'            => __( 'Atributos de Socios', 'text_domain' ),
		'parent_item_colon'     => __( 'Socio padre', 'text_domain' ),
		'all_items'             => __( 'Todos los Socios', 'text_domain' ),
		'add_new_item'          => __( 'Añadir nuevo Socio', 'text_domain' ),
		'add_new'               => __( 'Añadir nuevo', 'text_domain' ),
		'new_item'              => __( 'Nuevo Socio', 'text_domain' ),
		'edit_item'             => __( 'Editar Socio', 'text_domain' ),
		'update_item'           => __( 'Actualizar Socio', 'text_domain' ),
		'view_item'             => __( 'Ver Socio', 'text_domain' ),
		'view_items'            => __( 'Ver Socios', 'text_domain' ),
		'search_items'          => __( 'Buscar Socio', 'text_domain' ),
		'not_found'             => __( 'No encontrado', 'text_domain' ),
		'not_found_in_trash'    => __( 'No encontrado en la papelera', 'text_domain' ),
		'featured_image'        => __( 'Imagen destacada', 'text_domain' ),
		'set_featured_image'    => __( 'Configurar Imagen destacada', 'text_domain' ),
		'remove_featured_image' => __( 'Borrar Imagen destacada', 'text_domain' ),
		'use_featured_image'    => __( 'Usar como Imagen destacada', 'text_domain' ),
		'insert_into_item'      => __( 'Instertar en Socio', 'text_domain' ),
		'uploaded_to_this_item' => __( 'Actualizar este Socio', 'text_domain' ),
		'items_list'            => __( 'Lista de Socios', 'text_domain' ),
		'items_list_navigation' => __( 'Lista de navegación de Socios', 'text_domain' ),
		'filter_items_list'     => __( 'Filtro de lista de Socios', 'text_domain' ),
	);
	$args = array(
		'label'                 => __( 'socio', 'text_domain' ),
		'description'           => __( 'Entradas de socios', 'text_domain' ),
		'labels'                => $labels,
		'supports'              => array( 'title', 'editor', 'thumbnail' ),
		'taxonomies'            => array( 'category', 'post_tag' ),
		'hierarchical'          => false,
		'public'                => true,
		'show_ui'               => true,
		'show_in_menu'          => true,
		'menu_position'         => 5,
		'menu_icon'             => 'dashicons-groups',
		'show_in_admin_bar'     => true,
		'show_in_nav_menus'     => true,
		'can_export'            => true,
		'has_archive'           => true,
		'exclude_from_search'   => false,
		'publicly_queryable'    => true,
		'capability_type'       => 'page',
	);
	register_post_type( 'socios', $args );
}
