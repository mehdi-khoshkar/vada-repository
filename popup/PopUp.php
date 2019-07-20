<?php
/*
Plugin Name:  پاپ آپ

Author: Vada

*/

require_once('factory.php');
 // create post type popup 



function create_popup() {
    register_post_type( 'popup',
        array(
            'labels' => array(
                'name' => 'پاپ آپ ',
                'singular_name' => 'popup',
                'add_new' => 'افزودن پاپ آپ جدید',
                'add_new_item' => ' افزودن پاپ آپ جدید',
                'edit' => 'Edit',
                'edit_item' => 'ویرایش پاپ آپ',
                'new_item' => 'پاپ آپ  جدید',
                'view' => 'نمایش',
                'view_item' => 'نمایش پاپ آپ ',
                'search_items' => 'جستجوی پاپ آپ ',
                'not_found' => 'پاپ آپی یافت نشد',
                'not_found_in_trash' => 'پاپ آپی یافت نشد',
				'has_archive' => true,
                'parent' => 'Parent popup'
            ),
 
            'public' => true,
            'menu_position' => 6,
            'supports' => array( 'title', 'editor', 'revisions','custom-fields' ),
            'taxonomies' => array( '' ),
            'menu_icon' => plugins_url( 'popup/images/popup.png'),
            'has_archive' => true
        )
    );
	
     
}


add_action( 'init', 'create_popup' );



function popup_enqueue_script() {   
    wp_enqueue_style( 'sweetalert2', plugin_dir_url( __FILE__ ) . 'popup.css' );
    wp_enqueue_script( 'sweetalert2', plugin_dir_url( __FILE__ ) . 'sweetalert2.all.min.js' );


}
add_action('wp_enqueue_scripts', 'popup_enqueue_script');



function my_popup() {
    add_meta_box( 'popup_meta_box',
        'تنظیمات پاپ آپ',
        'display_popup_meta_box',
        'popup', 'normal', 'high'
    );
}

add_action( 'admin_init', 'my_popup' );





function display_popup_meta_box( $popup ) {

   
    $type_popup = esc_html( get_post_meta( $popup->ID, 'type_popup ', true ) );

    $meta = get_post_meta(get_the_ID(), 'type_popup', true);
	    $meta_special = get_post_meta(get_the_ID(), 'type_popup_special', true);

        if($meta == 'all'){
            $checked_all ='checked';
        }

	 
      $html = '<input type="radio" id="type_popup" name="type_popup" value="all" '.$checked_all .'/>';
      $html .= '<label for="type_popup">تمام صفحات</label>';
      echo $html;

      $categories = get_categories();

			foreach($categories as $category) { ?>

<input type="radio" id="type_popup" name="type_popup"  value="<?php echo $category->term_id ?>" <?php if($category->term_id == $meta && empty($_GET['type_popup_special'])){ echo 'checked';}?>/>
				<label for="type_popup"> <?php echo $category->name; ?></label>
<?php
			}
	?>
		<input type="text" id="type_popup_special" name="type_popup_special"  value="<?php if(empty($_GET['type_popup'])){echo $meta_special;}?>"/>
				<label for="type_popup"> شناسه پست</label>

<?php
}


function add_popup_fields( $popup_id, $popup) {
    // Check post type for channel
   
    if ( $popup->post_type == 'popup' ) {
        // Store data in post meta table if present in post data
      
        if ( isset( $_POST['type_popup'] ) && $_POST['type_popup'] != '' && $_POST['type_popup_special'] == '' ) {
			  delete_post_meta($popup_id, 'type_popup_special', $_POST['type_popup_special']);
            update_post_meta( $popup_id, 'type_popup', $_POST['type_popup'] );
           
        }
		
		  if ( isset( $_POST['type_popup_special'] ) && $_POST['type_popup_special'] != '' ) {
			  delete_post_meta($popup_id, 'type_popup', $_POST['type_popup']);
            update_post_meta( $popup_id, 'type_popup_special', $_POST['type_popup_special'] );
           
        }
    }
  
    
}


add_action( 'save_post', 'add_popup_fields', 10, 2 );









add_action( 'wp_head', 'my_header_scripts' );
function my_header_scripts(){

	
  set_valid();
		 popup_shordcode($atts, $content = null);

	
?>
    <script>   
 
 function set_cookie(website) {
var cookie_name = website;

 if (-1 === document.cookie.indexOf(cookie_name)) {
	 
	 
	 var deviceAgent = navigator.userAgent.toLowerCase();
	var isiphone = deviceAgent.match(/(iphone|ipod|ipad)/);
	var isAndroid = deviceAgent.match(/android/);
	 
	 if (isiphone) {
		 
		 		      $('#popup_container a[href^="https://"]').each(function(){ 
            var oldUrl = $(this).attr("href"); // Get current url
            var newUrl = oldUrl.replace("https://uzee.ir/farmooonir", "https://uzee.ir/sibche"); // Create new url
            $(this).attr("href", newUrl); // Set herf value
        });
		 
	 }
	 
	 if (isAndroid) {
		 		  $('#popup_container  a[href^="https://"]').each(function(){ 
          
				  });
		 
	}
	 if(!(isAndroid || isiphone)){
	 
		      $('#popup_container  a[href^="https://"]').each(function(){ 
            var oldUrl = $(this).attr("href"); // Get current url
            var newUrl = oldUrl.replace("https://uzee.ir/farmooonir", ""); // Create new url
            $(this).attr("href", newUrl); // Set herf value
				 $('#popup_container a').attr("data-toggle","modal");
				  $('#popup_container a').attr("data-target","#basicExampleModal");
			 
        });	 
	 }

     var content_popup = $( "#popup_container" ).html();
	 
	 setTimeout(function(){ 
 Swal.fire({

 html:content_popup,
 showCloseButton: true,
 showCancelButton: false,
 focusConfirm: false,
 confirmButtonText:
 'ممنون',

 })
	 }, 3000);
 document.cookie = cookie_name +'=returning_'+cookie_name+';max-age=86400;path=/;'


 }
	 
	 
 }
		
		
		 function set_cookie_special(website) {
var cookie_name = website;

 if (-1 === document.cookie.indexOf(cookie_name)) {

	 var deviceAgent = navigator.userAgent.toLowerCase();
	var isiphone = deviceAgent.match(/(iphone|ipod|ipad)/);
	var isAndroid = deviceAgent.match(/android/);
	 
	 if (isiphone) {
		 
		 		      $('#popup_container_special a[href^="https://"]').each(function(){ 
            var oldUrl = $(this).attr("href"); // Get current url
            var newUrl = oldUrl.replace("https://uzee.ir/farmooonir", "https://uzee.ir/sibche"); // Create new url
            $(this).attr("href", newUrl); // Set herf value
			 $(this).attr("onclick","return gtag_report_conversion('http://uzee.ir/sibche')"); 
        });
		 
	 }
	 
	 if (isAndroid) {
		 		  $('#popup_container_special  a[href^="https://"]').each(function(){ 
          
			 $(this).attr("onclick","return gtag_report_conversion('https://uzee.ir/farmooonir')"); 
				  });
		 
	}
	 if(!(isAndroid || isiphone)){
	 
		      $('#popup_container_special  a[href^="https://"]').each(function(){ 
            var oldUrl = $(this).attr("href"); // Get current url
            var newUrl = oldUrl.replace("https://uzee.ir/farmooonir", ""); // Create new url
            $(this).attr("href", newUrl); // Set herf value
				 $('#popup_container_special a').attr("data-toggle","modal");
				  $('#popup_container_special a').attr("data-target","#basicExampleModal");
			 
        });	 
	 }
	      var content_popup = $( "#popup_container_special" ).html();

	 setTimeout(function(){ 
 Swal.fire({

 html:content_popup,
 showCloseButton: true,
 showCancelButton: false,
 focusConfirm: false,
 confirmButtonText:
 'ممنون',

 })
	 }, 3000);
 document.cookie = cookie_name +'=returning_'+cookie_name+';max-age=86400;path=/;'


 }
 }
 </script>

 <?php


}
    


function set_valid(){

      
    global $wpdb;
    $table_name = $wpdb->prefix.'postmeta';
    $result = $wpdb->get_results ( "SELECT * FROM $table_name WHERE meta_key = 'type_popup' " );

	
        foreach ( $result as $popup ){
                $popup_categories = get_the_terms( $popup->ID, 'category' );
               
            
                if($popup->meta_value == 'all')
                {
					
		  if(get_post_status( $popup->post_id ) == 'publish' ){

                
                if(!is_front_page() && !isset($_COOKIE['farmoon_all']) ){ 
                content_popup($popup->post_id)
                ?>
                    <script>  
        
                jQuery( document ).ready(function() {   
                            set_cookie('farmoon_all'); 
                        });
                            </script>
        
            <?php   }  } }
			foreach($popup_categories as $popup_category){
				
				if($popup->meta_value == $popup_category->term_id ){
							  if(get_post_status( $popup->post_id ) == 'publish' ){

			      $cookie_name = 'farmooon_'.$popup->meta_value;
					echo '<span id="cookie_name" style=" display: none;">'.$cookie_name.'</span>';
                    if(!is_front_page()  && $popup_category &&!isset($_COOKIE[$cookie_name]) ){ 
                    content_popup($popup->post_id)
                    ?>
                        <script>  
            
                    jQuery( document ).ready(function() { 
						var cookie_name = $('#cookie_name').text();
                                set_cookie(cookie_name); 
                            });
                                </script>
            
                <?php   } 
			   

							  }       

}
			}   
        }


      
    
}


function content_popup($popup_id){

    $content_post = get_post($popup_id);
    $content = $content_post->post_content;
    $content = apply_filters('the_content', '<div id="popup_container"style="display:none">'.$content.'</div>');
    echo $content;    
}


function content_popup_special($popup_id){

    $content_post = get_post($popup_id);
    $content = $content_post->post_content;
    $content = apply_filters('the_content', '<div id="popup_container_special"style="display:none">'.$content.'</div>');
    echo $content;    
}




function popup_shordcode($atts, $content = null){

      
global $post;
	extract( shortcode_atts( array(
      'post_id' => $post->post_id,
      ), $atts ) );
	
     global $wpdb;
    $table_name = $wpdb->prefix.'postmeta';
    $result = $wpdb->get_results ( "SELECT * FROM $table_name WHERE meta_key = 'type_popup_special' " );
	

        foreach ( $result as $popup ){

               if($popup->meta_value == $post->ID)
                    {
				   
				   if(get_post_status( $popup->post_id ) == 'publish' ){
                    $cookie_name = 'farmooon_'.$post->ID;
					echo '<span id="cookie_name_special" style=" display: none;">'.$cookie_name.'</span>';
                    if(!is_front_page() && is_single($post->ID)  &&!isset($_COOKIE[$cookie_name]) ){ 
						
                    content_popup_special($popup->post_id);
                    ?>
                        <script>  
                    
							 jQuery( document ).ready(function() { 
		 
        
            var cookie_name_special = $('#cookie_name_special').text();
                                set_cookie_special(cookie_name_special); 
                            });
                             </script>
            
                <?php  
					} 
			   }
			   } 
			  } 
		
	
    
}
add_shortcode('popup', 'popup_shordcode');




add_filter( 'manage_edit-popup_columns', 'my_edit_popup_columns' ) ;

function my_edit_popup_columns( $columns ) {

	$columns = array(
		'cb' => '&lt;input type="checkbox" />',
		'title' => __( 'پاپ آپ' ),
		'short_code' => __( 'کد کوتاه' ),
         'show' => __( 'نمایش در دسته بندی' ),
		'active' => __( 'وضعیت' ),
		 'date' => __( 'Date' )
	);

	return $columns;
}


add_action( 'manage_popup_posts_custom_column', 'my_manage_popup_columns', 10, 2 );

function my_manage_popup_columns( $column, $post_id ) {
	global $post;

	switch( $column ) {

		/* If displaying the 'short_code' column. */
		case 'short_code' :
	    $meta_special = get_post_meta(get_the_ID(), 'type_popup_special', true);

			if($meta_special && get_post_status( $post->post_id ) == 'publish' ){
						  echo '<input type="text" value="[popup post_id= '.$meta_special.'][/popup]" readonly style="width: 100%;">';

			} else {
				echo '-';
			}

			break;
			
			
				/* If displaying the 'active' column. */
		case 'active' :

				 if (get_post_status( $post->post_id ) == 'publish' ) {
			
						  echo 'فعال';

			} else {
				echo 'غیرفعال';
			}
		
		
			break;
			
		
	/* If displaying the 'show' column. */
		case 'show' :
	    $meta = get_post_meta(get_the_ID(), 'type_popup', true);

			if($meta && get_post_status( $post->post_id ) == 'publish' ){
				$cat_name = get_cat_name($meta );

						  echo $cat_name;

			} else {
				echo '-';
			}

			break;


		/* Just break out of the switch statement for everything else. */
		default :
			break;
	}
}