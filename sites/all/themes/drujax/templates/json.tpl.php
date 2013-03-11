<?php 
  $json = array(
  "title" => $head_title,
  "content" => array(
    "main" => $page
  )
);
?>
<?php print json_encode($json) ?>