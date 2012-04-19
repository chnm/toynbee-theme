	</section>
		
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