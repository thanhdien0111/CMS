<?php
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> D-12-Dien
=======
>>>>>>> D-01-LanAnh
/**
 * Displays the post header
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

// Don't show the title if the post-format is `aside` or `status`.
$post_format = get_post_format();
<<<<<<< HEAD
<<<<<<< HEAD
if ('aside' === $post_format || 'status' === $post_format) {
=======
if ( 'aside' === $post_format || 'status' === $post_format ) {
>>>>>>> D-12-Dien
=======
if ( 'aside' === $post_format || 'status' === $post_format ) {
>>>>>>> D-01-LanAnh
	return;
}
?>

<header class="entry-header">
	<?php
<<<<<<< HEAD
<<<<<<< HEAD
	the_title(sprintf('<h2 class="entry-title default-max-width"><a href="%s">', esc_url(get_permalink())), '</a></h2>');
	twenty_twenty_one_post_thumbnail();
	?>
</header><!-- .entry-header -->
=======
	the_title( sprintf( '<h2 class="entry-title default-max-width"><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' );
	twenty_twenty_one_post_thumbnail();
	?>
</header><!-- .entry-header -->
>>>>>>> D-12-Dien
=======
	the_title( sprintf( '<h2 class="entry-title default-max-width "><a href="%s">', esc_url( get_permalink() ) ), '</a></h2>' );
	twenty_twenty_one_post_thumbnail();
	?>
</header><!-- .entry-header -->
>>>>>>> D-01-LanAnh
