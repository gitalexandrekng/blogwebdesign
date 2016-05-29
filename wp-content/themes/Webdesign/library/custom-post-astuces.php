<?php
function astuces_posts_type(){
  $labels_astuces_post_type_array = array(
            'name'                  =>  __('Astuces', 'munterlinden'),
            'singular_name'         =>  __('Astuces', 'munterlinden'),
            'add_new'               =>  __('Ajouter une astuce', 'munterlinden'),
            'add_new_item'          =>  __('Ajouter une astuce', 'munterlinden'),
            'edit_item'             =>  __('Editer l\'astuce', 'munterlinden'),
            'new_item'              =>  __('Nouvelle astuce', 'munterlinden'),
            'view_item'             =>  __('Visualiser l\'astuce', 'munterlinden'),
            'search_items'          =>  __('Rechercher une astuce', 'munterlinden'),
            'not_found'             =>  __('Aucune astuce', 'munterlinden'),
            'not_found_in_trash'    =>  __('Aucune astuce dans la corbeille', 'munterlinden'),
            'parent_item_colon'     =>  __('--', 'munterlinden'),
            'menu_name'             =>  __('Astuces', 'munterlinden')
        );
        $supports_astuces_post_type_array = array(
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'comments',
            'revisions'
        );
        $rewrite_astuces_post_type_array = array(
            'slug'          =>  _x('astuces', 'Pour les collections', 'foundationpress'),
            'with_front'    =>  false,
            'feeds'         =>  true,
            'pages'         =>  true
        );
        $args_astuces_post_type_array = array(
            'labels'                =>  $labels_astuces_post_type_array,
            'description'           =>  __('Contenu complet Projets', 'munterlinden'),
            'public'                =>  true,
            'publicly_queryable'    =>  true,
            'menu_position'         =>  50,
            'menu_icon'             =>  '',
            'capability_type'       =>  'post',
            'supports'              =>  $supports_astuces_post_type_array,
            'rewrite'               =>  $rewrite_astuces_post_type_array,
            'show_in_nav_menus'     =>  true,
            'hierarchical'          =>  true,
            'has_archive'           =>  true
        );
        register_post_type('astuces', $args_astuces_post_type_array);

        $labels_serie = array(
		'name'              => _x('Catégorie', 'taxonomy general name'),
		'singular_name'     => _x('Catégorie', 'taxonomy singular name'),
		'search_items'      => __('Rechercher une catégorie'),
		'all_items'         => __('Toutes les catégories'),
		'edit_item'         => __('Éditer une catégories'),
		'update_item'       => __('Mettre à jour une catégorie'),
		'add_new_item'      => __('Ajouter une catégorie'),
		'new_item_name'     => __('Nouvelle catégorie'),
		'menu_name'         => __('Catégories'),
    	);

    	// register taxonomy
    	register_taxonomy( 'astuces', 'astuces', array(
    		'hierarchical' => true,
    		'labels' => $labels_serie,
    		'query_var' => true,
    		'show_admin_column' => true,
        'rewrite' => 'slug'
    	) );

      }

      add_action('init','astuces_posts_type', 1);
