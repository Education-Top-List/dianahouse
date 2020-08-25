<?php
add_action('admin_menu', 'ch_essentials_admin');
function ch_essentials_admin() {
	register_setting('zang-settings-header', 'phone');
	register_setting('zang-settings-socials', 'footer_fb');
	register_setting('zang-settings-socials', 'footer_twitter');
	register_setting('zang-settings-socials', 'footer_ggplus');
	register_setting('zang-settings-socials', 'footer_insta');

	/* Regist Masonry Option */
	register_setting('zang-settings-col-msrpage', 'homepicture');

	/* Base Menu */
	add_menu_page('Zang Theme Option','ZQ Framework','manage_options','template_admin_zang','zang_theme_create_page',get_template_directory_uri() . '/images/setting_icon.png',110);
}
add_action('admin_init', 'zang_custom_settings');
function zang_custom_settings() { 

	/* Header Options Section */
	add_settings_section('zang-header-options', 'Chỉnh sửa header','zang_header_options_callback','zang-settings-header' );
	add_settings_field('address-hd','Số điện thoại', 'zang_phone_header','zang-settings-header', 'zang-header-options');

	/* Social Options Section */
	add_settings_section('zang-social-options','Chỉnh sửa social','zang_social_options_callback','zang-settings-socials' );
	add_settings_field('facebook','Facebook Link', 'zang_footer_fb','zang-settings-socials', 'zang-social-options');
	add_settings_field('twitter','Twitter Link', 'zang_footer_twitter','zang-settings-socials', 'zang-social-options');
	add_settings_field('ggplus','Google Plus Link', 'zang_footer_ggplus','zang-settings-socials', 'zang-social-options');
	add_settings_field('insta','Instagram Link', 'zang_footer_insta','zang-settings-socials', 'zang-social-options');

	/* Col Masonry Options Section */
	add_settings_section('zang-colsmr-options','Chỉnh sửa số cột hiển thị ','zang_colsmr_options_callback','zang-settings-col-msrpage' );
	add_settings_field('homept','Ảnh Gia Đình', 'msr_homepicture','zang-settings-col-msrpage', 'zang-colsmr-options');
}

function zang_header_options_callback(){
	echo '';
}

function zang_social_options_callback(){
	echo '';
}

function zang_colsmr_options_callback(){
	echo '';
}

function zang_phone_header(){
	$phone = esc_attr(get_option('phone'));
	echo '<input type="text" class="iptext_adm" name="phone" value="'.$phone.'" >';
}

function zang_footer_fb(){
	$footer_fb = esc_attr(get_option('footer_fb'));
	echo '<input type="text" class="iptext_adm" name="footer_fb" value="'.$footer_fb.'" placeholder="" ';
}
function zang_footer_twitter(){
	$footer_twitter = esc_attr(get_option('footer_twitter'));
	echo '<input type="text" class="iptext_adm" name="footer_twitter" value="'.$footer_twitter.'" placeholder="" ';
}
function zang_footer_ggplus(){
	$footer_ggplus = esc_attr(get_option('footer_ggplus'));
	echo '<input type="text" class="iptext_adm" name="footer_ggplus" value="'.$footer_ggplus.'" placeholder="" ';
}
function zang_footer_insta(){
	$footer_insta = esc_attr(get_option('footer_insta'));
	echo '<input type="text" class="iptext_adm" name="footer_insta" value="'.$footer_insta.'" placeholder="" ';
}

/* masonry page function */
function msr_homepicture(){
	$options = get_option('homepicture');
	$items = array("tgcol-3","tgcol-4","tgcol-5","tgcol-6");
	$numsItem = array("3","4","5","6");
	echo "<select id='dropdown_homept' name='homepicture[dropdown_homept]'>";
	foreach($items as $index => $item) {
		$selected = ($options['dropdown_homept']==$item) ? 'selected="selected"' : '';
		echo "<option value='$item' $selected>".$numsItem[$index]." cột</option>";
	}
	echo "</select>";
}

function myshortcode(){
	ob_start();
	if(get_option('footer_fb') || get_option('footer_twitter') || get_option('footer_ggplus') || get_option('footer_insta') ){
		?>
		<ul class="social_ft">
			<?php if(get_option('footer_fb')){ ?>
				<li class="fb_ft"><a href="<?php echo get_option('footer_fb'); ?>" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
			<?php }?>
			<?php if(get_option('footer_twitter')){ ?>
				<li class="twitter"><a href="<?php echo get_option('footer_twitter'); ?>" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i></i></a></li>
			<?php }?>
			<?php if(get_option('footer_ggplus')){ ?>
				<li class="ggplus"><a href="<?php echo get_option('footer_ggplus'); ?>" target="_blank"><i class="fa fa-google" aria-hidden="true"></i></a></li>
			<?php }?>
			<?php if(get_option('footer_insta')){ ?>
				<li class="instagram"><a href="<?php echo get_option('footer_insta'); ?>" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
			<?php }?>
		</ul>	
		<?php
	}
	return ob_get_clean();
}
add_shortcode('social_ft','myshortcode');



/* Display Page
-----------------------------------------------------------------*/
function zang_theme_create_page() {
	?>
	<div class="wrap">  
		<?php settings_errors(); ?>  

		<?php  
		$active_tab = isset( $_GET[ 'tab' ] ) ? $_GET[ 'tab' ] : 'col_page_options';  
		?>  

		<ul class="nav-tab-wrapper"> 
		<li><a href="?page=template_admin_zang&tab=col_page_options" class="nav-tab <?php echo $active_tab == 'col_page_options' ? 'nav-tab-active' : ''; ?>">Column Masonry Pages</a></li>	
		<li><a href="?page=template_admin_zang&tab=header_page_options" class="nav-tab <?php echo $active_tab == 'header_page_options' ? 'nav-tab-active' : ''; ?>">Header</a> </li>
		<li><a href="?page=template_admin_zang&tab=social_page_options" class="nav-tab <?php echo $active_tab == 'social_page_options' ? 'nav-tab-active' : ''; ?>">Social Footer</a></li>	
		</ul>  

		<form method="post" action="options.php">  
			<?php 
			if( $active_tab == 'header_page_options' ) {  
				settings_fields( 'zang-settings-header' );
				do_settings_sections( 'zang-settings-header' ); 
			} else if( $active_tab == 'social_page_options' ) {
				settings_fields( 'zang-settings-socials' );
				do_settings_sections( 'zang-settings-socials' ); 
			}
			else if( $active_tab == 'col_page_options' ) {
				settings_fields( 'zang-settings-col-msrpage' );
				do_settings_sections( 'zang-settings-col-msrpage' ); 
			}
			?>             
			<?php submit_button(); ?>  
		</form> 

	</div> 

	<?php
}

