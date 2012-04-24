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
				
				    $taggedUsers = get_users('meta_value=ngh-blog');
				    foreach ($taggedUsers as $user) {
				        $currentUser = $user->ID;
				        echo '<p>';
				        echo '<span class="member-name">' . get_user_meta($currentUser,'first_name', true) . ' ' . get_user_meta($currentUser,'last_name', true) . '</span>' ;
				        echo '<br><span class="member-description">' . get_user_meta($currentUser,'description', true) . '</span>';
				        echo '</p>';
				        }
				    
				?>
		
			</section>
	
		</section>
	
<?php get_footer(); ?>