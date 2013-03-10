<?php

function drujax_preprocess_page(&$vars) {
  $vars["ajax"] = (isset($_GET['ajax']) && $_GET['ajax'] == true );
  $theme_path = drupal_get_path('theme', 'drujax');
  $vars["theme_path"] = $theme_path;
}

function drujax_preprocess_html(&$vars) {
  $vars["ajax"] = (isset($_GET['ajax']) && $_GET['ajax'] == true ); 
  $theme_path = drupal_get_path('theme', 'drujax');
  $vars["theme_path"] = $theme_path;
}

function drujax_json($buffer){
  global $drujax_vars;
  $drujax_vars["main"] = $buffer;
  return json_encode($drujax_vars);
}
function drujax_start(){
  global $drujax_vars;
  $drujax_vars = array();
  if(isset($_GET['ajax']) && $_GET['ajax'] == true ){
    ob_start("drujax_json");
  }
}

function drujax_end(){
  if(isset($_GET['ajax']) && $_GET['ajax'] == true ){
    ob_end_flush();
  }
}

function drujax_var($key,$value){
  global $drujax_vars;
  $drujax_vars[$key] = $value;
}