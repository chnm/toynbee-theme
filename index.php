<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
	
		<p class="intro">The Toynbee Prize Foundation contributes to the development of the social sciences, as defined from a broad historical view of human society and of human and social problems.</p>
	
		<section id="columnleft">

			<section id="sidebar">

				<ul>
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home') ) : ?>
					 <li id="about">
						 <h2>About</h2>
						 <p>The Toynbee Prize Foundation contributes to the development of the social sciences, as defined from a broad historical view of human society and of human and social problems.</p>
					 </li>
					<?php endif; ?>
				</ul>
		
			</section>
		
			<section id="posts">
			
				<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
		
				<article class="post">
			
					<div class="meta">
						<p class="date"><?php the_date(); ?></p>
						<p class="comments-link"><?php comments_popup_link('Comments ( 0 )', 'Comments ( 1 )', 'Comments ( % )'); ?></p>
					</div>

					<div class="text">
						<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permalink to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<p class="categories">Posted by <?php the_author(); ?> at <?php the_time(); ?> in <?php the_category(', '); ?></p>
						<?php the_content(); ?>
					</div>
				
				</article>
				
				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>

				<div id="pagination">
					<?php next_posts_link('<p class="older">&laquo; Older Entries</p>','') ?>
					<?php previous_posts_link('<p class="newer">Newer Entries &raquo;</p>') ?>
				</div>			
		
			</section>
	
		</section>
	
<?php get_footer(); ?>