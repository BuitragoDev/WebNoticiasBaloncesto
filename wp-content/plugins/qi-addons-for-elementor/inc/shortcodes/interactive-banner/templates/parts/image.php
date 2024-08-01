<?php

if ( ! defined( 'ABSPATH' ) ) {
	// Exit if accessed directly.
	exit;
}

$images_proportion = isset( $images_proportion ) ? $images_proportion : 'full';
?>
<div class="qodef-m-image">
	<?php echo qi_addons_for_elementor_get_attachment_image( $image, $images_proportion ); // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped ?>
</div>
