<a href="<?php the_permalink(); ?>">
	<div class="b_apartments__item">
		<div class="b_apartments__img">
			<img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="">
		</div>
		<div class="b_apartments__content">
			<div class="b_apartments__title">
				<?php the_title(); ?>
			</div>
			<div class="b_apartments__info">
				<div>
					<div class="b_apartments__info__tr">
						<img src="<?php bloginfo('template_url') ?>/img/icon-price.png" alt=""> <span class="color-black font-bold">от <?php echo carbon_get_the_post_meta('crb_apartments_price'); ?> &euro;&nbsp; </span><span> / <?php echo carbon_get_the_post_meta('crb_apartments_square_price'); ?> &euro; м<sup>2</sup></span>
					</div>
					<div class="b_apartments__info__tr">
						<img src="<?php bloginfo('template_url') ?>/img/icon-place.png" alt=""> <span><?php echo carbon_get_the_post_meta('crb_apartments_region'); ?></span>
					</div>
				</div>
			</div>
		</div>
	</div>
</a>