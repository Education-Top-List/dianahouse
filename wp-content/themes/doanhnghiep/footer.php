<div class="scrolltop">
		<i class="fa fa-angle-up" aria-hidden="true"></i>	
	</div>			
	<footer class="footer">
		<?php 
			$post = get_post(371); // specific post
			$the_content = apply_filters('the_content', $post->post_content);
			if ( !empty($the_content) ) {
				echo $the_content;
			}
		?>
	</footer>

<?php wp_footer(); ?>

<!-- END  MESSENGER -->
<script src="<?php echo BASE_URL; ?>/js/wow.min.js"></script>
<script src="<?php echo BASE_URL; ?>/js/slick.js"></script>
<script src="<?php echo BASE_URL; ?>/js/imagesloaded.pkgd.min.js"></script>
<script src="<?php echo BASE_URL; ?>/js/masonry.pkgd.min.js"></script>
<script src="<?php echo BASE_URL; ?>/js/bootstrap.min.js"></script>
<script src="<?php echo BASE_URL; ?>/js/jquery.fancybox.min.js"></script>
<script src="<?php echo BASE_URL; ?>/js/custom.js"></script>
</body>
</html>
