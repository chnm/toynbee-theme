<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
	
		<p class="intro">New Global History (NGH) employs conceptual thinking and empirical research, utilizing an historical perspective to advance understanding of the multi-faceted dimensions of globalization processes.</p>
	
		<section id="columnleft">

			<section id="sidebar">
		
				<ul>
					<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('Home') ) : ?>
					 <li id="about">
						 <h2>About</h2>
						 <p>New Global History (NGH) employs conceptual thinking and empirical research, utilizing an historical perspective, to advance understanding of the multi-faceted dimensions of globalization processes. For more information, read our <a href="<?php bloginfo ('theme_directory'); ?>/mission">mission</a>.</p>
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

				<div id="postnav">
					<p class="older"><?php echo next_post_link('%link','&laquo; Older Post'); ?></p>
					<p class="newer"><?php echo previous_post_link('%link','Newer Post &raquo;'); ?></p>
				</div>	
				
				<?php comments_template('', true); ?>
				
				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
		
			</section>
	
		</section>
	
<?php get_footer(); ?>