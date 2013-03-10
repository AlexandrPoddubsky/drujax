<?php
function drujax_link($variables) {
  if(path_is_admin($variables['path'])  ){
    $variables["options"]["attributes"]["class"][] = "admin-link";
  }
  return '<a href="' . check_plain(url($variables['path'], $variables['options'])) . '"' . drupal_attributes($variables['options']['attributes']) . '>' . ($variables['options']['html'] ? $variables['text'] : check_plain($variables['text'])) . '</a>';
}
