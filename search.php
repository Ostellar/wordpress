<?php
/**
 * The template for displaying search results pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#search-result
 *
 * @package Stellax_Framework
 */

get_header(); ?>

	<div id="site-main" class="generic-page search-page">
		<div class="container">
		        
	        <?php get_search_form(); ?>

        	<?php
    		if ( have_posts() ) : ?>
    
    			<header class="page-header">
    				<h1 class="page-title"><?php
    					/* translators: %s: search query. */
    					printf( esc_html__( 'Search Results for: %s', 'stellax' ), '<span>' . get_search_query() . '</span>' );
    				?></h1>
    			</header><!-- .page-header -->
    
    			<?php
    			/* Start the Loop */
    			while ( have_posts() ) : the_post();
    
    				/**
    				 * Run the loop for the search to output the results.
    				 * If you want to overload this in a child theme then include a file
    				 * called content-search.php and that will be used instead.
    				 */
    				get_template_part( 'template-parts/content', 'search' );
    
    			endwhile;
    
    			the_posts_navigation();
    
    		else :
    
    			get_template_part( 'template-parts/content', 'none' );
    
    		endif; ?>
    		
    		<a class="button secondary-color-button home" href="<?php echo home_url(); ?>">Back to homepage</a>

		</div><!-- #container -->
	</div><!-- #primary -->

<?php
get_footer();
