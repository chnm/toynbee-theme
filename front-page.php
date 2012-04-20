<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
		
		<section id="columnleft">

            <header>
            
                <div id="title"><h1><a href="<?php bloginfo( 'url' ); ?>">Toynbee Prize Foundation</a></h1></div>
            
            </header>
		
			<section id="homecontent">

			
				<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
				
				<section class="intro">
			
				<?php the_content(); ?>
				                				
				</section>
				
				<section class="recent-pubs">

	       			<h3>Recent publications</h3>
	       			
	       			<p>
				
                    <?php                    
                      $custom_fields = get_post_custom();
                      $recent_pub = $custom_fields['recent_pub'];
                      foreach ( $recent_pub as $key => $value )
                        echo  $value;                    
                    ?>
                    
                    </p>
                
                </section>	

				
				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
				
				<?php wp_reset_query(); ?> 
				
				<section class="latest-posts">
				
				    <div class="latest-nghi">
				    
				    <h2>Latest from the<br>New Global History Initiative Blog</h2>
								
				    <?php query_posts('category_name=middle-east&posts_per_page=1'); ?>
				    
				    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
				    
				        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				        
				        <?php the_content(); ?>
				        
				    <?php endwhile; else: ?>
				    
    				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    				
	       			<?php endif; ?>
	       			
	       			</div>
	       			
	       			<?php wp_reset_query(); ?> 
				
				    <div class="latest-ndh">
				    
				    <h2>Latest from the<br>New Diplomatic History Blog</h2>
								
				    <?php query_posts('category_name=politics&posts_per_page=1'); ?>
				    
				    <?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
				    
				        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
				        
				        <?php the_content(); ?>
				        
				    <?php endwhile; else: ?>
				    
    				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    				
	       			<?php endif; ?>
	       			
	       			</div>
	       			
	       			<?php wp_reset_query(); ?> 
				
				
				</section>
	
		
			</section>
	
		</section>
	
<?php get_footer(); ?>