<div class="container">
    <div class="row">
        <div class="col-md-12 text-center">
           <h2><?php  single_cat_title(); ?></h2>
        </div>
    </div>
</div>
<?php


    $alpha_current_term = get_queried_object();
   $alpha_current_term_thumbnail_id = get_field('thumbnail',$alpha_current_term);

    if ( $alpha_current_term_thumbnail_id){
        $alpha_thumbnail_details = wp_get_attachment_image_src( $alpha_current_term_thumbnail_id);
        echo "<img src='".esc_url($alpha_thumbnail_details[0])."'/>'";
    }


?>