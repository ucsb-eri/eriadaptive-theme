<article<?php print $attributes; ?>>
  <?php print $user_picture; ?>
  <?php print render($title_prefix); ?>
  <?php if (!$page && $title): ?>
  <header>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title; ?></a></h2>
  </header>
  <?php endif; ?>
  <!-- Add editing icon a tthe top of nodes if user logged in with editing session started (enabled by clicking "Show Editing Icons" in menu bar. -->
  <?php /*if (is_array($user->roles) && in_array('administrator', $user->roles) && !isset($_SESSION['editing'])) { print("<a href='/node/" . $node->nid . "/edit'><img src='/sites/all/themes/eriomega/edit.png' style='width: 30px;' class='editor' /></a>"); }*/ ?>

  <?php print render($title_suffix); ?>
  <?php if ($display_submitted): ?>
  
  <footer class="submitted"><?php print $date; ?> -- <?php print $name; ?></footer>
  <?php endif; ?>  
  
  <div<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      print render($content);
    ?>
  </div>
  
  <div class="clearfix">
    <?php if (!empty($content['links'])): ?>
      <nav class="links node-links clearfix"><?php print render($content['links']); ?></nav>
    <?php endif; ?>

    <!-- removed comments section from nodes -->
   <?php  
   //print render($content['comments']); 
   ?>
  </div>
</article>
