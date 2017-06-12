<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ($sage_includes as $file) {
  if (!$filepath = locate_template($file)) {
    trigger_error(sprintf(__('Error locating %s for inclusion', 'sage'), $file), E_USER_ERROR);
  }

  require_once $filepath;
}
unset($file, $filepath);

/* Post Titles on Home */

function homeTitle($string) {
  $string = explode(':', $string);
  if (!empty($string[2])) {
    $title = $string[1].'<strong>'.$string[2].'</strong>';
  } else {
    $title = '<strong>'.$string[1].'</strong>';
  }
  echo $title;
}

function get_excerpt(){
  $excerpt = get_the_content();
  $excerpt = preg_replace(" ([.*?])",'',$excerpt);
  $excerpt = strip_shortcodes($excerpt);
  $excerpt = strip_tags($excerpt);
  $excerpt = substr($excerpt, 0, 127);
  $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
  $excerpt = $excerpt.'...';
  return $excerpt;
}