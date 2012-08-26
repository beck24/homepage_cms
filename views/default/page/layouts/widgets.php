<?php

if (elgg_get_context() == 'index') {
  echo elgg_view('page/layouts/homepage_widgets', $vars);
}
else {
  echo elgg_view('page/layouts/widget_manager_widgets', $vars);
}