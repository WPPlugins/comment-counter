<?php
/* 
Plugin Name: Comment Counter
Plugin URI: http://ocean90.de/blog/wordpress/wp-plugin-comment-counter/
Description: Shows the number of comments by a user on your blog
Version: 0.22
Author: ocean90
Author URI: http://ocean90.de
*/


function comment_counter($routine = 'email', $before = '', $after = '', $exclude = array()) {
	global $wpdb; 
	
	$cc_commentID = $_GET['commentID'];
 	
    $cc_comment = get_comment($cc_commentID);
	$cc_comment_author = $cc_comment->comment_author;
	$cc_comment_url = $cc_comment->comment_author_url;
	$cc_comment_email = $cc_comment->comment_author_email;
	$cc_comment_ip = $cc_comment->comment_author_IP;
	$cc_comment_id = $cc_comment->user_id;
	$cc_comment_type = $cc_comment->comment_type;
	
	$comment_value = array($cc_comment_author,$cc_comment_url,$cc_comment_ip,$cc_comment_id,$cc_comment_email);
	$result = array_intersect($exclude, $comment_value);
	 
	if (empty($result)){	
		if  (($cc_comment_type != 'pingback') and ($cc_comment_type != 'trackback'))  {
			if ($routine == 'author'){
				$count = "SELECT COUNT(comment_author) FROM $wpdb->comments WHERE comment_author = '$cc_comment_author' ";
			} elseif ($routine == 'url'){
				$count = "SELECT COUNT(comment_author_url) FROM $wpdb->comments WHERE comment_author_url = '$cc_comment_url' ";	
			} elseif ($routine == 'email'){
				$count = "SELECT COUNT(comment_author_email) FROM $wpdb->comments WHERE comment_author_email = '$cc_comment_email' ";
			} elseif ($routine == 'ip'){
				$count = "SELECT COUNT(comment_author_IP) FROM $wpdb->comments WHERE comment_author_IP = '$cc_comment_ip' ";
			} elseif ($routine == 'id'){
				$count = "SELECT COUNT(user_id) FROM $wpdb->comments WHERE user_id = '$cc_comment_id' ";
			} else {
				return;
			}
				
			$cc_count = $wpdb->get_var($count);
			
			echo $before, $cc_count, $after;
		}
	} else {
		return;
	}	
}
?>