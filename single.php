<?php
$alpha_layout_class = "col-md-8";
$alpha_text_class   = "";
if ( ! is_active_sidebar( "sidebar-1" ) ) {
    $alpha_layout_class = "col-md-10 offset-md-1";
    $alpha_text_class   = "text-center";
}
?>

<?php get_header(); ?>
<body <?php body_class( array( "first_class", "second_class" ) ); ?>>
<?php get_template_part( "/template-parts/common/hero" ); ?>
    <div class="container">
        <div class="row">
            <div class="<?php echo $alpha_layout_class; ?>">
                <div class="posts" <?php ?>>
                    <?php
                    while ( have_posts() ) :
                        the_post();
                        ?>
                        <div <?php post_class( array( "first_class", "second_class" ) ); ?>>
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h2 class="post-title <?php echo $alpha_text_class; ?>">
                                            <?php the_title(); ?>
                                        </h2>
                                        <p class="<?php echo $alpha_text_class; ?>">
                                            <em><?php the_author_posts_link(); ?></em><br/>
                                            <?php echo get_the_date(); ?>
                                        </p>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="slider" id="customize">
                                            <?php
                                            if ( class_exists( 'Attachments' ) ) {
                                                $attachments = new Attachments( 'slider' );
                                                if ( $attachments->exist() ) {
                                                    while ( $attachment = $attachments->get() ) { ?>
                                                        <div>
                                                            <?php echo $attachments->image( 'large' ); ?>
                                                        </div>
                                                        <?php
                                                    }
                                                }
                                            }
                                            ?>
                                        </div>
                                        <div>
                                            <?php
                                            if ( !class_exists( 'Attachments' ) ) {
                                                if ( has_post_thumbnail() ) {
                                                    $thumbnail_url = get_the_post_thumbnail_url( null, "large" );
                                                    printf( '<a class="popup" href="%s" data-featherlight="image">', $thumbnail_url );
                                                    the_post_thumbnail( "large", array( "class" => "img-fluid" ) );
                                                    echo '</a>';
                                                }
                                            }

                                            the_content();
                                            if (get_post_format()=='image' && function_exists('the_field')):
//                                                $camera_model = get_post_meta(get_the_ID(),'camera_model',true);
                                                ?>
                                            <div class="metainfo mb-3">
<!--                                                <strong>Camera Model: </strong>--><?php //echo esc_html($camera_model); ?><!-- <br/>-->
                                                <strong>Camera Model: </strong><?php the_field('camera_model'); ?> <br/>
                                                <strong>Location: </strong><?php
                                                $alpha_location = get_field('location');
                                                echo esc_html($alpha_location);
                                                ?>
                                                <br/>
                                                <strong>Date : </strong><?php the_field('date'); ?> <br/>
                                                <?php
                                                    if (get_field('licenced')):
                                                        ?>
                                                        <strong>Licenced : </strong>
                                                    <?php
                                                        echo apply_filters('the_content',get_field('license_information')) ;
                                                      endif;
                                                        ?>
                                                <p>
                                                   <?php
                                                   $alpha_image = get_field('random_image');
                                                   $alpha_image_details= wp_get_attachment_image_src($alpha_image,'alpha-square');
                                                   echo "<img src='".esc_url($alpha_image_details[0])."'/>'";
                                                  ?>
                                                </p>
                                                <p>
                                                    <?php
                                                        $file = get_field('attachment');
                                                        if($file){
                                                            $file_url = wp_get_attachment_url($file);
                                                            $file_thumb = get_field('thumbnail',$file);
                                                            if($file_thumb){
                                                                $file_thumb_details = wp_get_attachment_image_src($file_thumb);
                                                                echo "<a target='_blank' href='{$file_url}'><img src='".esc_url($file_thumb_details[0])."'/>'</a>";
                                                            }else{
                                                                echo "<a target='_blank' href='{$file_url}'>{$file_url}</a>";
                                                            }
                                                        }
                                                    ?>
                                                </p>

                                            </div>

                                            <?php
                                                endif;
 //                                           the_post_thumbnail('alpha-square-new1');
//                                            the_post_thumbnail('alpha-square-new2');
//                                            the_post_thumbnail('alpha-square-new3');
                                            wp_link_pages();

                                            ?>
                                        </div>
                                    </div>

                                    <div class="authorsection">
                                        <div class="row">
                                            <div class="col-md-2 authorimage">
                                                <?php
                                                echo get_avatar( get_the_author_meta( "ID" ) );
                                                ?>
                                            </div>
                                            <div class="col-md-10">
                                                <h4>
                                                    <?php echo get_the_author_meta( "display_name" ); ?>
                                                </h4>
                                                <p>
                                                    <?php echo get_the_author_meta( "description" ); ?>
                                                </p>
                                                <?php
                                                if (function_exists('the_field')): ?>
                                                <p>
                                                    <a href="<?php  the_field('facebook','user_'.get_the_author_meta( "ID" )) ?>"><span class="social-icon dashicons dashicons-facebook-alt"></span></a>
                                                    <a href="<?php  the_field('twitter','user_'.get_the_author_meta( "ID" )) ?>"><span class="social-icon dashicons dashicons-twitter-alt"></span></a>

                                                </p>
                                                <?php endif; ?>

                                            </div>
                                        </div>
                                    </div>
                                    <?php
                                    if (function_exists('the_field')): ?>
                                        <div class="mt-3">
                                            <h3 class="related_post"><?php _e('Related Post','alpha') ?></h3>
                                            <?php
                                            $related_post = get_field('related_post');
                                            $alpha_rp = New WP_Query(
                                                array(
                                                    'post__in'   =>$related_post,
                                                    'orderby'   =>'post__in',
                                                ),
                                                    );
                                            while( $alpha_rp->have_posts()){
                                                $alpha_rp->the_post();

                                                ?>
                                                <h5>
                                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?>
                                                </h5>
                                                <?php
                                            }
                                            wp_reset_query();
                                            ?>

                                        </div>
                                    <?php endif; ?>

                                    <?php if ( !post_password_required()): ?>
                                        <div class="col-md-12">
                                            <?php
                                            comments_template();
                                            ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                    <?php
                    endwhile;
                    ?>

                    <div class="container post-pagination">
                        <div class="row">
                            <div class="col-md-4"></div>
                            <div class="col-md-8">
                                <?php
                                the_posts_pagination( array(
                                    "screen_reader_text" => ' ',
                                    "prev_text"          => "New Posts",
                                    "next_text"          => "Old Posts"
                                ) );
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            if ( is_active_sidebar( "sidebar-1" ) ):
                ?>
                <div class="col-md-4">
                    <?php
                    if ( is_active_sidebar( "sidebar-1" ) ) {
                        dynamic_sidebar( "sidebar-1" );
                    }
                    ?>
                </div>
            <?php endif; ?>
        </div>
    </div>

<?php get_footer(); ?>