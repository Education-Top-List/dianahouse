<?php get_header();?>
<?php if(have_posts()):?>
	<div class="archive_masonry">
			<div class="grid <?php if(get_option('printadv')){echo get_option('printadv')['dropdown_printadv']; } ?> ">
				<div class="grid-sizer"></div>
				<div class="gutter-sizer"></div>
				<?php while(have_posts()) : the_post(); ?>
					<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, ''  );
						  $height_img_custom = get_post_meta($post->ID,'_dropdown_img_height_event',true);
					 ?>
					<div class="grid-item">
						<figure class="<?php if($height_img_custom){echo $height_img_custom;}?>"  data-image="<?php echo $image[0]; ?>">
							<a href="<?php echo $image[0]; ?>" class="fancybox" data-fancybox="images">
								<?php //the_post_thumbnail(); ?>
											<svg xmlns="http://www.w3.org/2000/svg" version="1.1" x="0" y="0" width="30" height="30" viewBox="0 0 30 30" enable-background="new 0 0 30 30" xml:space="preserve"><rect fill-rule="evenodd" clip-rule="evenodd" width="2" height="10"></rect><rect fill-rule="evenodd" clip-rule="evenodd" width="10" height="2"></rect><rect x="28" fill-rule="evenodd" clip-rule="evenodd" width="2" height="10"></rect><rect x="20" fill-rule="evenodd" clip-rule="evenodd" width="10" height="2"></rect><rect y="20" fill-rule="evenodd" clip-rule="evenodd" width="2" height="10"></rect><rect y="28" fill-rule="evenodd" clip-rule="evenodd" width="10" height="2"></rect><rect x="28" y="20" fill-rule="evenodd" clip-rule="evenodd" width="2" height="10"></rect><rect x="20" y="28" fill-rule="evenodd" clip-rule="evenodd" width="10" height="2"></rect><rect x="14" y="10" fill-rule="evenodd" clip-rule="evenodd" width="2" height="10"></rect><rect x="10" y="14" fill-rule="evenodd" clip-rule="evenodd" width="10" height="2"></rect></svg>
							</a>
							<div class="photo" style="background:url('<?php echo $image[0]; ?>');"></div>
				
						</figure>
							
					</div>
				<?php endwhile;?>
			</div>	

	</div>
<?php endif; ?>	 
<?php get_footer(); ?>