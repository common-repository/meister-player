<?php
function meisterplayer_register_buttons() {

    function meisterplayer_register_buttons_editor( $buttons ) {
        array_push($buttons, 'green');
        return $buttons;
    }

    function meisterplayer_enqueue_scripts($plugin_array) {
        $plugin_array["meisterplayer_plugin"] = plugin_dir_url(__FILE__) . "../admin/js/button-functions.js";
        return $plugin_array;
    }

    add_filter( 'mce_buttons', 'meisterplayer_register_buttons_editor' );
    add_filter( 'mce_external_plugins', 'meisterplayer_enqueue_scripts' );
}