<?php

/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php wp_head(); ?>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

	<style>
		/*  */
		/*--------------------------------------------------NEWS-----------------------------------------------*/
		.top_news_block,
		.list_new_view {
			background: #fff;
			-webkit-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2);
			-moz-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2);
			box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2);
			/* width: 50%;
			margin-left: 30%;
			margin-top: -60px; */
		}

		.top_news_block,
		.list_new_view2 {
			background: #fff;
			-webkit-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2);
			-moz-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2);
			box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2);
			width: 100%;
			margin-left: 30%;
			/* margin-top: -60px; */
			margin-bottom: 20px;
		}

		.top_news_block_thumb img {
			max-width: 100%;
			width: 100%;
		}

		.top_news_block_desc {
			font-size: 0.9em;
			padding: 15px;
		}

		.top_news_block_desc h4 {
			text-transform: uppercase;
			font-family: 'Open Sans Condensed', sans-serif;
			font-weight: bold;
		}

		.top_news_block_desc .topnewstime {
			margin-top: 15px;
			text-align: center;
			padding-left: 0;
			font-size: 15px;
		}

		.list_new_view2 .top_news_block_desc .topnewsmonth {
			margin-top: 15px;
			text-align: center;
			padding-left: 0;
			font-size: 13px;
		}

		.list_new_view .top_news_block_desc .topnewstime {
			padding-left: 15px;
		}

		.shortdesc {
			border-left: 1px solid #666;
		}

		.news {
			background: none;
			padding: 0;
			color: #fff;
		}


		.topnews .topnewstime {
			text-align: center;
		}

		.topnewstime>.topnewsdate {
			font-family: 'Prata', serif;
			font-size: 3.1em;
			line-height: 1em;
			margin-left: 15px;
		}

		.topnewstime>.topnewsmonth {
			text-transform: uppercase;
			font-size: 15px;
			margin-left: 15px;
		}

		.entry-content {
			font-size: 15px;

		}

		.entry-header h4 {
			font-size: 20px;
			color: rgb(66, 139, 202);
		}

		.entry-header h4:hover {
			color: #666;
		}

		@media(max-width: 768px) {

			.list_new_view .top_news_block_desc .topnewstime>.topnewsdate,
			.list_new_view .top_news_block_desc .topnewstime>.topnewsmonth {
				margin-left: 0
			}

			.list_new_view .top_news_block_desc .topnewstime {
				padding-left: 0;
			}

			.list_new_view {
				width: 100%;
				margin-left: 0;

			}
		}
	</style>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<div id="page" class="site">
		<a class="skip-link screen-reader-text" href="#content">
			<?php
			/* translators: Hidden accessibility text. */
			esc_html_e('Skip to content', 'twentytwentyone');
			?>
		</a>

		<?php get_template_part('template-parts/header/site-header'); ?>

		<div id="content" class="site-content">
			<div id="primary" class="content-area">
				<main id="main" class="site-main">