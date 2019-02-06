<div class="b_contact">
	<div class="container">
		<div class="row justify-content-center">
			<div class="col-md-9 text-center">
				<div class="b_contact__title">
					<?php _e('Хотите купить ') ?><span class="font-bold"><?php _e('квартиру или дом в Болгарии?') ?></span>
				</div>
				<div class="b_contact__subtitle">
					<?php _e('Свяжитесь с нами, и мы ') ?><span class="font-semibold"><?php _e('бесплатно проконсультируем') ?></span> <?php _e('вас по всем интересующим вопросам!') ?>
				</div>
				<div class="b_contact__heading">
					<?php _e('Контактная информация'); ?>
				</div>
				<div class="b_contact__info">
					<?php 
					$contact_info = carbon_get_theme_option( 'crb_contacts' );
					foreach ( $contact_info as $c_info ): ?>
						<div class="b_contact__info__item">
							<div class="b_contact__office color-yellow">
								<?php echo $c_info['crb_contacts_office'] ?>
							</div>
							<div class="b_contact__phone">
								<a href="tel:<?php echo $c_info['crb_contacts_phone'] ?>">
									<?php echo $c_info['crb_contacts_phone'] ?>
								</a>
							</div>
							<div class="b_contact__name">
								<?php echo $c_info['crb_contacts_name'] ?>
							</div>
						</div>
					<?php endforeach; ?>
				</div>
			</div>
		</div>
	</div>
</div>