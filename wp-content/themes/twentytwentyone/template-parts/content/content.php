<?php
<<<<<<< HEAD
=======

>>>>>>> D-12-Dien
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
<<<<<<< HEAD
	<header class="entry-header">
		<?php if ( is_singular() ) : ?>
			<?php the_title( '<h1 class="entry-title default-max-width">', '</h1>' ); ?>
		<?php else : ?>
			<?php the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
		<?php endif; ?>

		<?php twenty_twenty_one_post_thumbnail(); ?>
	</header><!-- .entry-header -->

	<div class="entry-content">
		<?php
=======

    <header class="entry-header">
        <?php if (is_singular()) : ?>
        <?php the_title('<h1 class="entry-title default-max-width">', '</h1>'); ?>
        <?php else : ?>
        <?php the_title(sprintf('<h2 class="entry-title default-max-width"><a href="%s">', esc_url(get_permalink())), '</a></h2>'); ?>
        <?php endif; ?>

        <?php twenty_twenty_one_post_thumbnail(); ?>
    </header><!-- .entry-header -->

    <div class="entry-content ">
        <?php
>>>>>>> D-12-Dien
		the_content(
			twenty_twenty_one_continue_reading_text()
		);

		wp_link_pages(
			array(
<<<<<<< HEAD
				'before'   => '<nav class="page-links" aria-label="' . esc_attr__( 'Page', 'twentytwentyone' ) . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__( 'Page %', 'twentytwentyone' ),
			)
		);

		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer default-max-width">
		<?php twenty_twenty_one_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
=======
				'before'   => '<nav class="page-links " aria-label="' . esc_attr__('Page', 'twentytwentyone') . '">',
				'after'    => '</nav>',
				/* translators: %: Page number. */
				'pagelink' => esc_html__('Page %', 'twentytwentyone'),
			)
		);
		?>
    </div><!-- .entry-content -->

    <footer class="entry-footer   default-max-width">
        <?php twenty_twenty_one_entry_meta_footer(); ?>
    </footer><!-- .entry-footer -->
</article><!-- #post-<?php the_ID(); ?> -->
>>>>>>> D-12-Dien
