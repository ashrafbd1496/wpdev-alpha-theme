<?php

function alpha_bootstrapping(){
    load_theme_textdomain("alpha");
    add_theme_support("post-thumbnails");
    add_theme_support("title-tag");
    register_nav_menu('topmenu',__('Top Menu','alpha'));
    register_nav_menu('footermenu',__('Footer Menu','alpha'));
}

add_action("after_setup_theme","alpha_bootstrapping");


function alpha_assets(){
    wp_enqueue_style("alpha_themes_style",get_stylesheet_uri());
    wp_enqueue_style("bootstrap","//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css");
}

add_action("wp_enqueue_scripts","alpha_assets");

function alpha_the_excerpt($excerpt){
    if(!post_password_required()){
        return $excerpt;
    }else{
        echo get_the_password_form();
    }
}

add_filter('the_excerpt','alpha_the_excerpt');

function alpha_protected_title_change(){
    return "%s";
}
add_filter('protected_title_format','alpha_protected_title_change');

function alpha_sidebar(){
    register_sidebar(
        array(
            'name'          => __( 'Single Post Sidebar', 'alpha' ),
            'id'            => 'sidebar-1',
            'description'   => __( 'Right Sidebar', 'alpha' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
add_action('widgets_init','alpha_sidebar');