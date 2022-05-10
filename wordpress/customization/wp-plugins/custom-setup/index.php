<?php

/**
 * Plugin Name: Custom Setup
 * Description: Custom code for FIPN Site
 */

# Remove RSS feeds
remove_action( 'do_feed_rdf',  'do_feed_rdf',  10, 1 );
remove_action( 'do_feed_rss',  'do_feed_rss',  10, 1 );
remove_action( 'do_feed_rss2', 'do_feed_rss2', 10, 1 );
remove_action( 'do_feed_atom', 'do_feed_atom', 10, 1 );
remove_action('do_feed_rss2_comments', 'do_feed_rss2_comments', 10, 1);
remove_action('do_feed_atom_comments', 'do_feed_atom_comments', 10, 1);

add_action( 'wp', function(){
  remove_action( 'wp_head', 'feed_links_extra', 3 );
  remove_action( 'wp_head', 'feed_links', 2 );
  remove_action( 'wp_head', 'rsd_link' );
});


// Disallow Same Post Title .
if (! function_exists('disallow_same_post_title') ) :
  /**
   * Prohibits publish posts with the same title (if such a title
   * already exists for the current post type).
   *
   * The function is designed to be used on a hook:
   *
   *     add_filter( 'wp_insert_post_empty_content', 'disallow_same_post_title', 10, 2 );
   *
   * @param bool  $false
   * @param array $postarr
   *
   * @return bool
   *
   * @author Kama (wp-kama.com)
   */
  function disallow_same_post_title( $false, $postarr ){
    global $wpdb;

    // do only for publish post status
    if( $postarr['post_status'] !== 'publish' ){
      return $false;
    }

    $AND = [
      $wpdb->prepare(
        'post_title = %s AND post_type = %s AND post_status = %s',
        $postarr['post_title'], $postarr['post_type'], 'publish'
      )
    ];

    // set not post ID if it`s update
    if( ! empty( $postarr['ID'] ) ){
      $AND[] = $wpdb->prepare( "ID != %d", $postarr['ID'] );
    }

    // duplicate post_title
    $dupl_post_id = $wpdb->get_var( "SELECT ID FROM $wpdb->posts WHERE ". implode( ' AND ', $AND ) );

    if( $dupl_post_id ){

      // change error message
      add_filter( 'wp_error_added',
        function( $code, $message, $data, $that ) use ( $dupl_post_id ){
          $code === 'empty_content'
          && $that->errors[ $code ] = [
            sprintf(
              'Duplicate title! Post with such title already exists: %s',
              get_permalink( $dupl_post_id )
            )
          ];
        },
        10, 4
      );

      return true; // stop
    }

    return $false;
  }
endif;
// Отключено, нужно подебажить насколько решение рабочее
//add_filter( 'wp_insert_post_empty_content', 'disallow_same_post_title', 10, 2 );

// Hide wordpress version
if (! function_exists('wp_version_remove_version') ) :
  function wp_version_remove_version()
  {
    return '';
  }

endif;

add_filter('the_generator', 'wp_version_remove_version');

// Remove unused subscriber role
if (! function_exists('fipn_remove_subscriber') ) :

  function fipn_remove_subscriber()
  {
    remove_role( 'subscriber' );
  }

endif;

add_action('wp', 'fipn_remove_subscriber');
