<?php
wp_list_comments();
if(! comments_open()){
    _e('Comments are closed', 'alpha');
}
comment_form();
