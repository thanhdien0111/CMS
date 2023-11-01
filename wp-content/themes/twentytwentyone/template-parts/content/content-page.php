<?php
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> D-12-Dien
=======

>>>>>>> D-29-Oanh
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<<<<<<< HEAD
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<<<<<<< HEAD

<<<<<<< HEAD
=======
>>>>>>> D-01-LanAnh
	<?php if ( ! is_front_page() ) : ?>
		<header class="entry-header alignwide">
			<?php get_template_part( 'template-parts/header/entry-header' ); ?>
			<?php twenty_twenty_one_post_thumbnail(); ?>
		</header><!-- .entry-header -->
	<?php elseif ( has_post_thumbnail() ) : ?>
		<header class="entry-header alignwide">
			<?php twenty_twenty_one_post_thumbnail(); ?>
		</header><!-- .entry-header -->
	<?php endif; ?>

	<div class="entry-content">
		<?php
=======
=======

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

>>>>>>> D-29-Oanh
    <?php if (!is_front_page()) : ?>
    <header class="entry-header alignwide">
        <?php get_template_part('template-parts/header/entry-header'); ?>
        <?php twenty_twenty_one_post_thumbnail(); ?>
    </header><!-- .entry-header -->
    <?php elseif (has_post_thumbnail()) : ?>
    <header class="entry-header alignwide">
        <?php twenty_twenty_one_post_thumbnail(); ?>
    </header><!-- .entry-header -->
    <?php endif; ?>

    <div class="entry-content">
        <?php
<<<<<<< HEAD
>>>>>>> D-12-Dien
=======
>>>>>>> D-29-Oanh
		the_content();

		wp_link_pages(
			array(
<<<<<<< HEAD
<<<<<<< HEAD
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			)
		);
		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer default-max-width">
			<?php
			edit_post_link(
				sprintf(
					/* translators: %s: Post title. Only visible to screen readers. */
					esc_html__( 'Edit %s', 'twentytwentyone' ),
=======
=======
>>>>>>> D-29-Oanh
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__('Page', 'twentytwentyone') . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__('Page %', 'twentytwentyone'),
			)
		);
		?>
    </div><!-- .entry-content -->

    <?php if (get_edit_post_link()) : ?>
    <footer class="entry-footer ưdqd default-max-width">
        <?php
			edit_post_link(
				sprintf(
					/* translators: %s: Post title. Only visible to screen readers. */
					esc_html__('Edit %s', 'twentytwentyone'),
<<<<<<< HEAD
>>>>>>> D-12-Dien
=======
>>>>>>> D-29-Oanh
					'<span class="screen-reader-text">' . get_the_title() . '</span>'
				),
				'<span class="edit-link">',
				'</span>'
			);
			?>
<<<<<<< HEAD
<<<<<<< HEAD
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
=======
    </footer><!-- .entry-footer -->
    <?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
>>>>>>> D-12-Dien
=======
    </footer><!-- .entry-footer -->
    <?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
>>>>>>> D-29-Oanh
