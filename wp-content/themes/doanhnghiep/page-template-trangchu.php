<?php 
/*
Template Name: page-template-trangchu
*/
get_header(); 
?>	

<?php
$args = array(
 'taxonomy' => 'du-an',
 'orderby' => 'name',
 'order'   => 'ASC',
 'post_type' => 'duan'
);

$cats = get_categories($args);

foreach($cats as $cat) {
  $childCat = $cat->cat_ID;
  echo $childCat;
  $arg_child = array(
    'cat'=> $childID, 
    'posts_per_page'=> 10,
  );
  $query_child = new WP_Query($arg_child);
  ?>
  <a href="<?php echo get_category_link( $cat->term_id ) ?>">
   <?php echo $cat->name; ?>
 </a>
 <div class="archive_masonry">
   <?php  ?>
   <div class="grid <?php if(get_option('homepicture')){echo get_option('homepicture')['dropdown_homept']; } ?> ">
    <div class="grid-sizer"></div>
    <div class="gutter-sizer"></div>
    <?php while($query_child->have_posts()) : $query_child->the_post(); ?>
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full', false, ''  );
      $height_img_custom = get_post_meta($post->ID,'_dropdown_img_height_event',true);
      ?>
      <div class="grid-item">
        <?php the_title(); ?>
        <figure class="<?php if($height_img_custom){echo $height_img_custom;}?>"  data-image="<?php echo $image[0]; ?>">
          <a href="<?php echo $image[0]; ?>" class="fancybox" data-fancybox="images">
            <?php //the_post_thumbnail(); ?>
          </a>
          <div class="photo" style="background:url('<?php echo $image[0]; ?>');"></div>
        </figure>
      </div>
    <?php endwhile;?>
  </div>  

</div>
<?php
}

?>



<?php get_footer(); ?>
