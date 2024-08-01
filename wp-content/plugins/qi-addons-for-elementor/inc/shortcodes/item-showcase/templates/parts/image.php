<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

if ( ! empty( $main_image ) ) {
	?>
	<div class="qodef-m-image">
		<?php echo qi_addons_for_elementor_get_attachment_image( $main_image, 'full' ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
	</div>
<?php } ?>
