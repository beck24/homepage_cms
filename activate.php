<?php

$layout = elgg_get_plugin_setting('index_layout', 'bizcore_index');

if (empty($layout)) {
  $default_layout = <<<HTML
100
50|50
33|34|33
25|25|25|25
HTML;

  elgg_set_plugin_setting('index_layout', $default_layout, 'bizcore_index');
}