<?php
/**
 * The template for displaying comments
 *
 * This is the template that displays the area of the page that contains both the current comments
 * and the comment form.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

/*
 * If the current post is protected by a password and
 * the visitor has not yet entered the password,
 * return early without loading the comments.
 */
<<<<<<< HEAD
if (post_password_required()) {
=======
if ( post_password_required() ) {
>>>>>>> D-29-Oanh
	return;
}

$twenty_twenty_one_comment_count = get_comments_number();
?>

<<<<<<< HEAD
<div class="container">
	<div class="row">
		<div class="col-md-1"></div>
		<div class="col-md-10">
		<div id="comments"
	class="comments-area <?php echo get_option('show_avatars') ? 'show-avatars' : ''; ?>">

	<?php
	if (have_comments()):
		?>
		<h2 class="comments-title">
			<?php if ('1' === $twenty_twenty_one_comment_count): ?>
				<?php esc_html_e('1 comment', 'twentytwentyone'); ?>
			<?php else: ?>
				<?php
				printf(
					/* translators: %s: Comment count number. */
					esc_html(_nx('%s comment', '%s comments', $twenty_twenty_one_comment_count, 'Comments title', 'twentytwentyone')),
					esc_html(number_format_i18n($twenty_twenty_one_comment_count))
=======
<div id="comments" class="comments-area default-max-width <?php echo get_option( 'show_avatars' ) ? 'show-avatars' : ''; ?>">

	<?php
	if ( have_comments() ) :
		?>
		<h2 class="comments-title">
			<?php if ( '1' === $twenty_twenty_one_comment_count ) : ?>
				<?php esc_html_e( '1 comment', 'twentytwentyone' ); ?>
			<?php else : ?>
				<?php
				printf(
					/* translators: %s: Comment count number. */
					esc_html( _nx( '%s comment', '%s comments', $twenty_twenty_one_comment_count, 'Comments title', 'twentytwentyone' ) ),
					esc_html( number_format_i18n( $twenty_twenty_one_comment_count ) )
>>>>>>> D-29-Oanh
				);
				?>
			<?php endif; ?>
		</h2><!-- .comments-title -->

<<<<<<< HEAD
		<!-- <div class="container"> -->
			<div class="row">
				<div class="media comment-box">
					<ol class="comment-list">
						<?php
						wp_list_comments(
							array(
								'avatar_size' => 60,
								'style' => 'ol',
								'short_ping' => true,
							)
						);
						?>
					</ol>
					<!-- .comment-list -->
				</div>
			</div>
		<!-- </div> -->
		<!-- module 8 (comments) -->
		<?php
		the_comments_pagination(
			array(
				'before_page_number' => esc_html__('Page', 'twentytwentyone') . ' ',
				'mid_size' => 0,
				'prev_text' => sprintf(
					'%s <span class="nav-prev-text">%s</span>',
					is_rtl() ? twenty_twenty_one_get_icon_svg('ui', 'arrow_right') : twenty_twenty_one_get_icon_svg('ui', 'arrow_left'),
					esc_html__('Older comments', 'twentytwentyone')
				),
				'next_text' => sprintf(
					'<span class="nav-next-text">%s</span> %s',
					esc_html__('Newer comments', 'twentytwentyone'),
					is_rtl() ? twenty_twenty_one_get_icon_svg('ui', 'arrow_left') : twenty_twenty_one_get_icon_svg('ui', 'arrow_right')
=======
		<ol class="comment-list">
			<?php
			wp_list_comments(
				array(
					'avatar_size' => 60,
					'style'       => 'ol',
					'short_ping'  => true,
				)
			);
			?>
		</ol><!-- .comment-list -->

		<?php
		the_comments_pagination(
			array(
				'before_page_number' => esc_html__( 'Page', 'twentytwentyone' ) . ' ',
				'mid_size'           => 0,
				'prev_text'          => sprintf(
					'%s <span class="nav-prev-text">%s</span>',
					is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ),
					esc_html__( 'Older comments', 'twentytwentyone' )
				),
				'next_text'          => sprintf(
					'<span class="nav-next-text">%s</span> %s',
					esc_html__( 'Newer comments', 'twentytwentyone' ),
					is_rtl() ? twenty_twenty_one_get_icon_svg( 'ui', 'arrow_left' ) : twenty_twenty_one_get_icon_svg( 'ui', 'arrow_right' )
>>>>>>> D-29-Oanh
				),
			)
		);
		?>

<<<<<<< HEAD
		<?php if (!comments_open()): ?>
			<p class="no-comments">
				<?php esc_html_e('Comments are closed.', 'twentytwentyone'); ?>
			</p>
=======
		<?php if ( ! comments_open() ) : ?>
			<p class="no-comments"><?php esc_html_e( 'Comments are closed.', 'twentytwentyone' ); ?></p>
>>>>>>> D-29-Oanh
		<?php endif; ?>
	<?php endif; ?>

	<?php
	comment_form(
		array(
<<<<<<< HEAD
			'title_reply' => esc_html__('', 'twentytwentyone'),
			'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
			'title_reply_after' => '</h2>',
		)
	);
	?>
	</div>
		<!-- module 8 (comments) -->
		</div>
		<div class="col-md-1"></div>
	</div>
</div>
=======
			'title_reply'        => esc_html__( 'Leave a comment', 'twentytwentyone' ),
			'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
			'title_reply_after'  => '</h2>',
		)
	);
	?>

</div><!-- #comments -->
>>>>>>> D-29-Oanh
