<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Stellax_Framework
 */

?>

</div><!-- #content -->

<footer id="colophon" class="site-footer">
	<div class="container">
	    <div class="row">
	        <div class="col col-md-50 col-lg-25">
    	    <?php if(is_active_sidebar('footer-1')){
                dynamic_sidebar('footer-1');
            } ?>
            </div>
            <div class="col col-md-50 col-lg-25">
    	    <?php if(is_active_sidebar('footer-2')){
                dynamic_sidebar('footer-2');
            } ?>
            </div>
            <div class="col col-md-50 col-lg-25">
    	    <?php if(is_active_sidebar('footer-3')){
                dynamic_sidebar('footer-3');
            } ?>
            </div>
            <div class="col col-md-50 col-lg-25">
    	    <?php if(is_active_sidebar('footer-4')){
                dynamic_sidebar('footer-4');
            } ?>
            </div>
        </div>
	</div>
	<div class="container footer-bottom">
	    <div class="copyright">© Copyright 2019 · Stellax Framework</div>
	    <div class="policy"><a href="#">Privacy Policy</a></div>
	</div>
</footer><!-- #colophon -->

<?php wp_footer(); ?>

</body>
</html>
