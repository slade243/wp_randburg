<?php
add_filter( 'ctf_admin_search_label', 'ctf_return_string_hashtag' );
function ctf_return_string_hashtag( $val ) {
    return 'Hashtag:';
}

add_filter( 'ctf_admin_search_whatis', 'ctf_return_string_instructions' );
function ctf_return_string_instructions( $val ) {
    return 'Select this option and enter any single hashtag for a hashtag feed';
}

add_filter( 'ctf_admin_validate_search_text', 'ctf_validate_search_text', 10, 1 );
function ctf_validate_search_text( $val ) {
    preg_match( "/^[\p{L}][\p{L}0-9_]+|^#+[\p{L}][\p{L}0-9_]+/u", trim( $val ), $hashtags );

    $hashtags = preg_replace( "/#{2,}/", '', $hashtags );

    $new_val = ! empty( $hashtags ) ? $new_val = $hashtags[0] : '';

    if ( substr( $new_val, 0, 1 ) != '#' && $new_val != '' ) {
        $new_val = '#' . $new_val;
    }

    return $new_val;
}

add_filter( 'ctf_admin_validate_usertimeline_text', 'ctf_validate_usertimeline_text', 10, 1 );
function ctf_validate_usertimeline_text( $val ) {
    preg_match( "/^[\p{L}][\p{L}0-9_]{1,16}/u" , str_replace( '@', '', trim( $val ) ), $screenname );

    $new_val = isset( $screenname[0] ) ? $screenname[0] : '';

    return $new_val;
}

add_filter( 'ctf_admin_validate_include_replies', 'ctf_validate_include_replies', 10, 1 );
function ctf_validate_include_replies( $val ) {
    return false;
}

add_filter( 'ctf_admin_set_include_replies', 'ctf_set_include_replies', 10, 1 );
function ctf_set_include_replies( $new_input ) {
    return false;
}

add_filter( 'ctf_admin_feed_type_list', 'ctf_return_feed_types' );
function ctf_return_feed_types( $val ) {
    return array( 'hometimelineinclude_replies', 'usertimelineinclude_replies' );
}

add_action( 'ctf_admin_upgrade_note', 'ctf_update_note' );
function ctf_update_note() {
    ?>
    <span class="ctf_note"> - <a href="https://smashballoon.com/custom-twitter-feed/" target="_blank">Pro version coming soon</a></span>
    <?php
}

add_action( 'ctf_admin_feed_settings_radio_extra', 'ctf_usertimeline_error_message' );
function ctf_usertimeline_error_message( $args )
{ //sbi_notice sbi_user_id_error
    if ( $args['name'] == 'usertimeline') : ?>
        <div class="ctf_notice ctf_usertimeline_error">
            <?php _e( "<p>Please use a single screenname or Twitter handle of numbers and letters. If you would like to use more than one screen name for your feed, please upgrade to our <a href='https://smashballoon.com/custom-twitter-feed/' target='_blank'>Pro version</a> (coming soon).</p>" ); ?>
        </div>
    <?php endif;
}

add_action( 'ctf_admin_feed_settings_search_extra', 'ctf_hashtag_error_message' );
function ctf_hashtag_error_message() {
    ?>
    <div class="ctf_notice ctf_search_error">
        <?php _e( "<p>Please use a single hashtag of numbers and letters. If you would like to use more than one hashtag or use search terms for your feed, please upgrade to our <a href='https://smashballoon.com/custom-twitter-feed/' target='_blank'>Pro version</a> (coming soon).</p>" ); ?>
    </div>
    <?php
}