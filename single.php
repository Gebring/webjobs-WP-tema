<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme and one
 * of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query,
 * e.g., it puts together the home page when no home.php file exists.
 *
 *
 * @package Tedjobs
 * @subpackage webjobs
 * @since Vår 2014
 */

get_header(); ?>
<div class="single">
<?php
	the_post();
		?>
		<p class="date"><?php echo the_date(); ?></p>
		<article>
		<h1><?php echo the_title(); ?></h1>
		<p><?php echo the_content(); ?></p>
		</hr>
		</article>
</div>
<?php get_footer(); ?>