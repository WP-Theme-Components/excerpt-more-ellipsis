<?php
/**
 * Change the excerpt more to ellipsis
 *
 * @package WP-Theme-Components
 * @subpackage excerpt-more-ellipsis
 * @author Cameron Jones
 * @version 1.0.0
 */

namespace WP_Theme_Components\Excerpt_More_Ellipsis;

/**
 * Bail if accessed directly
 *
 * @since 1.0.0
 */
if ( ! defined( 'ABSPATH' ) ) {
	die();
}

/**
 * Replace the default hellipsis with ellipsis
 *
 * @since 1.0.0
 * @link https://developer.wordpress.org/reference/functions/the_excerpt/#comment-326
 * @param string $more "Read more" excerpt string.
 * @return string
 */
function excerpt_more_ellipsis( $more ) {
	$more = '...';
    return $more;
}

add_filter( 'excerpt_more', __NAMESPACE__ . '\\excerpt_more_ellipsis' );
