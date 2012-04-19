<?php

add_theme_support( 'automatic-feed-links' );

if( function_exists( 'register_nav_menus' ) ) {
	register_nav_menus(
		array(
			'main_menu' => 'Main Menu'
			)
		);	
	}

if ( function_exists('register_sidebar') )
    register_sidebar(array('name'=>'Events'));
    
if ( function_exists('register_sidebar') )
    register_sidebar(array('name'=>'Home'));
    
if ( function_exists('register_sidebar') )
    register_sidebar(array('name'=>'Diplomatic'));
    
if ( function_exists('register_sidebar') )
    register_sidebar(array('name'=>'Global'));

// Custom callback to list comments in the toynbee style
function custom_comments($comment, $args, $depth) {
  $GLOBALS['comment'] = $comment;
        $GLOBALS['comment_depth'] = $depth;
  ?>
        <li id="comment-<?php comment_ID() ?>" <?php comment_class() ?>>
                <?php commenter_link() ?>
                <p class="comment-meta"><?php printf(__('Posted %1$s at %2$s <span class="meta-sep">|</span> <a href="%3$s" title="Permalink to this comment">Permalink</a>', 'toynbee'),
                                        get_comment_date(),
                                        get_comment_time(),
                                        '#comment-' . get_comment_ID() );
                                        edit_comment_link(__('Edit', 'toynbee'), ' <span class="meta-sep">|</span> <span class="edit-link">', '</span>'); ?></p>
  <?php if ($comment->comment_approved == '0') _e("\t\t\t\t\t<span class='unapproved'>Your comment is awaiting moderation.</span>\n", 'toynbee') ?>
          <div class="comment-content">
                <?php comment_text() ?>
                </div>
                <?php // echo the comment reply link
                        if($args['type'] == 'all' || get_comment_type() == 'comment') :
                                comment_reply_link(array_merge($args, array(
                                        'reply_text' => __('Reply','toynbee'), 
                                        'login_text' => __('Log in to reply.','toynbee'),
                                        'depth' => $depth,
                                        'before' => '<div class="comment-reply-link">', 
                                        'after' => '</div>'
                                )));
                        endif;
                ?>
<?php } // end custom_comments


// Custom callback to list pings
function custom_pings($comment, $args, $depth) {
       $GLOBALS['comment'] = $comment;
        ?>
                <li id="comment-<?php comment_ID() ?>" <?php comment_class() ?>>
                        <div class="comment-author"><?php printf(__('By %1$s on %2$s at %3$s', 'toynbee'),
                                        get_comment_author_link(),
                                        get_comment_date(),
                                        get_comment_time() );
                                        edit_comment_link(__('Edit', 'toynbee'), ' <span class="meta-sep">|</span> <span class="edit-link">', '</span>'); ?></div>
    <?php if ($comment->comment_approved == '0') _e('\t\t\t\t\t<span class="unapproved">Your trackback is awaiting moderation.</span>\n', 'toynbee') ?>
            <div class="comment-content">
                        <?php comment_text() ?>
                        </div>
<?php } // end custom_pings

// Produces an avatar image with the hCard-compliant photo class
function commenter_link() {
    $commenter = get_comment_author_link();
    if ( ereg( '<a[^>]* class=[^>]+>', $commenter ) ) {
        $commenter = ereg_replace( '(<a[^>]* class=[\'"]?)', '\\1url ' , $commenter );
    } else {
        $commenter = ereg_replace( '(<a )/', '\\1class="url "' , $commenter );
    }
    $avatar_email = get_comment_author_email();
    $avatar = str_replace( "class='avatar", "class='photo gravatar", get_avatar( $avatar_email, 50 ) );
    echo $avatar . ' <h3 class="fn n">' . $commenter . '</h3>';
} // end commenter_link
	
?>