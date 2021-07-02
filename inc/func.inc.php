<?php

function demo_func(){
    $is_a_member = false;
    // require_once( ABSPATH . 'wp-includes/pluggable.php' );
    // if ( $group = Groups_Group::read_by_name( 'Accesed' ) ) {
    //     $is_a_member = Groups_User_Group::read( get_current_user_id() , $group->group_id );
    // }

    // $group = Groups_Group::read_by_name( 'Accesed' );
    echo "$is_a_member";
}
?>