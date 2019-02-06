<div class="b_content">
	<div class="b_content__heading">
		<?php _e('Описание') ?>
	</div>
	<div class="b_content__line"></div>
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		<div class="b_content__text">
			<?php the_content(); ?>
		</div>
	<?php endwhile; else: ?>
		<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
	<?php endif; ?>
	<div class="b_content__services">
		<div class="b_content__services__title">
			<?php _e('Услуги наличные в комплексе:') ?>	
		</div>
		<?php 
		$apartments_services = carbon_get_the_post_meta( 'crb_apartments_services' );
		foreach ( $apartments_services as $apartments_service ): ?>
			<div class="b_content__services__row">
				<div class="b_content__services__check">
					<img src="<?php bloginfo('template_url') ?>/img/check.png" alt="">
				</div>
				<div class="b_content__services__row__value">
					<?php echo $apartments_service['crb_apartments_services_text'] ?>
				</div>
			</div>
		<?php endforeach; ?>
	</div>
</div>