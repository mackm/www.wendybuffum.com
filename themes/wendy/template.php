<?php


/*
 * Add a meta tag to the header section of the page to tell mobile browsers that we are 
 * a responsive site and they can render us as-is.
 */
function wendy_preprocess_html(&$vars) {
  $mobile_viewport = array(
    '#type' => 'html_tag',
    '#tag' => 'meta',
    '#attributes' => array(
      'name' =>  'viewport',
      'content' => 'width=device-width, initial-scale=1.0',
    )
  );
  drupal_add_html_head($mobile_viewport, 'mobile_viewport');
}

