<?php
global $drujax_vars;
$drujax_vars = array();
  
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

function drujax_json(){
  return '';
}

function drujax_start(){
  if(isset($_GET['ajax']) && $_GET['ajax'] == true ){
    ob_start("drujax_json");
  }
}

function drujax_content($content){
  global $drujax_vars;
  global $drujax_content_id;
  $drujax_vars["content"][$drujax_content_id] = $content;
  
  return $drujax_vars["content"][$drujax_content_id] ;
}

function drujax_content_start($id)
{ 
  global $drujax_content_id;
  $drujax_content_id = $id;
  echo "<section id='$id'>";
  ob_start("drujax_content");
}

function drujax_content_end(){
  ob_end_flush();
  echo "</section>";
}

function drujax_end(){
  if(isset($_GET['ajax']) && $_GET['ajax'] == true ){
    ob_end_flush();
    global $drujax_vars;
    return json_encode($drujax_vars);
  }
}

function drujax_var($key,$value){
  global $drujax_vars;
  $drujax_vars[$key] = $value;
}


function drujax_render($tpl,$id){
  $theme_path = drupal_get_path('theme', 'drujax');
  echo "<section id='$id'>";
  require_once $theme_path.'/templates/'.$tpl;
  echo "</section>";
}