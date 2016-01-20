<?php

namespace Roots\Sage\Setup;

use Roots\Sage\Assets;

/**
 * Theme setup
 */
function setup() {
  // Enable features from Soil when plugin is activated
  // https://roots.io/plugins/soil/
  add_theme_support('soil-clean-up');
  add_theme_support('soil-nav-walker');
  add_theme_support('soil-nice-search');
  add_theme_support('soil-jquery-cdn');
  add_theme_support('soil-relative-urls');

  // Make theme available for translation
  // Community translations can be found at https://github.com/roots/sage-translations
  load_theme_textdomain('sage', get_template_directory() . '/lang');

}
add_action('after_setup_theme', __NAMESPACE__ . '\\setup');

/**
 * Theme assets
 */
function css_assets() {
  wp_enqueue_style('sage/css', Assets\asset_path('styles/main.css'), false, null);

}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\css_assets', 11);

function js_assets() {

  wp_enqueue_script('sage/js', Assets\asset_path('scripts/main.js'), ['jquery'], null, true);
}
add_action('wp_enqueue_scripts', __NAMESPACE__ . '\\js_assets', 100);
