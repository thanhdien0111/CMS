<?php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> D-12-Dien
=======
session_start();
>>>>>>> D-01-LanAnh
=======
>>>>>>> D-29-Oanh
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
<<<<<<< HEAD
<<<<<<< HEAD
function block_core_latest_posts_get_excerpt_length()
{
=======
function block_core_latest_posts_get_excerpt_length() {
>>>>>>> D-12-Dien
=======
function block_core_latest_posts_get_excerpt_length()
{
>>>>>>> D-01-LanAnh
=======
function block_core_latest_posts_get_excerpt_length() {
>>>>>>> D-29-Oanh
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
<<<<<<< HEAD
<<<<<<< HEAD
function render_block_core_latest_posts($attributes)
{
=======
function render_block_core_latest_posts( $attributes ) {
>>>>>>> D-12-Dien
=======
function render_block_core_latest_posts($attributes)
{
>>>>>>> D-01-LanAnh
=======
function render_block_core_latest_posts( $attributes ) {
>>>>>>> D-29-Oanh
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
<<<<<<< HEAD
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
=======
	add_filter('excerpt_length', 'block_core_latest_posts_get_excerpt_length', 20);
>>>>>>> D-01-LanAnh

	$filter_latest_posts_excerpt_more = static function ($more) use ($attributes) {
		$use_excerpt = 'excerpt' === $attributes['displayPostContentRadio'];
		/* translators: %1$s is a URL to a post, excerpt truncation character, default … */
		return $use_excerpt ? sprintf(__(' … <a href="%1$s" rel="noopener noreferrer">Read more</a>'), esc_url(get_permalink())) : $more;
	};

	add_filter('excerpt_more', $filter_latest_posts_excerpt_more);

	if (isset($attributes['categories'])) {
		$args['category__in'] = array_column($attributes['categories'], 'id');
	}
<<<<<<< HEAD
	if ( isset( $attributes['selectedAuthor'] ) ) {
>>>>>>> D-12-Dien
=======
	if (isset($attributes['selectedAuthor'])) {
>>>>>>> D-01-LanAnh
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
>>>>>>> D-29-Oanh
		$args['author'] = $attributes['selectedAuthor'];
	}

	$query        = new WP_Query();
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
	$recent_posts = $query->query($args);

	if (isset($attributes['displayFeaturedImage']) && $attributes['displayFeaturedImage']) {
		update_post_thumbnail_cache($query);
=======
=======
>>>>>>> D-29-Oanh
	$recent_posts = $query->query( $args );

	if ( isset( $attributes['displayFeaturedImage'] ) && $attributes['displayFeaturedImage'] ) {
		update_post_thumbnail_cache( $query );
<<<<<<< HEAD
>>>>>>> D-12-Dien
=======
	$recent_posts = $query->query($args);

	if (isset($attributes['displayFeaturedImage']) && $attributes['displayFeaturedImage']) {
		update_post_thumbnail_cache($query);
>>>>>>> D-01-LanAnh
	}

	$list_items_markup = '';
	$list_items_minh = '';
	$list_latest_post = '';
	$list_posts_title = '';
	foreach ($recent_posts as $post) {
		$post_link = esc_url(get_permalink($post));
		$title     = get_the_title($post);

<<<<<<< HEAD
<<<<<<< HEAD
	foreach ($recent_posts as $post) {
		$post_link = esc_url(get_permalink($post));
		$title     = get_the_title($post);

		if (!$title) {
			$title = __('(no title)');
=======
=======
	}

	$list_items_markup = '';

>>>>>>> D-29-Oanh
	foreach ( $recent_posts as $post ) {
		$post_link = esc_url( get_permalink( $post ) );
		$title     = get_the_title( $post );

		if ( ! $title ) {
			$title = __( '(no title)' );
<<<<<<< HEAD
>>>>>>> D-12-Dien
=======
		if (!$title) {
			$title = __('(no title)');
>>>>>>> D-01-LanAnh
		}

		$list_items_markup .= '<li>';
		$list_items_minh .= '<li>';
		$list_posts_title .= '<li>';

<<<<<<< HEAD
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
=======
		if ($attributes['displayFeaturedImage'] && has_post_thumbnail($post)) {
>>>>>>> D-01-LanAnh
			$image_style = '';
			if (isset($attributes['featuredImageSizeWidth'])) {
				$image_style .= sprintf('max-width:%spx;', $attributes['featuredImageSizeWidth']);
			}
			if (isset($attributes['featuredImageSizeHeight'])) {
				$image_style .= sprintf('max-height:%spx;', $attributes['featuredImageSizeHeight']);
			}

			$image_classes = 'wp-block-latest-posts__featured-image';
<<<<<<< HEAD
			if ( isset( $attributes['featuredImageAlign'] ) ) {
>>>>>>> D-12-Dien
=======
			if (isset($attributes['featuredImageAlign'])) {
>>>>>>> D-01-LanAnh
=======
		}

		$list_items_markup .= '<li>';

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
>>>>>>> D-29-Oanh
				$image_classes .= ' align' . $attributes['featuredImageAlign'];
			}

			$featured_image = get_the_post_thumbnail(
				$post,
				$attributes['featuredImageSizeSlug'],
				array(
<<<<<<< HEAD
<<<<<<< HEAD
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
=======
					'style' => esc_attr($image_style),
>>>>>>> D-01-LanAnh
				)
			);
			if ($attributes['addLinkToFeaturedImage']) {
				$featured_image = sprintf(
					'<a href="%1$s" aria-label="%2$s">%3$s</a>',
<<<<<<< HEAD
					esc_url( $post_link ),
					esc_attr( $title ),
>>>>>>> D-12-Dien
=======
					esc_url($post_link),
					esc_attr($title),
>>>>>>> D-01-LanAnh
=======
					'style' => esc_attr( $image_style ),
				)
			);
			if ( $attributes['addLinkToFeaturedImage'] ) {
				$featured_image = sprintf(
					'<a href="%1$s" aria-label="%2$s">%3$s</a>',
					esc_url( $post_link ),
					esc_attr( $title ),
>>>>>>> D-29-Oanh
					$featured_image
				);
			}
			$list_items_markup .= sprintf(
				'<div class="%1$s">%2$s</div>',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
				esc_attr($image_classes),
=======
				esc_attr( $image_classes ),
>>>>>>> D-12-Dien
=======
				esc_attr($image_classes),
				$featured_image
			);
			$list_items_minh .= sprintf(
				'<div class="%1$s">%2$s</div>',
				esc_attr($image_classes),
				$featured_image
			);
			$list_latest_post .= sprintf(
				'<div class="%1$s">%2$s</div>',
				esc_attr($image_classes),
				$featured_image
			);
			$list_posts_title .= sprintf(
				'<div class="%1$s">%2$s</div>',
				esc_attr($image_classes),
>>>>>>> D-01-LanAnh
=======
				esc_attr( $image_classes ),
>>>>>>> D-29-Oanh
				$featured_image
			);
		}

<<<<<<< HEAD
<<<<<<< HEAD
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
=======
		/* -- Module 10 -- */
		// class="wp-block-categories-list list-unstyled quick-links wp-block-categories"
		$post_day = get_the_date('d', $post->ID);
		$post_month = get_the_date('m', $post->ID);
		$post_year = get_the_date('y', $post->ID);
		$list_items_minh .= '<div class="calender">
		<div class="day">' . $post_day . '</div>
		<div class="month">' . $post_month . '</div>
		</div>
		<div class="year">' . $post_year . '</div>' . sprintf(
			'<div class="year"><a class="wp-block-latest-posts__post-title recent-post" href="%1$s">%2$s</a></div>',
			esc_url($post_link),
>>>>>>> D-01-LanAnh
			$title
		);

		// icon mũi tên bên last post
		$list_items_markup .= sprintf(
			'<a href="%1$s"><i class="fa fa-angle-double-right"></i>%2$s</a>',
			esc_url($post_link),
			$title
		);

		$post_month_latest = get_the_date('M', $post->ID);
		$post_year_latest = get_the_date('Y', $post->ID);
		$post = get_post();
		$post_id = get_the_ID();
		$post_content = get_post_field('post_content', $post_id);

		$list_posts_title .= sprintf(
			'<a href="%1$s">%2$s</a>',
			esc_url($post_link),
			$title
		);
		$plain_text_content = strip_tags($post_content);
		$max_length = 300;
		if (strlen($plain_text_content) > $max_length) {
			$last_space = strrpos(substr($plain_text_content, 0, $max_length), ' ');
			if ($last_space !== false) {
				$plain_text_content = substr($plain_text_content, 0, $last_space);
			}
		}
		$list_latest_post .= sprintf(
			'<li>
				<a href="%1$s">%2$s</a>
				<a href="#" class="float-right">' . $post_day . ' ' . $post_month_latest . ', ' . $post_year_latest . '</a>
				<p>' . $plain_text_content . '.....</p>
			</li>
			',
			esc_url($post_link),
			$title
		);
		$_SESSION['recent-posts'] = $list_items_minh;
		$_SESSION['latest-posts'] = $list_latest_post;
		/* -- Module 10 -- */
		if (isset($attributes['displayAuthor']) && $attributes['displayAuthor']) {
			$author_display_name = get_the_author_meta('display_name', $post->post_author);

			/* translators: byline. %s: current author. */
			$byline = sprintf(__('by %s'), $author_display_name);

<<<<<<< HEAD
			if ( ! empty( $author_display_name ) ) {
>>>>>>> D-12-Dien
=======
			if (!empty($author_display_name)) {
>>>>>>> D-01-LanAnh
=======
		$list_items_markup .= sprintf(
			'<a class="wp-block-latest-posts__post-title" href="%1$s">%2$s</a>',
			esc_url( $post_link ),
			$title
		);

		if ( isset( $attributes['displayAuthor'] ) && $attributes['displayAuthor'] ) {
			$author_display_name = get_the_author_meta( 'display_name', $post->post_author );

			/* translators: byline. %s: current author. */
			$byline = sprintf( __( 'by %s' ), $author_display_name );

			if ( ! empty( $author_display_name ) ) {
>>>>>>> D-29-Oanh
				$list_items_markup .= sprintf(
					'<div class="wp-block-latest-posts__post-author">%1$s</div>',
					$byline
				);
			}
		}

<<<<<<< HEAD
<<<<<<< HEAD
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
=======
		if (isset($attributes['displayPostDate']) && $attributes['displayPostDate']) {
>>>>>>> D-01-LanAnh
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

<<<<<<< HEAD
			if ( post_password_required( $post ) ) {
				$trimmed_excerpt = __( 'This content is password protected.' );
>>>>>>> D-12-Dien
=======
			if (post_password_required($post)) {
				$trimmed_excerpt = __('This content is password protected.');
>>>>>>> D-01-LanAnh
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
>>>>>>> D-29-Oanh
			}

			$list_items_markup .= sprintf(
				'<div class="wp-block-latest-posts__post-excerpt">%1$s</div>',
				$trimmed_excerpt
			);
		}

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> D-01-LanAnh
		if (
			isset($attributes['displayPostContent']) && $attributes['displayPostContent']
			&& isset($attributes['displayPostContentRadio']) && 'full_post' === $attributes['displayPostContentRadio']
		) {
<<<<<<< HEAD

			$post_content = html_entity_decode($post->post_content, ENT_QUOTES, get_option('blog_charset'));

			if (post_password_required($post)) {
				$post_content = __('This content is password protected.');
=======
		if ( isset( $attributes['displayPostContent'] ) && $attributes['displayPostContent']
			&& isset( $attributes['displayPostContentRadio'] ) && 'full_post' === $attributes['displayPostContentRadio'] ) {
=======
>>>>>>> D-01-LanAnh

			$post_content = html_entity_decode($post->post_content, ENT_QUOTES, get_option('blog_charset'));

<<<<<<< HEAD
			if ( post_password_required( $post ) ) {
				$post_content = __( 'This content is password protected.' );
>>>>>>> D-12-Dien
=======
			if (post_password_required($post)) {
				$post_content = __('This content is password protected.');
>>>>>>> D-01-LanAnh
=======
		if ( isset( $attributes['displayPostContent'] ) && $attributes['displayPostContent']
			&& isset( $attributes['displayPostContentRadio'] ) && 'full_post' === $attributes['displayPostContentRadio'] ) {

			$post_content = html_entity_decode( $post->post_content, ENT_QUOTES, get_option( 'blog_charset' ) );

			if ( post_password_required( $post ) ) {
				$post_content = __( 'This content is password protected.' );
>>>>>>> D-29-Oanh
			}

			$list_items_markup .= sprintf(
				'<div class="wp-block-latest-posts__post-full-content">%1$s</div>',
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
				wp_kses_post($post_content)
=======
				wp_kses_post( $post_content )
>>>>>>> D-12-Dien
=======
				wp_kses_post($post_content)
>>>>>>> D-01-LanAnh
=======
				wp_kses_post( $post_content )
>>>>>>> D-29-Oanh
			);
		}

		$list_items_markup .= "</li>\n";
<<<<<<< HEAD
		$list_posts_title .= "</li>\n";
		// Module 12
		$_SESSION['list-posts-title'] = $list_posts_title;
	}

<<<<<<< HEAD
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
=======
	remove_filter('excerpt_length', 'block_core_latest_posts_get_excerpt_length', 20);
>>>>>>> D-01-LanAnh

	$classes = array('wp-block-categories-list list-unstyled quick-links wp-block-categories');
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

<<<<<<< HEAD
	$wrapper_attributes = get_block_wrapper_attributes( array( 'class' => implode( ' ', $classes ) ) );
>>>>>>> D-12-Dien
=======
	$wrapper_attributes = get_block_wrapper_attributes(array('class' => implode(' ', $classes)));
>>>>>>> D-01-LanAnh
=======
	}

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
>>>>>>> D-29-Oanh

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
<<<<<<< HEAD
<<<<<<< HEAD
function register_block_core_latest_posts()
{
=======
function register_block_core_latest_posts() {
>>>>>>> D-12-Dien
=======
function register_block_core_latest_posts()
{
>>>>>>> D-01-LanAnh
=======
function register_block_core_latest_posts() {
>>>>>>> D-29-Oanh
	register_block_type_from_metadata(
		__DIR__ . '/latest-posts',
		array(
			'render_callback' => 'render_block_core_latest_posts',
		)
	);
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
add_action('init', 'register_block_core_latest_posts');
=======
add_action( 'init', 'register_block_core_latest_posts' );
>>>>>>> D-12-Dien
=======
add_action('init', 'register_block_core_latest_posts');
>>>>>>> D-01-LanAnh
=======
add_action( 'init', 'register_block_core_latest_posts' );
>>>>>>> D-29-Oanh

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
<<<<<<< HEAD
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
=======
function block_core_latest_posts_migrate_categories($block)
{
>>>>>>> D-01-LanAnh
	if (
		'core/latest-posts' === $block['blockName'] &&
		!empty($block['attrs']['categories']) &&
		is_string($block['attrs']['categories'])
	) {
		$block['attrs']['categories'] = array(
<<<<<<< HEAD
			array( 'id' => absint( $block['attrs']['categories'] ) ),
>>>>>>> D-12-Dien
=======
			array('id' => absint($block['attrs']['categories'])),
>>>>>>> D-01-LanAnh
=======
function block_core_latest_posts_migrate_categories( $block ) {
	if (
		'core/latest-posts' === $block['blockName'] &&
		! empty( $block['attrs']['categories'] ) &&
		is_string( $block['attrs']['categories'] )
	) {
		$block['attrs']['categories'] = array(
			array( 'id' => absint( $block['attrs']['categories'] ) ),
>>>>>>> D-29-Oanh
		);
	}

	return $block;
}
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
add_filter('render_block_data', 'block_core_latest_posts_migrate_categories');
=======
add_filter( 'render_block_data', 'block_core_latest_posts_migrate_categories' );
>>>>>>> D-12-Dien
=======
add_filter('render_block_data', 'block_core_latest_posts_migrate_categories');
>>>>>>> D-01-LanAnh
=======
add_filter( 'render_block_data', 'block_core_latest_posts_migrate_categories' );
>>>>>>> D-29-Oanh
