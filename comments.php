<div class="comments mt-3">
    <h3>
        <?php
        $alpha_cn = get_comments_number();
        if (1 == $alpha_cn){
            _e(' 1 Comments','alpha');
        }else{
            echo $alpha_cn .' '.__('Comments','alpha');
        }

        ?>
    </h3>
    <?php
    wp_list_comments();
    if(! comments_open()){
        _e('Comments are closed', 'alpha');
    }
    comment_form();
    ?>

</div>



