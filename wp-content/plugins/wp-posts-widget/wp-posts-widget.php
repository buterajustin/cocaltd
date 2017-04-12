<?php
/*
Plugin Name: WP Posts Widget
Plugin URI: http://www.mrwebsolution.in/
Description: It's a very simple plugin for display to recent posts list in sidebar widget.You can choose custom post type for display to list posts in sidebar.
Author: MR Web Solution
Author URI: http://raghunathgurjar.wordpress.com
Version: 1.0
*/

/*  Copyright 2016-17  wp-posts-widget  (email : raghunath.0087@gmail.com)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/

if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

/**************************************************************
                START CLASSS Wp_Posts_Widget 
**************************************************************/
/**
 * Adds Wp_Posts_Widget widget.
 */
class Wp_Posts_Widget extends WP_Widget {

	/**
	 * Register widget with WordPress.
	 */
	function __construct() {
		parent::__construct(
			'wp_posts_widget', // Base ID
			__( 'WP Recent Posts', 'mrwebsolution' ), // Name
			array( 'description' => __( 'A Custom Post Type Widget', 'mrwebsolution' ), ) // Args
		);
	}

	/**
	 * Front-end display of widget.
	 *
	 * @see WP_Widget::widget()
	 *
	 * @param array $args     Widget arguments.
	 * @param array $instance Saved values from database.
	 */
	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		$va_post_HTML ='<div class="ve-post-widget-div">';
		if ( ! empty( $instance['wpw_title'] ) && !$instance['wpw_hide_title']) {
			echo $args['before_title'] . apply_filters( 'widget_title', $instance['wpw_title'] ) . $args['after_title'];
		}
		$numberofpost  = ! empty( $instance['wpw_number_of_posts']) ? $instance['wpw_number_of_posts'] : 5;
		$postimage     = ! empty( $instance['wpw_show_featured_image']) ? $instance['wpw_show_featured_image'] : '';
		$postorderby   = ! empty( $instance['wpw_orderby_posts']) ? $instance['wpw_orderby_posts'] : 'ID';
		$postorder     = ! empty( $instance['wpw_order_posts']) ? $instance['wpw_order_posts'] : 'DESC';
		$posttype      = ! empty( $instance['wpw_post_type']) ? $instance['wpw_post_type'] : '';
		$excludePosts  = ! empty($instance['wpw_exclude_posts']) ? $instance['wpw_exclude_posts'] : '';
		/** return category list */
		if($posttype){
			$va_post_HTML .='<ul class="ve-post-widget-listing">';
				$args_val = array('post_type' => $posttype);
				/** define number or post by */		
				$args_val['posts_per_page'] = $numberofpost;
				$args_val['order'] = $postorder;
				/** define order by */
				if($postorderby!='')
				$args_val['orderby'] = $postorderby;
				/** define exclude posts */
				if($excludePosts)
				$args_val['exclude'] = $excludePosts;
				
				$posts_data = get_posts($args_val );
				if ( $posts_data ) {	
			    $divid ='';
					foreach ( $posts_data as $post_data ) {
						$post_link = get_permalink($post_data->ID);
						if($excludePosts!='' && in_array($post_data->ID,$excludePosts))
						{
							continue;
							}
						
						if ( is_wp_error( $post_link ) ) {
						continue;
						}
						
					$carrentActiveClass='';	
					global $post;
					if(is_singular())
					{
					    $currentTermType = get_query_var( 'taxonomy' );
					    $postId= $post->ID;
						 if(is_singular($post->post_type) && $postId==$post_data->ID)
						  $carrentActiveClass='class="active-post"';
					}
						$va_post_HTML .='<li '.$carrentActiveClass.'>';
						
						if ( has_post_thumbnail( $post_data->ID ) && $postimage) {
							$va_post_HTML .='<div class="image"><a href="' . get_permalink( $post_data->ID ) . '" title="' . esc_attr( $post_data->post_title ) . '">';
							$va_post_HTML .=get_the_post_thumbnail( $post_data->ID, array('100','100') );
							$va_post_HTML .='</a></div>';
						
						}else
						{
							
							$divid= 'id="no-image"';
						}
											
						$va_post_HTML .='<div class="content" '.$divid.'>';
							$va_post_HTML .='<h4>'. $post_data->post_title . '</h4>';
							$va_post_HTML .='<span class="post-date">'.get_the_date('',$post->ID).'</span>';
							$va_post_HTML .='<a href="' . esc_url( $post_link ) . '">Read more...</a>';
						$va_post_HTML .='</div>';
						
						'</li>';
					}
				}
			$va_post_HTML .='</ul>';
			echo $va_post_HTML;
			}
		$va_post_HTML .='</div>';
		echo $args['after_widget'];
		do_action('wpw_style','wpw_style_func'); // call style CSS
	}

	/**
	 * Back-end widget form.
	 *
	 * @see WP_Widget::form()
	 *
	 * @param array $instance Previously saved values from database.
	 */
	public function form( $instance ) {
		$wpw_title 					= ! empty( $instance['wpw_title'] ) ? $instance['wpw_title'] : __( 'WP Recent Post', 'virtualemployee' );
		$wpw_hide_title 			= ! empty( $instance['wpw_hide_title'] ) ? $instance['wpw_hide_title'] : __( '', 'virtualemployee' );
		$wpw_number_of_posts 	= ! empty( $instance['wpw_number_of_posts'] ) ? $instance['wpw_number_of_posts'] : __( '', 'virtualemployee' );
		$wpw_orderby_posts 		= ! empty( $instance['wpw_orderby_posts'] ) ? $instance['wpw_orderby_posts'] : __( '', 'virtualemployee' );
		$wpw_order_posts 		= ! empty( $instance['wpw_order_posts'] ) ? $instance['wpw_order_posts'] : __( '', 'virtualemployee' );
		$wpw_show_featured_image = ! empty( $instance['wpw_show_featured_image'] ) ? $instance['wpw_show_featured_image'] : __( '', 'virtualemployee' );
		$wpw_post_type 			= ! empty( $instance['wpw_post_type'] ) ? $instance['wpw_post_type'] : __( '', 'virtualemployee' );
		$wpw_exclude_posts 		= ! empty( $instance['wpw_exclude_posts'] ) ? $instance['wpw_exclude_posts'] : __( '', 'virtualemployee' );
		$wpw_show_count 			= ! empty( $instance['wpw_show_count'] ) ? $instance['wpw_show_count'] : __( '', 'virtualemployee' );
		?>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'wpw_title' ) ); ?>"><?php _e( esc_attr( 'Title:' ) ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'wpw_title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'wpw_title' ) ); ?>" type="text" value="<?php echo esc_attr( $wpw_title ); ?>">
		</p>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'wpw_hide_title' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'wpw_hide_title' ) ); ?>" type="checkbox" value="1" <?php checked( $wpw_hide_title, 1 ); ?>>
		<label for="<?php echo esc_attr( $this->get_field_id( 'wpw_hide_title' ) ); ?>"><?php _e( esc_attr( 'Hide Title' ) ); ?> </label> 
		</p>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'wpw_post_type' ) ); ?>"><?php _e( esc_attr( 'Post Type:' ) ); ?></label> 
		<select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'wpw_post_type' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'wpw_post_type' ) ); ?>">
					<?php 
					
					$args = array(
					   'public'   => true,
					   '_builtin' => false
					);

					$output = 'names'; // names or objects, note names is the default
					$operator = 'and'; // 'and' or 'or'

					$post_types = get_post_types( $args, $output, $operator ); 
					array_push($post_types,'post');array_push($post_types,'page');
					if ( $post_types ) {
					foreach ( $post_types  as $post_type ) {

						echo '<option value="'.$post_type.'" '.selected($wpw_post_type,$post_type).'>'.$post_type.'</option>';
					}
					}

				?>    
		</select>
		</p>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'wpw_exclude_posts' ) ); ?>"><?php _e( esc_attr( 'Exclude Post:' ) ); ?></label> 
		<select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'wpw_exclude_posts' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'wpw_exclude_posts' ) ); ?>[]" multiple>
					<?php 			
					if($wpw_post_type){
						$args = array(
						'posts_per_page'   => -1,
						'post_type'        => $wpw_post_type
						);
					$posts = get_posts($args);
			
					if ( $posts ) {
					foreach ( $posts as $post ) {

						echo '<option value="'.$post->ID.'" '.selected(true, in_array($post->ID,$wpw_exclude_posts), false).'>'.$post->post_title.'</option>';
					}
				    	echo '<option value="" '.selected(true, in_array('',$wpw_exclude_posts), false).' >None</option>';
					}
				}

				?>    
		</select>
		</p>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'wpw_orderby_posts' ) ); ?>"><?php _e( esc_attr( 'Order By:' ) ); ?></label> 
		<select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'wpw_orderby_posts' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'wpw_orderby_posts' ) ); ?>">
					<?php 	
					$orderby = array('ID','date','title','menu_order','rand','modified','comment_count');
			
					if ( $orderby ) {
					foreach ( $orderby as $orderbydata ) {

						echo '<option value="'.$orderbydata.'" '.selected($wpw_orderby_posts,$orderbydata ).'>'.$orderbydata.'</option>';
					}
				    	echo '<option value="" '.selected($wpw_orderby_posts,'' ).' >Default</option>';
					}
			

				?>    
		</select>
		</p>
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'wpw_order_posts' ) ); ?>"><?php _e( esc_attr( 'Order:' ) ); ?></label> 
		<select class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'wpw_order_posts' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'wpw_order_posts' ) ); ?>">
					<?php 	
					$order = array('DESC','ASC');
			
					if ( $order ) {
					foreach ( $order as $orderdata ) {
						echo '<option value="'.$orderdata.'" '.selected($wpw_order_posts,$orderdata ).'>'.$orderdata.'</option>';
					}
					echo '<option value="" '.selected($wpw_order_posts,'' ).' >Default</option>';
					}
			

				?>    
		</select>
		</p>
		
		<p>
		<label for="<?php echo esc_attr( $this->get_field_id( 'wpw_number_of_posts' ) ); ?>"><?php _e( esc_attr( 'Number of posts:' ) ); ?></label> 
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'wpw_number_of_posts' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'wpw_number_of_posts' ) ); ?>" type="text" value="<?php echo esc_attr( $wpw_number_of_posts ); ?>" placeholder="5">
		</p>
		<p>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'wpw_show_featured_image' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'wpw_show_featured_image' ) ); ?>" type="checkbox" value="1" <?php checked( $wpw_show_featured_image, 1 ); ?>>
		<label for="<?php echo esc_attr( $this->get_field_id( 'wpw_show_featured_image' ) ); ?>"><?php _e( esc_attr( 'Show Featured Image' ) ); ?> </label> 
		</p>
		<p>
		<input class="widefat" id="<?php echo esc_attr( $this->get_field_id( 'wpw_show_count' ) ); ?>" name="<?php echo esc_attr( $this->get_field_name( 'wpw_show_count' ) ); ?>" type="checkbox" value="1" <?php checked( $wpw_show_count, 1 ); ?>>
		<label for="<?php echo esc_attr( $this->get_field_id( 'wpw_show_count' ) ); ?>"><?php _e( esc_attr( 'Show Comment Count' ) ); ?> </label> 
		</p>
		<?php 
	}

	/**
	 * Sanitize widget form values as they are saved.
	 *
	 * @see WP_Widget::update()
	 *
	 * @param array $new_instance Values just sent to be saved.
	 * @param array $old_instance Previously saved values from database.
	 *
	 * @return array Updated safe values to be saved.
	 */
	public function update( $new_instance, $old_instance ) {
		$instance = array();
		$instance['wpw_title'] 					= ( ! empty( $new_instance['wpw_title'] ) ) ? strip_tags( $new_instance['wpw_title'] ) : '';
		$instance['wpw_hide_title'] 			= ( ! empty( $new_instance['wpw_hide_title'] ) ) ? strip_tags( $new_instance['wpw_hide_title'] ) : '';
		$instance['wpw_post_type'] 			= ( ! empty( $new_instance['wpw_post_type'] ) ) ? strip_tags( $new_instance['wpw_post_type'] ) : '';
		$instance['wpw_exclude_posts'] 		= ( ! empty( $new_instance['wpw_exclude_posts'] ) ) ? $new_instance['wpw_exclude_posts'] : '';
		$instance['wpw_show_count'] 			= ( ! empty( $new_instance['wpw_show_count'] ) ) ? strip_tags( $new_instance['wpw_show_count'] ) : '';
		$instance['wpw_show_featured_image'] = ( ! empty( $new_instance['wpw_show_featured_image'] ) ) ? strip_tags( $new_instance['wpw_show_featured_image'] ) : '';
		$instance['wpw_number_of_posts'] 	= ( ! empty( $new_instance['wpw_number_of_posts'] ) ) ? strip_tags( $new_instance['wpw_number_of_posts'] ) : '';
		$instance['wpw_orderby_posts'] 		= ( ! empty( $new_instance['wpw_orderby_posts'] ) ) ? strip_tags( $new_instance['wpw_orderby_posts'] ) : '';		
		$instance['wpw_order_posts'] 		= ( ! empty( $new_instance['wpw_order_posts'] ) ) ? strip_tags( $new_instance['wpw_order_posts'] ) : '';
		return $instance;
	}
	// register Wp_Posts_Widget widget
	function register_wpw_post_widget() {
		register_widget( 'Wp_Posts_Widget' );
	}
	/** plugin CSS **/
	function wpw_style_func()
	{
		$style='<style type="text/css">/* start wp posts widget CSS */.widget_wp_posts_widget{padding:0 20%;background:#fff}.widget_wp_posts_widget h2.widget-title{color:#4a5f6d;font-size:24px;font-weight:400;margin:0 0 25px;line-height:24px;text-transform:uppercase}.ve-post-widget-listing li{padding:0 0 20px;margin:0 0 20px;border-bottom:1px dashed #f0f0f0;font-size:0}.ve-post-widget-listing li:last-child{border:none;padding:0;margin:0}.ve-post-widget-listing li .image{display:inline-block;vertical-align:middle;width:30%}.ve-post-widget-listing li .image img{border:2px solid #e1e1e1}.ve-post-widget-listing li .content{display:inline-block;vertical-align:middle;width:70%;padding-left:15px;font-size:16px}.ve-post-widget-listing li #no-image{width:100%!important}.ve-post-widget-listing li .content h4{font-size:16px;line-height:22px;margin:0 0 10px}.ve-post-widget-listing li .content span.post-date{font-size:14px;color:#9a9a9a;line-height:1}.ve-post-widget-listing li .content a{color:#ee546c;display:block;cursor:pointer}.ve-post-widget-div ul.ve-post-widget-listing li.active-post a,.ve-post-widget-div ul.ve-post-widget-listing li.active-post span.comment-count,ul.ve-post-widget-listing li a:hover{color:#ee546c}/* End wp posts widget CSS*/
	</style>';
	echo $style;
	}
} 
// END class Wp_Posts_Widget

add_action( 'widgets_init', array( 'Wp_Posts_Widget', 'register_wpw_post_widget' ) );
add_action( 'wpw_style', array( 'Wp_Posts_Widget', 'wpw_style_func' ) );
/**************************************************************
                END CLASSS Wp_Posts_Widget 
**************************************************************/

/** updtate plugins links using hooks**/
if(!function_exists('wpw_add_settings_link')):
// Add settings link to plugin list page in admin
        function wpw_add_settings_link( $links ) {
            $settings_link = '<a href="widgets.php">' . __( 'Configure Widget', 'mrwebsolution' ) . '</a> | <a href="mailto:raghunath.0087@gmail.com">' . __( 'Contact to Author', 'mrwebsolution' ) . '</a>';
            array_unshift( $links, $settings_link );
            return $links;
        }
endif;
$plugin = plugin_basename( __FILE__ );
add_filter( "plugin_action_links_$plugin", 'wpw_add_settings_link' );