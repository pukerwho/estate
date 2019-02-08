<div class="b_apartments">
	<div class="container">
		<div class="row">
			<?php 
			  $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
				$custom_query_args = array(
					'post_type' => 'apartments', 
					'posts_per_page' => 4, 
					'paged' => $paged,
				);
        $custom_query = new WP_Query( $custom_query_args );
        
        if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
        	<div class="col-md-3 col-sm-6">
        		<?php get_template_part('blocks/apartments/apartment-card') ?>
        	</div>
	    <?php endwhile; endif; wp_reset_postdata(); ?>
		</div>
		<div class="row">
			<div class="col-md-12 text-center">
				<div class="b_pagination">
					<?php 
						$big = 999999999; // уникальное число
						echo paginate_links( array(
						'format'  => 'apartments/page/%#%',
						'current'   => $paged,
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