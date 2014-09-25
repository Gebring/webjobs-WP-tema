<?php
/**
 * Template Name: All ads
 */
get_header();
?> 
<div class="allAdsLoop">
  	<?php 
	query_posts("posts_per_page=-1");
	if(have_posts()) {
		while(have_posts()) {
			the_post(); ?>
			<div class="ads">
				<a href="<?php the_permalink() ?>" rel="bookmark">
					<div class="titleFrame">
						<p class="date"><?php the_date(); ?></p>	
						<h1 class="blogTitle"><?php the_title(); ?></h1>
						<p class="blogContent"><?php the_content(); ?></p>
						<?php echo "<br />"; ?>
					</div>
				</a> 
			</div> 
			<?php
		}	
	}
	?>
			
</div>
<?php get_footer(); ?>  
	
		

