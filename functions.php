<?php
    add_action("acf/save_post", "set_auto_category", 20);
    function set_auto_category($post_id){

        $cat_time = get_field("time",$post_id);
        $cat_type = get_field("type",$post_id);

        wp_set_object_terms($post_id,$cat_time,'category',true);
        wp_set_object_terms($post_id,$cat_type,'category',true);

    }
?>
