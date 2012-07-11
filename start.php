<?php

// set up our plugin
function bizcore_index_init() {
  // serve specific css to make the widgets not look like widgets
  // for anyone except admin - admin sees them as widgets for the controls
  if (!elgg_is_admin_logged_in()) {
    elgg_extend_view('css/elgg', 'bizcore_index/css', 1000);
  }
  
  elgg_register_plugin_hook_handler('view', 'page/layouts/one_column', 'bizcore_index_view_hook');
}

function bizcore_index_view_hook($hook, $type, $returnvalue, $params) {
  // wrap our page with an identifier so we can do all sorts of stuff selectively
  // with css/jquery
  if (elgg_get_context() == 'index') {
    return '<div id="bizcore-index">' . $returnvalue . "</div>";
  }
  
  return $returnvalue;
}

elgg_register_event_handler('init', 'system', 'bizcore_index_init');