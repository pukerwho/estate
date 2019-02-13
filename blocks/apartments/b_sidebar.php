<div class="b_sidebar">
	<div class="b_sidebar__box">
		<div class="b_sidebar__row">
			<span class="b_sidebar__key"><?php _e('Название: ') ?></span>
			<span class="color-blue b_sidebar__value"><?php the_title(); ?></span>
		</div>
		<div class="b_sidebar__row">
			<span class="b_sidebar__key"><?php _e('Категория: ') ?></span>
			<span class="b_sidebar__value"><?php echo carbon_get_the_post_meta('crb_apartments_category'); ?></span>
		</div>	
		<div class="b_sidebar__row">
			<span class="b_sidebar__key"><?php _e('Тип: ') ?></span>
			<span class="b_sidebar__value"><?php echo carbon_get_the_post_meta('crb_apartments_type'); ?></span>
		</div>	
		<div class="b_sidebar__row">
			<span class="b_sidebar__key"><?php _e('Площадь: ') ?></span>
			<span class="b_sidebar__value"><?php _e('От ') ?><?php echo carbon_get_the_post_meta('crb_apartments_square'); ?> <?php _e('м') ?><sup>2</sup></span>
		</div>	
		<div class="b_sidebar__row">
			<span class="b_sidebar__key"><?php _e('Этаж: ') ?></span>
			<span class="b_sidebar__value"><?php echo carbon_get_the_post_meta('crb_apartments_floor'); ?></span>
		</div>	
		<div class="b_sidebar__row">
			<span class="b_sidebar__key"><?php _e('Вид из окон: ') ?></span>
			<span class="b_sidebar__value"><?php echo carbon_get_the_post_meta('crb_apartments_view'); ?></span>
		</div>	
		<div class="b_sidebar__row">
			<span class="b_sidebar__key"><?php _e('Регион: ') ?></span>
			<span class="b_sidebar__value"><?php echo carbon_get_the_post_meta('crb_apartments_region'); ?></span>
		</div>	
	</div>
	<div class="b_sidebar__price">
		<div class="b_sidebar__price__heading">
			<?php _e('Цена:') ?>
		</div>
		<div>
			<span><?php _e('от ') ?><?php echo carbon_get_the_post_meta('crb_apartments_price'); ?>&nbsp;&euro;</span>
			<span class="b_sidebar__price__square">/ <?php echo carbon_get_the_post_meta('crb_apartments_square_price'); ?> &euro; м<sup>2</sup></span>
		</div>
	</div>
	<div class="b_sidebar__button" data-toggle="modal" data-target="#formModal">
		<?php _e('Узнать подробнее') ?>
	</div>
</div>