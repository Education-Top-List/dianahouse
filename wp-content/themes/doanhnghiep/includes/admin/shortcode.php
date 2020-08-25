<?php 

function kh_review_func(){
	ob_start();
	?>
	<div class="wrap_cus_rv">
		<ul class="cus_rv">
			<?php
			$args = array(  
				'post_type' => 'customer_review',
				'post_status' => 'publish',
				'posts_per_page' => 20, 
				'orderby' => 'date'
			);

			$loop_slide = new WP_Query( $args ); 

			while ( $loop_slide->have_posts() ) : $loop_slide->the_post(); 
				?> 
				<li>
					<?php the_post_thumbnail('large'); ?>
					<p><?php echo excerpt(20); ?></p>
				</li> 
				<?php
			endwhile;
			wp_reset_postdata();
			?>
		</ul>
	</div>
	
	<?php
	return ob_get_clean();
}
add_shortcode('sc_customer','kh_review_func');



function news_sc_func(){
	ob_start();
	?>
	<ul class="sc_news">
		<?php
		$args = array(  
			'post_type' => 'post',
			'post_status' => 'publish',
			'posts_per_page' => 20, 
			'orderby' => 'date'
		);

		$loop_news = new WP_Query( $args ); 

		while ( $loop_news->have_posts() ) : $loop_news->the_post(); 
			?> 
			<li>
				<?php $image = wp_get_attachment_image_src(get_post_thumbnail_id($loop_news->post->ID), 'full' ); ?>
				<figure class="thumbnail" style="background:url('<?php echo $image[0]; ?>')"> 
					<a href="<?php the_permalink(); ?>"></a>
				</figure> 
				<h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
			</li> 
			<?php
		endwhile;
		wp_reset_postdata();
		?>
	</ul>
	<?php
	return ob_get_clean();
}
add_shortcode('sc_news','news_sc_func');


function partner_sc_func(){
	ob_start();
	?>
	<ul class="sc_partner">
		<?php
		$args = array(  
			'post_type' => 'tg_partner',
			'post_status' => 'publish',
			'posts_per_page' => 20, 
			'orderby' => 'date'
		);

		$loop_news = new WP_Query( $args ); 

		while ( $loop_news->have_posts() ) : $loop_news->the_post(); 
			?> 
			<li>
				<a href="<?php echo get_the_excerpt(); ?>"><?php the_post_thumbnail('medium'); ?></a>
			</li> 
			<?php
		endwhile;
		wp_reset_postdata();
		?>
	</ul>
	<?php
	return ob_get_clean();
}
add_shortcode('sc_partner','partner_sc_func');