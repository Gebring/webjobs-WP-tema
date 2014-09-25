<?php
/**
 * Template for displaying single posts
 *
 *
 *
 * 
 * @package Siddes
 * @subpackage The Theme
 * @since The Theme 1.0
 */

//get_header();?>
<h1 style="color: red">Singple post page</h1>
<?php
while ( have_posts() ) { 
	the_post();
	?>
	<article>
		<p> <?php the_category( $separator, $parents, $post_id );  ?> </p>
		<h1><?php the_title(); ?></h1>

		
		
		<?php echo get_post_format();?></p>
		
		<p><?php the_content(); ?></p>
		<p><?php the_date(); ?></p>

		<!--<?php  comments_template();  ?> 
		<?php echo get_avatar( get_the_author_meta( 'ID' ), 32 ); ?>

		<hr />
	</article>
	<?php
};
?>


<?php get_footer()?>