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
