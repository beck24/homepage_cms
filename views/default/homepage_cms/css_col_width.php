
<style>
<?php
// index column widths

$column_info = elgg_get_plugin_setting('index_layout', 'homepage_cms');
$columns = explode("\n", $column_info);

$widths = array();
foreach ($columns as $row) {
  $rows = explode("|", $row);
  
  foreach ($rows as $width) {
    $widths[] = $width;
  }
}

foreach ($widths as $index => $width) {
  $width = preg_replace('/\D/', '', $width);
?>

#homepage-cms #elgg-widget-col-<?php echo $index+1; ?> {
  width: <?php echo $width; ?>%;
  float: left;
  min-height: 0 !important;
}

<?php
}
?>

</style>

<?php

if (!elgg_is_admin_logged_in()) {
?>

<style>
#homepage-cms .elgg-widgets .elgg-module-widget.elgg-widget-instance-free_html .elgg-head,
#homepage-cms .elgg-widgets .elgg-module-widget.elgg-widget-instance-index_login .elgg-head
{
  display: none;
}

#homepage-cms .elgg-module-widget.elgg-widget-instance-free_html,
#homepage-cms .elgg-module-widget.elgg-widget-instance-index_login
{
  margin: 0;
  background-color: transparent;
}

#homepage-cms .elgg-module-widget.elgg-widget-instance-free_html .elgg-body,
#homepage-cms .elgg-module-widget.elgg-widget-instance-index_login .elgg-body
{
  border: 0;
}
</style>

<?php
}