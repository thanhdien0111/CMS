<?php
<<<<<<< HEAD
<<<<<<< HEAD
=======

>>>>>>> D-12-Dien
=======

>>>>>>> D-29-Oanh
/**
 * The searchform.php template.
 *
 * Used any time that get_search_form() is called.
 *
 * @link https://developer.wordpress.org/reference/functions/wp_unique_id/
 * @link https://developer.wordpress.org/reference/functions/get_search_form/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

/*
 * Generate a unique ID for each form and a string containing an aria-label
 * if one was passed to get_search_form() in the args array.
 */
<<<<<<< HEAD
<<<<<<< HEAD
$twentytwentyone_unique_id = wp_unique_id( 'search-form-' );
$twentytwentyone_aria_label = ! empty( $args['aria_label'] ) ? 'aria-label="' . esc_attr( $args['aria_label'] ) . '"' : '';
?>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<form role="search" <?php echo $twentytwentyone_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. ?> method="get" class="search-form" action="<?php echo esc_url( home_url( '/' ) ); ?>">
<label for="<?php echo esc_attr( $twentytwentyone_unique_id ); ?>"><?php _e( '', 'twentytwentyone' ); // phpcs:ignore: WordPress.Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations ?></label>
<i class="fas fa-search "></i>
    <input type="search" id="<?php echo esc_attr( $twentytwentyone_unique_id ); ?>" class="search-field form-control-borderless"placeholder="Search topics or keywords" value="<?php echo get_search_query(); ?>" name="s" >
	<input type="submit" class="search-submit" value="<?php echo esc_attr_x( 'Search', 'submit button', 'twentytwentyone' ); ?>" />
</form>
=======
=======
>>>>>>> D-29-Oanh
$twentytwentyone_unique_id = wp_unique_id('search-form-');

$twentytwentyone_aria_label = !empty($args['aria_label']) ? 'aria-label="' . esc_attr($args['aria_label']) . '"' : '';
?>

<!-- <form role="search" <?php //echo $twentytwentyone_aria_label; // phpcs:ignore WordPress.Security.EscapeOutput.OutputNotEscaped -- Escaped above. 
                            ?> method="get" class="search-form" action="<?php echo esc_url(home_url('/')); ?>">
	<label for="<?php //echo esc_attr( $twentytwentyone_unique_id ); 
                ?>"><?php //_e( 'Search&hellip;', 'twentytwentyone' ); // phpcs:ignore: WordPress.Security.EscapeOutput.UnsafePrintingFunction -- core trusts translations 
<<<<<<< HEAD
                    ?></label>
	<input type="search" id="<?php //echo esc_attr( $twentytwentyone_unique_id ); 
                                ?>" class="search-field" value="<?php //echo get_search_query(); 
                                                                ?>" name="s" />
	<input type="submit" class="search-submit" value="<?php //echo esc_attr_x( 'Search', 'submit button', 'twentytwentyone' ); 
                                                        ?>" />
</form> -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css"
    integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
    integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<div class="row height d-flex justify-content-center align-items-center ">

    <form role="search" <?php echo $twentytwentyone_aria_label; ?> method="get" class="col-md-12"
        action="<?php echo esc_url(home_url('/')); ?>">
        <div class="search1">
            <i class="fa fa-search"></i>

            <input type="text" id="<?php echo esc_attr($twentytwentyone_unique_id); ?>"
                value="<?php echo get_search_query(); ?>" name="s" class="form-control"
                placeholder="Search topics or keywords">
            <button class="btn"
                value="<?php echo esc_attr_x('Search', 'submit button', 'twentytwentyone'); ?>">Search</button>
=======
                                                                            ?></label>
	<input type="search" id="<?php //echo esc_attr( $twentytwentyone_unique_id ); 
                                ?>" class="search-field" value="<?php //echo get_search_query(); 
                                                                                                                    ?>" name="s" />
	<input type="submit" class="search-submit" value="<?php //echo esc_attr_x( 'Search', 'submit button', 'twentytwentyone' ); 
                                                        ?>" />
</form> -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

<div class="row height d-flex justify-content-center align-items-center ">

    <form role="search" <?php echo $twentytwentyone_aria_label; ?> method="get" class="col-md-12" action="<?php echo esc_url(home_url('/')); ?>">
        <div class="search1">
            <i class="fa fa-search"></i>

            <input type="text" id="<?php echo esc_attr($twentytwentyone_unique_id); ?>" value="<?php echo get_search_query(); ?>" name="s" class="form-control" placeholder="Search topics or keywords">
            <button class="btn" value="<?php echo esc_attr_x('Search', 'submit button', 'twentytwentyone'); ?>">Search</button>
>>>>>>> D-29-Oanh
        </div>
    </form>
</div>
<style>
<<<<<<< HEAD
body {

    font-family: "Poppins", sans-serif;
    font-weight: 300;
}


.search1 {
    position: relative;
    box-shadow: 0 0 40px rgba(51, 51, 51, .1);

}

.search1 input {

    height: 60px;
    text-indent: 25px;
    border: 2px solid #d6d4d4;


}


.search1 input:focus {

    box-shadow: none;
    border: 2px solid blue;


}

.search1 .fa-search {

    position: absolute;
    top: 20px;
    left: 16px;

}

.search1 button {

    position: absolute;
    top: 10px;
    right: 10px;
    height: 40px;
    width: 100px;
    background: green;
    color: white;
}
</style>
>>>>>>> D-12-Dien
=======
    body {

        font-family: "Poppins", sans-serif;
        font-weight: 300;
    }


    .search1 {
        position: relative;
        box-shadow: 0 0 40px rgba(51, 51, 51, .1);

    }

    .search1 input {

        height: 60px;
        text-indent: 25px;
        border: 2px solid #d6d4d4;


    }


    .search1 input:focus {

        box-shadow: none;
        border: 2px solid blue;


    }

    .search1 .fa-search {

        position: absolute;
        top: 20px;
        left: 16px;

    }

    .search1 button {

        position: absolute;
        top: 10px;
        right: 10px;
        height: 40px;
        width: 100px;
        background: green;
        color: white;
    }
</style>
>>>>>>> D-29-Oanh
