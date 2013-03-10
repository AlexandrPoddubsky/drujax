<?php if(!$ajax):// start if ajax ?>
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
<section id="main">
<?php endif;// end if ajax ?>
  
  <?php if ($breadcrumb): ?>
    <div id="breadcrumb"><?php print $breadcrumb; ?></div>
  <?php endif; ?> 
  <?php print $messages; ?>
    
  <section id="content" class="column">
  <?php if ($page['highlighted']): ?><div id="highlighted"><?php print render($page['highlighted']); ?></div><?php endif; ?>
  <a id="main-content"></a>
  <?php print render($title_prefix); ?>
  <?php if ($title): ?><h1 class="title" id="page-title"><?php print $title; ?></h1><?php endif; ?>
  <?php print render($title_suffix); ?>
  <?php if ($tabs): ?><div class="tabs"><?php print render($tabs); ?></div><?php endif; ?>
  <?php print render($page['help']); ?>
  <?php if ($action_links): ?><ul class="action-links"><?php print render($action_links); ?></ul><?php endif; ?>
  <?php print render($page['content']); ?>
  <?php print $feed_icons; ?>
  </section> <!-- /#content -->

  <?php if ($page['sidebar_first']): ?>
  <aside id="sidebar-first" class="column sidebar">
      <?php print render($page['sidebar_first']); ?>
  </aside> <!-- /#sidebar-first -->
  <?php endif; ?>

  <?php if ($page['sidebar_second']): ?>
  <aside id="sidebar-second" class="column sidebar">
      <?php print render($page['sidebar_second']); ?>
  </aside> <!-- /#sidebar-second -->
  <?php endif; ?>
  
<?php if(!$ajax):// start if ajax ?>
</section>
<?php if ($page['footer']): ?>
  <footer id="footer">
      <?php print render($page['footer']); ?>
  </footer>
<?php endif; ?>
<?php endif; // end if ajax ?>