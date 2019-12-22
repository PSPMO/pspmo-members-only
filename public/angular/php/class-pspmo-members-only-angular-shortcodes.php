<?php
/**
 * Define the static pages.
 *
 * This is the entry point for defining the static HTML pages.
 *
 * @since      1.0.0
 * @package    Wt_Static_Shortcodes
 * @subpackage Wt_Static_Shortcodes/includes/static-pages
 * @author     Duane Leem <duane@warriortrading.com>
 */


if (!class_exists("Pspmo_Members_Only_Angular_Shortcodes")) {
  class Pspmo_Members_Only_Angular_Shortcodes {
    // Angular
    public function angularHomepage($atts) {
      ob_start();
      include(plugin_dir_path( __FILE__ ) . "homepage.inc.php");
      return ob_get_clean();
    } // homepage()
  } // Pspmo_Members_Only_Angular_Shortcodes
} // if
