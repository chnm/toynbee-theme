<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
		
		<section id="columnleft">

            <header>
            
                <div id="title"><h1><a href="<?php bloginfo( 'url' ); ?>">Toynbee Prize Foundation</a></h1></div>
            
            </header>
		
			<section id="leftcontent">
        			
				<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
				
				<p class="post-date"><?php the_date(); ?></p>
		
				<article class="post">

					<div class="text">
						<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permalink to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<p class="meta">Posted by <?php the_author(); ?> at <?php the_time(); ?> in <?php the_category(', '); ?> <?php comments_popup_link('&middot; Comments ( 0 )', '&middot; Comments ( 1 )', '&middot; Comments ( % )', 'comments-number', '&middot; Comments  disabled'); ?></p>
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