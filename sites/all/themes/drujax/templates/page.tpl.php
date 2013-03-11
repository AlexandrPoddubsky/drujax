<header id="header">
  <?php if ($logo): ?>
  <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
      <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" />
  </a>
  <?php endif; ?>

  <?php if ($site_name || $site_slogan): ?>
    <?php if ($site_name): ?>
    <?php if ($title): ?>
        <div id="site-name"><strong>
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
        </strong></div>
    <?php else: /* Use h1 when the content title is empty */ ?>
        <h1 id="site-name">
        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home"><span><?php print $site_name; ?></span></a>
        </h1>
    <?php endif; ?>
    <?php endif; ?>

    <?php if ($site_slogan): ?>
    <div id="site-slogan"><?php print $site_slogan; ?></div>
    <?php endif; ?>
  <?php endif; ?>

  <?php print render($page['header']); ?>
  
  <?php if ($main_menu || $secondary_menu): ?>
    <nav id="navigation">
    <?php print theme('links__system_main_menu', array('links' => $main_menu, 'attributes' => array('id' => 'main-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Main menu'))); ?>
    <?php print theme('links__system_secondary_menu', array('links' => $secondary_menu, 'attributes' => array('id' => 'secondary-menu', 'class' => array('links', 'inline', 'clearfix')), 'heading' => t('Secondary menu'))); ?>
    </nav> <!-- /.section, /#navigation -->
  <?php endif; ?>
</header>
<div id="main">
  <?php print $content; ?>
</div>
<?php if ($page['footer']): ?>
  <footer id="footer">
      <?php print render($page['footer']); ?>
  </footer>
<?php endif; ?>