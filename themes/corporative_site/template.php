<?php

function om_css_alter(&$css) { 

//do something to check if it is a front page
    //make a list of module css to remove 
    $css_to_remove = array(); 
    $css_to_remove[] = drupal_get_path('theme','om').'/css/om.css';
	$css_to_remove[] = drupal_get_path('theme','om').'/css/reset.css';
    //$css_to_remove[] = drupal_get_path('module','system').'/system.menus.css';
	//$css_to_remove[] = drupal_get_path('module','system').'/system.theme.css';
    // now we can remove the contribs from the array 
    foreach ($css_to_remove as $index => $css_file) { 
      unset($css[$css_file]); 
    }
}