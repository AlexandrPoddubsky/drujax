<?php 
  $json = array(
  "title" => $head_title,
  "drujax_vars" => $drujax_vars,
  "content" => array(
    "#drujax-main" => $page
  ),
  "good" => "good"
);
?>
<?php print json_encode($json) ?>