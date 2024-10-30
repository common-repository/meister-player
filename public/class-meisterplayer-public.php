<?php
class MeisterPlayer_Public {
    private $plugin_name;
    private $version;

    public function __construct( $plugin_name, $version ) {
		$this->plugin_name = $plugin_name;
		$this->version = $version;

        $this->add_shortcodes();
	}

    public function add_shortcodes() {
        function insert_meisterplayer( $atts ) {
            $id = "meisterplayer_" . rand(100000, 999999);
            $js_id = "instance_" . $id;
            $selector_id = "#" . $id;
            $a = shortcode_atts(array(
                'video' => '',
                'autoplay' => 'false',
                'fullscreen' => 'false',
                'muted' => 'false',
                'type'=> 'mp4'
            ), $atts);

            $matches = array();
            preg_match('/\.[0-9a-z]+$/', $a['video'], $matches);
            //$filename = str_replace(".", "", $matches[0]);

            $html =  "<div id=\"" . $id . "\"></div>" .
            "<script>" .
                "var " . $js_id . " = new Meister('" . $selector_id . "', {" .
                    "global: {" .
                        "autoplay:" . $a['autoplay'] . "," .
                        "muted:" . $a['muted'] . ",".
                        "Youtube: {},  " .
                        "YoutubePlayer: {}," .
                    "}";
            if ($a['watermark']) {
                $html .= ", Watermark: {
                            iconUrl: '".$a['watermark']."',
                        }
                    }";
            }
            $html .=  "});" .
                $js_id . ".setItem({" .
                    "src: \"" . $a['video'] . "\"," .
                    "type: \"" . $a['type'] . "\"" .
                "});" .
                $js_id . ".load()" .
            "</script>";
            return $html;
        }

        add_shortcode('meisterplayer', 'insert_meisterplayer');
    }

    public function enqueue_styles() {
		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/meisterplayer-public.css', array(), $this->version, 'all' );
    }

    public function enqueue_scripts() {
		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/meister.bundled.min.js', array(), $this->version, false );
    }
}
