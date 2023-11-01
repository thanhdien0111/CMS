<?php
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> D-12-Dien
=======
>>>>>>> D-29-Oanh
/**
 * Taxonomy API: Walker_Category class
 *
 * @package WordPress
 * @subpackage Template
 * @since 4.4.0
 */

/**
 * Core class used to create an HTML list of categories.
 *
 * @since 2.1.0
 *
 * @see Walker
 */
<<<<<<< HEAD
<<<<<<< HEAD
class Walker_Category extends Walker
{
=======
class Walker_Category extends Walker {
>>>>>>> D-12-Dien
=======
class Walker_Category extends Walker {
>>>>>>> D-29-Oanh

	/**
	 * What the class handles.
	 *
	 * @since 2.1.0
	 * @var string
	 *
	 * @see Walker::$tree_type
	 */
	public $tree_type = 'category';

	/**
	 * Database fields to use.
	 *
	 * @since 2.1.0
	 * @var string[]
	 *
	 * @see Walker::$db_fields
	 * @todo Decouple this
	 */
	public $db_fields = array(
		'parent' => 'parent',
		'id'     => 'term_id',
	);

	/**
	 * Starts the list before the elements are added.
	 *
	 * @since 2.1.0
	 *
	 * @see Walker::start_lvl()
	 *
	 * @param string $output Used to append additional content. Passed by reference.
	 * @param int    $depth  Optional. Depth of category. Used for tab indentation. Default 0.
	 * @param array  $args   Optional. An array of arguments. Will only append content if style argument
	 *                       value is 'list'. See wp_list_categories(). Default empty array.
	 */
<<<<<<< HEAD
<<<<<<< HEAD
	public function start_lvl(&$output, $depth = 0, $args = array())
	{
		if ('list' !== $args['style']) {
			return;
		}

		$indent  = str_repeat("\t", $depth);
=======
=======
>>>>>>> D-29-Oanh
	public function start_lvl( &$output, $depth = 0, $args = array() ) {
		if ( 'list' !== $args['style'] ) {
			return;
		}

		$indent  = str_repeat( "\t", $depth );
<<<<<<< HEAD
>>>>>>> D-12-Dien
=======
>>>>>>> D-29-Oanh
		$output .= "$indent<ul class='children'>\n";
	}

	/**
	 * Ends the list of after the elements are added.
	 *
	 * @since 2.1.0
	 *
	 * @see Walker::end_lvl()
	 *
	 * @param string $output Used to append additional content. Passed by reference.
	 * @param int    $depth  Optional. Depth of category. Used for tab indentation. Default 0.
	 * @param array  $args   Optional. An array of arguments. Will only append content if style argument
	 *                       value is 'list'. See wp_list_categories(). Default empty array.
	 */
<<<<<<< HEAD
<<<<<<< HEAD
	public function end_lvl(&$output, $depth = 0, $args = array())
	{
		if ('list' !== $args['style']) {
			return;
		}

		$indent  = str_repeat("\t", $depth);
=======
=======
>>>>>>> D-29-Oanh
	public function end_lvl( &$output, $depth = 0, $args = array() ) {
		if ( 'list' !== $args['style'] ) {
			return;
		}

		$indent  = str_repeat( "\t", $depth );
<<<<<<< HEAD
>>>>>>> D-12-Dien
=======
>>>>>>> D-29-Oanh
		$output .= "$indent</ul>\n";
	}

	/**
	 * Starts the element output.
	 *
	 * @since 2.1.0
	 * @since 5.9.0 Renamed `$category` to `$data_object` and `$id` to `$current_object_id`
	 *              to match parent class for PHP 8 named parameter support.
	 *
	 * @see Walker::start_el()
	 *
	 * @param string  $output            Used to append additional content (passed by reference).
	 * @param WP_Term $data_object       Category data object.
	 * @param int     $depth             Optional. Depth of category in reference to parents. Default 0.
	 * @param array   $args              Optional. An array of arguments. See wp_list_categories().
	 *                                   Default empty array.
	 * @param int     $current_object_id Optional. ID of the current category. Default 0.
	 */
<<<<<<< HEAD
<<<<<<< HEAD
	public function start_el(&$output, $data_object, $depth = 0, $args = array(), $current_object_id = 0)
	{
=======
	public function start_el( &$output, $data_object, $depth = 0, $args = array(), $current_object_id = 0 ) {
>>>>>>> D-12-Dien
=======
	public function start_el( &$output, $data_object, $depth = 0, $args = array(), $current_object_id = 0 ) {
>>>>>>> D-29-Oanh
		// Restores the more descriptive, specific name for use within this method.
		$category = $data_object;

		/** This filter is documented in wp-includes/category-template.php */
<<<<<<< HEAD
<<<<<<< HEAD
		$cat_name = apply_filters('list_cats', esc_attr($category->name), $category);

		// Don't generate an element if the category name is empty.
		if ('' === $cat_name) {
=======
=======
>>>>>>> D-29-Oanh
		$cat_name = apply_filters( 'list_cats', esc_attr( $category->name ), $category );

		// Don't generate an element if the category name is empty.
		if ( '' === $cat_name ) {
<<<<<<< HEAD
>>>>>>> D-12-Dien
=======
>>>>>>> D-29-Oanh
			return;
		}

		$atts         = array();
<<<<<<< HEAD
<<<<<<< HEAD
		$atts['href'] = get_term_link($category);

		if ($args['use_desc_for_title'] && !empty($category->description)) {
=======
		$atts['href'] = get_term_link( $category );

		if ( $args['use_desc_for_title'] && ! empty( $category->description ) ) {
>>>>>>> D-12-Dien
=======
		$atts['href'] = get_term_link( $category );

		if ( $args['use_desc_for_title'] && ! empty( $category->description ) ) {
>>>>>>> D-29-Oanh
			/**
			 * Filters the category description for display.
			 *
			 * @since 1.2.0
			 *
			 * @param string  $description Category description.
			 * @param WP_Term $category    Category object.
			 */
<<<<<<< HEAD
<<<<<<< HEAD
			$atts['title'] = strip_tags(apply_filters('category_description', $category->description, $category));
=======
			$atts['title'] = strip_tags( apply_filters( 'category_description', $category->description, $category ) );
>>>>>>> D-12-Dien
=======
			$atts['title'] = strip_tags( apply_filters( 'category_description', $category->description, $category ) );
>>>>>>> D-29-Oanh
		}

		/**
		 * Filters the HTML attributes applied to a category list item's anchor element.
		 *
		 * @since 5.2.0
		 *
		 * @param array   $atts {
		 *     The HTML attributes applied to the list item's `<a>` element, empty strings are ignored.
		 *
		 *     @type string $href  The href attribute.
		 *     @type string $title The title attribute.
		 * }
		 * @param WP_Term $category          Term data object.
		 * @param int     $depth             Depth of category, used for padding.
		 * @param array   $args              An array of arguments.
		 * @param int     $current_object_id ID of the current category.
		 */
<<<<<<< HEAD
<<<<<<< HEAD
		$atts = apply_filters('category_list_link_attributes', $atts, $category, $depth, $args, $current_object_id);

		$attributes = '';
		foreach ($atts as $attr => $value) {
			if (is_scalar($value) && '' !== $value && false !== $value) {
				$value       = ('href' === $attr) ? esc_url($value) : esc_attr($value);
=======
=======
>>>>>>> D-29-Oanh
		$atts = apply_filters( 'category_list_link_attributes', $atts, $category, $depth, $args, $current_object_id );

		$attributes = '';
		foreach ( $atts as $attr => $value ) {
			if ( is_scalar( $value ) && '' !== $value && false !== $value ) {
				$value       = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
<<<<<<< HEAD
>>>>>>> D-12-Dien
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}
		// đường thẳng gạch dưới mỗi categories
		$link = sprintf(
<<<<<<< HEAD
<<<<<<< HEAD
			'<a%s><i class="fa fa-angle-double-right"></i>%s</a>',
=======
			'<a%s>%s</a>',
>>>>>>> D-12-Dien
=======
			'<div class="border-bottom"><a%s>%s</a></div>',
>>>>>>> D-01-LanAnh
=======
				$attributes .= ' ' . $attr . '="' . $value . '"';
			}
		}

		$link = sprintf(
			'<a%s>%s</a>',
>>>>>>> D-29-Oanh
			$attributes,
			$cat_name
		);

<<<<<<< HEAD
<<<<<<< HEAD
		if (!empty($args['feed_image']) || !empty($args['feed'])) {
			$link .= ' ';

			if (empty($args['feed_image'])) {
				$link .= '(';
			}

			$link .= '<a href="' . esc_url(get_term_feed_link($category, $category->taxonomy, $args['feed_type'])) . '"';

			if (empty($args['feed'])) {
				/* translators: %s: Category name. */
				$alt = ' alt="' . sprintf(__('Feed for all posts filed under %s'), $cat_name) . '"';
			} else {
				$alt   = ' alt="' . $args['feed'] . '"';
				$name  = $args['feed'];
				$link .= empty($args['title']) ? '' : $args['title'];
=======
=======
>>>>>>> D-29-Oanh
		if ( ! empty( $args['feed_image'] ) || ! empty( $args['feed'] ) ) {
			$link .= ' ';

			if ( empty( $args['feed_image'] ) ) {
				$link .= '(';
			}

			$link .= '<a href="' . esc_url( get_term_feed_link( $category, $category->taxonomy, $args['feed_type'] ) ) . '"';

			if ( empty( $args['feed'] ) ) {
				/* translators: %s: Category name. */
				$alt = ' alt="' . sprintf( __( 'Feed for all posts filed under %s' ), $cat_name ) . '"';
			} else {
				$alt   = ' alt="' . $args['feed'] . '"';
				$name  = $args['feed'];
				$link .= empty( $args['title'] ) ? '' : $args['title'];
<<<<<<< HEAD
>>>>>>> D-12-Dien
=======
>>>>>>> D-29-Oanh
			}

			$link .= '>';

<<<<<<< HEAD
<<<<<<< HEAD
			if (empty($args['feed_image'])) {
				$link .= $name;
			} else {
				$link .= "<img src='" . esc_url($args['feed_image']) . "'$alt" . ' />';
=======
=======
>>>>>>> D-29-Oanh
			if ( empty( $args['feed_image'] ) ) {
				$link .= $name;
			} else {
				$link .= "<img src='" . esc_url( $args['feed_image'] ) . "'$alt" . ' />';
<<<<<<< HEAD
>>>>>>> D-12-Dien
=======
>>>>>>> D-29-Oanh
			}

			$link .= '</a>';

<<<<<<< HEAD
<<<<<<< HEAD
			if (empty($args['feed_image'])) {
=======
			if ( empty( $args['feed_image'] ) ) {
>>>>>>> D-12-Dien
=======
			if ( empty( $args['feed_image'] ) ) {
>>>>>>> D-29-Oanh
				$link .= ')';
			}
		}

<<<<<<< HEAD
<<<<<<< HEAD
		if (!empty($args['show_count'])) {
			$link .= ' (' . number_format_i18n($category->count) . ')';
		}

		if ('list' === $args['style']) {
=======
=======
>>>>>>> D-29-Oanh
		if ( ! empty( $args['show_count'] ) ) {
			$link .= ' (' . number_format_i18n( $category->count ) . ')';
		}

		if ( 'list' === $args['style'] ) {
<<<<<<< HEAD
>>>>>>> D-12-Dien
			$output     .= "\t<li";
			$css_classes = array(
				'category-list cat-item',
				'cat-item-' . $category->term_id,
			);

<<<<<<< HEAD
			if (!empty($args['current_category'])) {
=======
			if ( ! empty( $args['current_category'] ) ) {
>>>>>>> D-12-Dien
=======
			$output     .= "\t<li";
			$css_classes = array(
				'cat-item',
				'cat-item-' . $category->term_id,
			);

			if ( ! empty( $args['current_category'] ) ) {
>>>>>>> D-29-Oanh
				// 'current_category' can be an array, so we use `get_terms()`.
				$_current_terms = get_terms(
					array(
						'taxonomy'   => $category->taxonomy,
						'include'    => $args['current_category'],
						'hide_empty' => false,
					)
				);

<<<<<<< HEAD
<<<<<<< HEAD
				foreach ($_current_terms as $_current_term) {
					if ($category->term_id === $_current_term->term_id) {
						$css_classes[] = 'current-cat';
						$link          = str_replace('<a', '<a aria-current="page"', $link);
					} elseif ($category->term_id === $_current_term->parent) {
						$css_classes[] = 'current-cat-parent';
					}

					while ($_current_term->parent) {
						if ($category->term_id === $_current_term->parent) {
=======
=======
>>>>>>> D-29-Oanh
				foreach ( $_current_terms as $_current_term ) {
					if ( $category->term_id === $_current_term->term_id ) {
						$css_classes[] = 'current-cat';
						$link          = str_replace( '<a', '<a aria-current="page"', $link );
					} elseif ( $category->term_id === $_current_term->parent ) {
						$css_classes[] = 'current-cat-parent';
					}

					while ( $_current_term->parent ) {
						if ( $category->term_id === $_current_term->parent ) {
<<<<<<< HEAD
>>>>>>> D-12-Dien
=======
>>>>>>> D-29-Oanh
							$css_classes[] = 'current-cat-ancestor';
							break;
						}

<<<<<<< HEAD
<<<<<<< HEAD
						$_current_term = get_term($_current_term->parent, $category->taxonomy);
=======
						$_current_term = get_term( $_current_term->parent, $category->taxonomy );
>>>>>>> D-12-Dien
					}
				}
				// $_SESSION['categories-detail'] = $output ;
=======
						$_current_term = get_term( $_current_term->parent, $category->taxonomy );
					}
				}
>>>>>>> D-29-Oanh
			}

			/**
			 * Filters the list of CSS classes to include with each category in the list.
			 *
			 * @since 4.2.0
			 *
			 * @see wp_list_categories()
			 *
			 * @param string[] $css_classes An array of CSS classes to be applied to each list item.
			 * @param WP_Term  $category    Category data object.
			 * @param int      $depth       Depth of page, used for padding.
			 * @param array    $args        An array of wp_list_categories() arguments.
			 */
<<<<<<< HEAD
<<<<<<< HEAD
			$css_classes = implode(' ', apply_filters('category_css_class', $css_classes, $category, $depth, $args));
			$css_classes = $css_classes ? ' class="' . esc_attr($css_classes) . '"' : '';

			$output .= $css_classes;
			$output .= ">$link\n";
		} elseif (isset($args['separator'])) {
=======
=======
>>>>>>> D-29-Oanh
			$css_classes = implode( ' ', apply_filters( 'category_css_class', $css_classes, $category, $depth, $args ) );
			$css_classes = $css_classes ? ' class="' . esc_attr( $css_classes ) . '"' : '';

			$output .= $css_classes;
			$output .= ">$link\n";
		} elseif ( isset( $args['separator'] ) ) {
<<<<<<< HEAD
>>>>>>> D-12-Dien
=======
>>>>>>> D-29-Oanh
			$output .= "\t$link" . $args['separator'] . "\n";
		} else {
			$output .= "\t$link<br />\n";
		}
	}

	/**
	 * Ends the element output, if needed.
	 *
	 * @since 2.1.0
	 * @since 5.9.0 Renamed `$page` to `$data_object` to match parent class for PHP 8 named parameter support.
	 *
	 * @see Walker::end_el()
	 *
	 * @param string $output      Used to append additional content (passed by reference).
	 * @param object $data_object Category data object. Not used.
	 * @param int    $depth       Optional. Depth of category. Not used.
	 * @param array  $args        Optional. An array of arguments. Only uses 'list' for whether should
	 *                            append to output. See wp_list_categories(). Default empty array.
	 */
<<<<<<< HEAD
<<<<<<< HEAD
	public function end_el(&$output, $data_object, $depth = 0, $args = array())
	{
		if ('list' !== $args['style']) {
=======
	public function end_el( &$output, $data_object, $depth = 0, $args = array() ) {
		if ( 'list' !== $args['style'] ) {
>>>>>>> D-12-Dien
=======
	public function end_el( &$output, $data_object, $depth = 0, $args = array() ) {
		if ( 'list' !== $args['style'] ) {
>>>>>>> D-29-Oanh
			return;
		}

		$output .= "</li>\n";
	}
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> D-12-Dien
=======

>>>>>>> D-29-Oanh
}
