<article<?php print $attributes; ?>>
  <?php print $user_picture; ?>
  <?php print render($title_prefix); ?>
  <?php if (!$page && $title): ?>
  <header>
    <h2<?php print $title_attributes; ?>><a href="<?php print $node_url ?>" title="<?php print $title ?>"><?php print $title; ?></a></h2>
  </header>
  <?php endif; ?>

  <?php print render($title_suffix); ?>
  <?php if ($display_submitted): ?>
  
  <footer class="submitted"><?php print $date; ?> -- <?php print $name; ?></footer>
  <?php endif; ?>  
  
  <div<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
      ?>
     <image src="/sites/default/files/research/<?php print render($node->field_image['und'][0]['filename']); ?>" id='research_image_field' />
     <div id='research_about_field'><?php print render($content['body']); ?></div>
     <div id='research_link_field'><strong>Link:</strong>  <a href="<?php print render($content['field_link'][0]['#markup']); ?>"><?php print render($content['field_link'][0]['#markup']); ?></a></div>
     <div id='research_people_field'><strong>People:</strong> <?php print render($node->field_people['und'][0]['safe_value']); ?></div>
  </div>
  <?php if($node->group_group): ?>
    <div class='subscribe clearfix'><?php if(isset($user->status)) print render($content['group_group']); ?></div>
  <?php endif; ?>
  
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
