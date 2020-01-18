<?php
/**
 * Define the static pages.
 *
 * This is the entry point for defining the static HTML pages.
 *
 * @since      1.0.0
 * @package    Warriortrading_Gatsby_Static_Html
 * @subpackage Warriortrading_Gatsby_Static_Html/public/partials
 * @author     Duane Leem <duane@warriortrading.com>
 */

if (!class_exists("Pspmo_Members_Only_Angular_Shortcodes")) {
  class Pspmo_Members_Only_Angular_Shortcodes {
    public function wp_ng_fusion($atts) {
      ob_start();
      // include(plugin_dir_path( __DIR__ ) . "angular/dist/angular/index.html");
      include(plugin_dir_path( __DIR__ ) . "angular/dist/wordpress/wordpress.php");
      return ob_get_clean();
    }
  } // class Pspmo_Members_Only_Angular_Shortcodes
} // if