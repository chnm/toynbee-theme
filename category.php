<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
		
		<section id="columnleft">

            <header>
            
                <div id="title"><h1><a href="<?php bloginfo( 'url' ); ?>">Toynbee Prize Foundation</a></h1></div>
            
            </header>
		
			<section id="leftcontent">
        		
        		<h1><?php single_cat_title(); ?></h1>
        			
				<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
				
				<p class="post-date"><?php the_date(); ?></p>
		
				<article class="post">

					<div class="text">
						<h2><a href="<?php the_permalink(); ?>" rel="bookmark" title="Permalink to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
						<p class="meta">Posted by <?php the_author(); ?> at <?php the_time(); ?> in <?php the_category(', '); ?> <?php comments_popup_link('&middot; Comments ( 0 )', '&middot; Comments ( 1 )', '&middot; Comments ( % )', 'comments-number', '&middot; Comments  disabled'); ?></p>
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
				
				<?php wp_reset_query(); ?> 
		
			</section>
	
		</section>
	
<?php get_footer(); ?>