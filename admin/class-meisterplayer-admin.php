<?php
class MeisterPlayer_Admin {
    protected $plugin_name;
    protected $version;

    public function __construct($plugin_name, $version) {
        $this->plugin_name = $plugin_name;
        $this->version = $version;
    }

    public function register_buttons_editor($buttons) {
        array_push($buttons, 'add_meisterplayer');
        return $buttons;
    }

    public function enqueue_button_scripts($plugin_array) {
        $plugin_array["meisterplayer_plugin"] = plugin_dir_url(dirname(__FILE__)) . 'admin/js/meisterplayer-buttons.js';
        return $plugin_array;
    }

    private function register_wysiwyg_buttons() {


    }

    public function enqueue_scripts() {

    }

    public function enqueue_styles() {

    }
}
