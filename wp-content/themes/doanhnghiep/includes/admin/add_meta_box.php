<?php 

  // ADD META BOX

function height_img_masonry(){
  add_meta_box('height_img_masonry','Chiều cao ảnh','height_img_masonry_function',array('duan'));
}
add_action('add_meta_boxes','height_img_masonry');

function height_img_masonry_function ( $post ) {
  ?>
  <?php 
        //get dropdown saved value
  $selected = esc_attr(get_post_meta( $post->ID, '_dropdown_img_height_event', true )); 
  ?>
  <div class="custom_width_h_img">
    <div class="item_custom_wh">
      <label>Chiều cao ảnh</label>
      <select name="dropdown_height_img" id="dropdown_height_img" >
        <option value="height-1" <?php echo selected( $selected, 'height-1' ); ?>> 300px</option>
        <option value="height-12" <?php echo selected( $selected, 'height-12' ); ?>> 350px</option>
        <option value="height-2" <?php echo selected( $selected, 'height-2' ); ?>> 400px</option>
        <option value="height-23" <?php echo selected( $selected, 'height-23' ); ?>> 450px</option>
        <option value="height-3" <?php echo selected( $selected, 'height-3' ); ?>> 500px</option>
        <option value="height-34" <?php echo selected( $selected, 'height-34' ); ?>> 550px</option>
        <option value="height-4" <?php echo selected( $selected, 'height-4' ); ?>> 600px</option>
      </select>
    </div>
  </div>

  <?php
}

function tg_save($post_id){
  if(isset($_POST['dropdown_height_img'])){
    $height_img_custom = sanitize_text_field($_POST['dropdown_height_img']);
    update_post_meta( $post_id, '_dropdown_img_height_event', $height_img_custom );
  }

}
add_action('save_post','tg_save');

?>