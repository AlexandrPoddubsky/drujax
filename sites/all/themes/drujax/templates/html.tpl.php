<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="<?php print $language->language; ?>" dir="<?php print $language->dir; ?>"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <?php print $head; ?>
    <title><?php print $head_title; ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <?php print $styles; ?>
    <script src="/<?php print $theme_path ?>/js/vendor/modernizr-2.6.2.min.js"></script>
</head>

<body class="<?php print $classes; ?>" <?php print $attributes;?>>
  <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
  <![endif]-->
  <div id="skip-link">
    <a href="#main-content" class="element-invisible element-focusable"><?php print t('Skip to main content'); ?></a>
  </div>
  <?php print $page_top; ?>
    
  <?php print $page; ?>
    
  <?php print $page_bottom; ?>
  
  <?php print $scripts; ?>
  
</body>
</html>
