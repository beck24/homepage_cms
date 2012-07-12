<?php

// set up our plugin
function bizcore_index_init() {
  // serve specific css to make the widgets not look like widgets
  // for anyone except admin - admin sees them as widgets for the controls
  if (!elgg_is_admin_logged_in()) {
    elgg_extend_view('css/elgg', 'bizcore_index/css', 1000);
  }
  
  // serve some css for both users and admins
  elgg_extend_view('css/elgg', 'bizcore_index/css_col_width', 1000);
  
  // context not set yet, use url to see if we're on the front page
  if (current_page_url() == elgg_get_site_url()) {
    $footer_override = elgg_get_plugin_setting('footer_override', 'bizcore_index');
    
    elgg_set_view_location("page/layouts/widgets", dirname(__FILE__) . "/views_alt/");
    elgg_register_plugin_hook_handler('view', 'page/layouts/one_column', 'bizcore_index_view_hook');
    
    if ($footer_override == 'yes') {
      elgg_register_plugin_hook_handler('view', 'page/elements/footer', 'bizcore_index_view_hook');
    }
  }
}

function bizcore_index_view_hook($hook, $type, $returnvalue, $params) {
  // wrap our page with an identifier so we can do all sorts of stuff selectively
  // with css/jquery
  if ($type == 'page/layouts/one_column') {
    return '<div id="bizcore-index">' . $returnvalue . "</div>";
  }
  
  if ($type == 'page/elements/footer') {
    return elgg_get_plugin_setting('footer_content', 'bizcore_index');
  }
  
  return $returnvalue;
}

elgg_register_event_handler('init', 'system', 'bizcore_index_init');