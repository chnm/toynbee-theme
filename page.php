<?php define( 'WP_USE_THEMES', false ); get_header(); ?>
	
		<h1><?php the_title(); ?></h1>
	
		<section id="columnleft">

			<section id="sidebar">
		
<?php
  if($post->post_parent) {
  $children = wp_list_pages("title_li=&child_of=".$post->post_parent."&echo=0");
  $parentlink= get_permalink($post->post_parent);
  $parenttitle = get_the_title($post->post_parent);
  }

  else {
  $children = wp_list_pages("title_li=&child_of=".$post->ID."&echo=0");
  $parentlink = get_permalink($post->ID);
  $parenttitle = get_the_title($post->ID);  }
  
  if ($children) { ?>

  <ul class="subnav">
	<?php echo $children; ?>
  </ul>

<?php } ?>
						
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