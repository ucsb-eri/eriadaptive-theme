<?php

/**
 * @file
 * Template.php - process theme data for your sub-theme.
 * 
 * Rename each function and instance of "eriadaptive" to match
 * your subthemes name, e.g. if you name your theme "eriadaptive" then the function
 * name will be "eriadaptive_preprocess_hook". Tip - you can search/replace
 * on "eriadaptive".
 */


/**
 * Override or insert variables for the html template.
 */
/* -- Delete this line if you want to use this function
function eriadaptive_preprocess_html(&$vars) {
}
function eriadaptive_process_html(&$vars) {
}
// */



function eriadaptive_preprocess_page(&$vars) {
}
function eriadaptive_process_page(&$vars) {
	drupal_add_library('jquery_plugin','tooltip');
}



/**
 * Override or insert variables into the node templates.
 */
/* -- Delete this line if you want to use these functions
function eriadaptive_preprocess_node(&$vars) {
}
function eriadaptive_process_node(&$vars) {
}
// */


/**
 * Override or insert variables into the comment templates.
 */
/* -- Delete this line if you want to use these functions
function eriadaptive_preprocess_comment(&$vars) {
}
function eriadaptive_process_comment(&$vars) {
}
// */


/**
 * Override or insert variables into the block templates.
 */
/* -- Delete this line if you want to use these functions
function eriadaptive_preprocess_block(&$vars) {
}
function eriadaptive_process_block(&$vars) {
}
// */

function eriadaptive_search_page($results){
	dsm($results);
}


  // Creates and destroys session that determine whether or not the user wants the content editing icons to be visible
 if(isset($_GET['hide_editing']) && !isset($_SESSION['editing']))
 {
 	 if($_GET['hide_editing'] == 'true')
 	 {
 	 	 $_SESSION['editing'] = 'true';
 	 }
 }
 
 else if(isset($_SESSION['editing']) && isset($_GET['hide_editing']))
 {
 	 if($_GET['hide_editing'] == 'false')
 	 {
 	 	 unset($_SESSION['editing']);
 	 }
 }
 //Hide "all day" suffix to events that have not specified time.
function eriomega_date_all_day_label() {
  return '';
}

//Removes duplicate nodes -- change parameter in taxonomy_get_tree to taxonomy vid to change which taxonomy it checks 
//-- this is run every time pages are loaded, so should be used only during development
/*
$tree = taxonomy_get_tree(1); 
foreach ($tree as $term) { 
  $count = taxonomy_term_count_nodes($term->tid);  
  echo $term->name ." ". $term->tid ." ". $count ."\n"; 
  if ($count === 0) { 
    taxonomy_del_term($term->tid);
  } 
}
*/

//Extracts NID from date field on events-seminars nodes and appends uri as suffix to create editing link
//Called from views-view-table.tpl.php
function get_string($string, $page){
	if($page == '/events-seminars')
	{
		$start = "<a href=\"/events-seminars/about/";
		$end = "\"";
	}
	$string = " ".$string;
	$pos = strpos($string,$start);
	if ($pos == 0) return "";
	$pos += strlen($start);
	$len = strpos($string,$end,$pos) - $pos;
	return substr($string,$pos,$len);
}

function eriadaptive_date_all_day_label() {
  return '<span></span>'; //gets rid of "All Day" text after events that do not have a set time.
}