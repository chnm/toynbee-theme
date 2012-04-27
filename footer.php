			<section id="sidebar">
			
			    <?php get_search_form(); ?>
			
				<nav>
		
        			<?php wp_nav_menu( array('walker' => new Arrow_Walker_Nav_Menu)); ?>
        		
        		</nav>
						
			</section>

	</section>

        <footer>
            
            <p>A property of the <a href="<?php bloginfo( 'url' ); ?>">Toynbee Foundation</a> operated in collaboration with <a href="http://chnm.gmu.edu" target="_blank">Roy Rosenzweig Center for History and New Media</a> at <a href="http://www.gmu.edu" target="_blank">George Mason University</a>.</p>
            
        </footer>
		
	</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.4/jquery.min.js"></script>
<script src="<?php bloginfo( 'template_directory' ); ?>/js/jquery.masonry.min.js"></script>
<script>

$(function(){
  $('#people').masonry({
    // options
    itemSelector : '.subscriber'
  });
});

</script>
	
<?php wp_footer(); ?>
	
</body>


</html>