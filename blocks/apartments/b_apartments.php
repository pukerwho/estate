<div class="b_apartments">
	<div class="container">
		<div class="row">
			<?php 
        $custom_query = new WP_Query( array( 'post_type' => 'apartments', 'orderby' => 'menu_order' ) );
        if ($custom_query->have_posts()) : while ($custom_query->have_posts()) : $custom_query->the_post(); ?>
        	<div class="col-md-3 col-sm-6">
        		<?php get_template_part('blocks/apartments/apartment-card') ?>
        	</div>
	    <?php endwhile; endif; ?>
		</div>
		<div class="row">
			<div class="col-md-12">
				Пагинация
			</div>
		</div>
	</div>
</div>