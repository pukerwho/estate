<?php get_header(); ?>
<section class="entry-section">
	<div class="p_archive">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<?php get_template_part('blocks/b_breadcrumbs') ?>	
				</div>
			</div>
			<div class="row">
				<?php while ( have_posts() ) : the_post(); ?>
			    <?php  get_template_part('blocks/archive', 'default'); ?>
			  <?php endwhile; // end of the loop. ?>		
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>