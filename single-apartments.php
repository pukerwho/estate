<?php get_header(); ?>

<div class="p_apartments">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php get_template_part('blocks/apartments/b_slider') ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<?php get_template_part('blocks/b_breadcrumbs') ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
				<?php get_template_part('blocks/apartments/b_sidebar') ?>
			</div>
			<div class="col-md-8">
				<?php get_template_part('blocks/apartments/b_content') ?>
			</div>
		</div>
	</div>
	<div class="p_apartments__map">
		<?php echo carbon_get_the_post_meta('crb_apartments_map');  ?>
	</div>
</div>
<div>
	<?php get_template_part('blocks/b_about') ?>	
</div>

<?php get_footer(); ?>