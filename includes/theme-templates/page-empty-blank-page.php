<?php
/**
 * Template Name: Angular - Empty Blank Page
 * A completely blank empty page template file.
 *
 * @author Duane Leem <duane.leem@pspmo.org>
 * @version 1.0
 */

/* ================================================================================
  WordPress Post Fields | Content
================================================================================ */
$objThePost = get_post();
?>

<?php echo apply_filters('the_content', $objThePost->post_content); ?>