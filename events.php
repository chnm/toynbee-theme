<?php 
/* 
Template Name: Events
*/
?>

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
	
		<h1><?php the_title(); ?></h1>
	
		<section id="columnleft">

			<section id="sidebar">
		
<ul>
<?php if ( !function_exists('dynamic_sidebar')
        || !dynamic_sidebar() ) : ?>
 <li id="about">
  <h2>About</h2>
  <p>This is my blog.</p>
 </li>
 <li id="links">
  <h2>Links</h2>
  <ul>
   <li><a href="http://example.com">Example</a></li>
  </ul>
 </li>
<?php endif; ?>
</ul>
					
			</section>
		
			<section id="page">
			
				<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
			
				<?php the_content(); ?>
				
				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
		
			</section>
	
		</section>
	
<?php get_footer(); ?>