<div class="b_slider">
	<ul id="lightSlider">
		<?php 
			$apartments_photos = carbon_get_the_post_meta('crb_apartments_photos');
			foreach ( $apartments_photos as $apartments_photo ): ?>
			<?php $photo_src = wp_get_attachment_image_src($apartments_photo, 'large'); ?>
			<li data-thumb="<?php echo $photo_src[0]; ?>">
		    <img src="<?php echo $photo_src[0]; ?>" />
		  </li>
		<?php endforeach; ?>
	</ul>
</div>