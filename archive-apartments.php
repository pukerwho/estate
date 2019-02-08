<div class="b_apartments">
	<div class="container">
		<div class="row">
			<?php 
			  $paged = get_query_var( 'paged' ) ? absint( get_query_var( 'paged' ) ) : 1;
        $custom_query = new WP_Query( array( 'post_type' => 'apartments', 'orderby' => 'menu_order', 'posts_per_page' => 4, 'paged' => $paged,  ) );
        if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
        	<div class="col-md-3 col-sm-6">
        		<?php get_template_part('blocks/apartments/apartment-card') ?>
        	</div>
	    <?php endwhile; endif; wp_reset_query() ?>
		</div>
		<div class="row">
			<div class="col-md-12">
<?php if (function_exists("pagination")) {
    pagination($custom_query->max_num_pages);
} ?>

				

				<?php $big = 999999999; // уникальное число
				echo paginate_links( array(
					'base'    => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
					'format'  => '?paged=%#%',
					'current' => max( 1, get_query_var('paged') ),
					'total'   => $custom_query->max_num_pages
				) ); ?>
			</div>
		</div>
	</div>
</div>