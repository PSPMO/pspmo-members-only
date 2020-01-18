<?php
/**
 * Template Name: Angular - Blank with Header
 * A blank body with header and footer.
 *
 * @author Duane Leem <duane.leem@pspmo.org>
 * @version 1.0
 */

get_header(); 

/* ================================================================================
  WordPress Post Fields | Content
================================================================================ */
$objThePost = get_post();
echo apply_filters('the_content', $objThePost->post_content);

get_footer();