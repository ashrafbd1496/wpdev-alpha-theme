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
            'paged' => $paged,
            'meta_query' => array(
                    'relation'  =>'AND',
                array(
                        'key'   => 'featured',
                        'value'   => '1',
                        'compare'   => '=',
                ),
                array(
                    'key'   => 'homepage',
                    'value'   => '1',
                    'compare'   => '=',
                ),
            )


//            'monthnum' => 6,
//            'year' => 2021,
           // 'post_status' => 'future',

//           // 'category_name' => 'travel',
//          'posts_per_page' => $posts_per_page,
//            'paged' => $paged,
//            'meta_key' => 'featured',
//            'meta_value' => '1'
//



//            'tax_query' =>array(
//                    'relation'  => 'OR',
//                array(
//                    'taxonomy' => 'post_format',
//                    'field'    => 'slug',
//                    'terms'    => array(
//                            'post-format-audio',
//                            'post-format-video',
//                    ),
//                    //if want to show posts without above format
//                    'operator'  =>'NOT IN',
//                )),
//                array(
//                    'taxonomy' => 'category',
//                    'field'    => 'slug',
//                    'terms'    => array( 'beach' )
//                ),
//                array(
//                    'taxonomy' => 'post_tag',
//                    'field'    => 'slug',
//                    'terms'    => array( 'travel' )
//                ),
//            )

    ));
    while ($cp->have_posts() ) {
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