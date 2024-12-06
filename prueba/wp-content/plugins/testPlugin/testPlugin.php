<?php 

/* 
Plugin Name: Test Plugin
Plugin Uri: 
Description: Este es un plugin de pruebas
Version: 0.0.1
*/

class my_plugin{
    static $instance = false;

    private function __construct(){
        add_action('init', array($this, 'register_shortcodes'));
    }

    public static function get_instance(){
        if(! self::$instance){
            self::$instance = new self();
        }

        return self::$instance;
    }

    public function register_shortcodes(){
        add_shortcode('my_plugin_message', array($this, 'echo_message'));
    }

    function echo_message(){
        return "<p>Hola ANATO</p>";
    }

}

$my_plugin = my_plugin::get_instance();

?>