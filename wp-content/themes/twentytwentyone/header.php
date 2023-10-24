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
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
	<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
	<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<?php wp_head(); ?>
	<style>
	/*  */
	/*--------------------------------------------------NEWS-----------------------------------------------*/
	.top_news_block,
	.list_new_view {
		background: #fff;
		-webkit-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2);
		-moz-box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2);
		box-shadow: 0px 0px 5px 0px rgba(0, 0, 0, 0.2);
		width: 50%;
		margin-left: 30%;
		margin-top: -60px;
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
.topnewstime > .topnewsdate{
	font-family: 'Prata', serif;
    font-size: 3.1em;
    line-height: 1em;
    margin-left: 15px;
}
.topnewstime > .topnewsmonth{
	text-transform: uppercase;
    font-size: 10px;
    margin-left: 15px;
}
.entry-content{
	font-size: 15px;
	
}
.entry-header h4{
	font-size: 20px;
	color: rgb(66,139,202);
}
.entry-header h4:hover{
	color: #666;
}
@media(max-width: 768px){
	.list_new_view .top_news_block_desc .topnewstime > .topnewsdate, .list_new_view .top_news_block_desc .topnewstime > .topnewsmonth {margin-left: 0}
	.list_new_view .top_news_block_desc .topnewstime {padding-left: 0;}
	.list_new_view{
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
		esc_html_e( 'Skip to content', 'twentytwentyone' );
		?>
	</a>

	<?php get_template_part( 'template-parts/header/site-header' ); ?>

	<div id="content" class="site-content">
		<div id="primary" class="content-area">
			<main id="main" class="site-main">
