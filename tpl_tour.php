<?php
/*
Template Name: Бесплатный тур
*/
?>

<?php get_header(); ?>

<div class="p_tour">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<?php get_template_part('blocks/b_breadcrumbs') ?>
			</div>
		</div>
		<div class="row">
			<div class="col-md-12">
				<div class="p_tour__grid">
					<div class="p_tour__photo">
						<?php 
							$tour_photo = carbon_get_the_post_meta('crb_tour_photo');
							$photo_src = wp_get_attachment_image_src($tour_photo, 'large'); 
						?>
						<img src="<?php echo $photo_src[0]; ?>" alt="">
					</div>
					<div class="p_tour__content">
						<div class="p_tour__title">
							<?php echo carbon_get_the_post_meta('crb_tour_title') ?>
						</div>
						<div class="p_tour__line"></div>
						<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
						<div class="p_tour__text">
							<?php the_content(); ?>
						</div>
						<?php endwhile; else: ?>
							<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
						<?php endif; ?>
						<div class="p_tour__services">
							<?php 
							$tour_services = carbon_get_the_post_meta( 'crb_tour_services' );
							foreach ( $tour_services as $tour_service ): ?>
								<div class="p_tour__services__row">
									<div class="p_tour__services__check">
										<img src="<?php bloginfo('template_url') ?>/img/check.png" alt="">
									</div>
									<div class="p_tour__services__row__value">
										<?php echo $tour_service['crb_tour_services_text'] ?>
									</div>
								</div>
							<?php endforeach; ?>
						</div>
					</div>
					<div class="p_tour__more">
							<div class="p_tour__more__heading">
								<?php _e('Хотите получить более детальную информацию о ') ?>
								<span><?php _e('бесплатной обзорной поездке в Болгарию?') ?></span>
							</div>
							<div class="p_tour__more__description">
								<?php _e('Оставьте заявку на консультацию!') ?>
							</div>
							<div class="p_tour__more__button" data-toggle="modal" data-target="#formModal">
								<?php _e('Индивидуальная консультация') ?>
							</div>
						</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>