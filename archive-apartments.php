<?php get_header(); ?>

<div class="b_apartments py-5">
	<div class="container">
		<div class="row">
			<?php 
			  global $wp_query, $wp_rewrite;  
			  // $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    		$wp_query->query_vars['paged'] > 1 ? $current = $wp_query->query_vars['paged'] : $current = 1;
				$custom_query_args = array(
					'post_type' => 'apartments', 
					'posts_per_page' => 4, 
					'paged' => $current,
				);
        $custom_query = new WP_Query( $custom_query_args );
        if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
        	<div class="col-md-3 col-sm-6">
        		<?php get_template_part('blocks/apartments/apartment-card') ?>
        	</div>
	    <?php endwhile; endif; ?>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="b_pagination">
					<?php 
						$big = 999999999; // уникальное число
						echo paginate_links( array(
						'format'  => 'page/%#%',
						'current'   => $current,
						'total'   => $custom_query->max_num_pages,
						'prev_next' => true,
						'next_text' => (''),
						'prev_text' => ('')
						)); 
					?>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>