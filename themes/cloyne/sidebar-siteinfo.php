<?php
/**
 * The sidebar containing the site info widget area
 *
 * If no active widgets in this sidebar, hide it completely.
 *
 * @package WordPress
 * @subpackage Twenty_Thirteen
 * @since Twenty Thirteen 1.0
 */

if ( is_active_sidebar( 'sidebar-3' ) ) : ?>
	<div class="widget-area">
		<?php dynamic_sidebar( 'sidebar-3' ); ?>
	</div><!-- .widget-area -->
<?php endif; ?>
