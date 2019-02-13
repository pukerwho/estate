    </section>
    <footer id="footer">
    	<?php get_template_part('blocks/footer/b_contact') ?>
    	<?php get_template_part('blocks/footer/b_copyright') ?>
    </footer>

    <!-- Консультация Modal -->
		<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="formModalLabel" aria-hidden="true">
		  <div class="modal-dialog" role="document">
		    <div class="modal-content">
		      <div class="modal-header">
		        <div class="close" data-dismiss="modal" aria-label="Close">
		          <img src="<?php bloginfo('template_url') ?>/img/modal-close.png" alt="">
		        </div>
		      </div>
		      <div class="modal-body">
		      	<div class="modal__title">
		      		<?php _e('Индивидуальная консультация') ?>
		      	</div>
		        <?php echo do_shortcode('[contact-form-7 id="35" title="Индивидуальная консультация"]'); ?>
		      </div>
		    </div>
		  </div>
		</div>
    <?php wp_footer(); ?>
</body>
</html>