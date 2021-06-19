<?php
/**
 * Template Name: Custom Query
 */

?>
<?php get_header();?>
<body <?php body_class(); ?>>
<?php get_template_part('/template-parts/common/hero');?>
<div class="posts text-center">
    <?php
    $paged = get_query_var('paged') ? get_query_var('paged'):1;
    $posts_per_page = 2;
    $total = 9;
    $post_ids = array(23,28,17,42,25,249);
    $cp = get_posts(array(
            'posts_per_page' => $posts_per_page,
            'number_of_posts'   => $total,
            'author__in'    => array(1),
//            'post__in'   =>  $post_ids,
//        'order' =>'asc',
            'orderby'   => 'post__in',      //to show order exactly we want
            'paged' => $paged,
    ));

    foreach ($cp as $post){
      setup_postdata($post);
        ?>
        <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

        <?php

    }
    wp_reset_postdata();
    ?>
    <div class="container post-paginate">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-8">
                <?php
                echo paginate_links( array(
                    'total' => ceil( $total / $posts_per_page )
                ) );
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>