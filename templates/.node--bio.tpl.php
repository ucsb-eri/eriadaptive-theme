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
      if($node->field_show_profile['und'][0]['value']){
	      if(isset($node->field_job_title['und'][0]['safe_value'])): ?>
	      	      <p id='people_position'><?php print render($node->field_job_title['und'][0]['safe_value']); ?></p>
	      <?php 
	      endif;
	      if(isset($node->field_photo_url['und'][0]['safe_value']) && $node->field_show_photo['und'][0]['value'] != 0): ?>
	      	<div id='people_image_div'>
	      		<img id='people_image' src="/sites/default/files/BioImages/<?php print $node->field_photo_url['und'][0]['safe_value']; ?>" />
	      	</div>
	      <?php 
	      endif;
	      if(isset($content['field_photo'])): ?>
	      	  <div id='people_image_div'>
	      	      <img src="/sites/default/files/BioImages/<?php print($content['field_photo']['#items'][0]['filename']); ?>"/>
	      	  </div>
	     <?php 
	     endif;
	     ?>
	     <div id="people_info">
	     <?php if(isset($content['field_office'])): ?>
	      	  <p id='people_office'>
	      	  	<?php print render($content['field_office']); ?>
	      	  </p>
	      <?php
	      endif;
	      if(isset($content['field_phone'])): ?>
	      	<p id='people_phone'>
	      		<?php print drupal_render($content['field_phone']); ?>
	      	</p>
	      <?php
	      endif;
	      if(isset($content['field_fax'])): ?>
		<p id='people_fax'>
			<?php print drupal_render($content['field_fax']); ?>
		</p>
	      <?php 
	      endif;
	      if(isset($content['field_e_mail'])): ?>
	      	 <div id='people_fax' class='field'>
	      	 	<h2 class="field-label">E-Mail: </h2><a href="mailto:<?php print($node->field_e_mail['und'][0]['safe_value']); ?>" ><?php print($node->field_e_mail['und'][0]['safe_value']); ?></a><br />
	      	 	<a href="/contact-staff?uid=<?php print $node->nid; ?>">Web Contact Form</a>
	      	 </div>
	      <?php 
	      endif;
	      if(isset($node->field_url['und'][0]['safe_value'])): ?>
		<div id='people_url' class='field'>
			<h2 class="field-label">Homepage:</h2> <a href="<?php print($node->field_url['und'][0]['safe_value']); ?>" ><?php print($node->field_url['und'][0]['safe_value']); ?></a>
		</div>
	      <?php
	      endif;
	      ?>
	      </div> <!-- End of info_block -->
	      <?php if(isset($content['field_areas_of_interest'])): ?>
		<div id='people_areas_of_interest'>
			<?php print drupal_render($content['field_areas_of_interest']); ?>
		</div>
	      <?php endif; ?>
	  <?php }
	  else{ ?>
	  
	  		This profile is not available.
	  	<?php } ?>
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
