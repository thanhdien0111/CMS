<?php
<<<<<<< HEAD
=======

>>>>>>> D-12-Dien
/**
 * Template part for displaying post archives and search results
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
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<?php get_template_part( 'template-parts/header/excerpt-header', get_post_format() ); ?>

	<div class="entry-content">
		<?php get_template_part( 'template-parts/excerpt/excerpt', get_post_format() ); ?>
	</div><!-- .entry-content -->

=======
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="list_new_view" style="margin: 0 auto;">
		<div class=" row">
			<div class="col-md-3" style="padding: 35px">
				<span class="topnewsdate">13</span>
				<br />
				<span class="topnewsmonth">Tháng 08</span>
			</div>
			<div class="col-md-7" style="padding: 35px">
				<?php get_template_part('template-parts/header/excerpt-header', get_post_format()); ?>

				<div class="entry-content">
					<?php get_template_part('template-parts/excerpt/excerpt', get_post_format()); ?>
				</div><!-- .entry-content -->
			</div>
		</div>
	</div>
>>>>>>> D-12-Dien
	<footer class="entry-footer default-max-width">
		<?php twenty_twenty_one_entry_meta_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-${ID} -->
<<<<<<< HEAD
=======

<article id="post-<?php the_ID(); ?>" class="list_new_view">
	
			<div class="row">
				<div class="top_news_block_desc">
					<div class="row">
						<div class="col-md-3 col-xs-3 topnewstime">
							<?php
							$post_day = get_the_date('d', $post->ID);
							$post_month = get_the_date('m', $post->ID);
							?>
							<span class="topnewsdate"><?php echo $post_day ?></span><br>
							<span class="topnewsmonth">Tháng <?php echo $post_month ?></span><br>
						</div>
						<div class="col-md-9 col-xs-9 shortdesc">
							<div class="entry-header">
								<?php the_title('<h4 class="title default-max-width">', '</h4>'); ?> </div>
							<div class="entry-content">
								<?php get_template_part('template-parts/excerpt/excerpt', get_post_format()); ?>
							</div><!-- .entry-content -->
						</div>

					</div>
				</div>
			</div>
	
</article><!-- #post-${ID} -->
>>>>>>> D-39-Thuy-module-2,5
=======

<style>
	.list_new_view {
		align-items: center;
		background-color: #fdfdfd;
		border: 1px solid black;
		width: 550px;
		height: 300px;
	}

	.topnewsdate {
		font-size: 65px;
		color: #000000;
	}

	h4 {
		background-color: #ffffff;
		color: #000000;
		font-size: 18px;
		font-weight: bold;
	}

	p {
		color: #000000;
		font-size: 14px;
	}

	a {
		text-decoration: none;
	}

	.row {

		display: flex;
	}

	.col-md-3 {
		margin-top: 10px;
		margin-bottom: 10px;
		border-right: 1px solid black;
	}
</style>
>>>>>>> D-12-Dien
