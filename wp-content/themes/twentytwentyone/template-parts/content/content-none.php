<?php
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> D-12-Dien
=======

>>>>>>> D-29-Oanh
/**
 * Template part for displaying a message that posts cannot be found
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<<<<<<< HEAD
<<<<<<< HEAD
<section class="no-results not-found">
	
<header class="page-header alignwide">
		
		<?php if ( is_search() ) : ?>

			<h1 class="page-title">
				<?php
				printf(
					/* translators: %s: Search term. */
					esc_html__( 'Search:"%s"', 'twentytwentyone' ),
					'<span class="page-description search-term">' . esc_html( get_search_query() ) . '</span>'
				);
				?>
			</h1>

		<?php else : ?>

			<h1 class="page-title"><?php esc_html_e( 'Nothing here', 'twentytwentyone' ); ?></h1>

		<?php endif; ?>
	</header><!-- .page-header -->

	<div class="page-content default-max-width">

		<?php if ( is_home() && current_user_can( 'publish_posts' ) ) : ?>

			<?php
			printf(
				'<p>' . wp_kses(
					/* translators: %s: Link to WP admin new post page. */
					__( 'Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentytwentyone' ),
=======
=======
>>>>>>> D-29-Oanh
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<section class="no-results not-found">
    <header class="page-header1 alignwide">
        <?php if (is_search()) : ?>

        <h5 class="page-title " style="text-align: center; color:red;">
            <?php
				printf(
					/* translators: %s: Search term. */
					esc_html__('Search not found:"%s"', 'twentytwentyone'),
					'<span class="page-description search-term" style="color:black;">' . esc_html(get_search_query()) . '</span>'
				);
				?>
        </h5>

        <?php else : ?>

        <h5 class="page-title1 "><?php esc_html_e('Nothing here', 'twentytwentyone'); ?></h5>

        <?php endif; ?>
    </header><!-- .page-header -->

    <div class="page-content default-max-width">


        <?php if (is_home() && current_user_can('publish_posts')) : ?>
        <?php

			printf(

				'<p>' . wp_kses(
					/* translators: %s: Link to WP admin new post page. */
					__('Ready to publish your first post? <a href="%s">Get started here</a>.', 'twentytwentyone'),
<<<<<<< HEAD
>>>>>>> D-12-Dien
=======
>>>>>>> D-29-Oanh
					array(
						'a' => array(
							'href' => array(),
						),
					)
				) . '</p>',
<<<<<<< HEAD
<<<<<<< HEAD
				esc_url( admin_url( 'post-new.php' ) )
			);
			?>

		<?php elseif ( is_search() ) : ?>

			<p><?php esc_html_e( 'We could not find any results for your seach.You can give it another try through the search form below ', 'twentytwentyone' ); ?></p>
			<?php get_search_form(); ?>

		<?php else : ?>

			<p><?php esc_html_e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentytwentyone' ); ?></p>
			<?php get_search_form(); ?>

		<?php endif; ?>
	</div><!-- .page-content -->
</section><!-- .no-results -->
=======
=======
>>>>>>> D-29-Oanh
				esc_url(admin_url('post-new.php'))
			);
			?>

        <?php elseif (is_search()) : ?>
        <h5 class="page-title1 " style="text-align: center; color:red;">
            <?php
				printf(
					/* translators: %s: Search term. */
					esc_html__('Search:"%s"', 'twentytwentyone'),
					'<span class="page-description search-term "style="color:black;">' . esc_html(get_search_query()) . '</span>'
				);
				?>
        </h5>
        <p class="text-center">
            <?php esc_html_e('We could not find any results for your search. You can give a another try through the search from below', 'twentytwentyone'); ?>
        </p>
        <?php get_search_form(); ?>

        <?php else : ?>

        <p class="text-center">
            <?php esc_html_e('It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'twentytwentyone'); ?>
        </p>
        <?php get_search_form(); ?>

        <?php endif; ?>


    </div><!-- .page-content -->

<<<<<<< HEAD
</section><!-- .no-results -->
>>>>>>> D-12-Dien
=======
</section><!-- .no-results -->
>>>>>>> D-29-Oanh
