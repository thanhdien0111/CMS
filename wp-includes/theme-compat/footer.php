<?php
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> D-12-Dien
=======
>>>>>>> D-29-Oanh
/**
 * @package WordPress
 * @subpackage Theme_Compat
 * @deprecated 3.0.0
 *
 * This file is here for backward compatibility with old themes and will be removed in a future version
 */
_deprecated_file(
	/* translators: %s: Template name. */
<<<<<<< HEAD
<<<<<<< HEAD
	sprintf(__('Theme without %s'), basename(__FILE__)),
	'3.0.0',
	null,
	/* translators: %s: Template name. */
	sprintf(__('Please include a %s template in your theme.'), basename(__FILE__))
=======
=======
>>>>>>> D-29-Oanh
	sprintf( __( 'Theme without %s' ), basename( __FILE__ ) ),
	'3.0.0',
	null,
	/* translators: %s: Template name. */
	sprintf( __( 'Please include a %s template in your theme.' ), basename( __FILE__ ) )
<<<<<<< HEAD
>>>>>>> D-12-Dien
=======
>>>>>>> D-29-Oanh
);
?>

<hr />
<div id="footer" role="contentinfo">
<<<<<<< HEAD
<<<<<<< HEAD
	<!-- If you'd like to support WordPress, having the "powered by" link somewhere on your blog is the best way; it's our only promotion or advertising. -->
=======
<!-- If you'd like to support WordPress, having the "powered by" link somewhere on your blog is the best way; it's our only promotion or advertising. -->
>>>>>>> D-12-Dien
=======
<!-- If you'd like to support WordPress, having the "powered by" link somewhere on your blog is the best way; it's our only promotion or advertising. -->
>>>>>>> D-29-Oanh
	<p>
		<?php
		printf(
			/* translators: 1: Site name, 2: WordPress */
<<<<<<< HEAD
<<<<<<< HEAD
			__('%1$s is proudly powered by %2$s'),
			get_bloginfo('name'),
=======
			__( '%1$s is proudly powered by %2$s' ),
			get_bloginfo( 'name' ),
>>>>>>> D-12-Dien
=======
			__( '%1$s is proudly powered by %2$s' ),
			get_bloginfo( 'name' ),
>>>>>>> D-29-Oanh
			'<a href="https://wordpress.org/">WordPress</a>'
		);
		?>
	</p>
</div>
</div>

<!-- Gorgeous design by Michael Heilemann - http://binarybonsai.com/ -->
<?php /* "Just what do you think you're doing Dave?" */ ?>

<<<<<<< HEAD
<<<<<<< HEAD
<?php wp_footer(); ?>
</body>

</html>
=======
		<?php wp_footer(); ?>
</body>
</html>
>>>>>>> D-12-Dien
=======
		<?php wp_footer(); ?>
</body>
</html>
>>>>>>> D-29-Oanh
