<?php
/**
 * --------------------------------------------
 * Enqueue scripts and styles for the backend.
 *
 * @since Edupress 1.0.9
 * --------------------------------------------
 */

if ( ! function_exists( 'edupress_scripts_admin' ) ) {
	/**
	 * Enqueue admin styles and scripts
	 *
	 * @since  1.0.0
	 * @return void
	 */
	function edupress_scripts_admin( $hook ) {
		// if ( 'widgets.php' !== $hook ) return;

		// Styles
		wp_enqueue_style(
			'edupress-style-admin',
			get_template_directory_uri() . '/ilovewp-admin/css/ilovewp_theme_settings.css',
			'', ILOVEWP_VERSION, 'all'
		);
	}
}
add_action( 'admin_enqueue_scripts', 'edupress_scripts_admin' );

/*
** Notice after Theme Activation and Update.
*/
function edupress_activation_notice() {

	$screen = get_current_screen();

	if ( $screen->id == 'appearance_page_edupress-doc' ) {
		return;
	}

	$theme_data	 = wp_get_theme();

	echo '<div class="notice notice-success edupress-activation-notice">';
	
		echo '<h1>';
			/* translators: %s theme name */
			printf( esc_html__( 'Welcome to %s', 'edupress' ), esc_html( $theme_data->Name ) );
		echo '</h1>';

		echo '<p>';
			/* translators: %1$s: theme name, %2$s link */
			printf( __( 'Thank you for choosing %1$s! To fully take advantage of the best our theme can offer please make sure you visit our <a href="%2$s">Welcome page</a>', 'edupress' ), esc_html( $theme_data->Name ), esc_url( admin_url( 'themes.php?page=edupress-doc' ) ) );
		echo '</p>';

		echo '<p><a href="'. esc_url( admin_url( 'themes.php?page=edupress-doc' ) ) .'" class="button button-primary button-hero">';
			/* translators: %s theme name */
			printf( esc_html__( 'Get started with %s', 'edupress' ), esc_html( $theme_data->Name ) );
		echo '</a></p>';

	echo '</div>';
}