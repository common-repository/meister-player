<?php

class MeisterPlayer {
    protected $plugin_name;
    protected $version;
    /**
     * The loader that is responsible for maintaining and registering
     * all hooks that power the plugins
    */
    protected $loader;

    public function __construct() {
        $this->plugin_name = 'meisterplayer';
        $this->version = '0.0.1';

        $this->load_dependencies();
        $this->define_admin_hooks();
        $this->define_public_hooks();
    }

    private function load_dependencies() {
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'includes/class-meisterplayer-loader.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'public/class-meisterplayer-public.php';
		require_once plugin_dir_path( dirname( __FILE__ ) ) . 'admin/class-meisterplayer-admin.php';

        $this->loader = new MeisterPlayer_Loader();
    }

    private function define_admin_hooks() {
        $plugin_admin = new MeisterPlayer_Admin( $this->get_plugin_name(), $this->get_version() );

        $this->loader->add_action( 'wp_enqueue_scripts', $plugin_admin, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_admin, 'enqueue_scripts' );
        $this->loader->add_filter( 'mce_buttons', $plugin_admin, 'register_buttons_editor');
        $this->loader->add_filter( 'mce_external_plugins', $plugin_admin, 'enqueue_button_scripts');
    }

    private function define_public_hooks() {
        $plugin_public = new MeisterPlayer_Public( $this->get_plugin_name(), $this->get_version() );

        $this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );
    }

    function run() {
        $this->loader->run();
    }

    public function get_plugin_name() {
        return $this->plugin_name;
    }

    public function get_version() {
        return $this->version;
    }
}
