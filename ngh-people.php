<?php /* Template Name: NGH People */ ?>

<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
		
		<section id="columnleft">

    	<header>
    	
    	<div id="title"><h1><a href="<?php bloginfo( 'url' ); ?>">Toynbee Prize Foundation</a></h1></div>
    	
    	</header>
		
			<section id="leftcontent">

        		<h1><?php the_title(); ?></h1>

			
				<?php if( have_posts() ) : while( have_posts() ) : the_post(); ?>
			
				<?php the_content(); ?>			
				
				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
				
                <?php 
                
                    $tagged_once = get_users('meta_value=ngh-blog');
                    $tagged_both = get_users('meta_value=ngh-ndh');
                    $tagged_users = array_merge($tagged_once, $tagged_both);
                    
                    usort($tagged_users, 'sort_users');
                         
                    foreach ($tagged_users as $user) {
                        $current_user = $user->ID;
                        if(get_user_meta($current_user,'first_name', true)) {
                            echo '<p>';
                            echo '<span class="member-name">' . get_user_meta($current_user,'first_name', true) . ' ' . get_user_meta($current_user,'last_name', true) . '</span>' ;
                            echo '<br><span class="member-description">' . get_user_meta($current_user,'description', true) . '</span>';
                            echo '</p>';
                        }
                    }
                    
                ?>
		
			</section>
	
		</section>
	
<?php get_footer(); ?>