<?php
/**
 * Template Name: Custom Query WPQuery
 */

?>
<?php get_header();?>
<body <?php body_class(); ?>>
<?php get_template_part('/template-parts/common/hero');?>
<div class="posts text-center">
    <?php
    $paged = get_query_var('paged') ? get_query_var('paged'):1;
    $posts_per_page = 3;
    $post_ids = array(15,23,28,15,25,249);
    $cp = new WP_Query(array(
           'posts_per_page' => $posts_per_page,
         //   'author__in'    => array(1),
         //  'post__in'   =>  $post_ids,
//        'order' =>'asc',
         //   'orderby'   => 'post__in',      //to show order exactly we want
            'paged' => $paged,
    ));
    while ( $cp->have_posts() ) {
        $cp->the_post();
        ?>
        <h5><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h5>
        <?php
    }
    wp_reset_query();
    ?>
    <div class="container post-pagination">
        <div class="row">
            <div class="col-md-12">
                <?php
                echo paginate_links( array(
                    'total'     => $cp->max_num_pages,
                    'current'   => $paged,
                    'prev_next' => false,
                ) );
                ?>
            </div>
        </div>
    </div>
</div>

<?php get_footer();?>