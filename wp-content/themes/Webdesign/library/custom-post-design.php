<?php
function design_posts_type(){
  $labels_design_post_type_array = array(
            'name'                  =>  __('design', 'munterlinden'),
            'singular_name'         =>  __('design', 'munterlinden'),
            'add_new'               =>  __('Ajouter une astuce', 'munterlinden'),
            'add_new_item'          =>  __('Ajouter une astuce', 'munterlinden'),
            'edit_item'             =>  __('Editer l\'astuce', 'munterlinden'),
            'new_item'              =>  __('Nouvelle astuce', 'munterlinden'),
            'view_item'             =>  __('Visualiser l\'astuce', 'munterlinden'),
            'search_items'          =>  __('Rechercher une astuce design', 'munterlinden'),
            'not_found'             =>  __('Aucune astuce', 'munterlinden'),
            'not_found_in_trash'    =>  __('Aucune astuce dans la corbeille', 'munterlinden'),
            'parent_item_colon'     =>  __('--', 'munterlinden'),
            'menu_name'             =>  __('Design', 'munterlinden')
        );
        $supports_design_post_type_array = array(
            'title',
            'editor',
            'thumbnail',
            'excerpt',
            'comments',
            'revisions'
        );
        $rewrite_design_post_type_array = array(
            'slug'          =>  _x('design', 'Pour les collections', 'foundationpress'),
            'with_front'    =>  false,
            'feeds'         =>  true,
            'pages'         =>  true
        );
        $args_design_post_type_array = array(
            'labels'                =>  $labels_design_post_type_array,
            'description'           =>  __('Contenu complet Projets', 'munterlinden'),
            'public'                =>  true,
            'publicly_queryable'    =>  true,
            'menu_position'         =>  50,
            'menu_icon'             =>  '',
            'capability_type'       =>  'post',
            'supports'              =>  $supports_design_post_type_array,
            'rewrite'               =>  $rewrite_design_post_type_array,
            'show_in_nav_menus'     =>  true,
            'hierarchical'          =>  true,
            'has_archive'           =>  true
        );
        register_post_type('design', $args_design_post_type_array);

        $labels_dis = array(
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
    	register_taxonomy( 'design', 'design', array(
    		'hierarchical' => true,
    		'labels' => $labels_dis,
    		'query_var' => true,
    		'show_admin_column' => true,
        'rewrite' => 'slug'
    	) );

      }

      add_action('init','design_posts_type', 1);
