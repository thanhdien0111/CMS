<?php
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */

$twentytwentyone_unique_id = wp_unique_id('search-form-');

$twentytwentyone_aria_label = !empty($args['aria_label']) ? 'aria-label="' . esc_attr($args['aria_label']) . '"' : '';
?>

<form role="search" <?php echo $twentytwentyone_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above.  ?> method="get" class="form-inline search_header" action="<?php echo esc_url(home_url('/')); ?>">
	<div class="form-group">
	<input type="text" id="<?php echo esc_attr($twentytwentyone_unique_id); ?>" class="form-control search-menu" value="<?php echo get_search_query(); ?>" name="s" placeholder="Search"/>

	</div>
	<button class="btn btn-default" type="submit"><?php echo esc_attr_x('Search', 'submit button', 'twentytwentyone'); ?></button>
</form>
