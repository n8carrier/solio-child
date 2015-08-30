<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package WordPress
 * @subpackage solio-child
 * @since solio-child 1.0
 */

get_header();
?>

<div class="wrapper">
<?php
if (have_posts()) :
   while (have_posts()) :
      the_post();
         the_content();
   endwhile;
endif;
?>
</div>
<?php get_footer(); ?>