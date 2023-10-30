<?php
<<<<<<< HEAD

=======
>>>>>>> D-12-Dien
/**
 * Server-side rendering of the `core/latest-posts` block.
 *
 * @package WordPress
 */

/**
 * The excerpt length set by the Latest Posts core block
 * set at render time and used by the block itself.
 *
 * @var int
 */
global $block_core_latest_posts_excerpt_length;
$block_core_latest_posts_excerpt_length = 0;

/**
 * Callback for the excerpt_length filter used by
 * the Latest Posts block at render time.
 *
 * @return int Returns the global $block_core_latest_posts_excerpt_length variable
 *             to allow the excerpt_length filter respect the Latest Block setting.
 */
<<<<<<< HEAD
function block_core_latest_posts_get_excerpt_length()
{
=======
function block_core_latest_posts_get_excerpt_length() {
>>>>>>> D-12-Dien
	global $block_core_latest_posts_excerpt_length;
	return $block_core_latest_posts_excerpt_length;
}

/**
 * Renders the `core/latest-posts` block on server.
 *
 * @param array $attributes The block attributes.
 *
 * @return string Returns the post content with latest posts added.
 */
<<<<<<< HEAD
function render_block_core_latest_posts($attributes)
{
=======
function render_block_core_latest_posts( $attributes ) {
>>>>>>> D-12-Dien
	global $post, $block_core_latest_posts_excerpt_length;

	$args = array(
		'posts_per_page'      => $attributes['postsToShow'],
		'post_status'         => 'publish',
		'order'               => $attributes['order'],
		'orderby'             => $attributes['orderBy'],
		'ignore_sticky_posts' => true,
		'no_found_rows'       => true,
	);

	$block_core_latest_posts_excerpt_length = $attributes['excerptLength'];
<<<<<<< HEAD
	add_filter('excerpt_length', 'block_core_latest_posts_get_excerpt_length', 20);

	$filter_latest_posts_excerpt_more = static function ($more) use ($attributes) {
		$use_excerpt = 'excerpt' === $attributes['displayPostContentRadio'];
		/* translators: %1$s is a URL to a post, excerpt truncation character, default … */
		return $use_excerpt ? sprintf(__(' … <a href="%1$s" rel="noopener noreferrer">Read more</a>'), esc_url(get_permalink())) : $more;
	};

	add_filter('excerpt_more', $filter_latest_posts_excerpt_more);

	if (isset($attributes['categories'])) {
		$args['category__in'] = array_column($attributes['categories'], 'id');
	}
	if (isset($attributes['selectedAuthor'])) {
=======
	add_filter( 'excerpt_length', 'block_core_latest_posts_get_excerpt_length', 20 );

	$filter_latest_posts_excerpt_more = static function( $more ) use ( $attributes ) {
		$use_excerpt = 'excerpt' === $attributes['displayPostContentRadio'];
		/* translators: %1$s is a URL to a post, excerpt truncation character, default … */
		return $use_excerpt ? sprintf( __( ' … <a href="%1$s" rel="noopener noreferrer">Read more</a>' ), esc_url( get_permalink() ) ) : $more;
	};

	add_filter( 'excerpt_more', $filter_latest_posts_excerpt_more );

	if ( isset( $attributes['categories'] ) ) {
		$args['category__in'] = array_column( $attributes['categories'], 'id' );
	}
	if ( isset( $attributes['selectedAuthor'] ) ) {
>>>>>>> D-12-Dien
		$args['author'] = $attributes['selectedAuthor'];
	}

	$query        = new WP_Query();
<<<<<<< HEAD
	$recent_posts = $query->query($args);

	if (isset($attributes['displayFeaturedImage']) && $attributes['displayFeaturedImage']) {
		update_post_thumbnail_cache($query);
=======
	$recent_posts = $query->query( $args );

	if ( isset( $attributes['displayFeaturedImage'] ) && $attributes['displayFeaturedImage'] ) {
		update_post_thumbnail_cache( $query );
>>>>>>> D-12-Dien
	}

	$list_items_markup = '';

<<<<<<< HEAD
	foreach ($recent_posts as $post) {
		$post_link = esc_url(get_permalink($post));
		$title     = get_the_title($post);

		if (!$title) {
			$title = __('(no title)');
=======
	foreach ( $recent_posts as $post ) {
		$post_link = esc_url( get_permalink( $post ) );
		$title     = get_the_title( $post );

		if ( ! $title ) {
			$title = __( '(no title)' );
>>>>>>> D-12-Dien
		}

		$list_items_markup .= '<li>';

<<<<<<< HEAD
		if ($attributes['displayFeaturedImage'] && has_post_thumbnail($post)) {
			$image_style = '';
			if (isset($attributes['featuredImageSizeWidth'])) {
				$image_style .= sprintf('max-width:%spx;', $attributes['featuredImageSizeWidth']);
			}
			if (isset($attributes['featuredImageSizeHeight'])) {
				$image_style .= sprintf('max-height:%spx;', $attributes['featuredImageSizeHeight']);
			}

			$image_classes = 'wp-block-latest-posts__featured-image';
			if (isset($attributes['featuredImageAlign'])) {
=======
		if ( $attributes['displayFeaturedImage'] && has_post_thumbnail( $post ) ) {
			$image_style = '';
			if ( isset( $attributes['featuredImageSizeWidth'] ) ) {
				$image_style .= sprintf( 'max-width:%spx;', $attributes['featuredImageSizeWidth'] );
			}
			if ( isset( $attributes['featuredImageSizeHeight'] ) ) {
				$image_style .= sprintf( 'max-height:%spx;', $attributes['featuredImageSizeHeight'] );
			}

			$image_classes = 'wp-block-latest-posts__featured-image';
			if ( isset( $attributes['featuredImageAlign'] ) ) {
>>>>>>> D-12-Dien
				$image_classes .= ' align' . $attributes['featuredImageAlign'];
			}

			$featured_image = get_the_post_thumbnail(
				$post,
				$attributes['featuredImageSizeSlug'],
				array(
<<<<<<< HEAD
					'style' => esc_attr($image_style),
				)
			);
			if ($attributes['addLinkToFeaturedImage']) {
				$featured_image = sprintf(
					'<a href="%1$s" aria-label="%2$s">%3$s</a>',
					esc_url($post_link),
					esc_attr($title),
=======
					'style' => esc_attr( $image_style ),
				)
			);
			if ( $attributes['addLinkToFeaturedImage'] ) {
				$featured_image = sprintf(
					'<a href="%1$s" aria-label="%2$s">%3$s</a>',
					esc_url( $post_link ),
					esc_attr( $title ),
>>>>>>> D-12-Dien
					$featured_image
				);
			}
			$list_items_markup .= sprintf(
				'<div class="%1$s">%2$s</div>',
<<<<<<< HEAD
				esc_attr($image_classes),
=======
				esc_attr( $image_classes ),
>>>>>>> D-12-Dien
				$featured_image
			);
		}

		$list_items_markup .= sprintf(
<<<<<<< HEAD
			'<a class="wp-block-latest-posts__post-title" 
			href="%1$s"><i class="fa fa-angle-double-right"></i>%2$s</a>',
			esc_url($post_link),
			$title
		);

		if (isset($attributes['displayAuthor']) && $attributes['displayAuthor']) {
			$author_display_name = get_the_author_meta('display_name', $post->post_author);

			/* translators: byline. %s: current author. */
			$byline = sprintf(__('by %s'), $author_display_name);

			if (!empty($author_display_name)) {
=======
			'<a class="wp-block-latest-posts__post-title" href="%1$s">%2$s</a>',
			esc_url( $post_link ),
			$title
		);

		if ( isset( $attributes['displayAuthor'] ) && $attributes['displayAuthor'] ) {
			$author_display_name = get_the_author_meta( 'display_name', $post->post_author );

			/* translators: byline. %s: current author. */
			$byline = sprintf( __( 'by %s' ), $author_display_name );

			if ( ! empty( $author_display_name ) ) {
>>>>>>> D-12-Dien
				$list_items_markup .= sprintf(
					'<div class="wp-block-latest-posts__post-author">%1$s</div>',
					$byline
				);
			}
		}

<<<<<<< HEAD
		if (isset($attributes['displayPostDate']) && $attributes['displayPostDate']) {
			$list_items_markup .= sprintf(
				'<time datetime="%1$s" class="wp-block-latest-posts__post-date">%2$s</time>',
				esc_attr(get_the_date('c', $post)),
				get_the_date('', $post)
			);
		}

		if (
			isset($attributes['displayPostContent']) && $attributes['displayPostContent']
			&& isset($attributes['displayPostContentRadio']) && 'excerpt' === $attributes['displayPostContentRadio']
		) {

			$trimmed_excerpt = get_the_excerpt($post);

			if (post_password_required($post)) {
				$trimmed_excerpt = __('This content is password protected.');
=======
		if ( isset( $attributes['displayPostDate'] ) && $attributes['displayPostDate'] ) {
			$list_items_markup .= sprintf(
				'<time datetime="%1$s" class="wp-block-latest-posts__post-date">%2$s</time>',
				esc_attr( get_the_date( 'c', $post ) ),
				get_the_date( '', $post )
			);
		}

		if ( isset( $attributes['displayPostContent'] ) && $attributes['displayPostContent']
			&& isset( $attributes['displayPostContentRadio'] ) && 'excerpt' === $attributes['displayPostContentRadio'] ) {

			$trimmed_excerpt = get_the_excerpt( $post );

			if ( post_password_required( $post ) ) {
				$trimmed_excerpt = __( 'This content is password protected.' );
>>>>>>> D-12-Dien
			}

			$list_items_markup .= sprintf(
				'<div class="wp-block-latest-posts__post-excerpt">%1$s</div>',
				$trimmed_excerpt
			);
		}

<<<<<<< HEAD
		if (
			isset($attributes['displayPostContent']) && $attributes['displayPostContent']
			&& isset($attributes['displayPostContentRadio']) && 'full_post' === $attributes['displayPostContentRadio']
		) {

			$post_content = html_entity_decode($post->post_content, ENT_QUOTES, get_option('blog_charset'));

			if (post_password_required($post)) {
				$post_content = __('This content is password protected.');
=======
		if ( isset( $attributes['displayPostContent'] ) && $attributes['displayPostContent']
			&& isset( $attributes['displayPostContentRadio'] ) && 'full_post' === $attributes['displayPostContentRadio'] ) {

			$post_content = html_entity_decode( $post->post_content, ENT_QUOTES, get_option( 'blog_charset' ) );

			if ( post_password_required( $post ) ) {
				$post_content = __( 'This content is password protected.' );
>>>>>>> D-12-Dien
			}

			$list_items_markup .= sprintf(
				'<div class="wp-block-latest-posts__post-full-content">%1$s</div>',
<<<<<<< HEAD
				wp_kses_post($post_content)
=======
				wp_kses_post( $post_content )
>>>>>>> D-12-Dien
			);
		}

		$list_items_markup .= "</li>\n";
	}

<<<<<<< HEAD
	remove_filter('excerpt_length', 'block_core_latest_posts_get_excerpt_length', 20);

	$classes = array('wp-block-latest-posts__list list-unstyled quick-links');
	if (isset($attributes['postLayout']) && 'grid' === $attributes['postLayout']) {
		$classes[] = 'is-grid';
	}
	if (isset($attributes['columns']) && 'grid' === $attributes['postLayout']) {
		$classes[] = 'columns-' . $attributes['columns'];
	}
	if (isset($attributes['displayPostDate']) && $attributes['displayPostDate']) {
		$classes[] = 'has-dates';
	}
	if (isset($attributes['displayAuthor']) && $attributes['displayAuthor']) {
		$classes[] = 'has-author';
	}
	if (isset($attributes['style']['elements']['link']['color']['text'])) {
		$classes[] = 'has-link-color';
	}

	$wrapper_attributes = get_block_wrapper_attributes(array('class' => implode(' ', $classes)));
=======
	remove_filter( 'excerpt_length', 'block_core_latest_posts_get_excerpt_length', 20 );

	$classes = array( 'wp-block-latest-posts__list' );
	if ( isset( $attributes['postLayout'] ) && 'grid' === $attributes['postLayout'] ) {
		$classes[] = 'is-grid';
	}
	if ( isset( $attributes['columns'] ) && 'grid' === $attributes['postLayout'] ) {
		$classes[] = 'columns-' . $attributes['columns'];
	}
	if ( isset( $attributes['displayPostDate'] ) && $attributes['displayPostDate'] ) {
		$classes[] = 'has-dates';
	}
	if ( isset( $attributes['displayAuthor'] ) && $attributes['displayAuthor'] ) {
		$classes[] = 'has-author';
	}
	if ( isset( $attributes['style']['elements']['link']['color']['text'] ) ) {
		$classes[] = 'has-link-color';
	}

	$wrapper_attributes = get_block_wrapper_attributes( array( 'class' => implode( ' ', $classes ) ) );
>>>>>>> D-12-Dien

	return sprintf(
		'<ul %1$s>%2$s</ul>',
		$wrapper_attributes,
		$list_items_markup
	);
}

/**
 * Registers the `core/latest-posts` block on server.
 */
<<<<<<< HEAD
function register_block_core_latest_posts()
{
=======
function register_block_core_latest_posts() {
>>>>>>> D-12-Dien
	register_block_type_from_metadata(
		__DIR__ . '/latest-posts',
		array(
			'render_callback' => 'render_block_core_latest_posts',
		)
	);
}
<<<<<<< HEAD
add_action('init', 'register_block_core_latest_posts');
=======
add_action( 'init', 'register_block_core_latest_posts' );
>>>>>>> D-12-Dien

/**
 * Handles outdated versions of the `core/latest-posts` block by converting
 * attribute `categories` from a numeric string to an array with key `id`.
 *
 * This is done to accommodate the changes introduced in #20781 that sought to
 * add support for multiple categories to the block. However, given that this
 * block is dynamic, the usual provisions for block migration are insufficient,
 * as they only act when a block is loaded in the editor.
 *
 * TODO: Remove when and if the bottom client-side deprecation for this block
 * is removed.
 *
 * @param array $block A single parsed block object.
 *
 * @return array The migrated block object.
 */
<<<<<<< HEAD
function block_core_latest_posts_migrate_categories($block)
{
	if (
		'core/latest-posts' === $block['blockName'] &&
		!empty($block['attrs']['categories']) &&
		is_string($block['attrs']['categories'])
	) {
		$block['attrs']['categories'] = array(
			array('id' => absint($block['attrs']['categories'])),
=======
function block_core_latest_posts_migrate_categories( $block ) {
	if (
		'core/latest-posts' === $block['blockName'] &&
		! empty( $block['attrs']['categories'] ) &&
		is_string( $block['attrs']['categories'] )
	) {
		$block['attrs']['categories'] = array(
			array( 'id' => absint( $block['attrs']['categories'] ) ),
>>>>>>> D-12-Dien
		);
	}

	return $block;
}
<<<<<<< HEAD
add_filter('render_block_data', 'block_core_latest_posts_migrate_categories');
=======
add_filter( 'render_block_data', 'block_core_latest_posts_migrate_categories' );
>>>>>>> D-12-Dien
