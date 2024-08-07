<div class="ppw_main_container wp_misc_tab">
	<form id="wpp_misc_common_form">
		<input type="hidden" id="ppw_misc_form_nonce"
		       value="<?php echo esc_attr( wp_create_nonce( PPW_Constants::GENERAL_FORM_NONCE ) ); ?>"/>
		<table class="ppwp_settings_table" cellpadding="4">
			<?php
			include PPW_DIR_PATH . 'includes/views/misc/view-ppw-protect-excerpt.php';
			include PPW_DIR_PATH . 'includes/views/misc/view-ppw-no-reload-page.php';
			do_action('ppwp_settings_advanced_top_options');
			?>
		</table>
		<?php submit_button();?>
	</form>
	<p>
		<hr>
	</p>
	<table class="ppwp_settings_table" cellpadding="4">
		<?php include PPW_DIR_PATH . 'includes/views/misc/view-ppw-restore-wp-password.php'; ?>
	</table>
	<?php do_action('ppw_render_misc_form'); ?>

</div>
