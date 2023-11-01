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
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<<<<<<< HEAD
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

<style>
	body {
		/* background-color: red; */
		background: url(http://fit.tdc.edu.vn/addons/default/themes/bootstrapThree/img/bg_pattern.png) repeat;
	}

	.h7 {
		font-size: 0.9rem
	}
</style>
<?php
$post_day = get_the_date('d', $post->ID);
$post_month = get_the_date('m', $post->ID);
$post_year = get_the_date('y', $post->ID);
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container-xl">
		<div class="row">
			<div class="col-md-3">
			</div>
			<!-- module 6(Detail) -->
			<div class="col-6">
				<header class="entry-header alignwide linebinh">
					<div class="row" style="margin-left:5px">
						<?php the_title('<h1 class="col-md-10 col-xs-9 entry-title titlebinh">', '</h1>'); ?>
						<div class="col-md-2 col-xs-3 ">
							<div class="binhdraw">
								<div class="calender-binh">
									<div class="day-binh">
										<?php echo $post_day ?>
									</div>
									<div class="month-binh">
										<?php echo $post_month ?>
									</div>
								</div>
								<div class="year-binh">'
									<?php echo $post_year ?>
								</div>
							</div>
						</div>
					</div>
					<?php twenty_twenty_one_post_thumbnail(); ?>
				</header><!-- .entry-header -->
				<div class="entry-content entry-single">
					<?php
					the_content();

<<<<<<< HEAD
<<<<<<< HEAD
	<header class="entry-header alignwide">
		<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
		<?php twenty_twenty_one_post_thumbnail(); ?>
	</header><!-- .entry-header -->
=======
					wp_link_pages(
						array(
							'before' => '<nav class="page-links" aria-label="' . esc_attr__('Page', 'twentytwentyone') . '">',
							'after' => '</nav>',
							/* translators: %: Page number. */
							'pagelink' => esc_html__('Page %', 'twentytwentyone'),
						)
					);
					?>
				</div><!-- .entry-content -->
>>>>>>> D-01-LanAnh

				<footer class="entry-footer default-max-width">
					<?php twenty_twenty_one_entry_meta_footer(); ?>
				</footer><!-- .entry-footer -->
			</div>
<!-- module 6(Detail) -->


			<!-- module 10 (Recent post) -->
			<div class="col-3">
				<div class="color-recent-posts">
					<ul class="wp-block-latest-posts__list wp-block-latest-posts">
						<?php
						$args = array(
							'numberposts' => 5,
							// Số lượng bài viết bạn muốn lấy
							'post_status' => 'publish',
							// Chỉ lấy các bài viết đã được xuất bản
						);

						$recent_posts = get_posts($args);
						$post_day = get_the_date('d', $post->ID);
						$post_month = get_the_date('m', $post->ID);
						$post_year = get_the_date('y', $post->ID);

						if ($recent_posts) {
							foreach ($recent_posts as $post) {
								setup_postdata($post);
								echo '<div class="calender">
								<div class="day">' . $post_day . '</div>
								<div class="month">' . $post_month . '</div>
								</div>
								<div class="year">' . $post_year . '</div>
								<div class="year"><a class="wp-block-latest-posts__post-title recent-post" href="' . get_permalink() . '">' . get_the_title() . '</a></div><br>';
							}
							wp_reset_postdata(); // Đặt lại dữ liệu bài viết
						}
						?>
					</ul>
					<button class="btn-recent-post"><span class="view-posts">XEM TẤT CẢ</span></button>
				</div>
			</div>
			<!-- module 10 (Recent post) -->
		</div>
	</div>
	<?php if (!is_singular('attachment')) : ?>
		<?php get_template_part('template-parts/post/author-bio'); ?>
	<?php endif; ?>

<<<<<<< HEAD
</article><!-- #post-<?php the_ID(); ?> -->
=======
=======

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

>>>>>>> D-29-Oanh
    <header class="entry-header alignwide">
        <?php the_title('<h1 class="entry-title">', '</h1>'); ?>
        <?php twenty_twenty_one_post_thumbnail(); ?>
    </header><!-- .entry-header -->

    <style>
    @media (min-width: 992px) {
        .row {
            margin-left: 110px !important;
            margin-right: 110px !important;
        }
    }

    @media (min-width: 480px) {
        .row {
            margin: 0
        }
    }

    .crossedbg {
        background: url(http://fit.tdc.edu.vn/addons/default/themes/bootstrapThree/img/bg_cr_grey.png);
        height: 15px;
    }

    .list-group-item {
        border: none;
        border-bottom: 1px #d9d9d9 solid;
        margin-bottom: 0;
        padding-left: 0;
        padding-right: 0;
    }

    .list-group {
        list-style: disc;
        margin-bottom: 0;
    }

    .list-group-item:before {
        font-family: Arial, Helvetica, sans-serif;
        color: #f5ce31;
        content: "\2022";
        font-size: 2em;
        padding-right: .5em;
        position: relative;
        top: .15em;
    }
    </style>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <div class="entry-content row">
        <div class="col-md-3">
            <div class="widget topworks_itdc">
                <div class="panel panel-default">
                    <h2>Category</h2>
                    <div class="crossedbg"></div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <?php
                            $categories_list = get_the_category_list(wp_get_list_item_separator());
                            $categorys = explode(", ", $categories_list);
                            foreach ($categorys as $category) {
                                echo '<li class="list-group-item">' . $category . '</li>';
                            }
                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <?php
            the_content();

            wp_link_pages(
                array(
                    'before'   => '<nav class="page-links" aria-label="' . esc_attr__('Page', 'twentytwentyone') . '">',
                    'after'    => '</nav>',
                    /* translators: %: Page number. */
                    'pagelink' => esc_html__('Page %', 'twentytwentyone'),
                )
            );
            ?>
        </div>
<<<<<<< HEAD
        <div class="col-md-3">
=======
        <div class="col-md-3" style="margin: 0">
>>>>>>> D-29-Oanh
            <div class="widget topworks_itdc">
                <div class="panel panel-default">
                    <h2>Recent Post</h2>
                    <div class="crossedbg"></div>
                    <div class="panel-body">
                        <ul class="list-group">
                            <?php
                            $query        = new WP_Query();
                            $recent_posts = $query->query($args);

                            foreach ($recent_posts as $post) {
                                $post_link = esc_url(get_permalink(get_the_ID()));
                                $title     = get_the_title($post);
                                $date = get_the_date();
                                $chuoi = esc_html(get_the_date(DATE_W3C));

<<<<<<< HEAD
=======

>>>>>>> D-29-Oanh
                                // Chuyển đổi chuỗi thành đối tượng datetime
                                $datetime = date_create($chuoi);

                                // Định dạng thời gian theo định dạng "d/m/Y"
                                $ngay_thang_nam = $datetime->format('d/m/Y');

                                // Tách chuỗi thành mảng
                                $mang = explode("/", $ngay_thang_nam);

                                // Gán giá trị cho các biến
                                $ngay = $mang[0];
                                $thang = $mang[1];
                                $nam = $mang[2];
                                echo ' <div class="list_news">
									<div class="headlines">
										<ul>
											<li>
												<div class="headlinesdate">
													<div class="headlinesdm">
														<div class="headlinesday">' . $ngay . ' </div>
														<div class="headlinesmonth">' . $thang . '</div>
													</div>
													<div class="headlinesyear">' . $nam . '</div>
												</div>
												<div class="headlinestitle">
													</p>
													<a href="' . $post_link . '" style="text-decoration: none;" ><p class="post-title" > ' . $title . ' </p></a>
												</div>
											</li>
										</ul>
									</div>
								</div>';
                                wp_reset_query();
                            }

                            ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- .entry-content -->

    <footer class="entry-footer default-max-width ksjdfjsdnf">
        <?php twenty_twenty_one_entry_meta_footer(); ?>
    </footer><!-- .entry-footer -->

    <?php if (!is_singular('attachment')) : ?>
    <?php get_template_part('template-parts/post/author-bio'); ?>
    <?php endif; ?>

<<<<<<< HEAD
</article><!-- #post-<?php the_ID(); ?> -->
>>>>>>> D-12-Dien
=======
</article><!-- #post-<?php the_ID(); ?> -->
>>>>>>> D-01-LanAnh
=======
</article><!-- #post-<?php the_ID(); ?> -->
>>>>>>> D-29-Oanh
