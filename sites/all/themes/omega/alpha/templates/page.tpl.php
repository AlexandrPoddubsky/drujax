<?php 
/**
 * @file
 * Alpha's theme implementation to display a single Drupal page.
 */
?>
<div<?php print $attributes; ?>>
  <?php if (isset($page['header'])) : ?>
    <?php print render($page['header']); ?>
  <?php endif; ?>
  
  <?php print $content; ?>
  
  <?php if (isset($page['footer'])) : ?>
    <?php print render($page['footer']); ?>
  <?php endif; ?>
</div>