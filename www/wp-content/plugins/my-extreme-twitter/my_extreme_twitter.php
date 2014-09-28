<?php
/**
 * Plugin Name: My Extreme Twitter
 * Plugin URI: http://aaryanahmed.net/
 * Description: A widget that displays Twitter's Tweet.
 * Version: 2.1.1
 * Author: Aaryan Ahmed AL-Amin
 * Author URI: http://aaryanahmed.net/
 */
 ?>
<?php 
add_action( 'widgets_init', 'register_my_extreme_twitter' );

function register_my_extreme_twitter() {
	register_widget( 'My_Extreme_Twitter_Widget' );
}

class My_Extreme_Twitter_Widget extends WP_Widget {
	
	function My_Extreme_Twitter_Widget() {
		$widget_ops = array( 'classname' => 'my_extreme_twitter', 'description' => __('A widget for Twitter with API 1.1 ', 'my_extreme_twitter') );
		$control_ops = array( 'width' => true, 'height' => true, 'id_base' => 'my_extreme_twitter-widget' );
		$this->WP_Widget( 'my_extreme_twitter-widget', __('My Extreme Twitter', 'my_extreme_twitter'), $widget_ops, $control_ops );
	}
	
	function widget( $args, $instance ) {
		extract( $args );
		$title = apply_filters('widget_title', $instance['title'] );
		$page_id = $instance['page_id'];
		if( empty($page_id) ) { $message = 'Please set your username'; $page_id = 'h3mdsa'; }
		$limit = $instance['limit'];
		$replies = $instance['replies'];
		if($replies == 'on') { $replies = 'true';} else { $replies = 'false'; }
		$show_header = $instance['show_header'];
		if($show_header != 'on')  $show_header = 'noheader'; else $show_header = '';
		$show_border = $instance['show_border'];
		if($show_border != 'on')  $show_border = 'noborders'; else $show_border = '';
		
		echo $before_widget;
		
		// Display the widget title
		if ( $title )
			echo $before_title . $title . $after_title;
		//Display the name

		$twitter_code = <<<Twitter
			<a class="twitter-timeline" href="https://twitter.com/$page_id"
			   data-widget-id="270430554174914560"
			   data-screen-name=$page_id data-show-replies=$replies data-chrome="nofooter transparent $show_header $show_border" 
			   data-tweet-limit=$limit>Tweets by @$page_id</a>
			<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
Twitter;
		if(!empty($message)) echo '<p>'.$message.'</p>';
		echo $twitter_code;
		
		
		echo $after_widget;
	}
	
	function update( $new_instance, $old_instance ) {
		$instance = $old_instance;
	
		//Strip tags from title and name to remove HTML
		$instance['title'] = trim(strip_tags($new_instance['title']));
		$instance['page_id'] = trim( $new_instance['page_id'] );
		$instance['limit'] = trim( $new_instance['limit'] );
		$instance['replies'] =  $new_instance['replies'];
		$instance['show_header'] = $new_instance['show_header'];
		$instance['show_border'] = $new_instance['show_border'];
	
		return $instance;
	}
	
	function form($instance) {
		//Set up some default widget settings.
		$defaults = array( 'title' => __('Twitter Feed', 'my_extreme_twitter'), 'page_id' => __('h3mdsa', 'my_extreme_twitter'),
							'limit' => __('5', 'my_extreme_twitter'),
							'replies' => __(false, 'my_extreme_twitter'),
							'show_header' => __(true, 'my_extreme_twitter'),
				            'show_border' => __(true, 'my_extreme_twitter'),
							 );
		$instance = wp_parse_args( (array) $instance, $defaults );  ?>

	<p>
		<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:', 'my_extreme_twitter'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo $instance['title']; ?>" />
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'page_id' ); ?>"><?php _e('Twitter username', 'my_extreme_twitter'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'page_id' ); ?>" name="<?php echo $this->get_field_name( 'page_id' ); ?>" value="<?php echo $instance['page_id']; ?>" />
	</p>
	

	<p>
		<label for="<?php echo $this->get_field_id( 'limit' ); ?>"><?php _e('Limit', 'my_extreme_twitter'); ?></label>
		<input class="widefat" id="<?php echo $this->get_field_id( 'limit' ); ?>" name="<?php echo $this->get_field_name( 'limit' ); ?>" value="<?php echo $instance['limit']; ?>" />
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'show_header' ); ?>"><?php _e('Show Header', 'my_extreme_twitter'); ?></label>
		<input class="widefat" type="checkbox" <?php if( $instance['show_header']) echo 'checked'; ?> id="<?php echo $this->get_field_id( 'show_header' ); ?>" name="<?php echo $this->get_field_name( 'show_header' ); ?>" />
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'show_border' ); ?>"><?php _e('Show Border', 'my_extreme_twitter'); ?></label>
		<input class="widefat" type="checkbox" <?php if( $instance['show_border']) echo 'checked'; ?> id="<?php echo $this->get_field_id( 'show_border' ); ?>" name="<?php echo $this->get_field_name( 'show_border' ); ?>" />
	</p>
	
	<p>
		<label for="<?php echo $this->get_field_id( 'replies' ); ?>"><?php _e('Show Replies', 'my_extreme_twitter'); ?></label>
		<input class="widefat" type="checkbox" <?php if( $instance['replies']) echo 'checked'; ?> id="<?php echo $this->get_field_id( 'replies' ); ?>" name="<?php echo $this->get_field_name( 'replies' ); ?>" />
	</p>
	<?php 	
	}

}
?>
