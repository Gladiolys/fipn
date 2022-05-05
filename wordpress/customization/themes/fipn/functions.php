<?php
/**
 * FIPN functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package    WordPress
 * @subpackage FIPN_Theme
 */

// Set up block theme support
if (! function_exists('fipn_support') ) :

    /**
     * Sets up theme defaults and registers support for various WordPress features.
     *
     * @return void
     */
    function fipn_support()
    {

        // Add support for block styles.
        add_theme_support('wp-block-styles');

        // Enqueue editor styles.
        add_editor_style('style.css');
    }

endif;

add_action('after_setup_theme', 'fipn_support');

// Add styles
if (! function_exists('fipn_styles') ) :

    /**
     * Enqueue styles.
     *
     * @return void
     */
    function fipn_styles()
    {
        $theme_version = wp_get_theme()->get('Version');

        $version_string = is_string($theme_version) ? $theme_version : false;
        wp_register_style(
            'fipn-style',
            get_template_directory_uri() . '/style.css',
            array(),
            $version_string
        );

        // Add styles inline.
        wp_add_inline_style('fipn-style', fipn_get_font_face_styles());

        // Enqueue theme stylesheet.
        wp_enqueue_style('fipn-style');

    }

endif;

add_action('wp_enqueue_scripts', 'fipn_styles');

// Editor styles
if (! function_exists('fipn_editor_styles') ) :

    /**
     * Enqueue editor styles.
     *
     * @return void
     */
    function fipn_editor_styles()
    {

        // Add styles inline.
        wp_add_inline_style('wp-block-library', fipn_get_font_face_styles());

    }

endif;

add_action('admin_init', 'fipn_editor_styles');


// Font face inline styles
if (! function_exists('fipn_get_font_face_styles') ) :

    /**
     * Get font face styles.
     * Called by functions fipn_styles() and fipn_editor_styles() above.
     *
     * @return string
     */
    function fipn_get_font_face_styles()
    {

        return "
		@font-face{
			font-family: 'Roboto';
			font-weight: 400;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
			src: url('" . get_theme_file_uri('assets/fonts/roboto-v29-latin-ext_latin_cyrillic-ext_cyrillic-regular.woff2') . "') format('woff2'),
			url('" . get_theme_file_uri('assets/fonts/roboto-v29-latin-ext_latin_cyrillic-ext_cyrillic-regular.woff') . "') format('woff'),
			url('" . get_theme_file_uri('assets/fonts/roboto-v29-latin-ext_latin_cyrillic-ext_cyrillic-regular.ttf') . "') format('ttf');
		}

		@font-face{
			font-family: 'Roboto';
			font-weight: 400;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
      src: url('" . get_theme_file_uri('assets/fonts/roboto-v29-latin-ext_latin_cyrillic-ext_cyrillic-italic.woff2') . "') format('woff2'),
			url('" . get_theme_file_uri('assets/fonts/roboto-v29-latin-ext_latin_cyrillic-ext_cyrillic-italic.woff') . "') format('woff'),
			url('" . get_theme_file_uri('assets/fonts/roboto-v29-latin-ext_latin_cyrillic-ext_cyrillic-italic.ttf') . "') format('ttf');
		}

		@font-face{
			font-family: 'Roboto';
			font-weight: 700;
			font-style: normal;
			font-stretch: normal;
			font-display: swap;
      src: url('" . get_theme_file_uri('assets/fonts/roboto-v29-latin-ext_latin_cyrillic-ext_cyrillic-700.woff2') . "') format('woff2'),
			url('" . get_theme_file_uri('assets/fonts/roboto-v29-latin-ext_latin_cyrillic-ext_cyrillic-700.woff') . "') format('woff'),
			url('" . get_theme_file_uri('assets/fonts/roboto-v29-latin-ext_latin_cyrillic-ext_cyrillic-700.ttf') . "') format('ttf');
		}

    @font-face{
			font-family: 'Roboto';
			font-weight: 700;
			font-style: italic;
			font-stretch: normal;
			font-display: swap;
      src: url('" . get_theme_file_uri('assets/fonts/roboto-v29-latin-ext_latin_cyrillic-ext_cyrillic-700italic.woff2') . "') format('woff2'),
			url('" . get_theme_file_uri('assets/fonts/roboto-v29-latin-ext_latin_cyrillic-ext_cyrillic-700italic.woff') . "') format('woff'),
			url('" . get_theme_file_uri('assets/fonts/roboto-v29-latin-ext_latin_cyrillic-ext_cyrillic-700italic.ttf') . "') format('ttf');
		}

    @font-face{
      font-family: 'Roboto';
      font-weight: 500;
      font-style: normal;
      font-stretch: normal;
      font-display: swap;
      src: url('" . get_theme_file_uri('assets/fonts/roboto-v29-latin-ext_latin_cyrillic-ext_cyrillic-500.woff2') . "') format('woff2'),
      url('" . get_theme_file_uri('assets/fonts/roboto-v29-latin-ext_latin_cyrillic-ext_cyrillic-500.woff') . "') format('woff'),
      url('" . get_theme_file_uri('assets/fonts/roboto-v29-latin-ext_latin_cyrillic-ext_cyrillic-500.ttf') . "') format('ttf');
    }

    @font-face{
      font-family: 'Roboto';
      font-weight: 500;
      font-style: italic;
      font-stretch: normal;
      font-display: swap;
      src: url('" . get_theme_file_uri('assets/fonts/roboto-v29-latin-ext_latin_cyrillic-ext_cyrillic-500italic.woff2') . "') format('woff2'),
      url('" . get_theme_file_uri('assets/fonts/roboto-v29-latin-ext_latin_cyrillic-ext_cyrillic-500italic.woff') . "') format('woff'),
      url('" . get_theme_file_uri('assets/fonts/roboto-v29-latin-ext_latin_cyrillic-ext_cyrillic-500italic.ttf') . "') format('ttf');
    }

    @font-face{
      font-family: 'Roboto';
      font-weight: 500;
      font-style: italic;
      font-stretch: normal;
      font-display: swap;
      src: url('" . get_theme_file_uri('assets/fonts/roboto-v29-latin-ext_latin_cyrillic-ext_cyrillic-500italic.woff2') . "') format('woff2'),
      url('" . get_theme_file_uri('assets/fonts/roboto-v29-latin-ext_latin_cyrillic-ext_cyrillic-500italic.woff') . "') format('woff'),
      url('" . get_theme_file_uri('assets/fonts/roboto-v29-latin-ext_latin_cyrillic-ext_cyrillic-500italic.ttf') . "') format('ttf');
    }

    @font-face{
      font-family: 'Roboto';
      font-weight: 300;
      font-style: normal;
      font-stretch: normal;
      font-display: swap;
      src: url('" . get_theme_file_uri('assets/fonts/roboto-v29-latin-ext_latin_cyrillic-ext_cyrillic-300.woff2') . "') format('woff2'),
      url('" . get_theme_file_uri('assets/fonts/roboto-v29-latin-ext_latin_cyrillic-ext_cyrillic-300.woff') . "') format('woff'),
      url('" . get_theme_file_uri('assets/fonts/roboto-v29-latin-ext_latin_cyrillic-ext_cyrillic-300.ttf') . "') format('ttf');
    }

    @font-face{
      font-family: 'Roboto';
      font-weight: 300;
      font-style: italic;
      font-stretch: normal;
      font-display: swap;
      src: url('" . get_theme_file_uri('assets/fonts/roboto-v29-latin-ext_latin_cyrillic-ext_cyrillic-300italic.woff2') . "') format('woff2'),
      url('" . get_theme_file_uri('assets/fonts/roboto-v29-latin-ext_latin_cyrillic-ext_cyrillic-300italic.woff') . "') format('woff'),
      url('" . get_theme_file_uri('assets/fonts/roboto-v29-latin-ext_latin_cyrillic-ext_cyrillic-300italic.ttf') . "') format('ttf');
    }
		";

    }

endif;

// Preload web font
if (! function_exists('fipn_preload_webfonts') ) :

    /**
     * Preloads the main web font to improve performance.
     *
     * Only the main web font (font-style: normal) is preloaded here since that font is always relevant (it is used
     * on every heading, for example). The other font is only needed if there is any applicable content in italic style,
     * and therefore preloading it would in most cases regress performance when that font would otherwise not be loaded
     * at all.
     *
     * @return void
     */
    function fipn_preload_webfonts()
    {
        ?>
        <link rel="preload" href="<?php echo esc_url(get_theme_file_uri('assets/fonts/roboto-v29-latin-ext_latin_cyrillic-ext_cyrillic-regular.woff2')); ?>" as="font" type="font/woff2" crossorigin>
        <?php
    }

endif;

add_action('wp_head', 'fipn_preload_webfonts');


// Allow only selected here block types in editor
if (! function_exists('fipn_allowed_block_types') ) :
function fipn_allowed_block_types() {

  return array(
    // Common
    'core/paragraph',
    'core/image',
    'core/heading',
    'core/list',
    'core/gallery',
    'core/quote',
    'core/audio',
    'core/cover',
    'core/file',
    'core/video',
    'core/pullquote',
    'core/verse',
    // Formatting
    'core/table',
    'core/freeform',
    'core/html',
    'core/preformatted',
    // Layout
    'core/buttons',
    'core/columns',
    'core/group',
    'core/media-text',
    'core/more',
    'core/nextpage',
    'core/separator',
    'core/spacer',
    // Widgets
    'core/shortcode',
    'core/categories',
    'core/latest-posts',
    'core/search',
    'core/tag-cloud',
    // Content
    'core/query',
    'core/query-pagination',
    'core/query-no-results',
    'core/query-pagination-next',
    'core/query-pagination-numbers',
    'core/query-pagination-previous',
    'core/read-more',
    'core/navigation',
    'core/navigation-area',
    'core/post-author',
    'core/post-author-biography',
    'core/post-author-name',
    'core/post-content',
    'core/post-date',
    'core/post-excerpt',
    'core/post-featured-image',
    'core/post-navigation-link',
    'core/post-template',
    'core/post-terms',
    'core/post-title',
    // Embeds
    'core/embed',
    // Embedpress
    'embedpress/embedpress-pdf',
    'embedpress/document',
    'embedpress/google-sheets-block',
    'embedpress/google-docs-block',
    'embedpress/google-slides-block',
    // SEO
    'aioseo/breadcrumbs',
  );

}

endif;


add_filter( 'allowed_block_types_all', 'fipn_allowed_block_types' );

// Hide some embed variations
function fipn_disable_embed_variation() {
  wp_enqueue_script( 'fipn-hide-script', get_theme_file_uri( '/assets/js/hideEmbedVariations.js' ), array( 'wp-blocks', 'wp-dom-ready', 'wp-edit-post' ));
}

add_action( 'enqueue_block_editor_assets', 'fipn_disable_embed_variation' );

// Add language switcher shortcode, need to move inside shortcode or block because dynamic content from page to page
function render_language_switcher(){
  return '<ul class="language-list">'.pll_the_languages(['show_names' => 1, 'show_flags' => 0, 'echo' => 0, 'hide_current' => 1, 'display_names_as' => 'slug']).'</ul>';
}

add_shortcode( 'languages-switcher', 'render_language_switcher' );

// Add block patterns
require get_template_directory() . '/inc/block-patterns.php';
