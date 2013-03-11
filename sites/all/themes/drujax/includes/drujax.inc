<?php
global $drujax_vars;
$drujax_vars = array();
  
function drujax_preprocess_page(&$vars) {
  $vars["ajax"] = (isset($_GET['ajax']) && $_GET['ajax'] == true );
  if($vars["ajax"]){
    $vars["theme_hook_suggestions"][] = "page__drujax";
  }
  $theme_path = drupal_get_path('theme', 'drujax');
  $vars["theme_path"] = $theme_path;
}

function drujax_process_page(&$vars){
  $vars["ajax"] = (isset($_GET['ajax']) && $_GET['ajax'] == true ); 
  $vars["content"] = "";
  if(!$vars["ajax"]){
    $vars["content"] = drujax_render('page--drujax.tpl.php',$vars,"main");
  }
}

function drujax_preprocess_html(&$vars) {
  $vars["ajax"] = (isset($_GET['ajax']) && $_GET['ajax'] == true ); 
  if($vars["ajax"]){
    $vars["theme_hook_suggestions"][] = "html__drujax";
  }
  $theme_path = drupal_get_path('theme', 'drujax');
  $vars["theme_path"] = $theme_path;
}

function drujax_render($template_file,$variables){
  extract($variables, EXTR_SKIP); // Extract the variables to a local namespace
  ob_start(); // Start output buffering
  $theme_path = drupal_get_path('theme', 'drujax');
  include "./$theme_path/templates/$template_file"; // Include the template file
  $contents = ob_get_contents(); // Get the contents of the buffer
  ob_end_clean(); // End buffering and discard
  return $contents; // Return the contents
}