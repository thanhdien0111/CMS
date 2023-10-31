<?php
session_start();
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

?>
<style>
	/* body {
		background: url(http://fit.tdc.edu.vn/addons/default/themes/bootstrapThree/img/bg_pattern.png) repeat;
		font-family: 'Open Sans', sans-serif;
	} */

	.module-13 {
		border-left: 2px solid #6091ba;
		background: #fff;
		background-clip: padding-box;
		padding: 15px;
		border: none;
		border-left: 2px solid #6091ba;
		margin-bottom: 30px;
	}

	.module-13 h2 {
		font-size: 24px;
		font-weight: 400;
		font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
		color: #337ab7;
		padding-bottom: 20px;
		border-bottom: 1px solid #e0e5e9;
		margin-bottom: 25px;
	}

	.module-13 h4 {
		font-family: "Helvetica Neue", Helvetica, Arial, sans-serif;
		font-weight: 500;
		line-height: 1.1;
		color: inherit;
		font-size: 16px;
	}

	/* đường gạch ngang */
	.module-13 hr {
		border: 0;
		border-top: 2px solid #999eab;
		margin: 0;
		width: 45px;
		margin-bottom: 10px;
		opacity: 1;
	}

	.module-13 img {
		width: 100%;
		height: auto;
	}

	.module-13 p {
		font-size: 14px;
	}

	.page-title {
		font-size: 55px;
	}
</style>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


<!-- module 13 (pages) -->
<div class="row">
	<div class="col-md-3">
		<div class="module-13">
			<h2>Trang mới nhất</h2>
			<?php
			$args = array(
				'post_type' => 'page',
				'posts_per_page' => 3,
				'order' => 'DESC',
				'orderby' => 'date',
			);
			$query = new WP_Query($args);
			if ($query->have_posts()) {
				while ($query->have_posts()) {
					$query->the_post();

					$title = get_the_title();
					$content = wp_trim_words(get_the_content(), 30); // Giới hạn nội dung 30 từ
					$thumbnail = get_the_post_thumbnail(get_the_ID()); // Lấy ảnh đại diện nhỏ

					// Hiển thị thông tin trang
					echo '<h4>' . $title . '</h4>';
					echo '<hr>';
					echo $thumbnail; // Hiển thị ảnh đại diện
					echo '<p>' . $content . '</p>';
				}
				wp_reset_postdata();
			}
			?>
		</div>
	</div>
	<!-- module 13 (pages) -->


	<!-- module 5 (search result) -->
	<div class="col-md-6">
		<div class="container">
			<?php if (have_posts()) { ?>
				<header class="page-header alignwide">
					<h1 class="page-title">
						<?php
						printf(
							/* translators: %s: Search term. */
							esc_html__('Results for "%s"', 'twentytwentyone'),
							'<span class="page-description search-term">' . esc_html(get_search_query()) . '</span>'
						);
						?>
					</h1>
				</header><!-- .page-header -->

				<div class="search-result-count default-max-width">
					<?php
					printf(
						esc_html(
							/* translators: %d: The number of search results. */
							_n(
								'We found %d result for your search.',
								'We found %d results for your search.',
								(int) $wp_query->found_posts,
								'twentytwentyone'
							)
						),
						(int) $wp_query->found_posts
					);
					?>
				</div><!-- .search-result-count -->

			<?php
				// Start the Loop.
				while (have_posts()) {
					the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part('template-parts/content/content-excerpt-search', get_post_format());
				} // End the loop.

				// Previous/next page navigation.
				twenty_twenty_one_the_posts_navigation();

				// If no content, include the "No posts found" template.
			} else {
				get_template_part('template-parts/content/content-none');
			}
			?>
			<!-- module 5 (search result) -->
		</div>
	</div>
	<div class="col-md-3">

	</div>
</div>
<!-- module 15(last posts) -->
<div class="container">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<h4>Latest News</h4>
			<ul class="timeline">
				<?php
				if (isset($_SESSION['latest-posts']))
					echo $_SESSION['latest-posts'];
				?>
			</ul>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>

<!-- module 15(last posts) -->
<?php get_footer(); ?>